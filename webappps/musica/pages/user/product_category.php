<?php
$title="Admin Home";
$cats=new Database('category');
$cat=$cats->findAll();

if($_GET['ptype1']=='3'&&$_GET['ptype2']=='5'){
  $output=tampletLoader('../templates/user/cameraandlens.html.php',[]);
}

else if($_GET['ptype1']=='1'&&$_GET['ptype2']=='2'){
  $output=tampletLoader('../templates/user/lightsandgrips.html.php',[]);
}
 ?>
