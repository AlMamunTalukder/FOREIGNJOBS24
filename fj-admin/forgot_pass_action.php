<?php
	error_reporting(0);
	session_start();
	include 'config/confg.php'; 
	
	$username     = addslashes($_REQUEST['username']);
	 $password	  = md5($_REQUEST['password']);
	
	
		$q1     = mysqli_query($con, "select * from sup_ad_log where sup_user = '$username' and status = '1'");
		$r1     = mysqli_fetch_array($q1);
		
			$sup_user = $r1['sup_user'];
			$sup_pass = $r1['sup_pass'];

			
			if ($username == $sup_user) {

				$_SESSION['sup_user'] = $sup_user;

					$check_password	  = $_REQUEST['password'];
					$check_agin_password	  = $_REQUEST['agin_password'];
					if ($check_password === $check_agin_password) {
						$q_pass_update     = mysqli_query($con, "UPDATE sup_ad_log SET sup_pass='$password' WHERE sup_user='$sup_user'");
						$r1     = mysqli_fetch_array($q_pass_update);
					} else{
						?>
						<script language="javascript" type="text/javascript">
							alert("Your New Password And Agin Password Do No Match.");
							location.replace('index.php');
						</script>
						<?php
					}
				
				?>
				<script language="javascript" type="text/javascript">
					location.replace('dashboard.php');
				</script>
				
				<?php
					} else {
				?>
				
				<script language="javascript" type="text/javascript">
					alert("Your Username Or Password Do No Match.");
					location.replace('index.php');
				</script>
				
				<?php
			}
?>
		
		