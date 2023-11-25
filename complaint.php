<!DOCTYPE html>
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

<nav style="height: 100vh;">
 <div class="container"> 
  <div class="navbar-header">
  <header>
<ul class="nav-flex-row">
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/home.php" style="text-decoration:none">home</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/about.php" style="text-decoration:none">About</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/cview.php" style="text-decoration:none">my complaint</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/screv.php" style="text-decoration:none">students</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/contact.php" style="text-decoration:none">contact</a></div></li>
</ul>
</div>
</div>
</nav>
</header>
<div id="wapper" style="height: 50vh;"><br>
<fieldset ><legend><h2>STUDENT COMPLAINT</h2></legend>
<form method="POST" action="">
<label>complaint</label>
<div class="input-box">
<textarea rows="4" cols="25" name="complaint">message</textarea>
</div>
<div class="input-box button">
<input type="submit" name="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</p></form>
</fieldset>
</div>
<?php
include('database.php');
session_start();
$id=$_SESSION['id'];
$name=$_SESSION['name'];
if(isset($_POST['submit']))
{
	$id=$_SESSION['id'];
$name=$_SESSION['name'];
$complaint=$_POST['complaint'];                                                                                         	
$sql="INSERT INTO comp(no,name,comp)values($id,'$name','$complaint')";
$q=mysqli_query($con,$sql);
if(!$q)
{
	die();
}
}
?>
</body>
</html>












