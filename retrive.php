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
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/school_tech.php" style="text-decoration:none">teachers</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/screv.php" style="text-decoration:none">students</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/complaint.php" style="text-decoration:none">complaint</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/contact.php" style="text-decoration:none">contact</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/profile.php" style="text-decoration:none"><button style="background-color:yellow;">View Profile</button></a></div></li>
</ul>
</div>
</div>
</nav>
</header>
<div id="wapper" style="height: 20vh;"><br>
<?php
session_start();
$id=$_SESSION['id'];

include('database.php');
$sql="select id,tamil,english,maths,science,social,result from mark where id=$id ";
if($row=$result=$con->query($sql))
{
	//echo "<pre>";
//print_r($result);
if($result->num_rows)
{
	while($row=$result->fetch_object())
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
		<h2>Anual Exam Mark!</h2>
		<h2>Mark Sheet !</h2>
		<table>
	   <tr>
		<th>
		Roll No
		</th>
		<th>
		tamil
		</th>
		<th>
		english
		</th>
		<th>
		maths
		</th>
		<th>
		science
		</th>
		<th>
		social
		</th>
		<th>
		result
		</th>
		</tr>";
		echo "<tr><td>",$row->id,"</td>";
		 echo "<td>",$row->tamil,"</td>";
		echo "<td>",$row->english,"</td>";
		echo "<td>",$row->maths,"</td>";
		echo "<td>",$row->science,"</td>";
		echo "<td>",$row->social,"</td>";
		echo "<td>",$row->result,"</td>";
		echo "</table>   
		</body>
		</html> ";
		
	}
}
else
	{
	 echo"<h2>please ask your teacher to enter a mark</h2>";
	}
}
?>
</div>
<button onclick="window.print()" style="background-color:yellow;">Print</button>
	</body>
	</html>