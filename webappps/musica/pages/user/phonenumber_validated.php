<?php
session_start();
$_SESSION['phoneAuthencation']=$_POST['phonenumber'];
echo $_SESSION['phoneAuthencation'];
 ?>
