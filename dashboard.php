<?php

session_start();
if (!isset($_SESSION['uname']) && !isset($_SESSION['upass'])) {
 header('location:index.php') ;
}

?><!DOCTYPE html>
<html>
<head>
	<title>Home</title>
 
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>



<div class="container-fluid navbar-fixed-top">
  <div class="row">
    <div class="col-md-12">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">DESTINY STORES</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#home">Home</a></li>
        <li ><a href="#imgs">Gallery</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Contacts <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#email">Email</a></li>
              <li><a href="#google">Google</a></li>
              <li><a href="#twitter">Twitter</a></li>
            </ul>
        </li> 
        <li><a href="#about">About Us</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
    </div>
  </div>
</div>
<div class="" id="home">
  <center>
      <h1>Welcome to Destiny Stores</h1>
  </center>
  <marquee>
    <img src="images/1-22.jpg" height="100px" width="100px">
  </marquee>
<hr />
  <center>
  <h2>We Offer the best</h2>
  <hr />
  <p><marquee> Join us today </marquee>
  </center>



  <p><img src="images/1-22.jpg" height="200px" width="250px">
</div>

<div id="imgs">
  <center>
<h1> This are some of our products </h1>
</center>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


<p> COMPUTERS <br /><br />
<table border="2" width="70%" id="grad" class="adi">

<tr>
  <th></th><th>Type</th><th>Price [ksh]</th><th>Contact help</th>

</tr>

<tr>
<td><img src="images/1-1.jpg" height="50px" width="50px"></td><td>Hp</td><td>65000</td><td>0789876524</td>
</tr>
<tr>
<td><img src="images/1-2.jpg" height="50px" width="50px"></td><td>Dell</td><td>70000</td><td>0789876532</td>
</tr>
</table></p>



<p>MOBILE PHONES <br /><br />

<table border="2" width="70%" class="adi" id="grad">
<th></th><th>Type</th><th>Price [ksh]</th><th>Contact Help</th>


<tr>
<td><img src="images/1-10.jpg" height="50px" width="50px"></td><td>Samsung</td><td>12000</td><td>0786543278</td>
</tr>

<tr>
<td><img src="images/1-11.jpg" height="50px" width="50px"></td><td>Techno</td><td>8500</td><td>0786542390</td>
</tr>

<tr>
<td><img src="images/1-12.jpg" height="50px" width="50px"></td><td>Nokia</td><td>5500</td><td>0712345601</td>
</tr>
  
  <tr>
  <td><img src="images/1-13.jpg" height="50px" width="50px"></td><td>Huawei</td><td>7999</td><td>0789665509</td>
  </tr>

  <tr>
  <td><img src="images/1-14.jpg" height="50px" width="50px"></td><td>Infinix</td><td>9999</td><td>0789665532</td> 
  </tr>

</table></p>



<p>HEADPHONES & EARPHONES <br /><br />

<table border="2" width="70%" class="adi" id="grad">

<tr>
<th></th><th>Price [ksh]</th><th>Contact Help</th>
</tr>

<tr>
<td><img src="images/1-24.jpg" height="50px" width="50px"></td><td>500</td><td>0789876424</td>  
</tr>

<tr>
<td><img src="images/1-25.jpg" height="50px" width="50px"></td> <td>756</td><td>0786542098</td>
</tr>

<tr>
<td><img src="images/1-26.jpg" height="50px" width="50px"></td> <td>490</td><td>0786547684</td>
</tr>

</table></p><br /><br />
</div>

<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/fliplightbox.min.js"></script>
<script src="js/functions.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
</body>
</html>