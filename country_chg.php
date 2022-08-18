<?php session_start();
		
		$c = $_REQUEST["c"]; 
		$_SESSION["c"] = $c;

?>
<script>
location.replace("index.php");
</script>