<?php
include('database.php');

$no=$_POST['no'];
$name= $_POST['name'];
$section=$_POST['section'];

$sql="INSERT INTO std_detials(no,name,section)VALUES('$no','$name','$section')";
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