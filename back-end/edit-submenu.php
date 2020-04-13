<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Edit Sub-Menu</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not Updated in dadabase -->
		<?php if(isset($_SESSION['update-submenu'])) echo $_SESSION['update-submenu']; unset($_SESSION['update-submenu']);?>
	</div>

	<!-- to get 1 Slider from Dadabase according to id (for editing) -->
		<?php
		$id=$_GET['submenu-id'];
		$query="select * from sub_menu where submenu_id='$id'";
		$result=$conn->query($query);
		if(mysqli_num_rows($result)>0){
		$sub_col=mysqli_fetch_array($result);
		?>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/edit-submenu-action.php">
			<div>
				<h6>Main Menu= <?php echo $sub_col['menu_name']; ?></h6>
			</div>
			<div class="py-2">
				<span>Sub_Menu ID:</span>
				<input class="text-center bg-white" type="text" name="submenu_id" value="<?php echo $sub_col['submenu_id']; ?>" disabled="disabled" />
				<!-- Hidden Text-box for geting id (in $_POST method) -->
				<input class="text-center bg-white" type="text" name="submenu_id" value="<?php echo $sub_col['submenu_id']; ?>" hidden="hidden" />
				<!-- Get menu name from sub menu table to show edited message by action page in session -->
				<input class="text-center bg-white" type="text" name="menuName" value="<?php echo $sub_col['menu_name']; ?>" hidden="hidden" />

			</div>
			<div class="form-group">
				<label for="submenu_name">Sub-Menu Name</label>
				<input class="form-control" type="text" id="submenu_name" name="submenu_name" value="<?php echo $sub_col['submenu_name']; ?>" maxlength="100"/>
			</div>
			<div class="form-group">
				<label for="submenu_url">Sub-Menu URL <small>( For opening page )</small></label>
				<input class="form-control" type="text" id="submenu_url" name="submenu_url" maxlength="200" value="<?php echo $sub_col['submenu_url']; ?>" />
			</div>
			<div class="text-right">
				<a class="btn btn-danger btn-sm" href="delete-submenu.php?submenu-id=<?php echo $sub_col['submenu_id']; ?>">Delete Sub-Menu</a>&nbsp;
				<button class="btn btn-success px-3" type="submit" name="update_submenu">Save Change</button>
			</div>
		</form>
	</div>
<?php 
}

 ?>
 


</div>

<?php
	include('footer.php');
 ?>