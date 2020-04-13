<?php
	include('header.php');
	include('sidebar.php');
// for geting total number of package and price
$query="select * from all_package";
$result=$conn->query($query);
$All=mysqli_num_rows($result);


?>

<div id="view-slide">
	<h2 class="text-center text-success pt-3 py-1">Total Package ( <?php echo $All; ?> )</h2>
	<div>
		<a class="btn btn-success text-weight-bold" href="add-package.php">Add New Package</a> 
		<small>( You can add 4 Packages )</small>
	</div>
	<div class="my-2">
		<!-- If the package inserted or edited or deleted, Show Success Message -->
		<?php if(isset($_SESSION['package_action'])) echo $_SESSION['package_action']; unset($_SESSION['package_action']);?>
	</div>
<div class="text-center bg-white">
	<div class="py-3">
			<table class="table table-striped">
				<tr class="row bg-secondary text-center align-middle text-white">
					<th class="col-1">Sl</th>
					<th class="col-2">Title</th>
					<th class="col-1">Price</th>
					<th class="col-2">Type</th>
					<th class="col-3">Description</th>
					<th class="col-3">Package URL</th>
				</tr>
				<!-- to get all Slider from Dadabase in a table -->
				<?php
				$query="select * from all_package";
				$result=$conn->query($query);
				$i='1';
				if(mysqli_num_rows($result)>0){
					while($col=mysqli_fetch_array($result)){
						?>
						<tr class="row">
							<td class="col-1 align-middle"><?php echo $i; ?>
							<!-- This form use for get slider id to delete -->
							<form method="post" action="">
								<input type="text" name="package-id" hidden="hidden" value="<?php echo $col['package_id']; ?>">
							</form>
							</td>
							<td class="col-2 text-left align-middle"><?php echo $col['package_title']; ?>
							<div class="pt-2">
								<!-- Action links or button to edit slider by using $_GET Method ( Query String ) -->
								<a class='text-primary' href="edit-package.php?package-id=<?php echo $col['package_id']; ?>" >Edit</a>&nbsp;
								<a class='text-danger' href="delete-package.php?package-id=<?php echo $col['package_id']; ?>" >Delete</a>
							</div>
						</td>
						<td class="col-1 align-middle text-justify">$<?php echo $col['package_price']; ?></td>
						<td class="col-2 align-middle text-justify"><?php echo $col['package_type']; ?></td>
						<td class="col-3 align-middle text-justify"><?php echo $col['package_description']; ?></td>
						<td class="col-3 align-middle text-justify"><?php echo $col['package_url']; ?></td>
					
					</tr>
				<?php
				$i++;
			}
		}
		?>
	</table>
</div>
</div>

</div>



<?php
	include('footer.php');

 ?>