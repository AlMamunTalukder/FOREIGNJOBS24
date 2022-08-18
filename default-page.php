<?php
	include("fj-admin/config/confg.php");
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	$cate_name = $_REQUEST["cate_name"];
	
	$stmt         = mysqli_query($con, 'SELECT * FROM exp_settings');
	$site_setting = mysqli_fetch_array($stmt);
	$base_url = $site_setting['base_url'];
	$title = $site_setting['title'];
	$s_com_name = $site_setting['s_com_name'];
	$s_logo = $site_setting['s_logo'];
	$m_key = $site_setting['m_key'];
	$m_desc = $site_setting['m_desc'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> All Jobs |  <?php echo $title; ?> </title>
<?php include 'head.php';?>
</head>
<body>
<?php include 'header-menu.php';?>
<?php  
	$page_id = addslashes($_REQUEST["page_id"]);
	 $page_run = mysqli_query($con,"SELECT * FROM pages WHERE id = '$page_id'");
	 while ($page_row = mysqli_fetch_array($page_run)) {													
		$name = $page_row['title'];
		$designation = $page_row['designation'];
	}
?>
<div class="inner-heading">
  <div class="container">
    <h3><?php echo $name; ?></h3>
  </div>
</div>

	<div class="container" style="padding: 50px 0">
		<div class="row">
			<div class="col-md-12">
				<div class="designation">
					<p><?php echo $designation; ?></p>
				</div>
			</div>
		</div>
	</div>


 
<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>

</body>
</html>