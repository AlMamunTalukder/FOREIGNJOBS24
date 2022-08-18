  <!--Job Listing Start-->
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <div class="leftSidebar">
        <div class="filter">Search Listings</div>
          <div class="sidebarpad">
            <form>
             
			 
			  <div class="input-wrap">
			  <button style="margin-top: 21px;" class="btn btn-default btn-block" id="search_clear" type="button" onclick="location.replace('all_jobs.php');">Clear Search</button>
			  </div>

              <h4>Industry</h4>
			 
			  
              <div class="input-wrap">
                <select name="category" id="category_filter" class="form-control" onchange="search_advance();">
                  <option value="">Category </option>
				  
				  <?php
						$q1 = mysqli_query($con, "SELECT * FROM job_categories order by cate_name asc ");
						while($job_categories = mysqli_fetch_array($q1)){
						
							$cate_id = $job_categories["id"];
							$cate_name = $job_categories["cate_name"];
							
					?>
                  <option value="<?php echo $cate_name; ?>"><?php echo $cate_name; ?></option>
				  <?php } ?>
                  
                </select>
              </div>
			  
              <h4> Country </h4>
              <div class="input-wrap">
			  
                <select name="country" id="country" class="form-control"  onchange="search_advance(); city_show();">
                  <option value="">Select Country </option>
				  
			   	<?php
					 
					  $job_cat = mysqli_query($con,"SELECT * FROM all_country order by country_name asc");
					  while ($job_cat_view = mysqli_fetch_assoc($job_cat)) {
					  
				  ?>
				  
                  <option value="<?php echo $job_cat_view["country_name"]; ?>"><?php echo $job_cat_view["country_name"]; ?></option>
				  <?php } ?>
				  
                </select>
              </div>
			  
			  <h4> City </h4>
			  
			  <div id="city_show">
				  <div class="input-wrap">
				  
					<select name="city" id="city" class="form-control" >
					  <option value="">Select City </option>
					</select>
				  </div>
         	  </div>
              
			  <h4> Type </h4>
              <div class="input-wrap">
			  
                <select name="job_type" id="job_type" class="form-control"  onchange="search_advance();">
                  <option value="">Select Job Type </option>
			
                  <option value="Full Time">Full Time</option>
				  <option value="Part Time">Part Time</option>
				
                </select>
              </div>
			

           
            </form>
            
          </div>
        </div>
      </div>
	  
	  <script type="text/javascript" src="custom_js/filter.js"></script>
	  <style>
		  #loading{display:none}
		  #search_clear{display:none;padding:15px}
	  </style>
	  
	