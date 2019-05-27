<?php
  var_dump($_SESSION);

$coverimages = new Database('cover_img');
$cover = $coverimages->findAll();
$workimages = new Database('work');
$works = $workimages->findAll();
$title = 'MULTI MATTE - Films &amp; Recordings';
$hots = new Database('hotarrival');
$hot = $hots->findAll();

$output = tampletLoader('../templates/user/homepage.html.php',['ci'=>$cover,'works'=>$works,'hots'=>$hot]);
 ?>
