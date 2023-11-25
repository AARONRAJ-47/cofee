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
		<h2>UPDATE MARK !</h2>
		<table>
	   <tr>
	        <th>ID</th>
		<th>ROLL NUMBER</th>
		<th>TAMIL</th>
		<th>ENGLISH</th>
                <th>MATHS</th>
		<th>SCIENCE</th>
                <th>SOCIAL</th>
		</tr>";
		echo "<tr><td>",$row->no,"</td>";
		 echo "<td>",$row->tamil,"</td>";
		echo "<td>",$row->english,"</td>";
		echo "<td>",$row->maths,"</td>";
                echo "<td>",$row->science,"</td>";
		echo "<td>",$row->social,"</td>"; 
		echo "</table>   
		
		</body>
		</html> ";
		
	}