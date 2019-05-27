<?php if(isset($_POST['admin_login'])){
  $userTable=new Database('login_data');
  $users=$userTable->find('username',$_POST['username']);
  if($users->rowCount()>0){
    $user=$users->fetch();
    if(password_verify($_POST['password'],$user['password'])){
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
?>

<style>
input[type=text], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

  padding-top: 15%;
  text-align: center;
}
label{
}
</style>

<div class='adminloginform'>
<form method="post" action="">
<label> USERNAME: </label><br>
<input type="text" name="username"/><br>
<label>PASSWORD: </label><br>
<input type="password" name="password"/><br>
<input type="submit" name="admin_login" value="LOGIN" style="margin-left: 28%; margin-top:20px;"/>
</form>
</div>
