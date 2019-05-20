<?php
$title = 'MULTI MATTE - Films &amp; Recordings';

$productlist = new Database('product_0117');
$light = $productlist->find('p_type', '1');
$grips = $productlist->find('p_type', '2');
$cameras = $productlist->find('p_type', '3');
$screens = $productlist->find('p_type', '4');
$lens = $productlist->find('p_type', '5');
$output = tampletLoader('../templates/user/rentview_templates.html.php',['lights'=>$light,'grips'=>$grips,'cameras'=>$cameras,'screens'=>$screens,'lens'=>$lens]);
 ?>
