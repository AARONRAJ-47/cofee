<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
include('database.php');
$sql="delete from cart where id=$id ";
$result=mysqli_query($con,$sql);

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
<body>
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
<h1> Data Deleted</h1>
</body>
</html>
