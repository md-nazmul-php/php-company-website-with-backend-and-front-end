<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['update_service'])){
	$id=$_POST['service_id'];
	$title=$_POST['service_title'];
	$description=$_POST['service_description'];
	$url=$_POST['service_url'];
	$query="update all_service set service_title='$title', service_description='$description', service_url='$url' where service_id='$id'";
	$result=$conn->query($query);
	if($result){
		// session to show success message, if edited successfully
		$_SESSION['service_action']="<h4 class='alert alert-success'>The Service Updated Successfully!</h4>";
		header('location: ../all-service.php');
	}else{
		// session to show error message, if can not edit
		$_SESSION['service_action']="<h4 class='alert alert-success'>Have Problem to Update Service</h4>";
		header('location: ../all-service.php');
	}
}
 ?>