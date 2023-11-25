<?php
include('tcon.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
}
$s="delete from info where id=$id";
$r=mysqli_query($con,$s);
if($r)
{
echo" deleted";
}
else{
echo"not deleted";
}
?>