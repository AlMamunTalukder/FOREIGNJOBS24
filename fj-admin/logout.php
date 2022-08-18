<?php 
	session_start();
	$_SESSION['sup_user'] = "";
	session_destroy();

?>
<script language="javascript" type="text/javascript">
location.replace("index.php");
</script>