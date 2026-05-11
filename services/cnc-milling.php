<?php
$page_title  = 'CNC Milling and Turning Services - Precision Machining';
$page_desc   = 'State-of-the-art CNC milling and turning for complex parts with exceptional accuracy and surface finish.';
$canonical   = '/services/cnc-milling.php';
$service_h1  = 'CNC Milling and Turning Services';
$service_intro = 'Precision CNC machining for complex parts and assemblies. Our state-of-the-art CNC milling and turning centres deliver exceptional accuracy and surface finish for prototypes, tooling, and production components across a wide range of materials.';
$service_intro2 = '';
$benefits = [
  '3-axis, 4-axis, and 5-axis CNC milling capabilities',
  'Precision tolerances down to ±0.005 mm for critical features',
  'CNC turning for cylindrical parts up to Ø400 mm',
  'Live tooling for milled features in a single setup',
  'In-process inspection with CMM quality reports',
  'Wide material expertise: metals, plastics, composites',
];
$specifications = [
  ['label'=>'Machine types','value'=>'3-axis, 4-axis, 5-axis CNC mills; CNC lathes'],
  ['label'=>'Materials','value'=>'Aluminum, Steel, Stainless, Titanium, Plastics'],
  ['label'=>'Max part size','value'=>'800×600×500 mm (milling)'],
  ['label'=>'Tolerances','value'=>'±0.005 mm precision, ±0.025 mm standard'],
  ['label'=>'Surface finish','value'=>'Ra 0.4 µm achievable'],
  ['label'=>'Lead time','value'=>'3-7 business days typical'],
];
$portfolio_caption = 'Precision-machined components demonstrating our CNC capabilities.';
$portfolio = [
  ['image'=>'https://images.unsplash.com/photo-1693656397837-c356efc83621','title'=>'Aluminium structural bracket','description'=>'5-axis milled, aerospace tolerances'],
  ['image'=>'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc','title'=>'Stainless pump housing','description'=>'Complex internal channels, mirror finish'],
  ['image'=>'https://images.unsplash.com/photo-1685302822454-6a5f3c329678','title'=>'Titanium medical implant','description'=>'Medical-grade, CMM verified'],
  ['image'=>'https://images.unsplash.com/photo-1618150067342-313fa74b90f2','title'=>'CNC turned shaft','description'=>'H6 precision ground bearing journals'],
  ['image'=>'https://images.unsplash.com/photo-1539586916228-3db588cc6f69','title'=>'Delrin precision block','description'=>'Electrical insulator, ±0.01 mm'],
  ['image'=>'https://images.unsplash.com/photo-1702863361902-93c51bfbd923','title'=>'Custom tooling insert','description'=>'Tool steel, EDM finished pockets'],
];
$cta_title = 'Get a CNC Machining Quote';
$cta_desc  = 'Upload your CAD files and technical drawings. We\'ll provide a detailed quote with material recommendations and lead time estimates.';
include '_service-template.php';
