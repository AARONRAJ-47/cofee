<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="scmstore.css" crossorigin="anonymous"/> 
</head>
<body>
<div id="wapper"><br><br><br><br><br><br><br><br><br><br>
<fieldset ><legend><h3 style="color:yellow">Login</h3></legend>
<form method="POST" action=" " style="color:black">
<label style="color:yellow">email<label><br>
<div class="input-box">
<input type="email" name="email" placeholder="user name" required>
</div>
<label style="color:yellow">Password</label><br>
<div class="input-box">
<input type="password" name="pass1" placeholder="Password" pattern="(?=.*[A-Z])(?=.*[a-z]).{,8}" title="must contain cotain at least one number and one uppercase and lowercase and atlest 8 or more characters" required>
</div>
<br>
<div class="input-box button">
<input type="submit" value="submit" name="submit" placeholder="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</p></form>
 <ul class="nav-item">
<div><a href="http://localhost/coffee/register.php" style="color:yellow">New user register</a> </div>
  </ul>
</fieldset>
</div>
<?php
if(isset($_POST['submit']))
{ 
include('database.php');
include('config.php');
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['pass1']);
 $salt= md5($password);
 echo "invalid email and password ";
$sql="select id,email,password from register where email='$email' AND password='$salt'";
$result=$con->query($sql);


if($result->num_rows>=1)
{
	$_SESSION["email"]=$email;
header('location:home.php');
}
else 
{
echo "invalid email and password ";
}
}
 
?>
</body>
</html>
