<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
include('database.php');
$s="select * from product where id='$id'";
$r=mysqli_query($con,$s);
$row=mysqli_fetch_assoc($r);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="scmstore.css" crossorigin="anonymous"/> 
</head>
<body>
<div id="wapper"><br><br><br><br><br><br><br><br><br><br>
<fieldset ><legend><h3>Detials</h3></legend>
<form method="POST" action=" " style="color:black">
<label>name<label><br>
<div class="input-box">
<input type="text" name="name" placeholder="name" value="<?php echo $row['pname'];?>" readonly>
</div>
<label>price<label><br>
<div class="input-box">
<input type="number" name="price" placeholder="price" value="<?php echo $row['price'];?>" readonly>
</div>
<label>Delivery Address</label><br>
<div class="input-box">
<input type="text" name="address" placeholder="address" maxlength="50"  required>
</div>
<div class="input-box button">
 <ul class="nav-item">
<div style="border-color:pink">
<input type="submit" name="submit" placeholder="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</ul></div>
</form>
</fieldset>
</div>
<?php
if(isset($_POST['submit']))
{
include('database.php');

$name=$_POST['name'];
$price=$_POST['price'];
$address=$_POST['address'];
$sql="INSERT INTO cart(pname,price,address)VALUES('$name',$price,'$address')";
$result=mysqli_query($con,$sql);

if($result)
{
echo" data stored";
}
else
{
echo" not stored";
}
}
?>
</body>
</html>
