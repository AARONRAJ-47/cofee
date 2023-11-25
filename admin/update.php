<?php
include('database.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
if(count($_POST)>0) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$address=$_POST['address']; 

mysqli_query($con,"UPDATE cart set pname='$name', price=$price, address='$address' WHERE id='$id'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM cart WHERE id= '$id'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="sh.css">
<link rel="stylesheet" href="scmstore.css" crossorigin="anonymous"/> 
<style>
label{
	color:black
}
</style>
</head>
<body style="background-color:orange;">
<nav style="height: 80vh;">
<ul class="nav-flex-row">
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/app_list.php" style="text-decoration:none">std application</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/stdmark.php" style="text-decoration:none">std mark</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/selected.php" style="text-decoration:none">student view</a></div></li>
</ul>
</nav>
<div id="wapper" style="height: 50vh;"><br>
<h3>UPDATE ORDER</h3>
<fieldset><legend><h3><a href="stdmark.php" style="text-decoration:none;"><button>mark List</button></a></h3></legend>
<form method="POST" action=" " style="color:black">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<input type="hidden" name="id" class="input-box" value="<?php echo $row['id']; ?>">
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
<input type="text" name="address" placeholder="address" value="<?php echo $row['address'];?>"  required>
</div>
<div class="input-box button">
 <ul class="nav-item">
<div style="border-color:pink">
<input type="submit" name="submit" placeholder="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</ul></div>
</form>
</fieldset>
</div>
</body>
</html>