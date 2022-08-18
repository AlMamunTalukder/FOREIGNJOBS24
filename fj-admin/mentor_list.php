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
$query =  mysqli_query($con,"SELECT * FROM mentor_pre_info WHERE status = '1' ORDER BY ID DESC");
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
<h1 class="title"> Mentor Pre Registration List  </h1>
<p class="title-description"> All Pre Registraiton list for Mentor</p>
</div>
<section class="section">
<div class="row">

<div class="col-md-12">
<div class="card">
<div class="card-block">
	<div class="card-title-block">
		<h3 class="title"> All List </h3>
	</div>
	<section class="example">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
				
				</tr>
				
			</thead>

			<tbody>
				 <?php 
				 $page_run = mysqli_query($con,"SELECT * FROM mentor_pre_info WHERE status = '1' ORDER BY ID DESC LIMIT $current, $limit");
				 while ($page_row = mysqli_fetch_array($page_run)) {
				 $id = $page_row['id'];
				 $page_name = $page_row['page_name'];
				 
				 $table_name = "mentor_pre_info";
				 
			   ?>
				<tr>
					<td><?php echo $first_name = $page_row['first_name']; ?> <?php echo $last_name = $page_row['last_name']; ?> </td>
					<td><?php echo $email_address = $page_row['email_address']; ?> </td>
					
					<td><?php echo $phone_number = $page_row['phone_number']; ?> </td>
					<td>
					<a href="mentor_pre_reg_full_profile.php?id=<?php echo $id; ?>" class="btn btn-success"> <i class="fas fa-folder-open"></i> View Profile </a>
					
					
					<a href="javascript:;" onClick="delete_function_con('<?php echo $id; ?>', '<?php echo $table_name; ?>');" 
														class="btn btn-danger"> 
															<i class="fas fa-trash-alt"></i> Delete 
														</a>
					
					</td>
				</tr>
				
			
				
				
				<?php } ?>
			</tbody>
		</table>
		</div>
	</section>
	
	<div class="row">
		<div class="col-md-12" align="center">
		
			<nav>
				<ul class="pagination">
				
					<?php
					//pagination
					echo paginate($total_rows, $_SERVER['PHP_SELF'] , $limit, $_GET['page'])
					?>
				
				</ul>
			</nav>
		
		</div>
	</div>
	
</div>
</div>
</div>
</div>
</section>

</article>


<?php
include("footer.php");
?>