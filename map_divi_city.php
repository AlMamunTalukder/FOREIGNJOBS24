 <div class="col-md-3 col-sm-3">
           <?php include "bd-map.php" ;?>
          </div>


           <div  class="col-md-3 col-sm-3">
           
           
             <div class="footer-links div_city">
			  <h3>State/Division</h3>
			    <?php
				
				$country_name = $all_country["country_name"];
				$country_id = $all_country["id"];
				
					  $qd1 = mysqli_query($con,"SELECT * FROM division_manage WHERE country_id = '$country_id' ORDER BY ID ASC limit 0,8");

					  $qdrt1 = mysqli_query($con,"SELECT * FROM division_manage WHERE country_id = '$country_id' ORDER BY ID ASC");
					  $qdiv = mysqli_num_rows($qdrt1);

					  while ($division_manage = mysqli_fetch_assoc($qd1)) {
				?>
              <li><a href="division.php?d=<?php echo $division_name = $division_manage['division_name']; ?>"><?php echo $division_name = $division_manage['division_name']; ?></a></li>
			  <?php } ?>
			  
			  <?php if($qdiv>8) { ?>
			  
			  <li><a href="division_list.php"><strong>More State/Division</strong></a></li>
			  
			  <?php } ?>
			  
			  <h3>City</h3>

              <?php
					  $qc1 = mysqli_query($con,"SELECT * FROM city_manage WHERE country_id = '$country_id' ORDER BY ID ASC limit 0,8");
					  $qdrgtat1 = mysqli_query($con,"SELECT * FROM city_manage WHERE country_id = '$country_id' ORDER BY ID ASC");
					  $qdiv12 = mysqli_num_rows($qdrgtat1);
					  while ($city_manage = mysqli_fetch_assoc($qc1)) {
				?>
              <li><a href="city.php?city=<?php echo $city_name = $city_manage['city_name']; ?>"><?php echo $city_name = $city_manage['city_name']; ?></a></li>
			  <?php } ?>
			  
			   <?php if($qdiv12>8) { ?>
			  
			  <li><a href="city_list.php"><strong>More City</strong></a></li>
			  
			  <?php } ?>
			  

            </div>

          </div>
</div>
</div>

