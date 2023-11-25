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

<nav style="height: 50vh;">
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
<div id="wapper" style="height: 20vh;"><br>
<?php
include('database.php');
$id=$_POST['no'];
$tamil=$_POST['tamil'];
$english=$_POST['english'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$social=$_POST['social'];
$sql="select id from mark where id='$id'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)<1)  
{	
if($tamil>=40&&$english>=40&&$maths>=40&&$science>=40&&$social>=40)
{
	$mark='pass';
}
else{
$mark='fail';
}
$sql="INSERT INTO mark(id,tamil,english,maths,science,social,result)values($id,$tamil,$english,$maths,$science,$social,'$mark')";
if($con->query($sql))
{
	echo" <html>
	 <head>
	 <style>
	 body{
		 height:100vh;
         backgroung-padding:center;
         display: flex;
         align-items: center; 
         justify-content: center; 
         height: 50vh; 
         font-family: cursive; 
		 background-color:#008fff;
	 }
	 h1{
		 color:pink;
	     align-items: center;
	     justify-content: center;
	}
	 </style>
	 </head>
		<body>
		<h2>sucessfully stored......</h2>
		</body>
		</html> ";
}
else
{
 echo "not stored";
	}
	}
	else{
		echo"<h1>already ented</h1>";
		}
	?>
	</div>
	</body>
	</html>