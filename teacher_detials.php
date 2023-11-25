<!doctype html>
<body style="background-color:pink;">
<center>
<h1>teachers detials</h1>
<table border=1;>
<tr><th>no</th>
<th>email</th>
<th>detials</th>
</tr>
<?php
header('refresh:2');
include('conn.php');
$i=1;
$sql="select id,email from teacher";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($query))
{
	?>
	<tr><td><?php echo $row['id'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><a href="teach_update.php?id=<?php echo $row['id'];?>"> <button>view</button></a></td>
	</tr>
	<?php
	$i++;
}
?>
</table>
</center>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/teacher_detials.php" style="text-decoration:none"><button>teacher detials<button></a></div></li>
</body>
</html>