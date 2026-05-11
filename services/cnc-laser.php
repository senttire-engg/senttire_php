<?php
$page_title  = 'CNC Laser Cutting Services - Precision Metal & Material Cutting';
$page_desc   = 'High-precision laser cutting for complex 2D profiles in metals, plastics, and composites with minimal heat distortion.';
$canonical   = '/services/cnc-laser.php';
$service_h1  = 'CNC Laser Cutting Services';
$service_intro = 'High-precision laser cutting for complex 2D profiles in metals, plastics, and composites. Our fibre and CO2 laser systems deliver clean, accurate cuts with minimal heat distortion and excellent edge quality for prototypes and production parts.';
$service_intro2 = '';
$benefits = [
  'High-precision laser cutting with minimal heat-affected zones',
  'Complex 2D profiles and intricate patterns with tight tolerances',
  'Fibre laser for metals; CO2 laser for non-metals',
  'No tooling costs — economical for any quantity',
  'Nesting optimisation to minimise material waste',
  'Inline deburring and edge finishing options',
];
$specifications = [
  ['label'=>'Laser types','value'=>'Fibre laser (metals), CO2 laser (non-metals)'],
  ['label'=>'Materials','value'=>'Steel, Stainless, Aluminium, Acrylic, Wood'],
  ['label'=>'Max sheet size','value'=>'3000×1500 mm'],
  ['label'=>'Thickness range','value'=>'0.5 – 25 mm (material dependent)'],
  ['label'=>'Cutting tolerance','value'=>'±0.1 mm'],
  ['label'=>'File formats','value'=>'DXF, DWG, AI, SVG'],
];
$portfolio_caption = 'Precision laser-cut components across diverse materials and applications.';
$portfolio = [
  ['image'=>'https://images.unsplash.com/photo-1693656397837-c356efc83621','title'=>'Stainless steel façade panel','description'=>'Intricate decorative cut, 2 mm SS'],
  ['image'=>'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc','title'=>'Aluminium structural bracket','description'=>'Laser-cut and bent, structural grade'],
  ['image'=>'https://images.unsplash.com/photo-1685302822454-6a5f3c329678','title'=>'Mild steel chassis','description'=>'Multi-part weldment assembly blanks'],
  ['image'=>'https://images.unsplash.com/photo-1618150067342-313fa74b90f2','title'=>'Acrylic display stand','description'=>'CO2 cut, polished edges'],
  ['image'=>'https://images.unsplash.com/photo-1539586916228-3db588cc6f69','title'=>'PCB mounting plate','description'=>'Precision hole-pattern, aluminium'],
  ['image'=>'https://images.unsplash.com/photo-1702863361902-93c51bfbd923','title'=>'Copper heat spreader','description'=>'Intricate fin pattern, 1 mm copper'],
];
$cta_title = 'Get a Laser Cutting Quote';
$cta_desc  = 'Upload your DXF or DWG files and specify material and thickness. We\'ll provide an instant quote with material optimisation recommendations.';
include '_service-template.php';
