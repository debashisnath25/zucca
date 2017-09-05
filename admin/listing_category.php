<?php
include('config.php');

if(isset($_GET['del_cat_id'])){
	$delete_cat = $_GET['del_cat_id'];
	$delete_cat_id = mysqli_query($mysqli,"delete from category where cat_id = '$delete_cat'");
		if($delete_cat_id){
			echo "<script>window.location.href='listing_category.php'</script>";
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
		<title>Zucca | Listing Category</title>
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
                                <a href="#">Category</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Category -
                        <small>View</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
							<a href="add_category.php" class="btn green"><i class="fa fa-plus"></i> Add Category</a><br/><br/>
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">View Category</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
												<th class="all">Sl. No.</th>
												<th class="all">Category Type</th>
                                                <th class="all">Category Name</th>
                                                <th class="min-phone-l">Image</th>
												 <th class="min-phone-l">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											$i=1;
											$get_cat_details = mysqli_query($mysqli,"select * from category");
											while($fetch_cat_details = mysqli_fetch_array($get_cat_details))
											{
											?>
                                            <tr>
												<td><?php echo $i;?></td>	
												 <td><?php echo $fetch_cat_details['cat_type'];?></td> 
                                                <td><?php echo $fetch_cat_details['category_name'];?></td>                                               
												<td>
													<img src="uploads/<?php echo $fetch_cat_details['category_image']; ?>" width="80" height="100"/>
												</td>											
												<td><a href="view_category.php?cat_id=<?php echo $fetch_cat_details['cat_id'];?>" class="btn green btn-outline sbold uppercase" >View</a>
												<a href="edit_category.php?cat_id=<?php echo $fetch_cat_details['cat_id'];?>" class="btn green btn-outline sbold uppercase" >Edit</a>
												<a href="?del_cat_id=<?php echo $fetch_cat_details['cat_id'];?>" class="btn green btn-outline sbold uppercase" >Delete</a></td>												
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