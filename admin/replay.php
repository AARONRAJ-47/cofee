<?php
include('database.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
if(count($_POST)>0) {
	
	$no=$_POST['no'];
	$name=$_POST['name'];
	$complaint=$_POST['complaint'];
	$replay=$_POST['replay'];
	
		
mysqli_query($con,"UPDATE comp set  no=$no,name='$name',comp='$complaint',replay='$replay' WHERE id='$id'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM comp WHERE id= '$id'");
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
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/app_list.php" style="text-decoration:none">Std Application</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/stdmark.php" style="text-decoration:none">std mark</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/selected.php" style="text-decoration:none">student view</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/complaint.php" style="text-decoration:none">complaint</a></div></li></ul>
</ul>
</nav>
<div id="wapper" style="height: 50vh;"><br>
<h3>UPDATE MARK</h3>
<fieldset><legend><h3><a href="complaint.php" style="text-decoration:none;"><button>complaint</button></a></h3></legend>
<form method="POST" action=" " style="color:black">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<input type="hidden" name="id" class="input-box" value="<?php echo $row['id']; ?>">
<h3><label>roll no</label></h3>
<div class="input-box">
<input type="text" name="no" placeholder="roll no"  value="<?php echo $row['no']; ?>" required>
</div>
<h3><label>name</label></h3>
<div class="input-box">
<input type="text" name="name" placeholder="name"  value="<?php echo $row['name']; ?>" requried>
</div>
<h3><label>complaint</label></h3>
<div class="input-box">
<input type="text" name="complaint" placeholder="complaint"  value="<?php echo $row['comp']; ?>" requried>
</div>
<h3><label>replay</label></h3>
<div class="input-box">
<textarea name="replay" rows="4" cols="15">replay</textarea>
</div>
<br>
<div class="input-box button">
<input type="submit" value="submit" placeholder="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</p></form>
</fieldset>
</div>
</body>
</html>