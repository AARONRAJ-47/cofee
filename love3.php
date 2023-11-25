<html>
<body>
<h1>UPdate</h1>
<?php
include('database.php');
$sql="select * from dada";
$result=mysqli_query($con,$sql);
if($result)
{
	$no="UPDATE dada set name='sam',password='farmer' where id=2";
echo mysqli_query($con,$no);
}
else
{
echo"no buddy no ";
}
?>
</body>
</html>








