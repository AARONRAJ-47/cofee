<?php
include('config.php');
if(!isset($_SESSION['name']))
{
header('location:std_log.php');
}
?><!DOCTYPE html>
<html>
<head><br><br><br>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="sh.css">
<style>
body{
display: flex;
align-items: center; 
justify-content: center; 
font-family: cursive; 
background-color:#008fff; 
}
label{
	color:black
}
form .input-box input{
  height: 50%;
  width: 50%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
  font-family: cursive; 
}

</style>
</head>
<body>
<nav style="height:100vh;">
<div class="container"> 
  <div class="navbar-header">
  <header>
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
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/complaint.php" style="text-decoration:none">contact</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/proreg.php" style="text-decoration:none"><button style="background-color:yellow;">View Profile</button></a></div></li>
</ul>
</header>
</div>
</div>
</nav>
<div id="wapper" style="height:50vh;"><br>
<h2>student Marks</h2>
<fieldset ><legend><h2>MARK SHEET</h2></legend>
<form method="POST" action="retrive.php">
<label>Student RollNo</label><br>
<div class="input-box">
<input type="number" name="no" pattern="[0-9]" placeholder="enter a number" required>
</div>
<br>
<div class="input-box button">
<input type="submit" value="submit" placeholder="submit"  ><input type="reset"  ></div>
</form>
</fieldset>
</div>
</body>
</html>