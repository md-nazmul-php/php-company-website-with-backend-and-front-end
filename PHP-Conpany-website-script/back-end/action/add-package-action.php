<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['add_package'])){
	// for geting total number of Slider
	$query="select * from all_package";
	$result1=$conn->query($query);
	$TotalPackage=mysqli_num_rows($result1);

	$title=$_POST['package_title'];
	$price=$_POST['package_price'];
	$type=$_POST['package_type'];
	$description=$_POST['package_description'];
	$url=$_POST['package_url'];
	if($TotalPackage<4){
		$query="insert into all_package (`package_id`,`package_title`,`package_price`,`package_type`,`package_description`,`package_url`) values ('','$title','$price','$type','$description','$url')";
		$result=$conn->query($query);
		if($result){
			// session to show success message
			$_SESSION['package_action']="<h4 class='alert alert-success'>New Package Added Successfully!</h4>";
			header('location: ../all-package.php');
		}else{
			// session to show error message
			$_SESSION['add_package']="<h4 class='alert alert-success'>Have Problem to add new Package</h4>";
			header('location: ../add-package.php');
		}
	}else{
		// session to show error message
			$_SESSION['add_package']="<h4 class='alert alert-danger'>You can't Add more than 4 Package</h4>";
			header('location: ../add-package.php');
		}
	}
 ?>