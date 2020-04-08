<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Add Menu</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not inserted to dadabase -->
		<?php if(isset($_SESSION['add_menu'])) echo $_SESSION['add_menu']; unset($_SESSION['add_menu']);?>
	</div>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/add-menu-action.php">
			<div class="form-group">
				<label for="menu_name">Menu Name</label>
				<input class="form-control" type="text" id="menu_name" maxlength="100" name="menu_name" required="required" />
			</div>
			<div class="form-group">
				<label for="menu_url">URL <small>( For Menu )</small></label>
				<input class="form-control" type="text" id="menu_url" name="menu_url" maxlength="200" required="required" />
			</div>
			<div class="text-right">
				<button class="btn btn-success px-3" type="submit" name="add_menu">Add Menu</button>
			</div>
		</form>
	</div>
</div>

<?php
	include('footer.php');
 ?>