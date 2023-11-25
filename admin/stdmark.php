<!doctype html>
<html>
<head><title>std mark</title></head>
<link rel="stylesheet" href="sh.css">
<style>
body { 
 display: flex;
align-items: center; 
justify-content: center; 
font-family: cursive; 
background-color:orange;
}
 fieldset{
height:50%;
width:80%;
}
label{
	color:black
}
input, textarea {
 background-color:pink;
  color: #333;
  height: 50%;
  width: 50%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
  font-family: cursive; 
} 
input[type="submit"] { 
transform: translate(2.2%); 
padding: 3px; 
margin-top: 0.6rem; 
font-family: cursive; 
font-weight: bold; 
} 
th,td,table{ 
		 border:1px solid black;
		 border-width:2px;
		 padding:10px;
		 color:white;
	 }
</style>
<body>
<nav style="height: 80vh;">
<ul class="nav-flex-row">
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/app_list.php" style="text-decoration:none">std application</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/stdmark.php" style="text-decoration:none">std mark</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/selected.php" style="text-decoration:none">student view</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/complaint.php" style="text-decoration:none">complaint</a></div></li></ul>
</nav>

   <?php
include('database.php');

$sql = "SELECT * FROM mark";
$result = $con-> query($sql);

if ($result->num_rows > 0) {
  ?>
            <table border='1' style="color:white;">
              
                <tr>
                  <th>ROLL NO<br><i class=ti-credit-card></th>             		
		<th>TAMIL</th><br>
		<th>ENGLISH</th><br>
                <th>MATHS</th><br>
		<th>SCIENCE</th><br>
                <th>SOCIAL</th><br>
                <th>RESULT</th>
                <th>ACTION</th>
                </tr>
          
                <?php
               // $i=1;
                while($row = $result->fetch_assoc()) {
                  ?>
                <tr>
                  <td><?php echo $row["id"];?></td>
                  
                  <td> <?php echo $row["tamil"];?> </td>
                   <td> <?php echo $row["english"];?> </td>
                   <td> <?php echo $row["maths"];?> </td>
                  <td> <?php echo $row["science"];?> </td>
                   <td> <?php echo $row["social"];?> </td>
                   <td> <?php echo $row["result"];?> </td>
                    <td><a href="update.php?id=<?php echo $row["id"];?>" style="text-decoration:none;"><button>update</button></a></td>
                </tr>
                <?php
                //$i++;
                  }
                  ?>
             
            </table>
            <?php
}

 else {
    echo "0 results";
}

$con->close();
?>

</body>
</html>