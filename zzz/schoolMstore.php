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
<button ><h3><a href="http://localhost/pablo/Aschool/markentery.php" style="text-decoration:none">mark entery</a></h3></button>
</ul>
</nav>

<div id="wapper" style="height: 50vh;"><br>

<div id="di"><h2 style="border-top:20px">student_detials</h2></div> 
<fieldset ><legend><h2> class </h2></legend>
<form method="POST" action="student.php" style="color:black">
<h3><label>DEPT_NO</label></h3>
<div class="input-box">
<input type="text" name="no" placeholder="Roll no" maxlength="8" required>
</div>
<h3><label>name</label></h3>
<div class="input-box">
<input type="text" name="name" placeholder="name" maxlength="10" required>
</div>
<h3><label>section</label></h3>
<div class="input-box">
<input type="text" name="section" placeholder="A,B or C" maxlength="1" requried>
</div>
<br>
<div class="input-box button">
<input type="submit" value="submit" placeholder="submit" style="color:red" ><input type="reset" style="color:green" ></div>
</p></form>
</fieldset>
</div>
</body>
</html>
