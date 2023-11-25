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
background-color:orange;	 
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
th,td,table{ 
		 border:1px solid black;
		 border-width:2px;
		 padding:10px;
		 color:white;
	 }
</style>
</head>
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
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/complaint.php" style="text-decoration:none">complaint</a></div></li>
</ul>
</nav>
</header>
<div id="wapper" style="height: 20vh;"><br>
<?php
include('database.php');
$sql="select * from comp";
$result=mysqli_query($con,$sql);
if ($result) 
{
  ?>                
            <body>
            <table border='3' style="color:white;">
             
                <tr>
                  <th>ROLL NO<br><i class=ti-credit-card></th>
                  <th>NAME</th>
                  <th>complaint</th>
				  <th>time</th>
				  <th>action</th>
                  
                </tr>
            
              
                <?php
                $i=1;
                while($row = $result->fetch_assoc()) {
                  ?>
                <tr>
                  <td><?php echo $row["no"];?></td>
                  <td><?php echo $row["name"];?> </td>
                  <td> <?php echo $row["comp"];?> </td>    
                  <td> <?php echo $row["time"];?> </td> 	
                   <td><a href="replay.php?id=<?php echo $row['id'];?>"><button>replay</button></a></td>				  
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
?>
</div>

	</body>
	</html>