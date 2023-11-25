<?php
include('database.php');
$sql="select id from dada";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<html>
<body>
<form method="POST" action=" ">
<label>id</label>
<input type="number" name="id" value="<?php echo $row['id']?>">
<label>name</label>
<input type="text" name="name">
<label>password</label>
<input type="text" name="pass">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
include('database.php');
    $id=$_POST['id'];
	$name=$_POST['name'];
	$pass=$_POST['pass'];
$sql="UPDATE dada set name='$name',password='$pass' where id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
	echo"updated";
}
else
{
	echo"not updated";
}
}
?>
</body>
</html>
