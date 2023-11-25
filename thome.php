<?php
session_start();
header('refresh:11');
if(!isset($_SESSION['email']))
{
	header('location:tlogin.php');
}
$time=10;
if($_SESSION['last_activity']&&(time()-$_SESSION['last_activity']>$time))
{
	session_unset();
	session_destroy();
}
$_SESSION['last_activity']=time();
?>
<!doctype html>
<body>
<h1>welcome</h1>
<a href="tdisplay.php"><button>display</button></a>
</body>
</html>
