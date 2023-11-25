<?php
include('config.php');
if(!isset($_SESSION['email']))
{
header('location:index.php');
}
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
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/home.php" style="text-decoration:none">home</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/about.php" style="text-decoration:none">About</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/school_tech.php" style="text-decoration:none">teachers</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/screv.php" style="text-decoration:none">students</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/contact.php" style="text-decoration:none">contact</a></div></li>
</ul>
</nav>

<div id="wapper" style="height: 50vh;"><br>

<div id="di"><h2 style="border-top:20px"> Student Application</h2></div> 
<fieldset ><legend><h2> Register </h2></legend>
<form method="POST" action="stdapp.php" style="color:black">
<h3><label>Name</label></h3>
<div class="input-box">
<input type="text" name="name" placeholder="Name" maxlength="10" required>
</div>
<h3><label>Father Name</label></h3>
<div class="input-box">
<input type="text" name="father" placeholder="Father Name" maxlength="10" required>
</div>
<h3><label>Phone</label></h3>
<div class="input-box">
<input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{10}" maxlength="10" required>
</div>
<h3><label>Address</label></h3>
<div class="input-box">
<input type="text" name="address" placeholder="Address" maxlength="100" required>
</div>
<br>
<div class="input-box button">
<input type="submit" value="submit" placeholder="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</p></form>
</fieldset>
</div>
</body>
</html>
