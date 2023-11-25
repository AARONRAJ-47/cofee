
<!doctype html>
<html>
<head><title>std application</title></head>
<link rel="stylesheet" href="sh.css">
<style>
body { 
 display: flex;
align-items: center; 
justify-content: center; 
font-family: cursive; 
background-color:#008fff;
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

</style>
<body>
<nav style="height: 100vh;">
<ul class="nav-flex-row">
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/Application.php" style="text-decoration:none">Std Application</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/stdmark.php" style="text-decoration:none">std mark</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/app_list.php" style="text-decoration:none">std application list</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/selected.php" style="text-decoration:none">selected list</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/admin/teacher.php" style="text-decoration:none">teachers selection</a> </div></li>
</ul>
</nav>

   <?php
include('database.php');

$sql = "SELECT * FROM students";
$result = $con-> query($sql);
if ($result->num_rows > 0) {
  ?>
            <table class='table table-lg table-hover' id='myTable'>
              <thead>
                <tr>
                  <th>ID<br><i class=ti-credit-card></th>
                  <th>NAME</th>
                  <th>MOBILE NUMBER </th>
                  <th>NATIVE</th>
                  <th>EMAIL</th>
                  <th>BIRTH</th>
                  <th>COMMUNITY</th>
                  <th>STANDARD</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i=1;
                while($row = $result->fetch_assoc()) {
                  ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row["name"];?> </td>
                  <td> <?php echo $row["mnumber"];?> </td>
                  <td> <?php echo $row["native"];?> </td>
                   <td> <?php echo $row["email"];?> </td>
                   <td> <?php echo $row["dob"];?> </td>
                  <td> <?php echo $row["community"];?> </td>
                   <td> <?php echo $row["std"];?> </td>
                </tr>
                <?php
                $i++;
                  }
                  ?>
              </tbody>
            </table>
            <?php
} else {
    echo "0 results";
}

$con->close();
?>



</body>
</html>