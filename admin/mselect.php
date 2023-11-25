<?php
include('database.php');
  $name=$_POST['name'];
  $std=$_POST['std'];
 $q="select id,name,std from mselect where name='$name' AND std=$std ";
 $result=mysqli_query($con,$q);
 if(mysqli_num_rows($result)<1)
 {
$sql="INSERT INTO mselect(name,std)values('$name',$std)";
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
	 echo"already selected";
 }
$con->close();
?>
  