<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
}
include('database.php');
$q="select name,password from dada where id=$id";
$sql=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($sql);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['pass'];
	$s="UPDATE dada set name='$name',password='$password'where id=$id";
	$sl=mysqli_query($con,$s);
	if($sl)
	{
		echo"data stored";
	}
	else{ echo"not stored";}
}
else{echo"erroe";}
?>
<!doctype html>
<body>
<h3>update</h3>
<form method="POST" action=" ">
<input type="hidden" name="id" value="<?php echo $id;?>">
<label>name</label>
<input type="text" name="name" placeholder="name" value="<?php echo $row['name'];?>">
<br>
<label>password</label>
<input type="text" name="pass" placeholder="password" value="<?php echo $row['password'];?>">
<input type="submit" name="submit">
</form>
</body>
</html>