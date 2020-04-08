<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['add_service'])){
	// for geting total number of Service
	$query="select * from all_service";
	$result1=$conn->query($query);
	$All=mysqli_num_rows($result1);
	// $id=$_POST['slide_id'];
	$title=$_POST['service_title'];
	$description=$_POST['service_description'];
	$url=$_POST['service_url'];
	if($All<6){
		$query="insert into all_service (`service_id`,`service_title`,`service_description`,`service_url`) values ('','$title','$description','$url')";
		$result=$conn->query($query);
		if($result){
			// session to show success message
			$_SESSION['service_action']="<h4 class='alert alert-success'>New Service Added Successfully!</h4>";
			header('location: ../all-service.php');
		}else{
			// session to show error message
			$_SESSION['service_action']="<h4 class='alert alert-success'>Have Problem to add new Service</h4>";
			header('location: ../add-service.php');
		}
	}else{
		$_SESSION['service_action']="<h5 class='alert alert-danger px-3'>Can't add more than 6 Service, already added 6</h5>";
			header('location: ../add-service.php');
	}
}
 ?>