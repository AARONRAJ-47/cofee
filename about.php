<?php
include('config.php');

if(!isset($_SESSION['email']))
{
header('location:index.php');
}	
?>
<!doctype html>
<head>
<link rel="stylesheet" href="sh.css">
<style>
     
body{
display: flex;
align-items: center; 
justify-content: center; 
font-family: cursive; 
background-color:#008fff;
	 
}
form .input-box input{
  height: 50%;
  width: 50%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid yellow;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
  font-family: cursive; 
}
</style>
</head>
<body>
<nav style="height:100vh;">
<div class="container"> 
  <div class="navbar-header">
  <header>
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
</header>
</div>
</div>
</nav>
<br>
<br>
<div id="wapper" style="height:50vh;"><br>
<section>
    <div class="row">
       
       <div class="column">
           <div  class="card">           
                 <img src="assets/img/product.jpg" height="180px" width="250px"></a> 
                  <h4 class="text-center">hh</h4>
                  <p class="text-center">lll</p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/product.jpg" height="180px" width="250px"></a> 
                  <h4 class="text-center">hh</h4>
                  <p class="text-center">lll</p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/product.jpg" height="180px" width="250px"></a> 
                  <h4 class="text-center">hh</h4>
                  <p class="text-center">lll</p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/product.jpg" height="180px" width="250px"></a> 
                  <h4 class="text-center">hh</h4>
                  <p class="text-center">lll</p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/product.jpg" height="180px" width="250px"></a> 
                  <h4 class="text-center">hh</h4>
                  <p class="text-center">lll</p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/product.jpg" height="180px" width="250px"></a> 
                  <h4 class="text-center">hh</h4>
                  <p class="text-center">lll</p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/product.jpg" height="180px" width="250px"></a> 
                  <h4 class="text-center">hh</h4>
                  <p class="text-center">lll</p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/product.jpg" height="180px" width="250px"></a> 
                  <h4 class="text-center">hh</h4>
                  <p class="text-center">lll</p>
           </div>
             
     </div>
    </div>
</section>

</div>
	</body>
	</html>