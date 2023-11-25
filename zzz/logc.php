<?php
include('database.php');
include('config.php');
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['pass1']);
 $salt= md5($password);

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
?>