<?php
$page_title = 'CAD Design &amp; Advanced Manufacturing Services';
$page_desc  = 'Leading provider of CAD design, rapid prototyping, CNC machining, and precision manufacturing services. From concept to production with unmatched quality.';
$canonical  = '/';
$active_page = 'home';
$page_depth = 0;
$root = '';
include 'header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg">
    <img class="hero-bg-static"
         src="<?php echo htmlspecialchars($root); ?>images/hero-cnc-machining.png"
         alt="Precision CNC milling machine working on a detailed metal part" />
    <video class="hero-bg-video"
           autoplay muted loop playsinline
           poster="<?php echo htmlspecialchars($root); ?>images/hero-cnc-machining.png"
           aria-hidden="true">
      <source src="<?php echo htmlspecialchars($root); ?>videos/hailuo-2_3_cnc_milling_while_tool_is_cutting_titanium_metal_block_metal_chips_flying_and_as-0.mp4"
              type="video/mp4" />
    </video>
  </div>
  <div class="container">
    <div class="hero-content">
      <h1>Turn Your Ideas Into Precision-Engineered, Market-Ready Products</h1>
      <p>From your idea to CAD design to final production — advanced design and manufacturing solutions with unmatched precision, speed, and quality.</p>
      <div class="hero-btns">
        <a href="request-quote.php" class="btn btn-primary btn-lg">Request a Quote</a>
        <a href="services/cad-design.php" class="btn btn-outline btn-lg">Explore Services</a>
      </div>
    </div>
  </div>
</section>

