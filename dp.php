<?php
include('conn.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];

	$sql="delete from teacher where id='$id'";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo"data deleted";
	}
	else
	{
		echo" not deleted";
	}
}
?>
<!doctype html>
<body style="background-color:pink;">
<center>
</center>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/teacher_detials.php" style="text-decoration:none"><button>teacher detials<buton></a></div></li>
</body>
</html>