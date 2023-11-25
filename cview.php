
<!doctype html>
<html>
<head><title>replay</title></head>
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
<nav style="height: 100vh;">
<ul class="nav-flex-row">
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/app_list.php" style="text-decoration:none">Std Application</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/stdmark.php" style="text-decoration:none">std mark</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/selected.php" style="text-decoration:none">student view</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/complaint.php" style="text-decoration:none">complaint</a></div></li></ul>
</ul>
</nav>
<center>
<h2>YOUR COMPLAINT AND REPLAY</h2>
   <?php
include('database.php');
session_start();
$id=$_SESSION['id'];
$sql = "SELECT * FROM comp where no=$id";
$result = $con-> query($sql);
if ($result->num_rows > 0) {
  ?>                
            <body>
            <table border='1' style="color:white;">
             
                <tr>
				  <th>no</th>
                  <th>NAME</th>
                  <th>complaint</th>
                  <th>replay</th>                 
                </tr>
                        
                <?php
                $i=1;
                while($row = $result->fetch_assoc()) {
                  ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row["name"];?> </td>                
                  <td> <?php echo $row["comp"];?> </td>
                   <td> <?php echo $row["replay"];?> </td>              				   
                </tr>
                <?php
                $i++;
                  }
                  ?>            
            </table>
			  </body>
            <?php
} else {
    echo "0 results";
}

$con->close();
?>
</center>
</body>
</html>