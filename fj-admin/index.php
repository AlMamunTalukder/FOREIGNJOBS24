<?php 
	session_start();
include 'config/confg.php'; 

	//@Author : Md. Saiful Islam Sagor.
	//@E-Mail : sagordpi21@gmail.com
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com

	$stmt = mysqli_query($con,'SELECT * FROM exp_settings');
	$site_setting = mysqli_fetch_array($stmt);
	

	   $base_url = $site_setting['base_url'];
	   
	   $title = $site_setting['title'];
	   
	   $fav = $site_setting['fav'];
	   
	   $logo = $site_setting['logo'];
	   
	   $m_key = $site_setting['m_key'];
	   
	   $m_desc = $site_setting['m_desc'];
	   
	  	$user = $_SESSION['sup_user'];
	   
	   if(!empty($user)){
	   		 header('Location: dashboard.php');
	   }
	   
	   
	   

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> <?php echo $title; ?> </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/<?php echo $fav; ?>"/>

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	
	<div class="limiter">
		<div class="container-login100" style=" background-image: url(images/login_body-3.jpg);">
			<div class="wrap-login100 p-t-30 p-b-50">
				
				<form class="login100-form validate-form p-b-33 p-t-5" action="login_action.php" method="post" enctype="multipart/form-data" >
					
					<span class="login100-form-title" style="padding-top:25px;padding-bottom:25px;">
						<img src="images/<?php echo $logo; ?>" style="width:75%;">		
					</span>
					

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
					
						<input class="input100" type="text" name="username" placeholder="Enter Username" autocomplete="off" required>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
					
						<input class="input100" type="password" name="password" placeholder="Enter Password" autocomplete="off" required>
						
					</div>

					<div class="container-login100-form-btn m-t-32">
					
						<button class="login100-form-btn" type="submit" name="login_submit">Login</button>
						<a class="forgot_pass" href="forgot_pass.php">Forgot Password</a>
						
					</div>
					
				</form>
				
			</div>
		</div>
	</div>

</body>
</html>