<?php
$page_title  = 'Request a Quote — Get Custom Manufacturing Pricing';
$page_desc   = 'Request a detailed quote for your manufacturing project. Upload your CAD files and specifications to receive a comprehensive proposal within 24 hours.';
$canonical   = '/request-quote.php';
$active_page = 'quote';
$page_depth  = 0;
$root        = '';
include 'header.php';
?>

<section class="page-hero">
  <div class="container">
    <h1>Request a Quote</h1>
    <p>Share your project details and we'll provide a comprehensive quote within 24 hours. Our team will review your requirements and recommend the best manufacturing approach.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="quote-layout">

      <!-- FORM -->
      <div>
        <div id="formAlert" class="alert" style="display:none;"></div>

        <div class="form-card">
          <form id="quoteForm" enctype="multipart/form-data" novalidate>

            <div class="form-row">
              <div class="form-group">
                <label for="company_name">Company Name <span style="color:#f87171">*</span></label>
                <input type="text" id="company_name" name="company_name" required autocomplete="organization" />
              </div>
              <div class="form-group">
                <label for="contact_name">Contact Name <span style="color:#f87171">*</span></label>
                <input type="text" id="contact_name" name="contact_name" required autocomplete="name" />
              </div>
            </div>

            <div class="form-row" style="margin-top:0;">
              <div class="form-group">
                <label for="email">Email Address <span style="color:#f87171">*</span></label>
                <input type="email" id="email" name="email" required autocomplete="email" />
              </div>
              <div class="form-group">
                <label for="phone">Phone / WhatsApp <span style="color:#f87171">*</span></label>
                <input type="tel" id="phone" name="phone" required autocomplete="tel" placeholder="+91 xxxxxxxxxx" />
              </div>
            </div>

            <div class="form-group">
              <label for="service_type">Service Type <span style="color:#f87171">*</span></label>
              <select id="service_type" name="service_type" required>
                <option value="" disabled selected>Select a service…</option>
                <option>3D CAD Design</option>
                <option>Product Development</option>
                <option>Rapid Prototyping</option>
                <option>3D Printing</option>
                <option>Plastic Injection Molding</option>
                <option>Rubber Molding</option>
                <option>CNC Milling and Turning</option>
                <option>CNC Laser Cutting</option>
                <option>Sheetmetal Forming</option>
                <option>Metal Casting</option>
                <option>Aluminum Die Casting</option>
              </select>
            </div>

            <div class="form-group">
              <label for="project_description">Project Description <span style="color:#f87171">*</span></label>
              <textarea id="project_description" name="project_description" required rows="6"
                placeholder="Describe your project requirements, specifications, materials, quantity, and any special considerations…"></textarea>
            </div>

            <div class="form-row" style="margin-top:0;">
              <div class="form-group">
                <label for="budget_range">Budget Range</label>
                <select id="budget_range" name="budget_range">
                  <option value="">Not specified</option>
                  <option>Under $5K</option>
                  <option>$5K – $25K</option>
                  <option>$25K – $100K</option>
                  <option>$100K+</option>
                </select>
              </div>
              <div class="form-group">
                <label for="timeline">Timeline</label>
                <select id="timeline" name="timeline">
                  <option value="">Not specified</option>
                  <option>ASAP</option>
                  <option>1–3 months</option>
                  <option>3–6 months</option>
                  <option>6+ months</option>
                </select>
              </div>
            </div>

            <!-- File upload -->
            <div class="form-group">
              <label>Attachments <span style="color:var(--text-dim);font-weight:400;">(optional — max 5 files, 20 MB each)</span></label>
              <label for="attachments" class="file-drop" id="fileDropZone">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                     style="margin:0 auto 0.5rem;display:block;color:var(--text-dim)">
                  <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                  <polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/>
                </svg>
                <p>Click to upload or drag &amp; drop</p>
                <small>PDF, Word, JPG, PNG, WebP</small>
              </label>
              <input type="file" id="attachments" name="attachments[]" multiple accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.gif,.webp" style="display:none;" />
              <div id="fileList" style="margin-top:0.75rem;display:flex;flex-direction:column;gap:0.4rem;"></div>
            </div>

            <button type="submit" id="submitBtn" class="btn btn-primary btn-lg btn-full">
              Submit Quote Request
            </button>

          </form>
        </div>
      </div>

      <!-- SIDEBAR -->
      <div>
        <div class="contact-info-card">
          <h3>Contact Information</h3>
          <div class="contact-info-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
            <div>
              <p>Email</p>
              <p><a href="mailto:senttire.info@gmail.com">senttire.info@gmail.com</a></p>
            </div>
          </div>
          <div class="contact-info-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.15 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.1 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16z"/>
            </svg>
            <div>
              <p>Phone &amp; WhatsApp</p>
              <p><a href="https://wa.me/919741695521">+91 9741695521</a></p>
            </div>
          </div>
          <div class="contact-info-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
            <div>
              <p>Address</p>
              <p>B5-F3, SR Nagar, Hyderabad&nbsp;– 500038, India</p>
            </div>
          </div>
        </div>

        <div class="help-box">
          <h3>Need Help?</h3>
          <p style="margin-top:0.5rem;">Our team is here to assist with your project requirements and answer any questions.</p>
          <p style="margin-top:0.75rem;"><strong style="color:var(--text);">Response time:</strong> within 24 hours</p>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
