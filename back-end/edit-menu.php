<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Edit Menu</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not Updated in dadabase -->
		<?php if(isset($_SESSION['update-menu'])) echo $_SESSION['update-menu']; unset($_SESSION['update-menu']);?>
	</div>

	<!-- to get 1 Slider from Dadabase according to id (for editing) -->
		<?php
		$id=$_GET['menu-id'];
		$query="select * from all_menu where menu_id='$id'";
		$result=$conn->query($query);
		if(mysqli_num_rows($result)>0){
		$col=mysqli_fetch_array($result);
		?>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/edit-menu-action.php">
			<div class="py-2">
				<span>ID:</span>
				<input class="text-center bg-white" type="text" name="menu_id" value="<?php echo $col['menu_id']; ?>" disabled="disabled" />
				<!-- Hidden Text-box for geting id (in $_POST method) -->
				<input class="text-center bg-white" type="text" name="menu_id" value="<?php echo $col['menu_id']; ?>" hidden="hidden" />
				<input class="text-center bg-white" type="text" name="menuForSubMenu" value="<?php echo $col['menu_name']; ?>" hidden="hidden" />
			</div>
			<div class="form-group">
				<label for="menu_name">Menu Name</label>
				<input class="form-control" type="text" id="menu_name" name="menu_name" value="<?php echo $col['menu_name']; ?>" maxlength="100"/>
			</div>
			<div class="form-group">
				<label for="menu_url">Menu URL <small>( For opening page )</small></label>
				<input class="form-control" type="text" id="menu_url" name="menu_url" maxlength="200" value="<?php echo $col['menu_url']; ?>" />
			</div>
			<div class="text-right">
				<a class="btn btn-danger btn-sm" href="delete-menu.php?menu-id=<?php echo $col['menu_id']; ?>">Delete Menu</a>&nbsp;
				<button class="btn btn-success px-3" type="submit" name="update_menu">Save Change</button>
			</div>
			<?php 
			// to get total number of sub-menu uder this menu
				$menuN=$col['menu_name'];
				$query="select * from sub_menu where menu_name='$menuN'";
				$result=$conn->query($query);
				$s_menu_num=mysqli_num_rows($result);
			 ?>
			<!-- echo total number of sub-menu uder this menu to user edit or delete -->
			 <div>
			 	<input type="text" name="submenu_number" value="<?php echo $s_menu_num; ?>" hidden="hidden"/>
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