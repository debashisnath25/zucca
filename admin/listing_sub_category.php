<?php
include('config.php');

if(isset($_GET['del_subcat_id'])){
	$delete_subcat = $_GET['del_subcat_id'];
	$delete_subcat_id = mysqli_query($mysqli,"delete from sub_category where subcat_id = '$delete_subcat'");
		if($delete_subcat_id){
			echo "<script>window.location.href='listing_sub_category.php'</script>";
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
		<title>Zucca | Listing Sub-Category</title>
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
                                <a href="#">Sub-Category</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Sub-Category -
                        <small>View</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
							<a href="add_sub_category.php" class="btn green"><i class="fa fa-plus"></i> Add Sub-Category</a><br/><br/>
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">View Sub-Category</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
												<th class="all">Sl. No.</th>                                               
                                                <th class="min-phone-l">Sub-Category Name</th>
												 <th class="all">Category Name</th>
												 <th class="min-phone-l">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											$i=1;
											$get_sub_cat_details = mysqli_query($mysqli,"select * from sub_category");
											while($fetch_sub_cat_details = mysqli_fetch_array($get_sub_cat_details))
											{
											?>
                                            <tr>
												<td><?php echo $i;?></td>
                                                <td><?php echo $fetch_sub_cat_details['subcat_name'];?></td>	
												<td><?php
												$cat_id = $fetch_sub_cat_details['cat_id'];
												$get_cat_name = mysqli_query($mysqli,"select * from category where cat_id = '$cat_id'");
												$fetch_cat_name = mysqli_fetch_array($get_cat_name);
												echo $fetch_cat_name['cat_type']?>&nbsp;<?php echo $fetch_cat_name['category_name'];
												?></td>   													
												<td><a href="view_sub_category.php?subcat_id=<?php echo $fetch_sub_cat_details['subcat_id'];?>" class="btn green btn-outline sbold uppercase" >View</a>
												<a href="edit_sub_category.php?subcat_id=<?php echo $fetch_sub_cat_details['subcat_id'];?>" class="btn green btn-outline sbold uppercase" >Edit</a>
												<a href="?del_subcat_id=<?php echo $fetch_sub_cat_details['subcat_id'];?>" class="btn green btn-outline sbold uppercase" >Delete</a></td>												
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