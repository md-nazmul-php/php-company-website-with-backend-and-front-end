<?php 
session_start();
include '../../global/db.php';

	if(isset($_POST['title-save'])){
		$site_title=$_POST['site-title'];

		$query="update site_title set title='$site_title' where id='1'";
		$result=$conn->query($query);
		if($result){
			// session to show success message
			$_SESSION['slider_action']='<h4 class="alert alert-success">Title has been updated</h4>';
			header('location: ../site-title.php');
		}else{
			// session to show error message
			$_SESSION['update_message']='<h4 class="alert alert-success">Have problem to save change</h4>';
			header('location: ../site-title.php');
		}
	}
 ?>