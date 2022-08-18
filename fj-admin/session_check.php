<?php
	error_reporting(0);
$sesc = true;
if(strlen(session_id()) < 1) {
	session_start();
}
if(! $_SESSION['sup_user'])
{
?>
<script language="javascript" type="text/javascript">
alert("Invalid User");
location.replace("index.php");
</script>
<?php
}
?>