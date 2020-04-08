<?php 
	include('header.php');
	include('sidebar.php');
	$query="select max('id') from home_slide";
	$result=$conn->query($query);
	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Add New Service</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not inserted to dadabase -->
		<?php if(isset($_SESSION['service_action'])) echo $_SESSION['service_action']; unset($_SESSION['service_action']);?>
	</div>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/add-service-action.php">
			<!-- <div class="py-2">
				<span>ID:</span>
				<input type="text" name="service_id" value="<?php echo $ServiceNumber; ?>" />
			</div> -->
			<div class="form-group">
				<label for="service_title">Service Title <small>(Maximum character 100)</small></label>
				<input class="form-control" type="text" id="service_title" maxlength="100" name="service_title" required="required" />
			</div>
			<div class="form-group">
				<label for="service_description">Service Description <small>(Maximum character 500)</small></label>
				<textarea class="form-control text-justify" id="service_description" name="service_description" rows="5" maxlength="500" required="required" ></textarea>
			</div>
			<div class="form-group">
				<label for="service_url">Service URL <small>( Service Details )</small></label>
				<input class="form-control" type="text" id="service_url" name="service_url" maxlength="200" required="required" />
			</div>
			<div class="text-right">
				<button class="btn btn-success px-3" type="submit" name="add_service">Add</button>
			</div>
		</form>
	</div>
</div>

<?php
	include('footer.php');
 ?>