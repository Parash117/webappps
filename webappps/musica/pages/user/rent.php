<?php
$title = 'MULTI MATTE - Films &amp; Recordings';
if(isset($_POST['submit'])){
  if(!isset($_SESSION['phoneAuthencation'])){
  $output = tampletLoader('../templates/user/requireauthencation.php',[]);
  }
  if(isset($_SESSION['phoneAuthencation'])){
    $output = tampletLoader('../templates/user/aa.html.php',[]);
    }
}else if(isset($_POST['book'])){
  $rentTable=new Database('tbl_rent');
  $cri=['name'=>$_POST['username'],
        'phone'=>$_SESSION['phoneAuthencation'],
        'items'=>$_SESSION['order']];
        $rentTable->insert($cri);
}else{
$output = tampletLoader('../templates/user/rentview_templates.html.php',[]);
}
 ?>
