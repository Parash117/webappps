<?php
$title="Admin Home";
$covers=new Database('cover_img');
if(isset($_POST['delete'])){
  $covers->delete('cover_id',$_POST['id']);
}
$cover=$covers->findAll();
$output=tampletLoader('../../templates/admin/cover_template.html.php',['covers'=>$cover]);
 ?>
