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
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

  width:200px;
  margin: auto;
  background-color:white;
  text-align: center;
  font-family: arial;
}
</style>
</head>
<body>

<nav style="height: 80vh;">
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
<br>
</header>
<div class="card" id="wapper" style="height:50vh;">
<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
include('database.php');
$sql="select * from mstd where name='$name' ";

if($row=$result=$con->query($sql))
{
	//echo "<pre>";
//print_r($result);
if($result->num_rows)
{
	
	if($row=$result->fetch_object())
	{
	 echo" <html>
	 <head>
	 <style>
	 body{
		
         align-items: center;
		 justify-content: center;
         background-color:#008fff;
	 }
	 h1{
		 color:pink;
	     align-items: center;
	     justify-content: center;
	}
	 th,td,table{ 
		 border:1px solid black;
		 border-width:2px;
		 padding:10px;
		 color:white;
	 }
	 
	 </style>
	 </head>
		<body>
		<br>
		<br>		
		<h2>PROFILE</h2>";
		echo "<h3>roll no:",$id,"</h3>";
		echo "<h3>name : " ,$row->name,"</h3>";
		echo" <h3>father : ",$row->father,"</h3>";
		echo "<h3>phone : ",$row->phone,"</h3>"; 
		echo "<h3>address : ",$row->address,"</h3>"; 
		echo"</body></html>";
	
	}
}
else
	{
	
	 echo"<h2>please" ;
	}
}
?>
</div>

	</body>
	</html>