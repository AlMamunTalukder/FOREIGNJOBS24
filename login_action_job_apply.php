<?php session_start();
//Require Database Connection
	include("fj-admin/config/confg.php");
//Login Form Values
	$username        = addslashes($_REQUEST['username']);
	$password        = addslashes($_REQUEST['password']); //Sha256 Hash
	
	$back = addslashes($_REQUEST['back']);
	
	$stmt        = mysqli_query($con, "SELECT * FROM job_seeker_info WHERE email='$username' ");
	$user_result = mysqli_num_rows($stmt);
	if ($user_result == 1) { //Jodi Kisu Paowa jay...
		$user_login = mysqli_fetch_array($stmt);
		
		$password_db   = $user_login['password'];
		$user_id = $user_login['user_id'];
		$email = $user_login['email'];

		
		if ($password_db == $password) { //Jodi Password and Database Password Match hoy...
			$user_id             = $user_login['user_id'];
			$_SESSION["user_id"] = $user_id;
			
				?>
				
				<script>
					location.replace("<?php echo $back; ?>");
				</script>
				
				<?php
			
		} else {
			//Abar Login PAge...
			$message = 'Username and Password do not match!!!';
			?>
			<script>
				location.replace("<?php echo $back; ?>");
			</script>
			<?php
		}
	} else {
		
		$message1 = 'You are not a register member. Please Register for Login !!!';
		?>
		<script>
			location.replace("<?php echo $back; ?>");
		</script>
	<?php } ?>