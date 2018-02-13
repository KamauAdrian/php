<?php
session_start();

if (!isset($_SESSION['uname'])) {
	header("location:index.php");
}

  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>logout</title>
    <script type="text/javascript">
      
    </script>
  </head>
  <body>

  	 <?Php
// remove all session variables
session_unset(); 
echo '<script type="text/javascript">
  document.write("sure to exit");
</script>';


// destroy the session 
session_destroy(); 


header("location:index.php")
?>

  
  </body>
  </html>

