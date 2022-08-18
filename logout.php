<?php 
	session_start();
	$_SESSION['user_id'] = "";
	session_destroy();

?>
<script language="javascript" type="text/javascript">
location.replace("index.php");
</script>