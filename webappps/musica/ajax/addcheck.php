<?php
session_start();
if(!isset($_SESSION['order'])){
    $_SESSION['order']="";
}
    if($_POST['status']=='true'){
    $_SESSION['order']=$_SESSION['order'].','.$_POST["check"];
    }else{
        $g=explode(",",$_SESSION['order']);
        if($key=array_search($_POST['check'],$g)!==false){
            unset($g[$key]);
            $_SESSION['order']=implode(",",$g);
        }
    }
?>