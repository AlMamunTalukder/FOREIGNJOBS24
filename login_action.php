<?php session_start();
//Require Database Connection
	include("fj-admin/config/confg.php");
//Login Form Values
	$username        = addslashes($_REQUEST['username']);
	$password        = addslashes($_REQUEST['password']); //Sha256 Hash
	
$stmt = mysqli_query($con, "SELECT * FROM job_seeker_info WHERE email='$username' and status='0'");
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
					location.replace("welcome.php");
				</script>
				
				<?php
			
		} else {
			//Abar Login PAge...
			$message = 'Username and Password do not match!!!';
			?>
			<script>
				location.replace("login.php?error_view=<?php echo $message; ?>");
			</script>
			<?php
		}
	} else {
		
	
	
	$stmt = mysqli_query($con, "SELECT * FROM recurator_info WHERE email='$username' ");
	$user_result = mysqli_num_rows($stmt);
	if ($user_result == 1) { //Jodi Kisu Paowa jay...
		$user_login = mysqli_fetch_array($stmt);
		 $password_db   = $user_login['password'];

		
		
		if ($password_db == $password) { //Jodi Password and Database Password Match hoy...
			$user_id             = $user_login['user_id'];
			$_SESSION["user_id"] = $user_id;

				$subscribe_user_id = $_SESSION["user_id"];
				$subscribe_user_db = mysqli_query($con,"SELECT * FROM subscribe WHERE user_id='$subscribe_user_id'");
				$subscribe_user_row = mysqli_fetch_array($subscribe_user_db);

				if ($subscribe_user_row["v_active"] == 1) {
				?>
				<script>
					location.replace("job-recruiter/dashboard.php");
				</script>
				<?php
					}else{
				?>
				<script>
					location.replace("job-recruiter/subscribe.php");
				</script>
				<?php
				}
			
		} else {
			//Abar Login PAge...
			$message = 'Username and Password do not match!!!';
			?>
			<script>
				location.replace("login.php?error_view=<?php echo $message; ?>");
			</script>
			<?php
		}
	
	} else {
	
	$message1 = 'You are not a register member. Please Register for Login !!!';
		?>
		<script>
			location.replace("login.php?error_view=<?php echo $message1; ?>");
		</script>
		<?php
	
	}
	
		$message1 = 'You are not a register member. Please Register for Login !!!';
		?>
		<script>
			location.replace("login.php?error_view=<?php echo $message1; ?>");
		</script>
		<?php
	}
?>