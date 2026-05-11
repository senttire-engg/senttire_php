<?php
$page_title  = '3D Printing Services - FDM, SLA, SLS Manufacturing';
$page_desc   = 'Professional additive manufacturing with FDM, SLA, and SLS technologies. Wide material library for prototypes, tooling, and production parts.';
$canonical   = '/services/3d-printing.php';
$service_h1  = '3D Printing Services';
$service_intro = 'Professional additive manufacturing for prototypes, tooling, and production parts. Our industrial 3D printing capabilities include FDM, SLA, and SLS technologies with a comprehensive material library to meet your specific application requirements.';
$service_intro2 = '';
$benefits = [
  'Industrial-grade FDM, SLA, and SLS 3D printing technologies',
  'Wide material selection: plastics, resins, nylon, composites',
  'Complex geometries impossible with traditional manufacturing',
  'No minimum order quantity — one part or thousands',
  'Post-processing: sanding, painting, UV coating, dyeing',
  'Fast turnaround with online quoting and ordering',
];
$specifications = [
  ['label'=>'Technologies','value'=>'FDM, SLA, SLS, Multi Jet Fusion'],
  ['label'=>'Materials','value'=>'PLA, ABS, PETG, Nylon, TPU, Resin'],
  ['label'=>'Layer resolution','value'=>'0.05 – 0.3 mm (technology dependent)'],
  ['label'=>'Max build size','value'=>'600×600×500 mm (FDM)'],
  ['label'=>'Accuracy','value'=>'±0.1-0.2 mm typical'],
  ['label'=>'File formats','value'=>'STL, OBJ, STEP, 3MF'],
];
$portfolio_caption = 'Diverse 3D printing applications across industries and use cases.';
$portfolio = [
  ['image'=>'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc','title'=>'SLA medical model','description'=>'Anatomical model for surgical planning'],
  ['image'=>'https://images.unsplash.com/photo-1693656397837-c356efc83621','title'=>'SLS functional part','description'=>'Snap-fit nylon enclosure for electronics'],
  ['image'=>'https://images.unsplash.com/photo-1685302822454-6a5f3c329678','title'=>'FDM jig & fixture','description'=>'Production aid printed overnight'],
  ['image'=>'https://images.unsplash.com/photo-1618150067342-313fa74b90f2','title'=>'Flexible TPU gasket','description'=>'Custom elastomeric seal prototype'],
  ['image'=>'https://images.unsplash.com/photo-1539586916228-3db588cc6f69','title'=>'Resin jewellery mould','description'=>'High-detail casting master pattern'],
  ['image'=>'https://images.unsplash.com/photo-1702863361902-93c51bfbd923','title'=>'Coloured concept model','description'=>'Full-colour appearance prototype'],
];
$cta_title = 'Start Printing Today';
$cta_desc  = 'Upload your STL files and get an instant quote. Our team will recommend the best technology and materials for your application.';
include '_service-template.php';
