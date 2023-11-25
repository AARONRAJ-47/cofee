<!doctype html>
<html>
<body>
<center>
<?php
include('conn.php');
$q="select * from dada";
$sql=mysqli_query($con,$q);
?>
<table border=1>
<tr><th>id</th>
<th>name</th>
<th>password</th>
<th>action</th>
<th>delete</th>
</tr>
<?php
$i=1;
while($row=mysqli_fetch_assoc($sql))
{
	?>
	<tr><td><?php echo $i;?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['password']?></td>
	<td><a href="lo2.php?id=<?php echo $row['id'];?>">Update</a></td>
	<td><a href="lo3.php?id=<?php echo $row['id'];?>">delete</a></td>
	</tr>
	<?php
	$i++;
}
?>
</center>
</body>
</html>