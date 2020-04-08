<?php 
	include('header.php');
	include('sidebar.php');
	// Query for get title
  $query="SELECT id, title FROM site_title WHERE id = '1'";
  $result =$conn->query($query);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);

$site_title= $row[1]; // the email value

?>


<div class="container col-md-8 text-center"><br><br><br>
 <form method="post" action="action/site-title-action.php">
 	<div><?php if(isset($_SESSION['update_message'])) echo $_SESSION['update_message'];
 	unset($_SESSION['update_message']);
    ?></div>
 	<div class="form-group">
 		<input class="form-control" type="text" name="site-title" value="<?php echo $site_title; ?>" />
 	</div>
 	<div>
 		<button class="btn btn-success" type="submit" name="title-save">Save Change</button>
 	</div>
 </form>
</div>

 <?php
	include('footer.php');
 ?>