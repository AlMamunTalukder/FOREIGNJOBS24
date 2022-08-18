<?php
	error_reporting(0);
$sesc = true;
if(strlen(session_id()) < 1) {
	session_start();
}
if(! $_SESSION['user_id'])
{
?>
<script language="javascript" type="text/javascript">
alert("Invalid User");
location.replace("<?php echo $base_url; ?>login.php");
</script>
<?php
}
?>