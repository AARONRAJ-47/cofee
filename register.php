<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="scmstore.css" crossorigin="anonymous"/> 
</head>
<body>
<div id="wapper"><br><br><br><br><br><br><br><br><br><br>
<fieldset ><legend><h3>Register</h3></legend>
<form method="POST" action=" " style="color:black">
<label>name<label><br>
<div class="input-box">
<input type="text" name="name" placeholder="name" required>
</div>
<label>email<label><br>
<div class="input-box">
<input type="text" name="email" placeholder="email" required>
</div>
<label>Password</label><br>
<div class="input-box">
<input type="password" name="pass1" placeholder="Password" pattern="(?=.*[A-Z])(?=.*[a-z]).{.8}" title="must contain cotain at least one number and one uppercase and lowercase and atlest 8 or more characters" required>
</div>
<label>current Password</label><br>
<div class="input-box">
<input type="password" name="pass2" placeholder="Password" pattern="(?=.*[A-Z])(?=.*[a-z]).{.8}" title="must contain cotain at least one number and one uppercase and lowercase and atlest 8 or more characters" required>
</div>
<label>Phone number<label><br>
<div class="input-box">
<input type="tel" name="phone" placeholder="Phone number" maxlength="10" pattern="[0-9]{10}" title="only 10 numbers" required>
</div>
<label>Best teacher name<label><br>
<div class="input-box">
<input type="text" name="teacher" placeholder=" like prof vimal" required>
</div>
<br>
<p style="color:yellow">you can login after submit it</p>
<div class="input-box button">
 <ul class="nav-item">
<div style="border-color:pink"><a href="http://localhost/coffee/index.php" style="text-decoration:none">
<input type="submit" name="submit" placeholder="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</a></ul></div>
</form>
</fieldset>
</div>
<?php
if(isset($_POST['submit']))
{
include('database.php');

$name=$_POST['name'];
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['pass1']);
$pass2=mysqli_real_escape_string($con,$_POST['pass2']);
$phone=$_POST['phone'];
$teacher=$_POST['teacher'];
$check="select email from register where email='$email' ";
$result=$con->query($check);
if(mysqli_num_rows($result)<1)       
{                     
if($password==$pass2)
{
$salt=md5($password);
$sql="INSERT INTO register(name,email,password,phone,teacher)VALUES('$name','$email','$salt',$phone,'$teacher')";
if($con->query($sql))
{
header('location:index.php');
}
else
{
echo"error try again";
}
}
else
{
	echo"incorrect password";
}
}
else
{
echo"duplicate user";
}
}
?>
</body>
</html>
