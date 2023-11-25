<?php
$con=mysqli_connect('localhost','root','Aaron','tasker');
if($con)
{
echo"connected";
}
else
{
echo" not connected";
}
?>