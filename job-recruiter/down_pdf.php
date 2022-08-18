<?php

include("../fj-admin/config/confg.php");
include("../session_check.php");

	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	$stmt         = mysqli_query($con, 'SELECT * FROM exp_settings');
	$site_setting = mysqli_fetch_array($stmt);
	$base_url = $site_setting['base_url'];

$user_id = $_REQUEST["user_id"];


$down_file = mt_rand(100000,999999); 

// Include autoloader
require_once 'dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();

//echo "$base_url"."job-recruiter/resumepdf.php?user_id=$user_id";
// Load content from html file
$html = file_get_contents("$base_url"."job-recruiter/resumepdf.php?user_id=$user_id");

$dompdf->loadHtml($html);

// (Optional) portrait Setup the paper size and orientation landscape portrait
$dompdf->setPaper('A4', 'landscape');

 //Render the HTML as PDF
$dompdf->render();

 //Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream("$down_file",array("Attachment"=>1));

