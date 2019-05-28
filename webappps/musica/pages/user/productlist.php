<?php
$title = 'MULTI MATTE - Films &amp; Recordings';
$productlist = new Database('product_0117');
$products = $productlist->find('p_type', $_GET['cpid']);
//$products->fetch();


$output = tampletLoader('../templates/user/productlist_templates.html.php',['products' => $products]);
 ?>
