<?php error_reporting(0);
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Web Developer/Designer : Md. Sazzad Hossain Salim
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	//LIVE CONFIG

	$host    = 'localhost';
	$db      = 'database';
	$user    = 'root';
	$pass    = '';
	$charset = 'utf8';
	

	
	
	$con = mysqli_connect("$host", "$user", "$pass", "$db");
	mysqli_set_charset($con,$charset);
	
	if (isset($_POST)) {
		foreach ($_POST as $post_key => $post_val) {
			$_POST[$post_key] = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $_POST[$post_key]);
			$_POST[$post_key] = str_replace('<input', "", $_POST[$post_key]);
		}
	}

