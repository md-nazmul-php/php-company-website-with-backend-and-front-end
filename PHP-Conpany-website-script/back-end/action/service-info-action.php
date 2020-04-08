<?php 
session_start();
include '../../global/db.php';

	if(isset($_POST['update_service'])){
		$title=$_POST['title'];
		$description=$_POST['description'];

		$query="update service_info set title='$title', description='$description' where id='1'";
		$result=$conn->query($query);
		if($result){
			// session to show success message
			$_SESSION['service-info']='<h4 class="alert alert-success">Service info has been updated</h4>';
			header('location: ../service-info.php');
		}else{
			// session to show error message
			$_SESSION['service-info']='<h4 class="alert alert-success">Have problem to save change</h4>';
			header('location: ../service-info.php');
		}
	}
 ?>