<?php 
include 'includes/db.php';

if (isset($_POST)) {
	$page_name = $_POST['page_name'];
	$insert = "INSERT INTO `page`(`page_name`) VALUES ('$page_name') ";
	if (mysqli_query($connection, $insert)) {
		$fetch = "SELECT * FROM page";
		$run = mysqli_query($connection,$fetch);
		?>
		  <table class="table ">
                        <thead>
                          <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">page Name</th>
                          
                            <th scope="col">Action</th>

                           
                          </tr>
                        </thead>
                        <tbody>
                        	<?php while ($row = mysqli_fetch_array($run)) {
                        		$page_id = $row['id'];
                        		$page_name = $row['page_name'];
                        	?>
                          <tr>
                            <th scope="row"><?php echo $page_id; ?> </th>
                            <td><?php echo "$page_name"; ?> </td>
                      
                            <td><button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="view">
                                <i class="fa fa-eye" aria-hidden="true"></i></button> 
                                   <a href=""><button class="btn btn-primary" name="edit" id= data-toggle="tooltip" data-placement="top" title="edit"><i class="fa fa-pencil" aria-hidden="true"></i></button> </a><a href="">
                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                   </td>
                    
                          </tr>
                          <?php } ?>
                       
                     
                        </tbody>
            </table>


		<?php
		
	}
}


 ?>