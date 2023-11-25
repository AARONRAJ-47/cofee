<?php
include('database.php');
$no=$_POST['no'];
$sql="select no,tamil,english,maths,science,social from mark where no=$no";

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
		 min-height: 100vh;
         align-items: center;
		 justify-content: center;
         background-color:#c14242;
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
		<h1>Anual Exam Mark!</h1>
		<h1>Mark Sheet !</h1>
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
		</tr>";
		echo "<tr><td>",$row->no,"</td>";
		 echo "<td>",$row->tamil,"</td>";
		echo "<td>",$row->english,"</td>";
		echo "<td>",$row->maths,"</td>";
		echo "<td>",$row->science,"</td>";
		echo "<td>",$row->social,"</td></tr>";
		echo "</table>
		</body>
		</html> ";
		
	}
}
}
?>