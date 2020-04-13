<?php
	include('header.php');
	include('sidebar.php');
	$query="select * from home_slide";
$result=$conn->query($query);
$All=mysqli_num_rows($result);
?>

<div id="view-slide">
	<h2 class="text-center text-success pt-3 py-1">Total Home Slide ( <?php echo $All; ?> )</h2>
	<div>
		<a class="btn btn-success text-weight-bold" href="add-slider.php">Add New Slide</a>
	</div>
	<div class="my-2">
		<?php if(isset($_SESSION['add_slide'])) echo $_SESSION['add_slide']; unset($_SESSION['add_slide']);?>
	</div>
<div class="text-center bg-white">
	<div class="py-3">
		<form action="" method="post">
			<table class="table table-striped">
				<tr class="row bg-secondary text-center align-middle text-white">
					<th class="col-1">Sl</th>
					<th class="col-3">Title</th>
					<th class="col-5">Description</th>
					<th class="col-3">URL</th>
				</tr>
				<?php
				$query="select * from home_slide";
				$result=$conn->query($query);
				$i='1';
				if(mysqli_num_rows($result)>0){
					while($col=mysqli_fetch_array($result)){
						?>
						<tr class="row">
							<td class="col-1 align-middle"><?php echo $i; ?></td>
							<td class="col-3 text-left align-middle"><?php echo $col['slide_title']; ?>
							<div class="pt-2">
								<a class="text-primary" href="view-ad.php?adid=<?php echo $col['id']; ?>" target="_blank">View </a>&nbsp;
								<a class='text-success' href="delete-ad.php?adid=<?php echo $col['id']; ?>" target="_blank">Edit</a>&nbsp;
								<a class="text-danger" href="delete-ad.php?adid=<?php echo $col['id']; ?>" target="_blank">Delete</a>
							</div>
						</td>
						<td class="col-5 align-middle text-left"><?php echo $col['slide_description']; ?></td>
						<td class="col-3 align-middle text-left"><?php echo $col['read_more']; ?></td>
					
					</tr>
				<?php
				$i++;
			}
		}
		//$id=$col['ad_id'];
		if(isset($_POST['delete'])){
			$id=$_POST['adsId'];
			$query="delete from ads_details where ad_id='$id'";
			$result=$m->query($query);
		}

		if(isset($_POST['deactive-ad'])){
			$id=$_POST['adsId'];
			$Dquery="update ads_details set `status`='Pending' where ad_id='$id'";
			$Dresult=$m->query($Dquery);
			if($Dresult)
				echo $Dquery;
		}
		if(isset($_POST['active-ad'])){
			$id=$_POST['adsId'];
			$Aquery="update ads_details set `status`='Active' where ad_id='$id'";
			$Aresult=$m->query($Aquery);
			if($Aresult)
				echo $Aquery;
		}

		?>

		<!-- The Modal  for Delete button-->
		<div class="modal modal-centered" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<div class="text-center py-4">
							<h3 class="modal-title text-primary">The Ad will be delete permanently!</h3>
						</div>
						<button type="button" class="close" data-dismiss="modal">&times;</button>        
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<button type="submit" class="btn btn-success px-3 my-3 mx-2" name="delete">Delete</button>
						<button type="button" class="btn btn-primary px-3 my-3 mx-2" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- The Modal  for DeActive Ads-->
		<div class="modal modal-centered" id="deactiveModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<div class="text-center py-4">
							<h3 class="modal-title text-primary">Want to deactive this ad?</h3>
						</div>
						<button type="button" class="close" data-dismiss="modal">&times;</button>        
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<button type="submit" class="btn btn-warning px-3 my-3 mx-2" name="deactive-ad">Deactive Now</button>
						<button type="button" class="btn btn-primary px-3 my-3 mx-2" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- The Modal  for Active Ads-->
		<div class="modal modal-centered" id="activeModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<div class="text-center py-4">
							<h3 class="modal-title text-primary">Want to active this ads?</h3>
						</div>
						<button type="button" class="close" data-dismiss="modal">&times;</button>        
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<button type="submit" class="btn btn-success px-3 my-3 mx-2" name="active-ad">Active Now</button>
						<button type="button" class="btn btn-primary px-3 my-3 mx-2" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</table>
</form>
<!-- <h1 class="py-3"><?php if(mysqli_num_rows($result)<1) echo "Not Ads Here"; ?></h1> -->
</div>
</div>
</div>



<?php
	include('footer.php');

 ?>