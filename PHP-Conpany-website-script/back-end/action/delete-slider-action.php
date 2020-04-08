<?php 
session_start();
  include '../../global/db.php';
//delete slider from database 
	if(isset($_POST['delete'])){
	$Delete_id=$_POST['slide_id'];
	$Delete_query="delete from home_slide where id='$Delete_id'";
	$Delete_result=$conn->query($Delete_query);
	if($Delete_result){
		$_SESSION['slider_action']="<h5 class='alert alert-success'>The Slider Deleted Successfully!</h5>";
		header('location: ../all-slider.php');
	}else{
		$_SESSION['delete_error']="<h5 class='alert alert-danger'>There have a problem to delete this Slider</h5>";
		header('location: ../delete-slider.php?slide-id='.$Delete_id);
	}
}
 ?>