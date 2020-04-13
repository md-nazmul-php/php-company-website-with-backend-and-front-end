<?php 
session_start();
include '../../global/db.php';

	if(isset($_POST['update_package'])){
		$title=$_POST['title'];
		$description=$_POST['description'];

		$query="update package_info set title='$title', description='$description' where id='1'";
		$result=$conn->query($query);
		if($result){
			// session to show success message
			$_SESSION['package-info']='<h4 class="alert alert-success">Package info has been updated</h4>';
			header('location: ../package-info.php');
		}else{
			// session to show error message
			$_SESSION['package-info']='<h4 class="alert alert-success">Have problem to save change</h4>';
			header('location: ../package-info.php');
		}
	}
 ?>