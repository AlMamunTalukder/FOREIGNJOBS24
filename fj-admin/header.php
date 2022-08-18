<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	
	$stmt = mysqli_query($con,'SELECT * FROM exp_settings');
	$site_setting = mysqli_fetch_array($stmt);
	

	   $base_url = $site_setting['base_url'];
	   
	   $title = $site_setting['title'];
	   
	   $fav = $site_setting['fav'];
	   
	   $logo = $site_setting['logo'];
	   
	   $project_name = $site_setting['project_name'];

	   $user = $_SESSION['sup_user'];
	
?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php echo $title; ?> |  Admin Panel </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<link rel="icon" type="image/png" href="images/<?php echo $fav; ?>"/>
		
        <!-- bootstrap -->

        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" href="style.css">
		
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-red.css">');
            }
        </script>
    </head>
	 <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
                <i class="fa fa-bars"></i>
            </button> </div>
                    <div class="header-block header-block-search ">
						   <div class="header-block header-block-buttons"> 
						<span>
							<a href="../index.php" target="_blank" class="btn header-btn btn-lg btn-block" style="background-color: #154462; color:#ffffff; border:1px solid #154462; font-size:14px;">
								<strong><?php echo $project_name; ?> | Admin Panel</strong>
							</a> 
						</span>
						</div>
                    </div>
                   
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('images/icon.png')"> </div> 
									<span class="name">
								  		Foreign Job 24 Admin
									</span> 
								</a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1"> <!--<a class="dropdown-item" href="#">
								  <i class="fa fa-user icon"></i>
								  Profile
								</a> <a class="dropdown-item" href="#">
								  <i class="fa fa-bell icon"></i>
								  Notifications
								</a> <a class="dropdown-item" href="#">
								  
								  <i class="fas fa-cogs icon"></i>
								  Settings
								</a>-->
								<div class="dropdown-divider"></div> <a class="dropdown-item" href="logout.php">
								  <i class="fa fa-power-off icon"></i>
								  Logout
								</a> 
								</div>
								
                            </li>
                        </ul>
                    </div>
                </header>