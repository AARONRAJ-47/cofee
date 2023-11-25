<!doctype html>
<body>
<h1>display</h1>
<?php
header('refresh:5');
include('tcon.php');
 $sql="select * from info";
 $r=mysqli_query($con,$sql);
 ?>
 <table border=1>
 <tr><th>name</th>
 <th>age</th>
 <th>native</th>
 <th>action</th>
 <th>delete</th>
 </tr>
 <?php
 $i=1;
 while($row=mysqli_fetch_assoc($r))
 {
 ?>
 <tr><td> <?php echo $row['name'];?></td>
 <td><?php echo $row['age'];?></td>
 <td><?php echo $row['native'];?></td>
 <td><a href="tupdate.php?id=<?php echo $row['id'];?>"><button>update</button></a></td>
 <td><a href="tdelete.php?id=<?php echo $row['id'];?>"><button>delete</button></a></td>
 </tr>
 
 <?php
 $i++;
 }
 ?>
 </table>
 </body>
 </html>
 