// ── File list UI ───────────────────────────────────────────────────────────
var fileInput = document.getElementById('attachments');
var fileList  = document.getElementById('fileList');

fileInput.addEventListener('change', function() {
  fileList.innerHTML = '';
  var files = Array.from(this.files);
  files.forEach(function(f, i) {
    var row = document.createElement('div');
    row.style.cssText = 'display:flex;justify-content:space-between;align-items:center;background:var(--bg-muted);border-radius:8px;padding:0.5rem 0.75rem;font-size:0.85rem;';
    row.innerHTML = '<span style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;flex:1;">' + f.name + '</span>'
      + '<span style="margin-left:1rem;color:var(--text-dim);white-space:nowrap;">' + (f.size/1024/1024).toFixed(1) + ' MB</span>';
    fileList.appendChild(row);
  });
});

// Drag & drop
var zone = document.getElementById('fileDropZone');
['dragenter','dragover'].forEach(function(ev){ zone.addEventListener(ev, function(e){ e.preventDefault(); zone.style.borderColor='var(--primary)'; }); });
['dragleave','drop'].forEach(function(ev){ zone.addEventListener(ev, function(e){ e.preventDefault(); zone.style.borderColor=''; }); });
zone.addEventListener('drop', function(e) {
  fileInput.files = e.dataTransfer.files;
  fileInput.dispatchEvent(new Event('change'));
});

// ── Form submit ────────────────────────────────────────────────────────────
document.getElementById('quoteForm').addEventListener('submit', function(e) {
  e.preventDefault();
  var btn   = document.getElementById('submitBtn');
  var alert = document.getElementById('formAlert');
  alert.style.display = 'none';
  alert.className     = 'alert';

  btn.disabled     = true;
  btn.textContent  = 'Submitting…';

  var data = new FormData(this);

  fetch('contact-handler.php', { method:'POST', body:data })
    .then(function(r){ return r.json(); })
    .then(function(res) {
      alert.className   = 'alert ' + (res.success ? 'alert-success' : 'alert-error');
      alert.textContent = res.message;
      alert.style.display = 'block';
      alert.scrollIntoView({behavior:'smooth',block:'center'});
      if (res.success) {
        document.getElementById('quoteForm').reset();
        fileList.innerHTML = '';
      }
    })
    .catch(function() {
      alert.className   = 'alert alert-error';
      alert.textContent = 'A network error occurred. Please email us directly at senttire.info@gmail.com';
      alert.style.display = 'block';
    })
    .finally(function() {
      btn.disabled    = false;
      btn.textContent = 'Submit Quote Request';
    });
});
</script>

<?php include 'footer.php'; ?>
