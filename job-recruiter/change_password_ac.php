<?php
	include("../fj-admin/config/confg.php");
	include("../session_check.php");

	$user_id = $_SESSION["user_id"];
	
	$user_resume = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$user_id' ");
	$rec_ver_data = mysqli_fetch_array($user_resume);
	
	$password = $rec_ver_data["password"];
	
	$c_pass = addslashes($_REQUEST["c_pass"]);
	$n_pass = addslashes($_REQUEST["n_pass"]);
	$c_n_pass = addslashes($_REQUEST["c_n_pass"]);
	
	if($c_pass == $password){
	
			if($n_pass == $c_n_pass){
			
			$recurator_info = mysqli_query($con, "UPDATE recurator_info SET password = '$n_pass'
			
			 WHERE user_id = '$user_id'");
			 
			 $message = 'Password successfully update';
			 
			 ?>
			 
			<script>
			location.replace("change_password.php?succ=<?php echo $message; ?>");
			</script>
		
			<?php
			
			} else {
			
			//Abar Login PAge...
					$message = 'Password and Confirm Password do not match!!!';
					?>
					<script>
						location.replace("change_password.php?error_view=<?php echo $message; ?>");
					</script>
					<?php
			
			}
	
	} else { 
	//Abar Login PAge...
			$message = 'Current Password do not match!!!';
			?>
			<script>
				location.replace("change_password.php?error_view=<?php echo $message; ?>");
			</script>
			<?php
		}
?>
