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
                                  
                                    <h3 class="title"> Pages <a href="exp_add_page.php"><button class="btn btn-success" > Add New</button> </a> </h3>
                                    
                                    <p class="title-description"> List of sample menus - e.g. home, about, service, etc... </p>
                                </div>
                            </div>
                        </div>
                      
                  </div>
                  <div class="row">
                      <div class="col-md-8">
                        <?php if (isset($_GET['delete'])) {
                          $delete_id = $_GET['delete'];
                          $delete_query= "DELETE FROM `exp_pages` WHERE id = $delete_id ";
                          if (mysqli_query($connection,$delete_query)) {
                            echo "<div class='alert alert-danger' role='alert'>
                                            Page has been deleted
                                    </div>";
                                 header("Refresh:0; url=exp_page.php");
                          }
                        } ?>
                       <h3> Page Table</h3>
                       <hr>
                       <div class="page_table" id="page_table">
                        <?php 
                        $fetch = "SELECT * FROM exp_pages ORDER BY id DESC";
                        $run = mysqli_query($connection,$fetch);
                        if (mysqli_num_rows($run) > 0) {
                          
                        
                           ?>
                        <table class="table ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">page Name</th>
                          
                            <th scope="col">Action</th>

                           
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            while ($row =mysqli_fetch_array($run)) {
                            $page_id = $row['id'];
                            $page_name = $row['page_name'];

                           ?>
                          <tr>
                            <th scope="row"><?php echo $page_id; ?> </th>
                            <td><?php echo "$page_name"; ?> </td>
                      
                            <td><button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="view">
                                <i class="fa fa-eye" aria-hidden="true"></i></button> 
                                   <a href="exp_edit_page.php?edit=<?php echo $page_id ?>"><button class="btn btn-primary" name="edit"  data-toggle="tooltip" data-placement="top" title="edit"><i class="fa fa-pencil" aria-hidden="true"></i></button> </a><a href="exp_page.php?delete=<?php echo $page_id ?> ">
                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                   </td>
                    
                          </tr>
                          <?php } ?>
                      
                     
                        </tbody>
                      </table>
                      <?php } ?>
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










