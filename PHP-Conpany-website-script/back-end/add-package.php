<?php 
	include('header.php');
	include('sidebar.php');
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Add New Package</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not inserted to dadabase -->
		<?php if(isset($_SESSION['add_package'])) echo $_SESSION['add_package']; unset($_SESSION['add_package']);?>
	</div>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/add-package-action.php">
			<!-- <div class="py-2">
				<span>ID:</span>
				<input type="text" name="service_id" value="<?php echo $ServiceNumber; ?>" />
			</div> -->
			<div class="form-group">
				<label for="package_title">Package Title <small>(Maximum character 100)</small></label>
				<input class="form-control" type="text" id="package_title" maxlength="100" name="package_title" required="required" />
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="package_price">Package Price $</label>
						<input class="form-control" type="number" name="package_price" id="package_price" required="required" />					
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="package_type">Package Type</label>
						<input class="form-control" type="text" name="package_type" id="package_type" required="required" />					
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="package_description">Package Description <small>(Maximum character 500)</small></label>
				<textarea class="form-control text-justify" id="package_description" name="package_description" rows="6" maxlength="500" required="required"></textarea>
			</div>
			<div class="form-group">
				<label for="package_url">Package URL <small>( Service Details )</small></label>
				<input class="form-control" type="text" id="package_url" name="package_url" maxlength="200" required="required" />
			</div>
			<div class="text-right">
				<button class="btn btn-success px-3" type="submit" name="add_package">Add</button>
			</div>
		</form>
	</div>
</div>

<?php
	include('footer.php');
 ?>