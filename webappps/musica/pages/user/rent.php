<?php
$title = 'MULTI MATTE - Films &amp; Recordings';

if(isset($_SESSION['phoneAuthencation'])){
$output = tampletLoader('../templates/user/rentview_templates.html.php',[]);
}else{

  $output = tampletLoader('../templates/user/requireauthencation.php',[]);
}
 ?>
