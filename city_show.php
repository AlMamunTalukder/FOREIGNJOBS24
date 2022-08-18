<?php 
			
			include("fj-admin/config/confg.php");
			
			$country         = addslashes($_POST["country"]);
			
			 $all_country1 = mysqli_query($con,"SELECT * FROM all_country WHERE country_name = '$country'");
			$all_country = mysqli_fetch_assoc($all_country1);
			
			$coun_id = $all_country["id"];
			
			
?>

  <div class="input-wrap">
  
	<select name="city" id="city" class="form-control"  onchange="search_advance();">
	<option value="">Select City </option>
	  	<?php
					 
					  $city_manage1 = mysqli_query($con,"SELECT * FROM city_manage WHERE country_id = '$coun_id'");
					  while ($city_manage = mysqli_fetch_assoc($city_manage1)) {
					  
				  ?>
				  
                  <option value="<?php echo $city_manage["city_name"]; ?>"><?php echo $city_manage["city_name"]; ?></option>
				  <?php } ?>
	</select>
  </div>