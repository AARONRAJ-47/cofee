<!doctype html>
<html>
<body>
<h1>register</h1>
<form method='POST' action="">
<label>name</label>
<input type="text" placeholder="name" name="name">
<label>email</label>
<input type="text" placeholder="email" name="email">
<label>password</label>
<input type="text" placeholder="password" name="password">
<input type="submit" name="submit">
<form>
<?php
include('tcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select email from register where email='$email'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)<=0)
{
$s="insert into register(name,email,password)values('$name','$email','$password')";
$r=mysqli_query($con,$s);
if($r)
{
echo"data stored";
}
else
{
echo"not stored";
}
}
else{
	echo"duplicate register";
}
}
?>
</body>
</html>