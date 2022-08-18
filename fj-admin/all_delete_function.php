<?php 

	include 'config/confg.php'; 

	
	 $id = $_REQUEST['id'];
	
	 $table_name = $_REQUEST['table_name'];

	$t1 = mysqli_query($con,"delete from $table_name where id = '$id'");

	
?>
