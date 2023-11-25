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
<div id="di"><h2 style="border-top:20px">DATA ENTERY</h2></div>
<fieldset ><legend><h2> ENTER STUDENT MARKS</h2></legend>
<form method="POST" action="schoolMstorePHP.php" style="color:black">
<h3><label>ROLL_NO</label></h3>
<div class="input-box">
<input type="number" name="no" placeholder="Roll no" maxlength="3" required>
</div>
<h3><label>TAMIL MARK</label></h3>
<div class="input-box">
<input type="tel" name="tamil" placeholder="tamil" pattern="[0-9],{.3}" maxlength="3"  required>
</div>
<h3><label>ENGLISH MARK</label></h3>
<div class="input-box">
<input type="tel" name="english" placeholder="english" maxlength="3" requried>
</div>
<h3><label>MATHS</label></h3>
<div class="input-box">
<input type="tel" name="maths" placeholder="maths" maxlength="3" requried>
</div>
<h3><label>SCIENCE MARK</label></h3>
<div class="input-box">
<input type="tel" name="science" placeholder="science" maxlength="3" requried>
</div>
<h3><label>SOCIAL MARK</label></h3>
<div class="input-box">
<input type="tel" name="social" placeholder="social" maxlength="3" requried>
</div>
<br>
<div class="input-box button">
<input type="submit" value="submit" placeholder="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</p></form>
</fieldset>
</div>
</body>
</html>