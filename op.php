<!doctype html>
<body>
<h1>arithmatic operation</h1>
<table border=1;>
<tr><th>A</th>
<th>B</th>
<th>C</th>
<th>operator</th>
</tr>
<?php
include('conn.php');
$i=1;
$sql="select * from task";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($query))
{
?>
<tr><td><?php echo $row['a'];?></td>
<td><?php echo $row['b'];?></td>
<td><?php echo $row['c'];?></td>
<td><?php echo $row['op'];?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>