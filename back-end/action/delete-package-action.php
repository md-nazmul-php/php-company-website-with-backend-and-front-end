<?php 
session_start();
  include '../../global/db.php';
//delete slider from database 
	if(isset($_POST['delete'])){
	$Delete_id=$_POST['package_id'];
	$Delete_query="delete from all_package where package_id='$Delete_id'";
	$Delete_result=$conn->query($Delete_query);
	if($Delete_result){
		$_SESSION['package_action']="<h5 class='alert alert-success'>The Package Deleted Successfully!</h5>";
		header('location: ../all-package.php');
	}else{
		$_SESSION['delete_error']="<h5 class='alert alert-danger'>There have a problem to delete this Package</h5>";
		header('location: ../delete-package.php?package-id='.$Delete_id);
	}
}
 ?>