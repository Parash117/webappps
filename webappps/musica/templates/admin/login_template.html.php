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
<label> Email </label><br>
<input type="text" name="username"/><br>
<label>password </label><br>
<input type="password" name="password"/><br>
<input type="submit" name="admin_login" value="LOGIN"/>
</form>
</div>
