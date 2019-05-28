<?php
  var_dump($_SESSION);

$coverimages = new Database('cover_img');
$cover = $coverimages->findAll();
$workimages = new Database('work');
$works = $workimages->findAll();
$title = 'MULTI MATTE - Films &amp; Recordings';
$output = tampletLoader('../templates/user/homepage.html.php',['ci'=>$cover,'works'=>$works]);
 ?>
