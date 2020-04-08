<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Add Slide</h2>
	</div>
	<div class="my-2">
		<!-- Show error Message, if the slide did not inserted to dadabase -->
		<?php if(isset($_SESSION['add_slide'])) echo $_SESSION['add_slide']; unset($_SESSION['add_slide']);?>
	</div>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/add-slider-action.php">
			<!-- <div class="py-2">
				<span>ID:</span>
				<input type="text" name="slide_id" value="<?php echo $SlideNumber; ?>" />
			</div> -->
			<div class="form-group">
				<label for="slide_title">Slide Title <small>(Maximum character 100)</small></label>
				<input class="form-control" type="text" id="slide_title" maxlength="100" name="slide_title" required="required" />
			</div>
			<div class="form-group">
				<label for="slide_description">Slide Description <small>(Maximum character 400)</small></label>
				<textarea class="form-control text-justify" id="slide_description" name="slide_description" rows="5" maxlength="400" required="required" ></textarea>
			</div>
			<div class="form-group">
				<label for="read_more">URL <small>( For Read More )</small></label>
				<input class="form-control" type="text" id="read_more" name="read_more" maxlength="200" required="required" />
			</div>
			<div class="text-right">
				<button class="btn btn-success px-3" type="submit" name="add_slide">Add</button>
			</div>
		</form>
	</div>
</div>

<?php
	include('footer.php');
 ?>