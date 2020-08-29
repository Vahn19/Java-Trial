<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
	body {
	  margin: 0;
	  font-family: Arial, Helvetica, sans-serif;
	  background-color: #E1AF37;
	}

	.topnav {
	  overflow: hidden;
	  background-color: #333;
	}

	.topnav a {
	  float: left;
	  display: block;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}

	.topnav a.active {
	  background-color: #FFC024;
	  color: white;
	}

	.topnav .icon {
	  display: none;
	}

	@media screen and (max-width: 600px) {
	  .topnav a:not(:first-child) {display: none;}
	  .topnav a.icon {
		float: right;
		display: block;
	  }
	}

	@media screen and (max-width: 600px) {
	  .topnav.responsive {position: relative;}
	  .topnav.responsive .icon {
		position: absolute;
		right: 0;
		top: 0;
	  }
	  .topnav.responsive a {
		float: none;
		display: block;
		text-align: left;
	  }
	}
	
	.topnav .kanan{
		float: right;
	}
	
	.topnav a.profile {
	  background-color: #FD5F50;
	  color: white;
	}
	
	.bg{
		width:100%;height:100%;z-index:-1;position:fixed;
	}
	
	.wrapper{
		width: 1000px;
		padding: 20px;
		margin: auto;
		background-color: #FFC024;
		color: white;
	}
</style>
</head>
<body>
<img src="main.jpg" class="bg">
	<div class="topnav" id="myTopnav">
	  <a href="#home" class="active">Home</a>
	  <a href="ControlPanel.php">Control Panel</a>
	  <a href="NetResolve.php">Check Network</a>
	  <a href="ReadFileInput.php">Read File</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	  </a>
	  <div class="kanan">
		<a class="profile"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
		<a href="reset-password.php">Reset Password</a>
		<a href="logout.php" >Log Out</a>
	  </div>
	</div>
	
	<div class="wrapper page-header">
        <h1>Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, please choose commands from navbar</h1>
    </div>
	
	<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
	</script>
</body>
</html>