<!-- WHY SENTTIRE -->
<section class="section section-alt">
  <div class="container">
    <div class="section-title center">
      <h2>Why Choose Senttire Engineering Solutions</h2>
      <p>12+ years of expertise combined with design and manufacturing technology to bring your most complex projects to life.</p>
    </div>
    <div class="capabilities-grid">

      <div class="capability-card">
        <div class="capability-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
        </div>
        <h3>Precision Engineering</h3>
        <p>Advanced CAD design and manufacturing with tolerances down to ±0.001 inches for critical components.</p>
      </div>

      <div class="capability-card">
        <div class="capability-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        </div>
        <h3>Rapid Turnaround</h3>
        <p>Fast-track prototyping and production with streamlined workflows and automated processes.</p>
      </div>

      <div class="capability-card">
        <div class="capability-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
        </div>
        <h3>Quality Assurance</h3>
        <p>ISO 9001 certified processes with comprehensive inspection and testing protocols.</p>
      </div>

      <div class="capability-card">
        <div class="capability-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.5 4.5h4.5l-3.75 2.7 1.5 4.5L12 12l-3.75 2.7 1.5-4.5L6 7.5h4.5z"/></svg>
        </div>
        <h3>Innovation Driven</h3>
        <p>Cutting-edge technology and continuous improvement in manufacturing methodologies.</p>
      </div>

    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section">
  <div class="container">
    <div class="section-title center">
      <h2>Our Services</h2>
      <p>Comprehensive manufacturing solutions from initial design to final production.</p>
    </div>
    <div class="services-grid">

      <?php
      $services = [
        ['icon'=>'pen','title'=>'3D CAD Industrial Product Design','desc'=>'Professional CAD modeling and engineering design services for complex mechanical systems.'],
        ['icon'=>'bulb','title'=>'Product Development','desc'=>'End-to-end product development from concept to production-ready designs.'],
        ['icon'=>'layers','title'=>'Rapid Prototyping','desc'=>'Quick-turn prototyping with 3D printing and CNC machining for design validation.'],
        ['icon'=>'printer','title'=>'3D Printing','desc'=>'Industrial-grade FDM, SLA, and SLS 3D printing for custom manufacturing.'],
        ['icon'=>'factory','title'=>'Plastic Injection Molding','desc'=>'High-volume production with consistent quality and wide material selection.'],
        ['icon'=>'drop','title'=>'Rubber Molding','desc'=>'Custom elastomer manufacturing for seals, gaskets, and industrial components.'],
        ['icon'=>'cog','title'=>'CNC Milling and Turning','desc'=>'Precision CNC machining for production-grade components with tight tolerances.'],
        ['icon'=>'zap','title'=>'CNC Laser Cutting','desc'=>'High-precision laser cutting for complex 2D profiles in various materials.'],
        ['icon'=>'hammer','title'=>'Sheetmetal Forming','desc'=>'Complete sheetmetal fabrication including cutting, bending, forming, and welding.'],
        ['icon'=>'flame','title'=>'Metal Casting','desc'=>'Sand, investment, and permanent mold casting for complex metal parts.'],
        ['icon'=>'wrench','title'=>'Aluminum Die Casting','desc'=>'High-pressure die casting for complex thin-wall aluminum parts.'],
      ];

      $icons = [
        'pen'     => '<path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/>',
        'bulb'    => '<line x1="9" y1="21" x2="15" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><path d="M12 2a7 7 0 0 1 7 7c0 2.38-1.19 4.47-3 5.74V17H8v-2.26C6.19 13.47 5 11.38 5 9a7 7 0 0 1 7-7z"/>',
        'layers'  => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
        'printer' => '<polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/>',
        'factory' => '<path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>',
        'drop'    => '<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>',
        'cog'     => '<circle cx="12" cy="12" r="3"/><path d="M19.07 4.93l-1.41 1.41M5.34 5.34L3.93 6.75M21 12h-2M5 12H3M19.07 19.07l-1.41-1.41M5.34 18.66l-1.41 1.41M12 21v-2M12 5V3"/>',
        'zap'     => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'hammer'  => '<path d="M15 12l-8.5 8.5a2.12 2.12 0 0 1-3-3L12 9"/><path d="M17.64 15L22 10.64"/><path d="m20.91 11.7-1.25-1.25c-.6-.6-.93-1.4-.93-2.25v-.86L16.01 4.6a5.56 5.56 0 0 0-3.94-1.64H9l.92.82A6.18 6.18 0 0 1 12 8.4v1.56l2 2h2.47l2.26 1.91z"/>',
        'flame'   => '<path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/>',
        'wrench'  => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
      ];
      foreach ($services as $s): ?>
      <div class="service-card">
        <div class="service-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <?php echo $icons[$s['icon']]; ?>
          </svg>
        </div>
        <h3><?php echo htmlspecialchars($s['title']); ?></h3>
        <p><?php echo htmlspecialchars($s['desc']); ?></p>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<!-- SHIPPING CTA -->
<section class="cta-strip">
  <div class="container">
    <h2>Shipping Globally</h2>
    <p style="max-width:640px;margin:0.75rem auto 0;color:rgba(255,255,255,0.88);font-size:1.05rem;">Reliable air and sea options for samples, production runs, and bulk orders.</p>
    <div class="shipping-options">
      <div class="shipping-option">
        <div class="shipping-option-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-1.2 2.7c-.3.8.1 1.7.9 2l9.1 3.5c.5.1 1.1-.1 1.4-.5l2.3-2.9"/></svg>
        </div>
        <h3>Speed Delivery</h3>
        <p>3–5 days by AIR</p>
      </div>
      <div class="shipping-option">
        <div class="shipping-option-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-1.2 2.7c-.3.8.1 1.7.9 2l9.1 3.5c.5.1 1.1-.1 1.4-.5l2.3-2.9"/></svg>
        </div>
        <h3>Default Delivery</h3>
        <p>7–15 days by AIR</p>
      </div>
      <div class="shipping-option">
        <div class="shipping-option-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 21h20l-2-10H4L2 21z"/><path d="M6 11V7a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v4"/></svg>
        </div>
        <h3>Bulk &amp; Default</h3>
        <p>30–45 days by Sea</p>
      </div>
    </div>
    <a href="request-quote.php" class="btn btn-primary btn-lg">Request a Quote</a>
  </div>
</section>

<?php include 'footer.php'; ?>
