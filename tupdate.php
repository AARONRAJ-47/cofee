<?php
include('tcon.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
}
$s="select * from info";
$r=mysqli_query($con,$s);
$row=mysqli_fetch_assoc($r);
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$native=$_POST['native'];
$sql="update info set name='$name',age='$age',native='$native'where id=$id";
$result=mysqli_query($con,$sql);
if($result)
{
echo "updated";
}
else
{
	echo"not updated";
}
}
?>
<!doctype html>
<html>
<body>
<form method="POST">
<input type="hidden" name="id" value="$id">
<label>name</label>
<input type="text" name="name" value="<?php echo $row['name'];?>">
<labe>age</label>
<input type="text" name="age" value="<?php echo $row['age'];?>">
<labe>native</label>
<input type="text" name="native" value="<?php echo $row['native'];?>">
<input type="submit" name="submit">
</form>
</body>
</html>
