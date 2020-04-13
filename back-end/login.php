<?php 
	session_start();
	include '../global/db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<?php echo '<meta name="viewport" content="width=device-width, initial-scale=1">';?>

	<?php echo '<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">';?>
	<?php echo '<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>';?>
	<?php echo '<link rel="stylesheet" type="text/css" href="css/login.css">';?>

</head>
<body id="bg-pic">
	<div id="div-padding">
		<div class="rounded shadow-lg" id="div-size">
			<div class="p-3 px-5">
				<form method="post" action="">
					<div class="text-center">
						<h1>Loging</h1>
					</div>
					<div class="text-danger">
						<?php if(isset($_SESSION['login-error'])) echo $_SESSION['login-error']; unset($_SESSION['login-error']); ?>
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="username">Username</label>
						<input class="form-control" type="text" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="password">Password</label>
						<input class="form-control" type="text" name="password" placeholder="password">
					</div>
					<div class="text-right">
						<button class="btn btn-warning px-3" type="submit" name="login-button">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php 
		if(isset($_POST['login-button'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query="select * from admin_info where username='$username' and password='$password'";
			$result=$conn->query($query);
			if($result->num_rows>0){
				$_SESSION['username']=$username;
				header('location: index.php');
			}else{
				$_SESSION['login-error']= 'Username/password is invalid';
				header('location: login.php');
			}

		}

	 ?>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
