<?php
if(isset($_POST['admin_login'])){
  $userTable=new Database('login_data');
  $users=$userTable->find('username',$_POST['username']);
  if($users->rowCount()>0){
    $user=$users->fetch();
    if(password_verify($_POST['password'],$user['password'])){
      $_SESSION['admin_type']=$user['user_type'];
      $_SESSION['admin_loggedin']='true';
      //$_SESSION['admin_id']=$user['user_id'];
    //  $content = tampletLoader('admin_sidebar_template.php',[]).tampletLoader('login_template.php',[]);
      echo 'user is logged';
      header('location:index.php');
    }else{
      echo "pass";
    }
  }else{
    echo "user";
  }


}
$output=tampletLoader('../templates/admin/login_template.html.php',[]);
$title="Admin Login";
 ?>
