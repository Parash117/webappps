<?php
session_start();
require '../functions/tamplet_loader.php';
require '../class/Database.php';

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
