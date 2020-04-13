<?php 
session_start();
  include '../../global/db.php';
//delete slider from database 
	if(isset($_POST['delete'])){
	$Delete_id=$_POST['service_id'];
	$Delete_query="delete from all_service where service_id='$Delete_id'";
	$Delete_result=$conn->query($Delete_query);
	if($Delete_result){
		$_SESSION['service_action']="<h5 class='alert alert-success'>The Service Deleted Successfully!</h5>";
		header('location: ../all-service.php');
		//echo "<meta http-equiv='refresh' content='0'>";
	}else{
		$_SESSION['delete_error']="<h5 class='alert alert-danger'>There have a problem to delete this Service</h5>";
		header('location: ../delete-service.php?service-id='.$Delete_id);
	}
}
 ?>