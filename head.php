<?php error_reporting(0);
	include("fj-admin/config/confg.php");
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	$stmt         = mysqli_query($con, 'SELECT * FROM exp_settings');
	$site_setting = mysqli_fetch_array($stmt);
	$base_url = $site_setting['base_url'];
	$title = $site_setting['title'];
	$s_com_name = $site_setting['s_com_name'];
	$s_logo = $site_setting['s_logo'];
	$m_key = $site_setting['m_key'];
	$m_desc = $site_setting['m_desc'];
?>

<title> <?php echo $title; ?> </title>


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<meta name="ROBOTS" content="INDEX, NOFOLLOW">

<link rel="shortcut icon" href="<?php echo $base_url; ?>image/f-icon.png">
<link href="<?php echo $base_url; ?>css/css-carousel.css" rel="stylesheet">

<link href="<?php echo $base_url; ?>css/css_bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $base_url; ?>css/css_style.css" rel="stylesheet">
<link href="<?php echo $base_url; ?>css/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo $base_url; ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet">





