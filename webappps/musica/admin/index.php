<?php
require '../functions/tamplet_loader.php';
require '../class/Database.php';
//require '../class/database.php';
//require '../class/furnitureAndCategory.php';
//require '../class/table.php';
//require '../functions/categoryTest.php';
session_start();

if(isset($_SESSION['admin_loggedin'])){
  if(isset($_GET['page'])){
    require '../pages/admin/'.$_GET['page'].'.php';
  }else{
    require '../pages/admin/home.php';
  }
}else{
  require '../pages/admin/login.php';
}
$criteria = [
  'title' => $title,
  'output' => $output
];

echo tampletLoader('../templates/admin/layout.html.php',$criteria);
 ?>
