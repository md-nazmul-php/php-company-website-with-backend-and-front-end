<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "global";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function FaviconImage($file1,$file2,$file3,$userName,$table="pictures",$pk="id",$updatewhom="picture_name"){
					$page=$_SERVER['PHP_SELF'];
					if(is_uploaded_file($file1)){
						if($file3 !="image/jpeg" && $file3 !="image/png"){
							echo "<p> Images Must be Uploades in jpg or png Format </p>";
						}else{
							$loc="uploads/$userName";
							if(!is_dir($loc)){
								mkdir("$loc");
								@closedir($loc);
							}
							$result= move_uploaded_file($file1, $loc."/".$file2);
							if($result==1){
								if($this->UpdateSingleColumn("$updatewhom",$file2,"$pk","$userName","$table")=="1")
									echo "<meta http-equiv='refresh' content='0'>";
									// header("Refresh:0; url:$page");
									// header('location: edit-admin-profile.php');
									// echo "<h5>New Picture uploaded successfully, <a href='edit-admin-profile.php'>Refresh Page</a></h5>";
							}
							else
								echo "<p>There was a problem uploading the file.</p>";
						}
					}
				}




 ?>