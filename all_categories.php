<div class="col-md-3 col-sm-3">
            <h3><i class="fa fa-bars" aria-hidden="true"></i> Browse Category </h3>
			
            <ul class="footer-links">
			
			<?php
				$q1 = mysqli_query($con, "SELECT * FROM job_categories order by cate_name asc limit 0,14");
				while($job_categories = mysqli_fetch_array($q1)){
				
					$cate_id = $job_categories["id"];
					$cate_name = $job_categories["cate_name"];
					
			?>
			
              <li><a href="<?php echo $base_url; ?>catgeory.php?cate_name=<?php echo $cate_name; ?>"><?php echo $cate_name; ?> </a></li>
			  
			<?php } ?>
			
              
            </ul>

          </div>

          <div class="col-md-3 col-sm-3">
            <h3>&nbsp;</h3>
			
            <ul class="footer-links">
             
			 <?php
				$q1 = mysqli_query($con, "SELECT * FROM job_categories order by cate_name asc limit 15,28");
				while($job_categories = mysqli_fetch_array($q1)){
				
					$cate_id = $job_categories["id"];
					$cate_name = $job_categories["cate_name"];
					
			?>
			
              <li><a href="<?php echo $base_url; ?>catgeory.php?cate_name=<?php echo $cate_name; ?>"><?php echo $cate_name; ?> </a></li>
			  
			<?php } ?>
			
			<li><a href="category_list.php"><strong>All Categoryies </strong></a></li>
			
			 
            </ul>
			
            
          </div>