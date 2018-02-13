<!DOCTYPE html>
<html>
<head>
	<title>LOG-IN</title>
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/animate.css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/fliplightbox.min.js"></script>
<script src="js/functions.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>log-in</legend>
			<input type="text" name="user" class="form-control" placeholder="User Name"><br><br>
			<input type="password" name="pass" class="form-control" placeholder="Password"><br><br>
			<input type="submit" name="log" class="form-control btn btn-info" value="LOG-IN"><br><br>
			<input type="submit" name="forgot" class="form-control btn btn-info" value="FORGOT PASSWORD"><br><br>
			<input type="submit" name="create" class="form-control btn btn-info" value="CREATE ACCOUNT">
		</fieldset>
	</form>

</body>
</html>
<?php

if (isset($_POST['log'])) {
	$user_name=$_POST['user'];
	$password=$_POST['pass'];
	

	$password=sha1($password);

include("dbcon.php");

$query="SELECT User_name, Phone_number, Password_hash FROM 6202users WHERE User_name or Phone_number='$user_name' AND Password_hash='$password'";
$kub=mysqli_query($conn,$query);

$rows=mysqli_num_rows($kub);

if($rows<1){


	echo  '<div class="alert alert-success fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>INvali Username and or Password!</strong>
</div>';


}
else{
session_start();
$_SESSION['uname']=$user_name;
$_SESSION['upass']=$password;


	header("location:dashboard.php");

	
}

}

if (isset($_POST['forgot'])) {
	header('location:forgot.php');
}

if (isset($_POST['create'])) {
	header('location:register.php');
}


?>