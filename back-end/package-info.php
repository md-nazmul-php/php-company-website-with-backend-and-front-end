<?php 
	include('header.php');
	include('sidebar.php');	
?>

<div class="container-fluid">
	<div class="text-center text-primary py-3">
		<h2>Edit Package Info</h2>
	</div>
	<div class="px-3">
		<!-- Show error Message, if the slide did not Updated in dadabase -->
		<?php if(isset($_SESSION['package-info'])) echo $_SESSION['package-info']; unset($_SESSION['package-info']);?>
	</div>

	<!-- to get  from Dadabase according to id (for editing) -->
		<?php
		$query="select * from package_info";
		$result=$conn->query($query);
		if(mysqli_num_rows($result)>0){
			$col=mysqli_fetch_array($result);
		?>
	<div id="add-slide" class="py-3">
		<form method="post" action="action/package-info-action.php">
			<div class="py-2">
				<!-- Hidden Text-box for geting id (in $_POST method) from service_info table -->
				<input class="text-center bg-white" type="text" name="id" value="<?php echo $col['id']; ?>" hidden="hidden" />
			</div>
			<div class="form-group">
				<label for="title">Package Section Title</label>
				<input class="form-control" type="text" id="title" name="title" value="<?php echo $col['title']; ?>" maxlength="150"/>
			</div>
			<div class="form-group">
				<label for="description">Package Description <small>(Maximum character 500)</small></label>
				<textarea class="form-control text-justify" id="description" name="description" rows="5" maxlength="500"><?php echo $col['description']; ?></textarea>
			</div>
			<div class="text-right">
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