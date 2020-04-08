<?php
session_start();
  include '../../global/db.php';
if(isset($_POST['delete_submenu'])){
	$id=$_POST['submenu_id'];
	$menuName=$_POST['menu_name'];
	$submenu_number=$_POST['submenu_number'];
	$query="delete from sub_menu where submenu_id='$id' and menu_name='$menuName'";
	$result=$conn->query($query);
	if($result){		
		// if delete menu from sub menu table in database. If the sub menu is 1 then update status fiedl form main menu table
		if ($submenu_number==1) {
			$submenu_query="update all_menu set status='' where menu_name='$menuName'";
			$submenu_result=$conn->query($submenu_query);
			// session to show success message, if Deleted successfully
			if($submenu_result){
				$_SESSION['menu_action']="<h4 class='alert alert-success'>The Sub-Menu Deleted Successfully Under= <span>".$menuName."</s</h4>";
				header('location: ../all-menu.php');
			}else{
			// session to show error message, if can not edit
			$_SESSION['menu_action']="<h4 class='alert alert-success'>Have Problem to Delete Sub-Menu Under= <span>".$menuName."</s</h4>";
			header('location: ../all-menu.php');
			}
		}
		// session to show success message, if Deleted successfully
		$_SESSION['menu_action']="<h4 class='alert alert-success'>The Sub-Menu Deleted Successfully Under= <span>".$menuName."</s</h4>";
		header('location: ../all-menu.php');
	}else{
		// session to show error message, if can not edit
		$_SESSION['menu_action']="<h4 class='alert alert-success'>Have Problem to Delete Sub-Menu Under= <span>".$menuName."</s</h4>";
		header('location: ../all-menu.php');
		}
	}
	
 ?>