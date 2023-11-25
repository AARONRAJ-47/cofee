<!doctype html>
<body style="background-color:pink;">
<center>
<h1>view profile</h1>
<table border=1;>
<tr><th>name</th>
<th>email</th>
<th>password</th>
<th>update</th>
<th>delete</th>
</tr>
<?php
header('refresh:2');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
$i=1;
include('conn.php');
$sql="select * from teacher where id=$id";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($query))
{
	?>
	<tr><td><?php echo $row['name'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['password'];?></td>
	<td><a href="up.php?id=<?php echo $row['id'];?>"> <button>update</button></a></td>
	<td><a href="dp.php?id=<?php echo $row['id'];?>"> <button>delete</button></a></td>
	</tr>
	<?php
	$i++;
}

?>
	</table>
	<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/teacher_detials.php" style="text-decoration:none"><button>teacher detials</button></a></div></li>

	</body>
	</html>
	
	
	
	
	

