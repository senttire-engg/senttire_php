<?php
// header.php — shared nav included on every page
// Usage: <?php include 'header.php'; ?> (root pages)
//        <?php include '../header.php'; ?> (pages in sub-dirs)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | Senttire Engineering Solutions' : 'Senttire Engineering Solutions — CAD Design & Advanced Manufacturing'; ?></title>
  <meta name="description" content="<?php echo isset($page_desc) ? htmlspecialchars($page_desc) : 'Leading provider of CAD design, rapid prototyping, CNC machining, and precision manufacturing services. From concept to production with unmatched quality.'; ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.senttire.in<?php echo isset($canonical) ? $canonical : '/'; ?>" />
  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Senttire Engineering Solutions'; ?>" />
  <meta property="og:description" content="<?php echo isset($page_desc) ? htmlspecialchars($page_desc) : 'CAD Design & Advanced Manufacturing Services'; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.senttire.in<?php echo isset($canonical) ? $canonical : '/'; ?>" />

  <?php
  // Determine correct root path based on directory depth
  $depth = isset($page_depth) ? $page_depth : 0;
  $root  = str_repeat('../', $depth);
  ?>
  <link rel="stylesheet" href="<?php echo $root; ?>css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" />
</head>
<body>

<header class="site-header">
  <div class="container">
    <nav class="nav-inner">

      <!-- Logo -->
      <a href="<?php echo $root; ?>index.php" class="nav-logo">
        <img src="https://horizons-cdn.hostinger.com/83657142-018d-403c-b060-85d4cfc275da/be475440a22c7571f0112739409574f4.jpg"
             alt="Senttire Engineering Solutions logo" />
        <span>Senttire Engineering Solutions</span>
      </a>

      <!-- Desktop nav -->
      <div class="nav-links">
        <a href="<?php echo $root; ?>index.php"
           <?php if(isset($active_page) && $active_page==='home') echo 'class="active"'; ?>>
          Home
        </a>

        <!-- Services dropdown -->
        <div class="nav-dropdown">
          <button class="nav-dropdown-toggle"
                  aria-haspopup="true"
                  aria-expanded="false">
            Services
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="dropdown-menu" role="menu">
            <a href="<?php echo $root; ?>services/cad-design.php">3D CAD Design</a>
            <a href="<?php echo $root; ?>services/product-development.php">Product Development</a>
            <a href="<?php echo $root; ?>services/rapid-prototyping.php">Rapid Prototyping</a>
            <a href="<?php echo $root; ?>services/3d-printing.php">3D Printing</a>
            <a href="<?php echo $root; ?>services/plastic-injection.php">Plastic Injection Molding</a>
            <a href="<?php echo $root; ?>services/rubber-molding.php">Rubber Molding</a>
            <a href="<?php echo $root; ?>services/cnc-milling.php">CNC Milling and Turning</a>
            <a href="<?php echo $root; ?>services/cnc-laser.php">CNC Laser Cutting</a>
            <a href="<?php echo $root; ?>services/sheetmetal.php">Sheetmetal Forming</a>
            <a href="<?php echo $root; ?>services/metal-casting.php">Metal Casting</a>
            <a href="<?php echo $root; ?>services/aluminum-die-casting.php">Aluminum Die Casting</a>
          </div>
        </div>

        <a href="<?php echo $root; ?>request-quote.php" class="btn btn-primary"
           style="padding:0.55rem 1.25rem;font-size:0.875rem;">
          Request a Quote
        </a>
      </div>

      <!-- Hamburger (mobile) -->
      <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>

    </nav>
  </div>

  <!-- Mobile menu -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="<?php echo $root; ?>index.php">Home</a>
    <span class="services-label">Services</span>
    <a href="<?php echo $root; ?>services/cad-design.php"          class="service-link">3D CAD Design</a>
    <a href="<?php echo $root; ?>services/product-development.php" class="service-link">Product Development</a>
    <a href="<?php echo $root; ?>services/rapid-prototyping.php"   class="service-link">Rapid Prototyping</a>
    <a href="<?php echo $root; ?>services/3d-printing.php"         class="service-link">3D Printing</a>
    <a href="<?php echo $root; ?>services/plastic-injection.php"   class="service-link">Plastic Injection Molding</a>
    <a href="<?php echo $root; ?>services/rubber-molding.php"      class="service-link">Rubber Molding</a>
    <a href="<?php echo $root; ?>services/cnc-milling.php"         class="service-link">CNC Milling and Turning</a>
    <a href="<?php echo $root; ?>services/cnc-laser.php"           class="service-link">CNC Laser Cutting</a>
    <a href="<?php echo $root; ?>services/sheetmetal.php"          class="service-link">Sheetmetal Forming</a>
    <a href="<?php echo $root; ?>services/metal-casting.php"       class="service-link">Metal Casting</a>
    <a href="<?php echo $root; ?>services/aluminum-die-casting.php" class="service-link">Aluminum Die Casting</a>
    <a href="<?php echo $root; ?>request-quote.php" class="btn btn-primary" style="margin-top:0.75rem;">Request a Quote</a>
  </div>
</header>

<script>
(function(){
  var ham = document.getElementById('hamburger');
  var menu = document.getElementById('mobileMenu');
  ham.addEventListener('click', function(){
    var open = menu.classList.toggle('open');
    ham.setAttribute('aria-expanded', open);
  });
})();
</script>
