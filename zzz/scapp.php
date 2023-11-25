<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="app.css" > 
<style>
 .nav-flex-row {
    display: flex;
    flex-direction: row;
    justify-content: center;
    position: absolute;
    z-index: 100;
    left: 0;
    width: 100%;
    padding: 0;
}
 
.nav-flex-row li {
    text-decoration: none;
    list-style-type: none;
    padding: 20px 15px;
}
 
.nav-flex-row li a {

    color: #000;
    font-size: 1.5em;
    text-transform: uppercase;
    font-weight: 300;
}
.nav-flex-row li a:hover{
    background: #E7E7E7;
}
form-group {
	margin-bottom: 0px;
	height: 40px;
	line-height:30px;
	margin-bottom:0;
	font-size: 13px;
	font-weight:500;
	padding: 2px 10px;	
}

</style>
</head>
<body>
<nav style="height: 100vh;">
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
<div id="di"><h1 style="border-top:20px">Admissions Open <br>2023-2024<br>Chennai<br></h1></div>

<div id="wapper"><br><br><br><br><br><br><br><br><br><br>
<fieldset ><legend><h3>REGISTER</h3></legend>
<form method="POST" action="apprev.php" style="color:black">
<label>Name of the Candidate</label><br>
<div class="input-box">
<input type="text" name="name" placeholder="name" required>
</div>
<br><label>Mobile Number</label><br>
<div class="input-box">
<input type="tel" name="mnumber" placeholder="number"  pattern="[0-9]{10}" title="only 10 numbers" requried>
</div>
<br><label>nativity</label><br>
<div class="input-box">
<select class="form-group" name="nativity">
<option value="">--select--</option>
<option value="cuddlore">cuddlore</option>
<option value="chennai">chennai</option>
<option value="madurai">madurai</option>
<option value="trichy">trichy</option>
<option value="salam">salam</option>
<option value="other">other</option>
</select>
</div>
<br><label>Email</label><br>
<div class="input-box">
<input type="email" name="email" placeholder="email" requried>
</div>
<br><label>DOB</label><br>
<div class="input-box">
<input type="date" name="birth" placeholder="birth" requried>
</div>
<br><label>community[no need select community so select option is given in bellow]</label><br>
<div class="input-box">
<select name="community">
<option value="">--select--</option>
<option value="MEN">male</option>
<option value="WOMEN">female</option>
</select>
</div>
<br><label>Choice your class</label><br>
<div class="input-box">
<select name="std">
<option value="">--select--</option>
<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5th</option>
<option value="6">6th</option>
<option value="7">7th</option>
<option value="8">8th</option>
<option value="9">9th</option>
<option value="10">10th</option>
<option value="11">11th</option>
<option value="12">12th</option>
</select>
</div>
<br>
<div class="input-box button">
<input type="submit" value="Login" placeholder="Login" style="color:red" ><input type="reset" style="color:green" ></div>
</p></form>
</fieldset>
</div>
</body>
</html>