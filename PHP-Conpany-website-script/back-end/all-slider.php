<?php
	include('header.php');
	include('sidebar.php');
// for geting total number of Slider
$query="select * from home_slide";
$result=$conn->query($query);
$All=mysqli_num_rows($result);
?>

<div id="view-slide">
	<h2 class="text-center text-success pt-3 py-1">Total Home Slide ( <?php echo $All; ?> )</h2>
	<div>
		<a class="btn btn-success text-weight-bold" href="add-slider.php">Add New Slide</a> 
		<small>( You can add 5 Slider )</small>
	</div>
	<div class="my-2">
		<!-- If the slide inserted, Show Success Message -->
		<?php if(isset($_SESSION['slider_action'])) echo $_SESSION['slider_action']; unset($_SESSION['slider_action']);?>
	</div>
<div class="text-center bg-white">
	<div class="py-3">
			<table class="table table-striped">
				<tr class="row bg-secondary text-center align-middle text-white">
					<th class="col-1">Sl</th>
					<th class="col-3">Title</th>
					<th class="col-5">Description</th>
					<th class="col-3">URL</th>
				</tr>
				<!-- to get all Slider from Dadabase in a table -->
				<?php
				$query="select * from home_slide";
				$result=$conn->query($query);
				$i='1';
				if(mysqli_num_rows($result)>0){
					while($col=mysqli_fetch_array($result)){
						?>
						<tr class="row">
							<td class="col-1 align-middle"><?php echo $i; ?>
							<!-- This form use for get slider id to delete -->
							<form method="post" action="">
								<input type="text" name="slide-id" hidden="hidden" value="<?php echo $col['id']; ?>">
							</form>
							</td>
							<td class="col-3 text-left align-middle"><?php echo $col['slide_title']; ?>
							<div class="pt-2">
								<!-- Action links or button to edit slider by using $_GET Method ( Query String ) -->
								<a class='text-primary' href="edit-slider.php?slide-id=<?php echo $col['id']; ?>" >Edit</a>&nbsp;
								<!-- The active slider show first. So active slider we can't delete but can edit (So don't show delete button here) -->
								<?php 
								if($col['status']=='active'){
								 	echo "<small>(This is active slider, can't delete)";
								}else{
									// Action links or button to delete slider by using $_GET Method ( Query String ) 
									echo '<a class="text-danger" href="delete-slider.php?slide-id='.$col['id'].'">Delete</a>';
								}
								?>
							</div>
						</td>
						<td class="col-5 align-middle text-justify"><?php echo $col['slide_description']; ?></td>
						<td class="col-3 align-middle text-justify"><?php echo $col['read_more']; ?></td>
					
					</tr>
				<?php
				$i++;
			}
		}
		?>
	</table>
</form>
</div>
</div>
</div>



<?php
	include('footer.php');

 ?>