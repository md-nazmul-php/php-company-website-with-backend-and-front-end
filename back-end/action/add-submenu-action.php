<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['add_submenu'])){
	$menuName=$_POST['menu_name'];
	$submenu=$_POST['submenu_name'];
	$url=$_POST['submenu_url'];
	
	// firstly update status in All menu table for adding sub-menu
	$updateQ="update all_menu set status='submenu' where menu_name='$menuName'";
	$updateR=$conn->query($updateQ);
	if($updateQ){
		$query="insert into sub_menu (`submenu_id`,`menu_name`,`submenu_name`,`submenu_url`) values ('','$menuName','$submenu','$url')";
		$result=$conn->query($query);
		if($result){
			// session to show success message
			$_SESSION['menu_action']="<h4 class='alert alert-success'>New Sub-Menu Added Under= <span class='text-success'>".$menuName."</span></h4>";
			header('location: ../all-menu.php');
		}else{
			// session to show error message
			$_SESSION['add_submenu']="<h4 class='alert alert-success'>Have Problem to add new Sub-Menu Under= <span class='text-success'>".$menuName."</span></h4>";
			header('location: ../add-submenu.php');
		}
	}
	
	}
 ?>