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
			
			if ($password == $sup_pass) {
			
				$_SESSION['sup_user'] = $sup_user;
				
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
		
		