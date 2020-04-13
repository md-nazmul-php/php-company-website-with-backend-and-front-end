<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['add_menu'])){
	$menuName=$_POST['menu_name'];
	$url=$_POST['menu_url'];
	
	$query="insert into all_menu (`menu_id`,`menu_name`,`menu_url`,`status`) values ('','$menuName','$url','')";
	$result=$conn->query($query);
	if($result){
		// session to show success message
		$_SESSION['menu_action']="<h4 class='alert alert-success'>New Menu Added Successfully!</h4>";
		header('location: ../all-menu.php');
	}else{
		// session to show error message
		$_SESSION['add_menu']="<h4 class='alert alert-success'>Have Problem to add new Menu</h4>";
		header('location: ../add-menu.php');
	}
	
	}
 ?>