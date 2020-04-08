<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['add_slide'])){
	// for geting total number of Slider
	$query="select * from home_slide";
	$result1=$conn->query($query);
	$TotalSlider=mysqli_num_rows($result1);
	// $id=$_POST['slide_id'];
	$title=$_POST['slide_title'];
	$description=$_POST['slide_description'];
	$url=$_POST['read_more'];
	if($TotalSlider<5){
		$query="insert into home_slide (`id`,`slide_title`,`slide_description`,`read_more`) values ('','$title','$description','$url')";
		$result=$conn->query($query);
		if($result){
			// session to show success message
			$_SESSION['slider_action']="<h4 class='alert alert-success'>New Slider Added Successfully!</h4>";
			header('location: ../all-slider.php');
		}else{
			// session to show error message
			$_SESSION['add_slide']="<h4 class='alert alert-success'>Have Problem to add new Slider</h4>";
			header('location: ../add-slider.php');
		}
	}else{
		// session to show error message
			$_SESSION['add_slide']="<h4 class='alert alert-danger'>You can't Add more than 5 Slider</h4>";
			header('location: ../add-slider.php');
		}
	}
 ?>