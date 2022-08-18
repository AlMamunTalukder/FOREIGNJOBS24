<?php include 'includes/header.php'; ?>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
                <i class="fa fa-bars"></i>
            </button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
       
                    <div class="header-block header-block-nav">
                      
                    </div>
                </header>
               <?php include 'includes/sidebar.php'; ?>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content items-list-page">
                  <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                  
                                    <h3 class="title"> Add Page </h3>
                                    
                                    
                                </div>
                            </div>
                        </div>
                      
                  </div>
                  <div class="row">
                    <div class="offset-md-1 col-md-9">
                        
                        <div class="card card-block">
                        <?php 
                            if (isset($_POST['page_add'])) {
                               $page_name = $_POST['page_name']; 
                               $page_content = $_POST['page_content'];
                               $feature_image = $_FILES['feature_image']['name'];  
                               $tmp_feature_image = $_FILES['feature_image']['tmp_name'];
                               $page_insert = "INSERT INTO `exp_pages`(`page_name`, `page_content`, `feature_image`) VALUES('$page_name','$page_content','$feature_image') ";
                               if (mysqli_query($connection,$page_insert)) {
                                   echo "<div class='alert alert-success' role='alert'>
                                            Page has been added
                                    </div>";
                                    $path1 = "images/$feature_image" ;
                                    move_uploaded_file ($tmp_feature_image,$path1) ;
                                    header("Refresh:0; url=exp_page.php");
                               }else{
                                echo mysqli_error($connection);
                               }
                            }
                           ?>
                            <div class="page_add_form">
                                 <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group"> 
                                          <label class="control-label">Page Name</label> 
                                          <input type="text" name="page_name" id="page_name" class="form-control boxed"> 
                                      
                                       
                                        <div class="form-group"> 
                                          <label class="control-label">Page Content</label> 
                                          <textarea class="form-control boxed" name="page_content" id="page_content" style="height: 300px;"></textarea>
                                        </div>
                                         <div class="form-group">
                                          <label for="logo">Feature Image</label>
                                          <input type="file" name="feature_image" id="feature_image" class="form-control-file" >
                                        </div>
                                        
                                       <div class="row">
                                         <div class="offset-md-5 col-md-2">
                                            <div class="form-group">
                                          <input type="submit" name="page_add" class="btn btn-success" id="page_add" value="Add Page">
                                        </div>  
                                         </div>
                                       </div>
                                        
                                    </form>  

                            </div>
                        
                        </div>
                  

           
                                                    
    


                    </div>
                  </div>
                 
                    
                     

                  
                </article>
                <footer class="footer">
                    <div class="footer-block buttons"> <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe> </div>
                    <div class="footer-block author">
                        <ul>
                            <li> created by <a href="https://github.com/modularcode">ModularCode</a> </li>
                            <li> <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a> </li>
                        </ul>
                    </div>
                </footer>
                
              
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>












































  <?php include 'includes/footer.php'; ?>










