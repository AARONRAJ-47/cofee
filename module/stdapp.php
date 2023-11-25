<?php
include('database.php');
  $name=$_POST['name'];
  $father=$_POST['father'];
  $phone=$_POST['phone'];
  $adress=$_POST['adress'];

$sql="INSERT INTO mstd(name,father,phone,adresss)values('$name','$father',$phone,'$adress')";
if($con->query($sql))
{
echo "data stored";
}
else
{
echo "data not stored";
}
$con->close();
?>
  