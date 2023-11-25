<?php
include('conn.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
$s="select *from teacher where id=$id";
$q=mysqli_query($con,$s);
$row=mysqli_fetch_assoc($q);
if(isset($_POST['submit']))
{
     $id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
		$r="select email from teacher where email='$email'";
		$rr=mysqli_query($con,$r);
		if(mysqli_num_rows($rr)>=1)
		{
			echo "already given";
		}else{
	$sql="update teacher set name='$name',email='$email',password='$password' where id='$id'";
	$query=mysqli_query($con,$sql);

	if($query)
	{
		echo"data updated";
	}
	else
	{
		echo" not updated";
	}
}
}
?>
<!doctype html>
<body style="background-color:pink;">
<center>
<h1>update</h1>
<form method="POST">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<label>name</label>
<input type="text" name="name"  maxlength"10" value="<?php echo $row['name'];?>">
<br>
<label>email</label>
<input type="text" name="email" maxlength"20" value="<?php echo $row['email'];?>">
<br>
<label>password</label>
<input type="text" name="password" maxlength"10" value="<?php echo $row['password'];?>">
<br>
<input type="submit" name="submit" >
</form>
</center>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/teacher_detials.php" style="text-decoration:none"><button>teacher detials</button></a></div></li>
</body>
</html>