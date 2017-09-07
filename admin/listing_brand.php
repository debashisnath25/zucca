<?php
include("config.php");

if(isset($_GET['del_brand'])){
	$delete_brand = $_GET['del_brand'];
	$delete_brand_id = mysqli_query($mysqli,"delete from brand where brand_id = '$delete_brand'");
		if($delete_brand_id){
			echo "<script>window.location.href='listing_brand.php'</script>";
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
		<title>Zucca | Listing Brand</title>
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
                                <a href="#">Brand</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Brand -
                        <small>View</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
							<a href="add_brand.php" class="btn green"><i class="fa fa-plus"></i> Add Brand</a><br/><br/>
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">View Brand</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
												<th class="all">Sl. No.</th>
                                                <th class="all">Brand Name</th>                                               
												 <th class="min-phone-l">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											$i=1;
											$get_brand_details = mysqli_query($mysqli,"select * from brand");
											while($fetch_brand_details = mysqli_fetch_array($get_brand_details))
											{
											?>
                                            <tr>
												<td><?php echo $i;?></td>
                                                <td><?php echo $fetch_brand_details['brand_name'];?></td>                              
																							
												<td><a href="view_brand.php?brand_id=<?php echo $fetch_brand_details['brand_id'];?>" class="btn green btn-outline sbold uppercase" >View</a>
												<a href="edit_brand.php?brand_id=<?php echo $fetch_brand_details['brand_id'];?>" class="btn green btn-outline sbold uppercase" >Edit</a>
												<a href="?del_brand=<?php echo $fetch_brand_details['brand_id'];?>" class="btn green btn-outline sbold uppercase" >Delete</a></td>												
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