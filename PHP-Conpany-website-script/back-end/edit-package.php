<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Edit Service</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not Updated in dadabase -->
		<?php if(isset($_SESSION['edit_package'])) echo $_SESSION['edit_package']; unset($_SESSION['edit_package']);?>
	</div>

	<!-- to get 1 Service from Dadabase according to id (for editing) -->
		<?php
		$id=$_GET['package-id'];
		$query="select * from all_package where package_id='$id'";
		$result=$conn->query($query);
		if(mysqli_num_rows($result)>0){
			$col=mysqli_fetch_array($result);
				?>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/edit-package-action.php">
			<div class="py-2">
				<span>ID:</span>
				<input class="text-center bg-white" type="text" name="package_id" value="<?php echo $col['package_id']; ?>" disabled="disabled" />
				<!-- Hidden Text-box for geting id (in $_POST method) -->
				<input class="text-center bg-white" type="text" name="package_id" value="<?php echo $col['package_id']; ?>" hidden="hidden" />
			</div>
			<div class="form-group">
				<label for="package_title">Package Title <small>(Maximum character 100)</small></label>
				<input class="form-control" type="text" id="package_title" maxlength="100" name="package_title" value="<?php echo $col['package_title']; ?>" required="required" />
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="package_price">Package Price $</label>
						<input class="form-control" type="number" name="package_price" id="package_price" value="<?php echo $col['package_price']; ?>" required="required" />					
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="package_type">Package Type</label>
						<input class="form-control" type="text" name="package_type" id="package_type" value="<?php echo $col['package_type']; ?>" required="required" />					
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="package_description">Package Description <small>(Maximum character 500)</small></label>
				<textarea class="form-control text-justify" id="package_description" name="package_description" rows="6" maxlength="500" required="required"><?php echo $col['package_description']; ?></textarea>
			</div>
			<div class="form-group">
				<label for="package_url">Package URL <small>( Service Details )</small></label>
				<input class="form-control" type="text" id="package_url" name="package_url" value="<?php echo $col['package_url']; ?>" maxlength="200" required="required" />
			</div>
			<div class="text-right">
				<a class="btn btn-danger btn-sm" href="delete-package.php?package-id=<?php echo $col['package_id']; ?>">Delete Slider</a>&nbsp;
				<button class="btn btn-success px-3" type="submit" name="update_package">Save Change</button>
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