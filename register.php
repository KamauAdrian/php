<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
	
		<div class="container">
	<input type="text" name="Usr" class="form-control" placeholder="User Name"><br><br>
	<input type="password" name="Pash" class="form-control"  placeholder="Create Password"><br><br>
	<input type="password" name="Pasash" class="form-control"  placeholder="Confirm Password"><br><br>
	<input type="text" name="Phber" class="form-control"  placeholder="Phone Number"><br><br>
	<input type="reset" name="res" class="form-control btn btn-info"  value="RESET"><br><br>
	<input type="submit" name="reg" class="form-control btn btn-info"  value="REGISTER"><br><br>
	
		<button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#PopUpWindow">
		Registered Click to log in
		</button>
		<div class="modal fade" id="PopUpWindow">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- header -->
					<div class="modal-header">
						<h3 class="modal-tittle">Log In</h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
			<!-- body (form) -->
			<div class="modal-body">
				<form role="form" method="post">
					<div class="form-group">
					<input type="text" name="user" class="form-control"  placeholder="Student name">
					</div>

					<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="Password">
					</div>
				</form>
			</div>

			<!-- footer -->
			<div class="modal-footer">
				<input type="submit" name="login" value="Log In" class="btn btn-primary form-control">
			</div>

				</div>
			</div>
		</div>
	</div>
</form>	
</body>
</html><?php 
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

if (isset($_POST['login'])) {
	$user_name=$_POST['user'];
	$password=$_POST['pass'];
	

	$password=sha1($password);

include("dbcon.php");

$query="SELECT User_name, Password_hash FROM 6202users WHERE User_name='$user_name' AND Password_hash='$password'";
$kub=mysqli_query($conn,$query);

$rows=mysqli_num_rows($kub);

if($rows<1){


	echo  " <center>Invalid User name or Password</center>";


}
else{
session_start();
$_SESSION['uname']=$user_name;
$_SESSION['upass']=$password;


	header("location:dashboard.php");

	
}

}


 ?>