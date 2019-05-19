<?php
$title = 'MULTI MATTE - Films &amp; Recordings';

$productlist = new Database('product_0117');
$products = $productlist->findAll();

$output = tampletLoader('../templates/user/rentview_templates.html.php',['product'=> $products]);
 ?>
