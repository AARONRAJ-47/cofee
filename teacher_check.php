<?php
include('database.php');

$email= $_POST['email'];
$password=$_POST['password'];


$sql="select id,email,password from teacher where email='$email' AND password='$password'";
$result=$con->query($sql);


if($result->num_rows>=1)
{
	header("Location:markentery.php");
}
else 
{
echo "invalid email and password ";
}

?>