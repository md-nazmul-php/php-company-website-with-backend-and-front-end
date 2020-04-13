<?php 
	include('header.php');
	include('sidebar.php');

	if(isset($_FILES['file-name'])){
	$a->UserImage($_FILES['file-name']['tmp_name'],$_FILES['file-name']['name'],$_FILES['file-name']['type'],$userName);
}
?>

<div class="container p-5">
	<div class="text-center">
		<form name="fileuploadexample" method="post" enctype="multipart/form-data">
			<h2>Upload / Chanve Favicon</h2>
			<div class="p-3">
				<img src="<?php echo $pics; ?>" class='img-responsive rounded-circle' width='200px;' height='200px;'/>
			</div>
			<div class="p-3">
				<input type="file" name="file-name"/>
			</div>
			<div class="p-3">
				<button type="submit" name="submit" class="btn btn-success py-2">Upload</button>
			</div>


		</form>
		
	</div>
	

</div>




<?php
	include('footer.php');

 ?>