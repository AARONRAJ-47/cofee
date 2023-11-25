<!doctype html>
<html>
<head><title>Student Login</title></head>
<link rel="stylesheet" href="sh.css">
<style>
body{
display: flex;
align-items: center; 
height:50vh;
justify-content: center; 
font-family: cursive; 
background-color:#008fff;
}
label{
	color:black
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

</style>
<body>
<nav style="height: 50vh;">
<ul class="nav-flex-row">
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/home.php" style="text-decoration:none">home</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/about.php" style="text-decoration:none">About</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/school_tech.php" style="text-decoration:none">teachers</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/screv.php" style="text-decoration:none">students</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/contact.php" style="text-decoration:none">contact</a></div></li>
</ul>
</nav>

            <div class="login" style="height:10vh">
              <form method="POST" action="slog.php">
              
                  <fieldset><legend><h2>Student Login here</h2></legend>
                <h3><label>Name</label></h3>				  
				<div class="input-box">
                  <input id="inputUsername" name="name" type="text" placeholder="Name" maxlength="10" class="form-control">
                </div>
				<h3><label>email</label></h3>				
                <div class="input-box">
                  <input type="text" name="email" class="form-control" placeholder="Password" id="inputPassword">
                </div><br>
				<div class="input-box button">
                <input type="submit" value="Login" placeholder="Login">
                </p></form>
               </fieldset>
</div>  
</body>
</html>