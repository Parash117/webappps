<?php
$rentTable = new Database('tbl_rent');
$orders = $rentTable->find('seen',0);
$title="Admin Home";
$output=tampletLoader('../templates/admin/newrent_template.html.php',['orders'=>$orders]);
 ?>
