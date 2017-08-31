<?php
include ("config.php");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>IsraFind | Dashboard</title>
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
                                <a href="dashboard.php">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                    </div>

					<!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Category
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_category.php" ><img src="images/bookmark-add.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_category.php" style="color:#000;">Add Category</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="listing_category.php" ><img src="images/1467998568_resolutions-23.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="listing_category.php" style="color:#000;">Listing Category</a>
							</div>
                        </div>					
                    </div>
					                    
                    <div class="clearfix"></div>

                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Sub-Category
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_sub_category.php" ><img src="images/1467997287_Home-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_sub_category.php" style="color:#000;">Add Sub-Category</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="listing_sub_category.php" ><img src="images/1467997287_Home-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:12px;padding-top:17px;">
								<a href="listing_sub_category.php" style="color:#000;">Listing Sub-Category</a>
							</div>
                        </div>
					</div>
						
                    <div class="clearfix"></div>


					<!-- END PAGE BAR -->

                    <!-- END DASHBOARD STATS 1-->

					<!-- END PAGE BAR -->
					
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Brand
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                   <div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_brand.php" ><img src="images/1467997287_Home-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_brand.php" style="color:#000;">Add Brand</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="listing_brand.php" ><img src="images/1467997287_Home-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:12px;padding-top:17px;">
								<a href="listing_brand.php" style="color:#000;">Listing Brand</a>
							</div>
                        </div>
					</div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->


					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Product
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_product.php" ><img src="images/1467997287_Home-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_product.php" style="color:#000;">Add Product</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="listing_product.php" ><img src="images/1467997287_Home-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:12px;padding-top:17px;">
								<a href="listing_product.php" style="color:#000;">Listing Product</a>
							</div>
                        </div>
					</div>					
					 <!-- BEGIN PAGE TITLE-->                   
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->					
                    <div class="clearfix"></div>			
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
		<?php include('footer.php'); ?>
    </body>

</html>