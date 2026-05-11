<?php
$page_title  = '3D CAD Design Services - Professional Engineering Design';
$page_desc   = 'Expert 3D CAD design services using SolidWorks, AutoCAD, and Fusion 360. From concept sketches to production-ready models with complete technical documentation.';
$canonical   = '/services/cad-design.php';
$service_h1  = '3D CAD Design Services';
$service_intro = 'Transform your product concepts into detailed 3D models ready for manufacturing. Our experienced CAD engineers use industry-leading software to create precise, manufacturable designs that meet your exact specifications.';
$service_intro2 = 'Whether you\'re developing a new product, need reverse engineering services, or require design modifications, we deliver professional CAD models with complete technical documentation.';
$benefits = [
  'Professional SolidWorks, AutoCAD, and Fusion 360 expertise',
  'Parametric modeling for design flexibility and rapid iterations',
  'Design for manufacturability (DFM) analysis and optimization',
  'Complete technical documentation and engineering drawings',
  'Reverse engineering from physical samples or 2D drawings',
  'Assembly design with motion simulation and interference checking',
];
$specifications = [
  ['label'=>'Software platforms','value'=>'SolidWorks, AutoCAD, Fusion 360, Inventor'],
  ['label'=>'File formats','value'=>'STEP, IGES, STL, DWG, DXF, Parasolid'],
  ['label'=>'Turnaround time','value'=>'3-7 business days typical'],
  ['label'=>'Complexity','value'=>'Simple parts to complex assemblies'],
  ['label'=>'Revisions','value'=>'Unlimited within project scope'],
  ['label'=>'Deliverables','value'=>'Native files, STEP, PDF drawings'],
];
$portfolio_caption = 'Recent CAD design projects demonstrating our capabilities across various industries.';
$portfolio = [
  ['image'=>'https://images.unsplash.com/photo-1693656397837-c356efc83621','title'=>'Industrial machinery component','description'=>'Complex assembly with 47 parts and motion simulation'],
  ['image'=>'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc','title'=>'Consumer product housing','description'=>'Ergonomic design with snap-fit assembly features'],
  ['image'=>'https://images.unsplash.com/photo-1685302822454-6a5f3c329678','title'=>'Precision mechanical system','description'=>'High-tolerance design for automated equipment'],
  ['image'=>'https://images.unsplash.com/photo-1618150067342-313fa74b90f2','title'=>'Custom tooling fixture','description'=>'Manufacturing jig with modular configuration'],
  ['image'=>'https://images.unsplash.com/photo-1539586916228-3db588cc6f69','title'=>'Electronic enclosure','description'=>'IP67-rated housing with thermal management'],
  ['image'=>'https://images.unsplash.com/photo-1702863361902-93c51bfbd923','title'=>'Automotive bracket assembly','description'=>'Lightweight design with FEA optimization'],
];
$cta_title = 'Start Your CAD Design Project';
$cta_desc  = 'Share your design requirements and receive a detailed proposal. We\'ll work with you to create precise, manufacturable CAD models.';
include '_service-template.php';
