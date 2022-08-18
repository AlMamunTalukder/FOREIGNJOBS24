<?php
	include("fj-admin/config/confg.php");
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com

	$stmt = mysqli_query($con,"SELECT * FROM contact_manage where id = '1'");
	$contact_manage = mysqli_fetch_array($stmt);
					
		$google_map = $contact_manage['google_map'];
		$address_con = $contact_manage['address_con'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Contact | Foreign Jobs 24</title>
<?php include 'head.php';?>
</head>
<body>
<?php include 'header-menu.php';?>

<div class="inner-heading">
  <div class="container">
    <h3>  Contact </h3>
  </div>
</div>


<div class="inner-content listing">
  <div class="container"> 



<div class="row">
      <div class="col-md-12 col-sm-12">
  		<div align="left" style="text-align:left; vertical-align:middle;">
			<?php echo $google_map; ?>
		</div>
      </div>
	  
	  <div class="col-md-7">
								<div class="conpage_title">
									<h3>GET IN TOUCH</h3>
								</div>
								<form name="mail" id="main" method="post" action="mail_ac.php" enctype="multipart/form-data">
								<div class="row">
								    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
								        <input class="form-control" name="firstname" placeholder="Firstname" type="text" required autofocus />
								    </div>
								    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
								        <input class="form-control" name="lastname" placeholder="Lastname" type="text" required />
								    </div>
								</div>
								<div class="row">
								    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
								        <input class="form-control" name="email" placeholder="E-mail" type="text" required />
								    </div>
								</div>
								<div class="row">
								    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
								        <input class="form-control" name="subject" placeholder="Subject" type="text" required />
								    </div>
								</div>
								<div class="row">
								    <div class="col-lg-12 col-md-12 col-sm-12">
								        <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="message" required></textarea>
								    </div>
								</div>
								</br>
								<input type="submit" class="btn btn-success con_sent" value="Send">
								</form>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="conpage_title">
									<h3>CONTACT INFO</h3>
								</div>
								<?php
				
								$contact_manage_r = mysqli_query($con,"SELECT * FROM contact_manage where id = '1'");
								$contact_manage = mysqli_fetch_array($contact_manage_r);
									
									$address_con = $contact_manage['address_con'];
									
								$site_setting_r = mysqli_query($con,"SELECT * FROM site_setting");
								$site_setting = mysqli_fetch_array($site_setting_r);
									
									$admin_email = $site_setting['admin_email'];
									$hotline_number = $site_setting['hotline_number'];
									
								
							?>
								<div class="address">
									
									<?php echo $address_con; ?>
								
								</div>
								
								
							</div>
	  
    </div>
    
    <!--Job Listing End--> 
  </div>
</div>



 
<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>

</body>
</html>