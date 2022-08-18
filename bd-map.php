<?php 
	
	if($c = $_SESSION["c"]){
				$c = $_SESSION["c"];

	$ct1 = mysqli_query($con,"SELECT * FROM all_country where country_name = '$c'");
	 $all_country = mysqli_fetch_assoc($ct1);
	 
	 $map_code = $all_country["map_code"];
	 $country_name = $all_country["country_name"];
	 $country_id = $all_country["id"];
	
	} else {
	 $c = "Bangladesh";
	 $ct1 = mysqli_query($con,"SELECT * FROM all_country where country_name = '$c'");
	 $all_country = mysqli_fetch_assoc($ct1);
	 
	 $map_code = $all_country["map_code"];
	 $country_name = $all_country["country_name"];
	 $country_id = $all_country["id"];
		
	}
?>

<style>
path{ 
fill:  #154462 !important; 
stroke:  #ffffff !important; 
}

path:hover{
fill:  #1544624d !important; 
stroke:  #ffffff !important; 
cursor:pointer;
}
</style>

 <h3> <?php echo $c; ?> </h3>

 	
<div class="embed-responsive-item" id="country_map_sag" onclick="country_map_sag();" style="" ><!--?xml version="1.0"?-->
	
	<?php echo $map_code; ?> 

</div>


<script>

function country_map_sag(){
		window.location.href="country.php?c=<?php echo $c; ?>"
	}

</script>