<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['delete_menu'])){
	$id=$_POST['menu_id'];
	$menuName=$_POST['menu_name'];
	$submenu_number=$_POST['submenu_number'];
	$query="delete from all_menu where menu_id='$id' and menu_name='$menuName'";
	$result=$conn->query($query);
	if($result){
		// if have sub menu then delete menu name from sub menu table in database
		if ($submenu_number>0) {
			$submenu_query="delete from sub_menu where menu_name='$menuName'";
			$submenu_result=$conn->query($submenu_query);
			// session to show success message, if Deleted successfully
			if($submenu_result){
				$_SESSION['menu_action']="<h4 class='alert alert-success'>The Menu Deleted Successfully!</h4>";
				header('location: ../all-menu.php');
			}else{
			// session to show error message, if can not edit
			$_SESSION['menu_action']="<h4 class='alert alert-success'>Have Problem to Delete Menu</h4>";
			header('location: ../all-menu.php');
			}
		}
		// session to show success message, if Deleted successfully
		$_SESSION['menu_action']="<h4 class='alert alert-success'>The Menu Deleted Successfully!</h4>";
		header('location: ../all-menu.php');
	}else{
		// session to show error message, if can not edit
		$_SESSION['menu_action']="<h4 class='alert alert-success'>Have Problem to Delete Menu</h4>";
		header('location: ../all-menu.php');
		}
	}
	
 ?>