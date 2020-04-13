<?php
	include('header.php');
	include('sidebar.php');
?>

<div id="view-slide">
	<h2 class="text-center text-success pt-3 py-1">All Menu</h2>
	<div>
		<a class="btn btn-success text-weight-bold" href="add-menu.php">Add New Menu</a> 
		<!-- <small>( You can add 5 Menus )</small> -->
	</div>
	<div class="pt-2">
		<!-- If the Menu inserted, Show Success Message -->
		<?php if(isset($_SESSION['menu_action'])) echo $_SESSION['menu_action']; unset($_SESSION['menu_action']);?>
	</div>
<div class="text-center bg-white">
	<div class="py-3">
			<table class="table">
				<tr class="row bg-secondary text-center align-middle text-white">
					<th class="col-1">Sl</th>
					<th class="col-7">Menu & Sub-menu</th>
					<th class="col-4">Menu URL</th>
				</tr>
				<!-- to get all Slider from Dadabase in a table -->
				<?php
				$query="select * from all_menu";
				$result=$conn->query($query);
				$i='1';
				if(mysqli_num_rows($result)>0){
					while($col=mysqli_fetch_array($result)){
						?>
						<tr class="row bg-light">
							<td class="col-1 align-middle"><?php echo $i; ?>
							<!-- This form use for get slider id to delete -->
							<form method="post" action="">
								<input type="text" name="menu_id" hidden="hidden" value="<?php echo $col['menu_id']; ?>">
							</form>
							</td>
							<td class="col-7 text-left align-middle"><?php echo $col['menu_name']; ?>
							<div class="pt-2">
								<!-- Action links or button to edit slider by using $_GET Method ( Query String ) -->
								<a class='text-primary' href="edit-menu.php?menu-id=<?php echo $col['menu_id']; ?>">Edit</a>&nbsp;
								<a class='text-danger' href="delete-menu.php?menu-id=<?php echo $col['menu_id']; ?>" >Delete</a>&nbsp;
								<!-- button to add sub-menu -->
								<a class="btn btn-success btn-sm p-0 px-1" href="add-submenu.php?menu-name=<?php echo $col['menu_name']; ?>">Add Sub-Menu</a>
								
								
							</div>
						</td>
						<td class="col-4 align-middle text-justify"><?php echo $col['menu_url']; ?></td>
					
					</tr>
					<!-- Show all sub-menu from sub_menu table according to menu_name and add them menu's below -->
					<?php
					$menu=$col['menu_name'];
							$sub_query="select * from sub_menu where menu_name='$menu'";
							$sub_result=$conn->query($sub_query);
							$s='1';
							if(mysqli_num_rows($sub_result)>0){
								while($sub_col=mysqli_fetch_array($sub_result)){
									echo '<tr class="row">';
							?>
						<td class="col-1"></td>	
						<td class="col-2 text-right align-middle" style="background-color: lightgreen;"><?php echo $s; ?></td>
						<td class="col-4 text-left align-middle" style="background-color: lightgreen;"><?php echo $sub_col['submenu_name']; ?>
						<div class="pt-2">
							<a class='text-primary' href="edit-submenu.php?submenu-id=<?php echo $sub_col['submenu_id']; ?>" >Edit</a>&nbsp;
							<a class='text-danger' href="delete-submenu.php?submenu-id=<?php echo $sub_col['submenu_id']; ?>">Delete</a>
						</div>
						</td>
						<td class="col-4 text-left align-middle" style="background-color: lightgreen;"><?php echo $sub_col['submenu_url']; ?></td>
						<td class="col-1"></td>
					<?php echo '</tr>';
					$s++;
					}					 
					}
					 ?>


					
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