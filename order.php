<?php
include('config.php');
if(!isset($_SESSION['email']))
{
header('location:index.php');
}	
?>
<!DOCTYPE html>
<html class="" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="sh.css">
<title>order coffee</title>

<style>
#if{
	text-align:right;
	width:100px;
	heigth:100px;
	background-color:yellow;
	position:relative;
	animation:exp 60s infinite;
#if{animation-timing-function:ease-in;}
}
@keyframes exp{
	from{left:0px;}
	to{left:1200px;}
}
.column {
  border-radius: 6px;
  box-sizing: border-box;
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
	 box-sizing: border-box;
  content: "";
  display: table;
  clear: both;
 
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Style the counter cards */
.card {
	box-shadow: 0 4px 10px 0 rgba(41,128,185,0.07);
	margin-bottom: 60px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head> 
<nav>
  <div class="container"> 
  <div class="navbar-header">
<body>
<header>
<ul class="nav-flex-row">
<li class="nav-item" style="color:orange;">
<div style="border-color:white"><a href="http://localhost/coffee/home.php" style="text-decoration:none" >home</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/coffee/order.php" style="text-decoration:none">order coffee</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/coffee/buy.php" style="text-decoration:none">buy product</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/coffee/contact.php" style="text-decoration:none">contact</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/coffee/logout.php" style="text-decoration:none">logout</a></div></li>
</ul>
</nav>
<section class="section-intro">
</header>
<div class="" style="max-width:100%">	
<img class="mySlides" src="./4.png" style="width:100%"> 
</div>
<br>
<br>
        </header>
    </section>
 <section>
    <div class="row">
       
       <div class="column">
           <div  class="card">           
                 <img src="assets/img/1.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">ESPRESSO</h4>
                  <p class="text-center"><a href="cart.php?id=1"><button>500</button></a></p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/2.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">DOPPIO</h4>
                  <p class="text-center"><a href="cart.php?id=2"><button>1000</button></a></p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/3.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">CORTADO</h4>
                  <p class="text-center"><a href="cart.php?id=3"><button>500</button></a></p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/4.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">RED EYE</h4>
                  <p class="text-center"><a href="cart.php?id=4"><button>1000</button></a></p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/5.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">AMERICANO</h4>
                  <p class="text-center"><a href="cart.php?id=5"><button>2000</button></a></p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/6.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">GALAO</h4>
                  <p class="text-center"><a href="cart.php?id=6"><button>1500</button></a></p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/8.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">LUNGO</h4>
                  <p class="text-center"><a href="cart.php?id=7"><button>1809</button></a></p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/16.pNg" height="180px" width="250px"></a> 
                  <h4 class="text-center">MACCHIATO</h4>
                  <p class="text-center"><a href="cart.php?id=8"><button>1400</button></a></p>
           </div>
             
     </div>
    </div>
</section>

<div class="carousel-item active"> 
<div class="carousel-item">
               
            </div>	  
            </div>
</body>
 
</html>