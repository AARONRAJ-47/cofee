<!doctype html>
<body>
<form method="POST">
<label>name</label>
<input type="text" name="name" placeholder="name">
<label>age</label>
<input type="number" name="age" placeholder="age">
<label>native</label>
<input type="text" name="native" placeholder="native">
<input type="submit" name="submit">
</form>
<?php
include('tcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$native=$_POST['native'];
$sql=mysqli_query($con,"insert into info(name,age,native) value('$name',$age,'$native')");
if($sql)
{
echo"data stored";
}
else
{
echo"not stored";
}
}
?>
</body>
</html>