<?php
include('database.php');

$name=$_POST['name'];
$email= $_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO teacher(name,email,password)VALUES('$name','$email','$password')";
if($con->query($sql))
{
echo"data stored";
}
else
{
echo"error try again";
}

$con->close();
?>