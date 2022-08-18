<?php
	include("config/confg.php");
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	
	// $page_id = addslashes($_REQUEST["page_id"]);


	$site_tiele = addslashes($_REQUEST["site_tiele"]);
	$site_meta_key = addslashes($_REQUEST["site_meta_key"]);
	$site_meta_des = addslashes($_REQUEST["site_meta_des"]);
	$site_logo = addslashes($_REQUEST["site_logo"]);
	$site_fav_icon = addslashes($_REQUEST["site_fav_icon"]);
	$banner = addslashes($_REQUEST["site_banner"]);
	$banner_link = addslashes($_REQUEST["site_banner_link"]);

	var_dump($banner);

			
	$recurator_info = mysqli_query($con, "UPDATE exp_settings SET title = '$site_tiele', meta_key = '$site_meta_key', meta_des = '$site_meta_des', logo = '$site_logo', fav = '$site_fav_icon', banner = '$banner', banner_link = '$banner_link' WHERE id = 10");

?>
			 
<script>
	location.replace("general-setting.php?succ=Job Listing Succefull");
</script>
