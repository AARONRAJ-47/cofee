<?php
include('config.php');
header('refresh:11');
if(!isset($_SESSION['email']))
{
	header('location:index.php');
}
$time=10;
if($_SESSION['last_activity']&&(time()-$_SESSION['last_activity']>$time))
{
    session_unset();
    session_destroy();
}
$_SESSION['last_activity']=time();
?>
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
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/school_tech.php" style="text-decoration:none">teachers</a></div></li>
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
<fieldset ><legend><h2>TEACHERS LOGIN!</h2></legend>
<form method="POST" action="teacher_check.php">
<h3><label>email</label></h3>
<div class="input-box">
<input type="text" name="email" placeholder="user name" required>
</div>
<h3><label>Password</label></h3>
<div class="input-box">
<input type="password" name="password" placeholder="password" requried>
</div>
<br>
<div class="input-box button">
<input type="submit" value="Login" placeholder="Login" style="color:red" ><input type="reset" style="color:green" ></div>
</p></form>
</fieldset>
</div>
</body>
</html>