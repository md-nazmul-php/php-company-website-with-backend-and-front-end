<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['update_submenu'])){
	$id=$_POST['submenu_id'];
	$SubmenuName=$_POST['submenu_name'];
	$url=$_POST['submenu_url'];
	$menuName=$_POST['menuName'];
	$query="update sub_menu set submenu_name='$SubmenuName', submenu_url='$url' where submenu_id='$id'";
	$result=$conn->query($query);
	if($result){
		// session to show success message, if edited successfully
		$_SESSION['menu_action']="<h4 class='alert alert-success'>The Sub-Menu Updated Successfully Under= <span>".$menuName."</span></h4>";
		header('location: ../all-menu.php');
	}else{
		// session to show error message, if can not edit
		$_SESSION['menu_action']="<h4 class='alert alert-success'>Have Problem to Update Sub-Menu Under= <span>".$menuName."</span></h4>";
		header('location: ../all-menu.php');
		}
	}
	
 ?>