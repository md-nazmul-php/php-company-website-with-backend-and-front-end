<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['update_package'])){
	$id=$_POST['package_id'];
	$title=$_POST['package_title'];
	$price=$_POST['package_price'];
	$type=$_POST['package_type'];
	$description=$_POST['package_description'];
	$url=$_POST['package_url'];

	$query="update all_package set package_title='$title', package_price='$price', package_type='$type', package_description='$description', package_url='$url' where package_id='$id'";
	$result=$conn->query($query);
	if($result){
		// session to show success message, if edited successfully
		$_SESSION['package_action']="<h4 class='alert alert-success'>The Package Updated Successfully!</h4>";
		header('location: ../all-package.php');
	}else{
		// session to show error message, if can not edit
		$_SESSION['package_action']="<h4 class='alert alert-success'>Have Problem to Update Package</h4>";
		header('location: ../all-package.php');
	}
	}
 ?>