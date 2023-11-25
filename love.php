<html>
<body>
<h1>LOVE</h1>
<form method="POST" action=" ">
<label>name</label><br>
<input type="text" name="name">
<label>password</label>
<input type="text" name="pass">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
	include('database.php');
	$name=$_POST['name'];
	$password=$_POST['pass'];
	$sql="INSERT INTO dada(name,password)values('$name','$password')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo"data stored";
	}
	else{
		echo"not stored";
	}
}
	?>
	</body>
	</html>