<?php
    session_start();
    session_unset();
    session_destroy();
 if (session_status() == PHP_SESSION_ACTIVE) { session_destroy(); }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="scmstore.css" crossorigin="anonymous"/> 
</head>
<body>
 <p>You have been logged out. <a href="index.php">Login again.</a></p>
</body>
</html>
