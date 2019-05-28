<?php
$title="Admin Home";
$imageTable=new Database('product_image');
$images=$imageTable->find('pid',$_GET['id']);
if(isset($_POST['delete'])){
    $imageTable->delete('image_id',$_POST['id']);
}
$output=tampletLoader('../../templates/admin/picture_templates.php',['images'=>$images]);
 ?>
