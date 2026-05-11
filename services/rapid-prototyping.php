<?php
$page_title  = 'Rapid Prototyping Services - Fast Design Validation';
$page_desc   = 'Accelerate your product development with fast, accurate prototypes using 3D printing and CNC machining.';
$canonical   = '/services/rapid-prototyping.php';
$service_h1  = 'Rapid Prototyping Services';
$service_intro = 'Accelerate your product development with fast, accurate prototypes. Our rapid prototyping services combine 3D printing and CNC machining to deliver functional models for design validation, testing, and stakeholder presentations in just days.';
$service_intro2 = '';
$benefits = [
  'Fast turnaround from CAD to physical prototype in 2-5 days',
  'Multiple prototyping technologies: FDM, SLA, SLS, CNC',
  'Functional prototypes suitable for fit, form, and function testing',
  'Wide material selection matching production materials',
  'Iterative prototyping support with rapid design changes',
  'Confidential prototyping with full NDA protection',
];
$specifications = [
  ['label'=>'Technologies','value'=>'FDM, SLA, SLS, CNC machining'],
  ['label'=>'Materials','value'=>'ABS, PLA, Nylon, Resin, Aluminum'],
  ['label'=>'Build volume','value'=>'Up to 500×500×500 mm'],
  ['label'=>'Lead time','value'=>'2-5 business days standard'],
  ['label'=>'Accuracy','value'=>'±0.1 mm (3D printing), ±0.05 mm (CNC)'],
  ['label'=>'Finishing','value'=>'Sanding, painting, chrome plating available'],
];
$portfolio_caption = 'Recent prototyping projects demonstrating various technologies and applications.';
$portfolio = [
  ['image'=>'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc','title'=>'SLA resin prototype','description'=>'High-detail consumer product enclosure'],
  ['image'=>'https://images.unsplash.com/photo-1693656397837-c356efc83621','title'=>'CNC aluminium mock-up','description'=>'Functional bracket prototype in 48 hours'],
  ['image'=>'https://images.unsplash.com/photo-1685302822454-6a5f3c329678','title'=>'SLS nylon assembly','description'=>'Multi-part snap-fit assembly prototype'],
  ['image'=>'https://images.unsplash.com/photo-1618150067342-313fa74b90f2','title'=>'FDM concept model','description'=>'Early-stage ergonomics validation model'],
  ['image'=>'https://images.unsplash.com/photo-1539586916228-3db588cc6f69','title'=>'Silicone overmould','description'=>'Rubber-over-plastic tactile prototype'],
  ['image'=>'https://images.unsplash.com/photo-1702863361902-93c51bfbd923','title'=>'Painted appearance model','description'=>'Photo-realistic pre-production sample'],
];
$cta_title = 'Get Your Prototype in Days';
$cta_desc  = 'Upload your CAD files and receive a quote within hours. We\'ll deliver high-quality prototypes to validate your designs.';
include '_service-template.php';
