<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['update_slide'])){
	$id=$_POST['slide_id'];
	$title=$_POST['slide_title'];
	$description=$_POST['slide_description'];
	$url=$_POST['read_more'];
	$query="update home_slide set slide_title='$title', slide_description='$description', read_more='$url' where id='$id'";
	$result=$conn->query($query);
	if($result){
		// session to show success message, if edited successfully
		$_SESSION['slider_action']="<h4 class='alert alert-success'>The Slider Updated Successfully!</h4>";
		header('location: ../all-slider.php');
	}else{
		// session to show error message, if can not edit
		$_SESSION['slider_action']="<h4 class='alert alert-success'>Have Problem to Update Slider</h4>";
		header('location: ../all-slider.php');
	}
}
 ?>