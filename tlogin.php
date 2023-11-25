<!doctype html>
<body>
<h1>login</h1>
<form method="POST" action="">
<label>email</label>
<input type="text" name="email" placeholder="email">
<label>password</label>
<input type="text" name="password" placeholder="password">
<input type="submit" name="submit">
</form>
<?php
include('tcon.php');
session_start();
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$sql=mysqli_query($con,"select email,password from register where email='$email' AND password='$password'");
if(mysqli_num_rows($sql)>=1)
{
$_SESSION['email']=$email;
header('location:thome.php');
}
else{
echo"please register";
}
}
?>
</body>
</html>