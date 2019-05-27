<?php
$rentTable = new Database('tbl_rent');
if(isset($_POST['submit'])){
    $cri=['rent_id'=>$_POST['rent_id'],
        'seen'=>1];
        $rentTable->update($cri,'rent_id');
        header('location:newrent');
}
$orders = $rentTable->find('rent_id',$_GET['id']);
$order=$orders->fetch();
$title="Admin Home";
$output=tampletLoader('../templates/admin/vieworder.html.php',['order'=>$order]);
 ?>
