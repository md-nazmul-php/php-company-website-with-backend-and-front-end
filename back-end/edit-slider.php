<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Edit Slider</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not Updated in dadabase -->
		<?php if(isset($_SESSION['add_slide'])) echo $_SESSION['add_slide']; unset($_SESSION['add_slide']);?>
	</div>

	<!-- to get 1 Slider from Dadabase according to id (for editing) -->
		<?php
		$id=$_GET['slide-id'];
		$query="select * from home_slide where id='$id'";
		$result=$conn->query($query);
		if(mysqli_num_rows($result)>0){
		$col=mysqli_fetch_array($result);
		?>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/edit-slider-action.php">
			<div class="py-2">
				<span>ID:</span>
				<input class="text-center bg-white" type="text" name="slide_id" value="<?php echo $col['id']; ?>" disabled="disabled" />
				<!-- Hidden Text-box for geting id (in $_POST method) -->
				<input class="text-center bg-white" type="text" name="slide_id" value="<?php echo $col['id']; ?>" hidden="hidden" />
			</div>
			<div class="form-group">
				<label for="slide_title">Slide Title  <small>(Maximum character 100)</small></label>
				<input class="form-control" type="text" id="slide_title" name="slide_title" value="<?php echo $col['slide_title']; ?>" maxlength="100"/>
			</div>
			<div class="form-group">
				<label for="slide_description">Slide Description <small>(Maximum character 400)</small></label>
				<textarea class="form-control text-justify" id="slide_description" name="slide_description" rows="5" maxlength="400"><?php echo $col['slide_description']; ?></textarea>
			</div>
			<div class="form-group">
				<label for="read_more">URL <small>( For Read More )</small></label>
				<input class="form-control" type="text" id="read_more" name="read_more" maxlength="200" value="<?php echo $col['read_more']; ?>" />
			</div>
			<div class="text-right">
				<a class="btn btn-danger btn-sm" href="delete-slider.php?slide-id=<?php echo $col['id']; ?>">Delete Slider</a>&nbsp;
				<button class="btn btn-success px-3" type="submit" name="update_slide">Save Change</button>
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