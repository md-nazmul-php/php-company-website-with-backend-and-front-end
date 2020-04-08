<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: login.php');
	}

	if(isset($_POST['sign-out'])){
		unset($_SESSION['username']);
		header('location: login.php');
	}
 ?>