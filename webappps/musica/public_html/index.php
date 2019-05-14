<?php
require '../functions/tamplet_loader.php';
//require '../class/database.php';
//require '../class/furnitureAndCategory.php';
//require '../class/table.php';
//require '../functions/categoryTest.php';
session_start();

if(isset($_GET['page'])){
  require '../pages/user/'.$_GET['page'].'.php';
}else{
  require '../pages/user/home.php';
}

$criteria = [
  'title' => $title,
  'output' => $output
];

echo tampletLoader('../templates/user/layout.html.php',$criteria);
 ?>
