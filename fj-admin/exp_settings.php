<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");

	include 'paginate.php';

	

//////////////////////////////////////////////////////////////////////////////////////////////////////
	// this is for pagination
	//////////////////////////////////////////////////////////////////////////////////////////////////////
	// set $limit (per page) for pagination
	$limit = 25;
	
	
						 //show records
           			 	$query =  mysqli_query($con,"SELECT * FROM city_manage ORDER BY ID ASC ");
						$total_rows = mysqli_num_rows($query);
	
	$page;
	// prepare $_GET['page'] variable for pagination
	if(isset($_GET['page']) && (int)$_GET['page']){
		
		if($_GET['page'] > ceil($total_rows/$limit)){
			$page = 1;
		} else {
			$page = $_GET['page'];
		}
		
	} else {
		$_GET['page'] = 1;
		$page = 1;
	}
	
	

	$current = ($page - 1) * $limit;
	
	// current set of data to be displayed
	$current_display = ceil($total_pages/$_GET['page']);

?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  Settings    </h1>
                        <p class="title-description"> All Settings </p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
									
                                        <div class="card-title-block">
                                            <h3 class="title"> Settings </h3>
                                        </div>
										
                                        <section class="example">
										<div class="table-responsive">
                                            
											<?php 
                            if (isset($_POST['submit'])) {
                              $title = mysqli_real_escape_string($connection, $_POST['title']);
                              $copyright = mysqli_real_escape_string($connection, $_POST['copyright']);
                              $meta_keyword = mysqli_real_escape_string($connection, $_POST['meta_key']);
                              $meta_des = mysqli_real_escape_string($connection, $_POST['meta_des']);
                              $logo = $_FILES['logo']['name'];  
                              $tmp_logo = $_FILES['logo']['tmp_name'];
                              $fav = $_FILES['fav']['name'];  
                              $tmp_fav= $_FILES['fav']['tmp_name'];

                              // inserting new setting

                              $insert_setting = "INSERT INTO `exp_settings`(`title`, `copyright`, `meta_key`, `meta_des`, `logo`, `fav`) VALUES ('$title','$copyright','$meta_keyword','$meta_des','$logo','$fav') ";
                              if (mysqli_query($connection,$insert_setting)) {
                                      echo "<div class='alert alert-success' role='alert'>
                                            Settings has been added
                                    </div>";
                                    $path1 = "images/$logo";
                                    move_uploaded_file ($tmp_logo,$path1);
                                    $path2 = "images/$fav";
                                    move_uploaded_file ($tmp_fav,$path2);
                                   header("Refresh:0");
                              }else{
                                echo mysqli_error($connection);
                              }

                            }

                           ?> 



                        <?php 
                          $setting_fetch = "SELECT * FROM exp_settings ORDER BY id ";
                          $setting_run =  mysqli_query($connection,$setting_fetch);
                          if (mysqli_num_rows($setting_run)) {
                            $setting_row = mysqli_fetch_array($setting_run);
                            $title_name = $setting_row['title'];
                            $copyright_name = $setting_row['copyright'];
                            $meta_key_name = $setting_row['meta_key'];
                            $meta_des_name = $setting_row['meta_des'];
                            $logo_name = $setting_row['logo'];
                            $fav_name = $setting_row['fav'];
                            $id = $setting_row['id'];
                          } 
                          //Updating prev setting
                          if (isset($_POST['update_setting'])) {
                              $title = mysqli_real_escape_string($connection, $_POST['prev_title']);
                              $copyright = mysqli_real_escape_string($connection, $_POST['prev_copyright']);
                              $meta_keyword = mysqli_real_escape_string($connection, $_POST['prev_meta_key']);
                              $meta_des = mysqli_real_escape_string($connection, $_POST['prev_meta_des']);
                              $id = $_POST['setting_id'];
                              $logo = $_FILES['logo']['name'];  
                              $tmp_logo = $_FILES['logo']['tmp_name'];
                              $fav = $_FILES['fav']['name'];  
                              $tmp_fav = $_FILES['fav']['tmp_name'];
                              if (empty($logo)) {
                                $logo = $logo_name ;
                              }
                              if (empty($fav)) {
                                $fav = $fav_name ;
                              }
                            

                              $setting_update = " UPDATE `exp_settings` SET `title`='$title' ,`copyright`='$copyright',`meta_key`='$meta_keyword',`meta_des`='$meta_des',`logo`='$logo',`fav`='$fav' WHERE id = $id ";
                              if (mysqli_query($connection,$setting_update)) {
                                      echo "<div class='alert alert-success' role='alert'>
                                            Settings has been updated
                                    </div>";
                                    $path3 = "images/$logo";
                                    move_uploaded_file ($tmp_logo,$path3);
                                    $path4 = "images/$fav";
                                    move_uploaded_file ($tmp_fav,$path4);
                                   header("Refresh:0");
                              }else{
                                echo mysqli_error($connection);
                              }


                          }


                         ?>
                             <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group"> 
                                          <label class="control-label">Title</label> 
                                          <input type="text" name="prev_title" id="title" class="form-control boxed" value="<?php echo "$title_name" ?> "> 
                                        </div>
                                        <div class="form-group"> 
                                          <label class="control-label">Copyright</label> 
                                          <input type="text" name="prev_copyright" id="copyright" class="form-control boxed" value="<?php echo "$copyright_name" ?> " > 
                                        </div>
                                        <div class="form-group"> 
                                          <label class="control-label">Meta Keyword</label> 
                                          <input type="text" name="prev_meta_key" id="meta_key" class="form-control boxed"
                                          value="<?php echo "$meta_key_name" ?> "> 
                                        </div>
                                        <div class="form-group"> 
                                          <label class="control-label">Meta Description</label> 
                                          <textarea class="form-control boxed" name="prev_meta_des" id="meta_des"><?php echo "$meta_des_name"; ?> </textarea>
                                        </div>
                                       
                                         <div class="logo_view">
                                            <?php 
                                              if (isset($logo_name)) {
                                               echo "<img src='images/$logo_name' width = '100%'> ";
                                              }
                                             ?>
                                            

                                         </div>
                                          <div class="form-group">
                                              <label for="logo">Update Logo</label>
                                              <input type="file" name="logo" id="logo" class="form-control-file" id="logo">
                                         </div>
                                          <div class="logo_view">
                                            <?php 
                                              if (isset($fav_name)) {
                                               echo "<img src='images/$fav_name' width = '100%'> ";
                                              }
                                             ?>
                                            

                                         </div>
                                        
                                         <div class="form-group">
                                              <label for="favicon">Update Fav icon</label>
                                              <input type="file"  name="fav" id="fav" class="form-control-file" id="favicon">
                                         </div>
                                
                                     
                                        <br>
                                       <div class="row">
                                         <div class="offset-md-5 col-md-2">
                                          <div class="form-group">
                                           <input type="hidden" name="setting_id" id="setting_id" value="<?php echo $id  ?> ">
                                           <input type="submit" class="btn btn-success" name="update_setting" id="update_setting" value="Update">
                                          </div>
                                          
                                         </div>
                                       </div>
                                       
                                        
                                    </form>  
											
										</div>
                                        </section>
									
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>


<?php
	include("footer.php");
?>