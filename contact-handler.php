<?php
/**
 * contact-handler.php
 * Handles the quote request form submission and sends email.
 * Receives POST data from request-quote.php.
 */

// ── CONFIG ────────────────────────────────────────────────────────────────────
define('RECIPIENT_EMAIL', 'senttire.info@gmail.com');   // ← your real email here
define('FROM_EMAIL',      'noreply@senttire.in');
define('SITE_NAME',       'Senttire Engineering Solutions');
define('MAX_FILE_SIZE',   20 * 1024 * 1024);            // 20 MB per file
define('MAX_FILES',       5);
define('ALLOWED_TYPES',   ['application/pdf','application/msword',
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                            'image/jpeg','image/png','image/gif','image/webp']);
// ─────────────────────────────────────────────────────────────────────────────

header('Content-Type: application/json; charset=utf-8');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success'=>false,'message'=>'Method not allowed']);
    exit;
}

// Sanitise helper
function clean(string $val): string {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

// ── Collect & validate fields ──────────────────────────────────────────────
$required = ['company_name','contact_name','email','phone','service_type','project_description'];
$errors   = [];

$fields = [];
foreach ($required as $key) {
    $val = $_POST[$key] ?? '';
    if ($val === '') {
        $errors[] = "Field '{$key}' is required.";
    }
    $fields[$key] = clean($val);
}

// Optional fields
$fields['budget_range'] = clean($_POST['budget_range'] ?? '');
$fields['timeline']     = clean($_POST['timeline']     ?? '');

// Validate email
if (!filter_var($fields['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email address.';
}

if ($errors) {
    http_response_code(422);
    echo json_encode(['success'=>false,'message'=>implode(' ', $errors)]);
    exit;
}

// ── Validate uploaded files ────────────────────────────────────────────────
$attachments = [];
if (!empty($_FILES['attachments']['name'][0])) {
    $count = count($_FILES['attachments']['name']);
    if ($count > MAX_FILES) {
        http_response_code(422);
        echo json_encode(['success'=>false,'message'=>'Maximum '.MAX_FILES.' files allowed.']);
        exit;
    }
    for ($i = 0; $i < $count; $i++) {
        if ($_FILES['attachments']['error'][$i] !== UPLOAD_ERR_OK) continue;
        if ($_FILES['attachments']['size'][$i] > MAX_FILE_SIZE) {
            $errors[] = "File '{$_FILES['attachments']['name'][$i]}' exceeds 20 MB limit.";
            continue;
        }
        $mime = mime_content_type($_FILES['attachments']['tmp_name'][$i]);
        if (!in_array($mime, ALLOWED_TYPES, true)) {
            $errors[] = "File type '{$mime}' not allowed.";
            continue;
        }
        $attachments[] = [
            'name'     => basename($_FILES['attachments']['name'][$i]),
            'tmp'      => $_FILES['attachments']['tmp_name'][$i],
            'mime'     => $mime,
        ];
    }
    if ($errors) {
        http_response_code(422);
        echo json_encode(['success'=>false,'message'=>implode(' ', $errors)]);
        exit;
    }
}

// ── Build email ────────────────────────────────────────────────────────────
$boundary = '==Boundary_' . md5(uniqid('', true));
$subject  = '[Quote Request] ' . $fields['service_type'] . ' — ' . $fields['company_name'];

$body_lines = [
    'New quote request received from the Senttire Engineering Solutions website.',
    '',
    '─────────────────────────────────────',
    ' CONTACT INFORMATION',
    '─────────────────────────────────────',
    "Company Name   : {$fields['company_name']}",
    "Contact Name   : {$fields['contact_name']}",
    "Email          : {$fields['email']}",
    "Phone          : {$fields['phone']}",
    '',
    '─────────────────────────────────────',
    ' PROJECT DETAILS',
    '─────────────────────────────────────',
    "Service Type   : {$fields['service_type']}",
    "Budget Range   : " . ($fields['budget_range'] ?: 'Not specified'),
    "Timeline       : " . ($fields['timeline']     ?: 'Not specified'),
    '',
    'Project Description:',
    $fields['project_description'],
    '',
    '─────────────────────────────────────',
    'Submitted: ' . date('Y-m-d H:i:s T'),
    'IP Address: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'),
];
$text_body = implode("\r\n", $body_lines);

// HTML version
$html_body = '<html><body style="font-family:Arial,sans-serif;color:#222;max-width:640px;">';
$html_body .= '<h2 style="color:#6366f1;">New Quote Request — ' . SITE_NAME . '</h2>';
$html_body .= '<table style="border-collapse:collapse;width:100%">';
$rows = [
    'Company Name'      => $fields['company_name'],
    'Contact Name'      => $fields['contact_name'],
    'Email'             => '<a href="mailto:'.$fields['email'].'">'.$fields['email'].'</a>',
    'Phone'             => $fields['phone'],
    'Service Type'      => $fields['service_type'],
    'Budget Range'      => $fields['budget_range'] ?: '—',
    'Timeline'          => $fields['timeline']     ?: '—',
];
foreach ($rows as $label => $val) {
    $html_body .= "<tr><td style='padding:6px 12px;background:#f4f4f8;font-weight:bold;width:40%;border:1px solid #ddd'>$label</td><td style='padding:6px 12px;border:1px solid #ddd'>$val</td></tr>";
}
$html_body .= '</table>';
$html_body .= '<h3 style="margin-top:1.5em;">Project Description</h3>';
$html_body .= '<p style="background:#f9f9fc;padding:12px;border-left:4px solid #6366f1;">' . nl2br(htmlspecialchars($fields['project_description'])) . '</p>';
$html_body .= '<p style="color:#888;font-size:12px;margin-top:2em;">Submitted: ' . date('Y-m-d H:i:s T') . ' | IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . '</p>';
$html_body .= '</body></html>';

// Build MIME message
if (empty($attachments)) {
    // Simple multipart/alternative (text + html)
    $headers  = "From: " . SITE_NAME . " <" . FROM_EMAIL . ">\r\n";
    $headers .= "Reply-To: {$fields['email']}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"{$boundary}\"\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $message  = "--{$boundary}\r\n";
    $message .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
    $message .= $text_body . "\r\n";
    $message .= "--{$boundary}\r\n";
    $message .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
    $message .= $html_body . "\r\n";
    $message .= "--{$boundary}--";
} else {
    // multipart/mixed with attachments
    $alt_boundary = '==Alt_' . md5(uniqid('', true));
    $headers  = "From: " . SITE_NAME . " <" . FROM_EMAIL . ">\r\n";
    $headers .= "Reply-To: {$fields['email']}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $message  = "--{$boundary}\r\n";
    $message .= "Content-Type: multipart/alternative; boundary=\"{$alt_boundary}\"\r\n\r\n";
    $message .= "--{$alt_boundary}\r\n";
    $message .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
    $message .= $text_body . "\r\n";
    $message .= "--{$alt_boundary}\r\n";
    $message .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
    $message .= $html_body . "\r\n";
    $message .= "--{$alt_boundary}--\r\n";

    foreach ($attachments as $att) {
        $data = chunk_split(base64_encode(file_get_contents($att['tmp'])));
        $message .= "--{$boundary}\r\n";
        $message .= "Content-Type: {$att['mime']}; name=\"{$att['name']}\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment; filename=\"{$att['name']}\"\r\n\r\n";
        $message .= $data . "\r\n";
    }
    $message .= "--{$boundary}--";
}

// ── Send ───────────────────────────────────────────────────────────────────
$sent = mail(RECIPIENT_EMAIL, $subject, $message, $headers);

if ($sent) {
    // Send auto-reply to customer
    $auto_subject = 'We received your quote request — ' . SITE_NAME;
    $auto_body    = "Dear {$fields['contact_name']},\r\n\r\n"
        . "Thank you for reaching out to " . SITE_NAME . ".\r\n\r\n"
        . "We have received your quote request for: {$fields['service_type']}\r\n\r\n"
        . "Our team will review your requirements and get back to you within 24 hours.\r\n\r\n"
        . "If you have any urgent questions, please WhatsApp us at +91 9741695521.\r\n\r\n"
        . "Best regards,\r\n"
        . SITE_NAME . "\r\nwww.senttire.in";
    $auto_headers = "From: " . SITE_NAME . " <" . FROM_EMAIL . ">\r\n"
        . "MIME-Version: 1.0\r\nContent-Type: text/plain; charset=UTF-8\r\n"
        . "X-Mailer: PHP/" . phpversion();
    mail($fields['email'], $auto_subject, $auto_body, $auto_headers);

    echo json_encode(['success'=>true,'message'=>'Thank you! Your quote request has been submitted. We will contact you within 24 hours.']);
} else {
    http_response_code(500);
    echo json_encode(['success'=>false,'message'=>'Failed to send your message. Please email us directly at senttire.info@gmail.com.']);
}
