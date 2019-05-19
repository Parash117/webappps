<?php
$title = 'MULTI MATTE - Films &amp; Recordings';

$productlist = new Database('product_0117');
$products = $productlist->find('pid', $_GET['pid']);
$product = $products->fetch();
$output = tampletLoader('../templates/user/productview_templates.html.php',['product'=> $product]);
 ?>
