<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Edit Service Info</h2>
	</div>
	<div class="px-3">
		<!-- Show error Message, if the slide did not Updated in dadabase -->
		<?php if(isset($_SESSION['service-info'])) echo $_SESSION['service-info']; unset($_SESSION['service-info']);?>
	</div>

	<!-- to get 1 Slider from Dadabase according to id (for editing) -->
		<?php
		$query="select * from service_info";
		$result=$conn->query($query);
		if(mysqli_num_rows($result)>0){
			$col=mysqli_fetch_array($result);
				?>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/service-info-action.php">
			<div class="py-2">
				<!-- Hidden Text-box for geting id (in $_POST method) from service_info table -->
				<input class="text-center bg-white" type="text" name="id" value="<?php echo $col['id']; ?>" hidden="hidden" />
			</div>
			<div class="form-group">
				<label for="title">Service Section Title</label>
				<input class="form-control" type="text" id="title" name="title" value="<?php echo $col['title']; ?>" maxlength="150"/>
			</div>
			<div class="form-group">
				<label for="description">Service Description <small>(Maximum character 500)</small></label>
				<textarea class="form-control text-justify" id="description" name="description" rows="5" maxlength="500"><?php echo $col['description']; ?></textarea>
			</div>
			<div class="text-right">
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