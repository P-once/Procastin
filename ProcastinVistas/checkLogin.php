<?php 
  session_start();
  
	// If the session variable is empty, this
	// means the user is yet to login
	// User will be sent to 'login.php' page
	// to allow the user to login
	if (!isset($_SESSION['username'])) {
			$_SESSION['msg'] = "You have to log in first";
			header('location: login.php');
	}


	// Logout button will destroy the session, and
	// will unset the session variables
	// User will be headed to 'login.php'
	// after logging out
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?> 