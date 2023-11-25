<html>
<body>
<h1>display</h1>
<?php
include('database.php');
$sql="select * from dada";
$result=mysqli_query($con,$sql);

echo"<table border=1;>
    <tr><th>name</th>
	<th>password</th></tr>";
	while($row=mysqli_fetch_assoc($result))
	{
     echo"<tr><td>".$row['name']."</td>";
     echo"<td>".$row['password']."</td></tr>";
     echo"</table>";
	}
	?>
	
	</body>
	</html>
