<?php
	include("../fj-admin/config/confg.php");
	include("../session_check.php");

	$user_id = $_SESSION["user_id"];

		
	date_default_timezone_set("Asia/Dhaka");
	$date = date("Y-m-d");
	
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Web Developer/Designer : Md. Sazzad Hossain Salim
	//@Author : StarFDC
	//@Cell : +88 01922 52 44 69
	//@Website : www.starfdc.com
	
	
	// IMAGE UPLOAD ///////////////////////
	$folder = "rec_pho/";
	$extention = strrchr($_FILES['rec_pho']['name'], ".");
	$new_name = time();
	$rec_pho = $new_name.$extention;
	$uploaddir = $folder . $rec_pho;
	move_uploaded_file($_FILES['rec_pho']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////

	// IMAGE UPLOAD ///////////////////////
	$folder = "f_part/";
	$extention = strrchr($_FILES['f_part']['name'], ".");
	$new_name = time();
	$f_part = $new_name.$extention;
	$uploaddir = $folder . $f_part;
	move_uploaded_file($_FILES['f_part']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////

	// IMAGE UPLOAD ///////////////////////
	$folder = "b_part/";
	$extention = strrchr($_FILES['b_part']['name'], ".");
	$new_name = time();
	$b_part = $new_name.$extention;
	$uploaddir = $folder . $b_part;
	move_uploaded_file($_FILES['b_part']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////

// IMAGE UPLOAD ///////////////////////
	$folder = "etin/";
	$extention = strrchr($_FILES['etin']['name'], ".");
	$new_name = time();
	$etin = $new_name.$extention;
	$uploaddir = $folder . $etin;
	move_uploaded_file($_FILES['etin']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////

// IMAGE UPLOAD ///////////////////////
	$folder = "c_i/";
	$extention = strrchr($_FILES['c_i']['name'], ".");
	$new_name = time();
	$c_i = $new_name.$extention;
	$uploaddir = $folder . $c_i;
	move_uploaded_file($_FILES['c_i']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////

// IMAGE UPLOAD ///////////////////////
	$folder = "a_a/";
	$extention = strrchr($_FILES['a_a']['name'], ".");
	$new_name = time();
	$a_a = $new_name.$extention;
	$uploaddir = $folder . $a_a;
	move_uploaded_file($_FILES['a_a']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////

// IMAGE UPLOAD ///////////////////////
	$folder = "m_a/";
	$extention = strrchr($_FILES['m_a']['name'], ".");
	$new_name = time();
	$m_a = $new_name.$extention;
	$uploaddir = $folder . $m_a;
	move_uploaded_file($_FILES['m_a']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////
	
	
	
		$recurator_info = mysqli_query($con, "INSERT INTO `recurator_verification` (`id`, `user_id`, `rec_pho`, `f_part`, `b_part`, `etin`, `c_i`, `a_a`, `m_a`, `date`) VALUES (NULL, '$user_id', '$rec_pho', '$f_part', '$b_part', '$etin', '$c_i', '$a_a', '$m_a', '$date')");
	
?>
<script>
location.replace("profile_verificaiton.php");
</script>