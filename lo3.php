<?php
include('conn.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
$q="select * from dada where id=$id ";
$sql=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($sql);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$query="delete name,password from dada where name='$name' AND password='$password' ";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"deleted";
	}else{ echo"not deleted";}
	
}
?>
<!doctype html>
<html>
<body>
<form method="POST" action="">
<input type="hidden" name="id" value="<?php echo $id;?>">
<label>name</label>
<input type="text" name="name" placeholder="name" value="<?php echo $row['name'];?>">
<br>
<label>password</label>
<input type="text" name="password" placeholder="password" value="<?php echo $row['password'];?>">
<input type="submit" name="submit">
</form>
</body>
</html>