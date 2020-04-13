<?php 
	include('header.php');
	include('sidebar.php');
	$menu=$_GET['menu-name'];
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Add Sub-Menu Under <span class="text-success"><?php echo $menu; ?></span> </h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not inserted to dadabase -->
		<?php if(isset($_SESSION['add_submenu'])) echo $_SESSION['add_submenu']; unset($_SESSION['add_submenu']);?>
	</div>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/add-submenu-action.php">
			<!-- this input uses to get menu name from query string (url) make it hide to use insert to submenu table -->
			<input type="text" name="menu_name" value="<?php echo $menu; ?>" hidden="hidden"/>

			<div class="form-group">
				<label for="submenu_name">Sub-Menu Name</label>
				<input class="form-control" type="text" id="submenu_name" maxlength="100" name="submenu_name" required="required" />
			</div>
			<div class="form-group">
				<label for="submenu_url">URL <small>( For Menu )</small></label>
				<input class="form-control" type="text" id="submenu_url" name="submenu_url" maxlength="200" required="required" />
			</div>
			<div class="text-right">
				<button class="btn btn-success px-3" type="submit" name="add_submenu">Add Sub-Menu</button>
			</div>
		</form>
	</div>
</div>

<?php
	include('footer.php');
 ?>