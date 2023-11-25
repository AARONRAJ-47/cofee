<?php
include('database.php');
  $name=$_POST['name'];
  $father=$_POST['father'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  
  $q="select name,phone from mstd where name='$name' and phone=$phone ";
  $result=mysqli_query($con,$q);
if(mysqli_num_rows($result)<1)  
{
$sql="INSERT INTO mstd(name,father,phone,address)values('$name','$father',$phone,'$address')";
if($con->query($sql))
{
echo "data stored";
}
else
{
echo "data not stored";
}
}
else{
	echo"already registered";
}
$con->close();
?>
  