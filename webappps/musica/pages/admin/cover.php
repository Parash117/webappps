<?php
$title="Admin Home";
$cover=new Database('cover_img');
$covers=$cover->findAll();
$output=tampletLoader('../templates/admin/cover_template.html.php',['covers'=>$covers]);
 ?>
