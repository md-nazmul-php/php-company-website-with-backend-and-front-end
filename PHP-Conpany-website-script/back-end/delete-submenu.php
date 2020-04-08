<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Delete Sub-Menu</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not Updated in dadabase -->
		<?php if(isset($_SESSION['update-menu'])) echo $_SESSION['update-menu']; unset($_SESSION['update-menu']);?>
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
		<form method="post" action="action/delete-submenu-action.php">
			<div class="row py-2 mb-5">
			<div class="col-6">
				<h6>Sub-Menu ID = <?php echo $sub_col['submenu_id']; ?></h6>
				<!-- Hidden Text-box for geting id (in $_POST method) -->
				<input class="text-center bg-white" type="text" name="submenu_id" value="<?php echo $sub_col['submenu_id']; ?>" hidden="hidden" />
				<input class="text-center bg-white" type="text" name="menu_name" value="<?php echo $sub_col['menu_name']; ?>" hidden="hidden" />
			</div>
			<div class="col-6">
				<?php 
			// to get total number of sub-menu uder this menu
				$menuN=$sub_col['menu_name'];
				$query="select * from sub_menu where menu_name='$menuN'";
				$result=$conn->query($query);
				$s_menu_num=mysqli_num_rows($result);
			 ?>
			 <h6>Main Menu= <?php echo $sub_col['menu_name']; ?></h6>
			<!-- echo total number of sub-menu uder this menu to user edit or delete -->
			 	<input type="text" name="submenu_number" value="<?php echo $s_menu_num; ?>" hidden="hidden"/>
			</div>
			</div>
			<div class="form-group">
				<label for="menu_url">Sub-Menu Name</label>
				<h4><?php echo $sub_col['submenu_name']; ?></h4>				
			</div>
			<div class="form-group">
				<label for="menu_url">Sub-Menu URL <small>( For opening page )</small></label>
				<h6><?php echo $sub_col['submenu_url']; ?></h6>
			</div>
			<div class="text-right">
				<a class="btn btn-success btn-sm" href="edit-submenu.php?submenu-id=<?php echo $sub_col['submenu_id']; ?>">Edit Sub-Menu</a>&nbsp;
				<button class="btn btn-danger px-3" type="submit" name="delete_submenu">Delete Sub-Menu</button>
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