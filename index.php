<!DOCTYPE html>
<html>
<head>
  <title>index</title>
  <link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">



<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container-fluid">
    <center>
      <h1 class="first">WELCOME TO DESTINY STORES</h1>
    </center>
  </div>

<div class="col-xs-12 col-md-6">
        
        <div class="second col-xs-9 col-md-6">
          <img src="images/dest.jpg" class="img-responsive" max-width="100%">
        </div>


        <div class="second col-xs-3 col-md-6">
        
        <p>Welcome Please Create <br />
         an account to proceed or <br />
        log in if already registered</p>
        </div>

</div>


<div class="col-xs-12 col-md-6">
  
    <div class="creat">
      <h1 title="Create your account to access the page">
        create your account
      </h1>
    </div>
    <form method="post">
      <div>
  <input type="text" name="Usr" id="regname" class="orther form-control"  placeholder="User Name"><br /><br />
  <input type="password" name="Pash" id="regname" class="orther form-control"  placeholder="Create Password"><br /><br />
  <input type="password" name="Pasash" id="regname" class="orther form-control"  placeholder="Confirm Password"><br /><br />
  <input type="text" name="Phber" id="regname" class="orther form-control"  placeholder="Phone Number"><br /><br />
  <input type="reset" name="res" class="resub  btn btn-info"  value="RESET">
  <input type="submit" name="reg" class="resub  btn btn-info"  value="REGISTER"><br /><br />
  
    <button type="button" class="logreg btn btn-primary form-control" data-toggle="modal" data-target="#PopUpWindow">
    REGISTERED CLICK HERE TO LOG IN
    </button>
    <div class="modal fade in" id="PopUpWindow">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- header -->
          <div class="modal-header">
            <h3 class="modal-tittle">Log In</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
      <!-- body (form) -->
      <div class="modal-body">
        <form role="form" method="post" action="dashboard.php">
         


          <div class="form-group">
            <input type="text" name="user" id="logname" class="form-control"  placeholder="User name or Phone">
          </div>



          <div class="form-group">
            <input type="password" name="pass" id="logname" class="form-control" placeholder="Password">
          </div>

        </form>
      </div>

      <!-- footer -->
      <div class="modal-footer">
        <input type="submit" name="login" value="Log In" class="btn btn-primary form-control">
      </div>
      <div class="modal-footer">
        <input type="submit" name="forgot" value="Forgot Password" class="btn btn-primary form-control">
      </div>

        </div>
      </div>
    </div>
      </div>
    </form>
  </div>


<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>

<script src="js/jquery.easing.min.js"></script>
<script src="js/fliplightbox.min.js"></script>


</body>
</html>
<?php 
if (isset($_POST['login'])) {
  $user_name=$_POST['user'];
  $password=$_POST['pass'];
  


  $password=sha1($password);

include("dbcon.php");

$query="SELECT User_name, Phone_number AND  Password_hash FROM 6202users WHERE User_name='$user_name' or Phone_number='$user_name' AND Password_hash='$password'";
$kub=mysqli_query($conn,$query);


$rows=mysqli_num_rows($kub);
var_dump(print_r($rows));
if($rows<1){


  echo  '<div class="alert alert-warning fade in" style="position:fixed-top">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Invalid Username and or Password!</strong>
</div>';


}
else{
session_start();
$_SESSION['uname']=$user_name;
$_SESSION['upass']=$password;


  header('location:dashboard.php');

  
}

}
?>
<?php
if (isset($_POST['forgot'])) {
  header('location:forgot.php');
}
?>

<?php

if (isset($_POST['reg'])) {
  $uname=$_POST['Usr'];
  $pass1=$_POST['Pash'];
  $pass2=$_POST['Pasash'];
  $uphn=$_POST['Phber'];
if ($pass1==$pass2) {
  $fpass=sha1($pass1);
  include 'dbcon.php';
  if ((!$uname) && (!$uphn)) {
    include 'dbcon.php';
    echo "Please Fill out your details";
    header('location:register.php');
  }else{
      $query="INSERT INTO 6202users VALUES('','$uname','$fpass','$uphn')";
    mysqli_query($conn,$query);
    echo "Registered Succesfully";
    header('location:dashboard.php');
  }
  
  

  
}


  
}

?>