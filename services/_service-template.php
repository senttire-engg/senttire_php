<?php
/**
 * service-template.php
 * Included by each service page. Requires:
 *   $page_title, $page_desc, $canonical
 *   $service_h1, $service_intro, $service_intro2 (optional)
 *   $service_cta_quote  (quote CTA text at bottom)
 *   $benefits  (array of strings)
 *   $specifications (array of ['label'=>'', 'value'=>''])
 *   $portfolio  (array of ['image'=>'', 'title'=>'', 'description'=>''])
 *   $portfolio_caption (string)
 *   $cta_title, $cta_desc
 */
$page_depth = 1;
$root = '../';
include '../header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <h1><?php echo $service_h1; ?></h1>
    <p><?php echo htmlspecialchars($service_intro); ?></p>
    <?php if (!empty($service_intro2)): ?>
    <p style="margin-top:0.75rem;"><?php echo htmlspecialchars($service_intro2); ?></p>
    <?php endif; ?>
    <div style="margin-top:2rem;">
      <a href="../request-quote.php" class="btn btn-primary btn-lg">Request a Quote</a>
    </div>
  </div>
</section>

<!-- Benefits + Specs -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div>
        <h2 style="margin-bottom:1.5rem;">Key Benefits</h2>
        <ul class="benefits-list">
          <?php foreach ($benefits as $b): ?>
          <li><?php echo htmlspecialchars($b); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div>
        <h2 style="margin-bottom:1.5rem;">Technical Specifications</h2>
        <table class="specs-table">
          <?php foreach ($specifications as $spec): ?>
          <tr>
            <td><?php echo htmlspecialchars($spec['label']); ?></td>
            <td><?php echo htmlspecialchars($spec['value']); ?></td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio -->
<section class="section section-alt">
  <div class="container">
    <div class="section-title center">
      <h2>Portfolio Showcase</h2>
      <p><?php echo htmlspecialchars($portfolio_caption); ?></p>
    </div>
    <div class="portfolio-grid">
      <?php foreach ($portfolio as $p): ?>
      <div class="portfolio-card">
        <img src="<?php echo htmlspecialchars($p['image']); ?>?auto=format&fit=crop&w=600&q=80"
             alt="<?php echo htmlspecialchars($p['title']); ?>" loading="lazy" />
        <div class="portfolio-card-body">
          <h3><?php echo htmlspecialchars($p['title']); ?></h3>
          <p><?php echo htmlspecialchars($p['description']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Bottom CTA -->
<section class="section">
  <div class="container" style="text-align:center;max-width:700px;">
    <h2><?php echo htmlspecialchars($cta_title); ?></h2>
    <p style="margin:1rem auto 2rem;"><?php echo htmlspecialchars($cta_desc); ?></p>
    <a href="../request-quote.php" class="btn btn-primary btn-lg">Request a Quote</a>
  </div>
</section>

<?php include '../footer.php'; ?>
