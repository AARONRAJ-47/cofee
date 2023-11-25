<?php
include('database.php');
session_start();
$name=$_POST['name'];
$email=$_POST['email'];

$sql="select id,name,email from students where name='$name' AND email='$email'";
$result=$con->query($sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
if($result->num_rows>=1)
{
	$_SESSION["name"]=$name;
	$_SESSION["id"]=$id;
header('location:retrive.php');
}
else 
{
echo "invalid name and date of email";
}

?>