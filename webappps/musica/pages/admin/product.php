<?php
$productTable=new Database('product_0117');

if(isset($_POST['delete'])){
  $productTable->delete('pid',$_POST['id']);
}
$products=$productTable->findAll();
$title="Products";
$output=tampletLoader('../../templates/admin/product_template.html.php',['products'=>$products]);
 ?>
