<?php
include('database.php');

$name=$_POST['name'];
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['pass1']);
$pass2=mysqli_real_escape_string($con,$_POST['pass2']);
$phone=$_POST['phone'];
$teacher=$_POST['teacher'];

if(!empty($name)&& !empty($email)&& !empty($password)&& !empty($pass2)&& !empty($teacher))
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
echo"fill all the column password and confirm password must be same";
}
?>