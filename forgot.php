<!DOCTYPE html>
<html>
<head>
	<title>Forgot Passwords</title>
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
<form method="post"><fieldset>
	<input type="text" name="User" class="form-control" placeholder="User Name"><br><br>
	<input type="text" name="Phone" class="form-control"  placeholder=" Phone Number"><br><br>
	<input type="password" name="pass1" class="form-control"  placeholder="Create Password"><br><br>
	<input type="password" name="Pass2" class="form-control"  placeholder="Confirm new Password"><br><br>
	<input type="reset" name="" class="form-control btn btn-info"><br><br>

	<input type="submit" name="fog" class="form-control btn btn-info"  value="CHANGE PASSWORD"><br><br>
	

		
</fieldset></form>
</body>
</html>
<?php 
if (isset($_POST['fog'])) {
	$unaim=$_POST['User'];
	$uphne=$_POST['Phone'];
	$p1=$_POST['pass1'];
	$p2=$_POST['Pass2'];


	if ($p1==$p2) {
		include 'dbcon.php';

		$p3=sha1($p1);
		$query="UPDATE 6202users SET Password_hash='$p3' WHERE User_name='$unaim' AND Phone_number='$uphne'";
		mysqli_query($conn,$query);
		echo "Password changed succsesfully";
		header('location:log.php');
	}
}

 ?>