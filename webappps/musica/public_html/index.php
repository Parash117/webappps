<?php
require '../functions/tamplet_loader.php';
//require '../class/database.php';
//require '../class/furnitureAndCategory.php';
//require '../class/table.php';
//require '../functions/categoryTest.php';
session_start();

if(isset($_GET['page'])){
  require '../pages/'.$_GET['page'].'.php';
}else{
  require '../pages/home.php';
}

$criteria = [
  'title' => $title,
  'output' => $output
];

echo tampletLoader('../templates/layout.html.php',$criteria);
 ?>
