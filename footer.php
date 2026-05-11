<?php
// footer.php — shared footer included on every page
// $root must be defined before including this file (set in header.php)
?>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <span class="logo-text">Senttire Engineering Solutions</span>
        <p>Leading provider of CAD design, prototyping, and precision manufacturing services for innovative product development.</p>
      </div>

      <!-- Quick links -->
      <div class="footer-col">
        <h4>Quick links</h4>
        <ul>
          <li><a href="<?php echo $root; ?>index.php">Home</a></li>
          <li><a href="<?php echo $root; ?>services/cad-design.php">Services</a></li>
          <li><a href="<?php echo $root; ?>request-quote.php">Request a Quote</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-col">
        <h4>Contact</h4>
        <div class="footer-contact">
          <div class="footer-contact-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
            <span>senttire.info@gmail.com</span>
          </div>
          <div class="footer-contact-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.15 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.1 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16z"/>
            </svg>
            <span>WhatsApp: +91 9741695521</span>
          </div>
          <div class="footer-contact-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
            <span>B5-F3, SR Nagar, Hyderabad&nbsp;– 500038, India</span>
          </div>
        </div>
      </div>

      <!-- Social -->
      <div class="footer-col">
        <h4>Follow us</h4>
        <div class="footer-social">
          <a href="#" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
              <rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
            </svg>
          </a>
          <a href="#" aria-label="Twitter / X">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.43.36a9 9 0 0 1-2.88 1.1A4.52 4.52 0 0 0 16.11 0c-2.5 0-4.52 2.02-4.52 4.52 0 .354.04.7.116 1.03C7.728 5.37 4.1 3.58 1.67 0.795a4.52 4.52 0 0 0-.612 2.272 4.52 4.52 0 0 0 2.01 3.763 4.49 4.49 0 0 1-2.048-.566v.057a4.52 4.52 0 0 0 3.624 4.43 4.54 4.54 0 0 1-2.042.077 4.52 4.52 0 0 0 4.22 3.138A9.06 9.06 0 0 1 0 19.54a12.8 12.8 0 0 0 6.918 2.026c8.3 0 12.84-6.877 12.84-12.84 0-.196-.004-.39-.013-.584A9.17 9.17 0 0 0 22 4.59a9 9 0 0 1-2.588.709A4.51 4.51 0 0 0 23 3z"/>
            </svg>
          </a>
          <a href="#" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
            </svg>
          </a>
        </div>
      </div>

    </div><!-- /.footer-grid -->

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Senttire Engineering Solutions. All rights reserved.</p>
      <div class="footer-bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </div>
    </div>

  </div>
</footer>

</body>
</html>
