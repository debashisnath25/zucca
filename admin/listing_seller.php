<?php
include('config.php');

if(isset($_GET['del_pro_id'])){
	$delete_pro = $_GET['del_pro_id'];
	$delete_pro_id = mysqli_query($mysqli,"delete from product where product_id = '$delete_pro'");
		if($delete_pro_id){
			echo "<script>window.location.href='listing_product.php'</script>";
		}else{
			$data = "error";
		}
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
		<title>Zucca | Listing Seller</title>
        <?php include('metalinks.php'); ?>
	</head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <?php include('header.php'); ?>
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php include('sidebar.php'); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Seller</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Listing</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Seller -
                        <small>Listing</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">							
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">Listing Seller</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
												<th class="all">Sl. No.</th>
												<th class="all">Profile Picture</th>
												<th class="all">Name</th>
                                                <th class="all">Enterprise Name</th>
                                                <th class="none">Email</th>
												<th class="none">Phone</th>
												<th class="none">Address</th>
												<th class="none">Voter ID</th>
												<th class="none">Pan Number</th>
												<th class="none">Trade License</th>												
												<th class="all">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											$i=1;
											$get_user = mysqli_query($mysqli,"select * from user where user_type='seller'");
											while($fetch_user_details = mysqli_fetch_array($get_user))
											{
											?>
                                            <tr>
												<td><?php echo $i;?></td>
												<td>Profile Picture</td>
                                                <td><?php echo $fetch_user_details['fname'];?>&nbsp;<?php echo $fetch_user_details['lname'];?></td>
												<td><?php echo $fetch_user_details['enterprise_name'];?></td>
												<td><?php echo $fetch_user_details['email'];?></td>
												<td><?php echo $fetch_user_details['phone'];?></td>
												<td><?php echo $fetch_user_details['address'];?><br><?php echo $fetch_user_details['city'];?><br><?php echo $fetch_user_details['state'];?><br><?php echo $fetch_user_details['pincode'];?></td>
												<td><?php echo $fetch_user_details['voter_id'];?></td>
												<td><?php echo $fetch_user_details['pancard'];?></td>
												<td><?php echo $fetch_user_details['tradelicense'];?></td>
												<!-- Actions -->
												<td><a href="view_product.php?product_id=<?php echo $fetch_user_details['product_id'];?>" class="btn green btn-outline sbold uppercase">View</a>
												<a href="edit_product.php?product_id=<?php echo $fetch_user_details['product_id'];?>" class="btn green btn-outline sbold uppercase" >Edit</a>
												<a href="?del_pro_id=<?php echo $fetch_user_details['product_id'];?>" class="btn green btn-outline sbold uppercase" >Delete</a></td>												
                                            </tr>
                                            <?php
											$i++;
											}											
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php include('footer.php') ?>
    </body>

</html>