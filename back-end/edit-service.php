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
		<?php if(isset($_SESSION['edit_service'])) echo $_SESSION['edit_service']; unset($_SESSION['edit_service']);?>
	</div>

	<!-- to get 1 Service from Dadabase according to id (for editing) -->
		<?php
		$id=$_GET['service-id'];
		$query="select * from all_service where service_id='$id'";
		$result=$conn->query($query);
		if(mysqli_num_rows($result)>0){
			$col=mysqli_fetch_array($result);
				?>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/edit-service-action.php">
			<div class="py-2">
				<span>ID:</span>
				<input class="text-center bg-white" type="text" name="service_id" value="<?php echo $col['service_id']; ?>" disabled="disabled" />
				<!-- Hidden Text-box for geting id (in $_POST method) -->
				<input class="text-center bg-white" type="text" name="service_id" value="<?php echo $col['service_id']; ?>" hidden="hidden" />
			</div>
			<div class="form-group">
				<label for="service_title">Slide Title  <small>(Maximum character 100)</small></label>
				<input class="form-control" type="text" id="service_title" name="service_title" value="<?php echo $col['service_title']; ?>" maxlength="100"/>
			</div>
			<div class="form-group">
				<label for="service_description">Slide Description <small>(Maximum character 400)</small></label>
				<textarea class="form-control text-justify" id="service_description" name="service_description" rows="5" maxlength="400"><?php echo $col['service_description']; ?></textarea>
			</div>
			<div class="form-group">
				<label for="service_url">Service URL <small>( Service Details )</small></label>
				<input class="form-control" type="text" id="service_url" name="service_url" maxlength="200" value="<?php echo $col['service_url']; ?>" />
			</div>
			<div class="text-right">
				<a class="btn btn-danger btn-sm" href="delete-service.php?service-id=<?php echo $col['service_id']; ?>">Delete Slider</a>&nbsp;
				<button class="btn btn-success px-3" type="submit" name="update_service">Save Change</button>
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