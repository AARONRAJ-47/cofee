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
<title>buy product</title>

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
<img class="mySlides" src="./3.png" style="width:100%"> 
</div>
<br>
<br>
        </header>
    </section>
 <section>
    <div class="row">
       
       <div class="column">
           <div  class="card">           
                 <img src="assets/img/4.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">ARABIC BEANS</h4>
                  <p class="text-center"><a href="cart.php?id=9"><button>5000</button></a></p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/7.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">ROBUSTA</h4>
                  <p class="text-center"><a href="cart.php?id=10"><button>2000</button></a></p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/9.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">LIBERICA</h4>
                  <p class="text-center"><a href="cart.php?id=11"><button>1600</button></a></p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/11.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">EXCELSA</h4>
                  <p class="text-center"><a href="cart.php?id=12"><button>1200</button></a></p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/12.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">ATTIKAN ESTATE</h4>
                  <p class="text-center"><a href="cart.php?id=13"><button>2000</button></a></p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/13.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">COUNTRY BEAN</h4>
                  <p class="text-center"><a href="cart.php?id=14"><button>1400</button></a></p>
           </div>
             
     </div>
	 <div class="column">
           <div  class="card">           
                 <img src="assets/img/14.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">RANGE COFFEE</h4>
                  <p class="text-center"><a href="cart.php?id=15"><button>3000</button></a></p>
           </div>
             
     </div>
	<div class="column">
           <div  class="card">           
                 <img src="assets/img/15.png" height="180px" width="250px"></a> 
                  <h4 class="text-center">BEVZILLA INSTANT COFFEE</h4>
                  <p class="text-center"><a href="cart.php?id=16"><button>6000</button></a></p>
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