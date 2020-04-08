<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['update_menu'])){
	$id=$_POST['menu_id'];
	$menuName=$_POST['menu_name'];
	$menuInSubMenu=$_POST['menuForSubMenu'];
	$url=$_POST['menu_url'];
	$submenu_number=$_POST['submenu_number'];
	$query="update all_menu set menu_name='$menuName', menu_url='$url' where menu_id='$id'";
	$result=$conn->query($query);
	if($result){
		// if have sub menu then update menu name in sub menu table in database
		if ($submenu_number>0) {
			$submenu_query="update sub_menu set menu_name='$menuName' where menu_name='$menuInSubMenu'";
			$submenu_result=$conn->query($submenu_query);
			// session to show success message, if edited successfully
			if($submenu_result){
				$_SESSION['menu_action']="<h4 class='alert alert-success'>The Menu Updated Successfully!</h4>";
				header('location: ../all-menu.php');
			}else{
			// session to show error message, if can not edit
			$_SESSION['menu_action']="<h4 class='alert alert-success'>Have Problem to Update Menu</h4>";
			header('location: ../all-menu.php');
			}
		}
		// session to show success message, if edited successfully
		$_SESSION['menu_action']="<h4 class='alert alert-success'>The Menu Updated Successfully!</h4>";
		header('location: ../all-menu.php');
	}else{
		// session to show error message, if can not edit
		$_SESSION['menu_action']="<h4 class='alert alert-success'>Have Problem to Update Menu</h4>";
		header('location: ../all-menu.php');
		}
	}
	
 ?>