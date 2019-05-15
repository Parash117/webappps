<?php
$categoryTable=new Database('category');
$productTable=new Database('product_0117');
if(isset($_POST['addProduct'])){
  unset($_POST['addProduct']);
  $productTable->save($_POST,'pid');
  header('location:product');
}

if(isset($_GET['eid'])){
  $products=$productTable->find('pid',$_GET['eid']);
  $row=$products->fetch();
}else{
  $row=[];
}
$categories=$categoryTable->findAll();
$title="Products";
$output=tampletLoader('../templates/admin/addproduct_template.html.php',['categories'=>$categories,'row'=>$row]);
 ?>
