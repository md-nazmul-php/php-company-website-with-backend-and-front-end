<?php 
	include('header.php');
	include('sidebar.php');
?>

<div class="container-fluid">
	<div class="text-center text-danger py-3">
		<h2>Delete Service</h2>
	</div>
	<div class="text-center">
		<?php if(isset($_SESSION['delete_error'])) echo $_SESSION['delete_error']; unset($_SESSION['delete_error']);?>
	</div>

	<!-- to get 1 Service from Dadabase according to id (for Deleting) -->
		<?php
		$id=$_GET['service-id'];
		$query="select * from all_service where service_id='$id'";
		$result=$conn->query($query);
		if(mysqli_num_rows($result)>0){
			$col=mysqli_fetch_array($result);
				?>
	<div id="add-slide" class="py-3">			
			<div class="py-2">
				<span>ID:</span>
				<input class="text-center bg-white" type="text" name="service_id" value="<?php echo $col['service_id']; ?>" disabled="disabled" />
			</div>
			<div class="py-2">
				<h5>Service Title</h5>
				<p><?php echo $col['service_title']; ?></p>
			</div>
			<div class="py-2">
				<h5>Service Description</small></h5>
				<p><?php echo $col['service_description']; ?></p>
			</div>
			<div class="py-2">
				<h5>URL <small>( For Read More )</small></h5>
				<p><?php echo $col['service_url']; ?>" </p>
			</div>
			<div class="text-center pt-2">
				<a class='btn btn-primary btn-sm' href="edit-service.php?service-id=<?php echo $col['service_id']; ?>" >Edit Service</a>&nbsp;
				<a href="" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal">Delete Service</a>
			</div>
	</div>
			<!-- The Modal  for Delete button-->
<div class="modal modal-centered" id="DeleteModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" action="action/delete-service-action.php">
			<!-- Hidden Text-box for geting id (in $_POST method) -->
			<input class="text-center bg-white" type="text" name="service_id" value="<?php echo $col['service_id']; ?>" hidden="hidden" />
			<!-- Modal Header -->
			<div class="modal-header">
				<div class="text-center py-4">
					<h3 class="modal-title text-primary">The Service will be deleted permanently!</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal">&times;</button>        
			</div>
			<!-- Modal body -->
			
				<div class="modal-body">
					<button type="submit" class="btn btn-danger px-3 my-3 mx-2" name="delete">Delete</button>
					<button type="button" class="btn btn-success px-3 my-3 mx-2" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
		
<?php 
}
 ?>
</div>


<?php
	include('footer.php');
 ?>