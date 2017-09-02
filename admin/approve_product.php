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
		<title>Zucca | Listing Product</title>
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
                                <a href="#">Product</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Product -
                        <small>View</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
							<a href="add_product.php" class="btn green"><i class="fa fa-plus"></i> Add Product</a><br/><br/>
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">View Product</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
												<th class="all">Sl. No.</th>
												<th class="none">Product Image</th>
                                                <th class="all">Product Name</th>
                                                <th class="none">Short Description</th>
												<th class="all">Selling Price</th>
												<th class="none">Category</th>
												<th class="all">Sub-Category</th>
												<th class="none">Brand</th>												
												<th class="all">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											$i=1;
											$get_product = mysqli_query($mysqli,"select * from product");
											while($fetch_pro_details = mysqli_fetch_array($get_product))
											{
												$pro_is = $fetch_pro_details['product_id'];
												if(isset($_POST['sub_'.$pro_is.''])){
													if(isset($_POST['status_'.$pro_is.''])){
														$product_id = $_POST['status_'.$pro_is.''];
													}else{
														$product_id = "";
													}
													
													$update_assoc = mysqli_query($mysqli,"UPDATE product SET associate_id='$associate_id' where user_id='$pro_is'");
													if($update_assoc){
														echo "<script>window.location.href='associate_to_sellers.php?data=success'</script>";
													}else{
														echo "<script>window.location.href='associate_to_sellers.php?data=error'</script>";
													}
												}
											?>
                                            <tr>
												<td><?php echo $i;?></td>
												<td>
												<?php
												$pro_id = $fetch_pro_details['product_id'];
												$get_image = mysqli_query($mysqli,"select * from product_image where product_id = '$pro_id'");	
												while($fetch_image = mysqli_fetch_array($get_image))
												{
												?>
												<img src="uploads/<?php echo $fetch_image['image_name'];?>" style="height:65px;width:65px;">
												<?php
												}
												?>
												</td>
                                                <td><?php echo $fetch_pro_details['product_title'];?></td>                                               
												<td><?php echo $fetch_pro_details['product_short_desc'];?></td>
												<td><?php echo $fetch_pro_details['selling_price'];?></td>
												<td><?php
												$cat_id = $fetch_pro_details['cat_id'];
												$get_cat_name = mysqli_query($mysqli,"select * from category where cat_id = '$cat_id'");
												$fetch_cat_name = mysqli_fetch_array($get_cat_name);
												echo $fetch_cat_name['category_name'];
												?></td>
												<td><?php
												$subcat_id = $fetch_pro_details['subcat_id'];
												$get_subcat_name = mysqli_query($mysqli,"select * from sub_category where subcat_id = '$subcat_id'");
												$fetch_subcat_name = mysqli_fetch_array($get_subcat_name);
												echo $fetch_subcat_name['subcat_name'];
												?></td>
												<td><?php
												$brand_id = $fetch_pro_details['brand_id'];
												$get_brand_name = mysqli_query($mysqli,"select * from brand where brand_id = '$brand_id'");
												$fetch_brand_name = mysqli_fetch_array($get_brand_name);
												echo $fetch_brand_name['brand_name'];
												?></td>												
												<td>
												<div class="form-group">													 
														<div class="col-md-8">
															<div class="input-group col-md-8" style="float:left;">														<form name="status_<?php echo $fetch_pro_details['product_id'];?>" method="POST">
															
																<input name="status" class="form-control" type="radio" <?php echo (($fetch_pro_details['status'] == 'active')?'checked':'')?> style="float:left;">Active<br>
																<input name="status" class="form-control" type="radio" <?php echo (($fetch_pro_details['status'] == 'inactive')?'selected disabled':'')?> style="float:left;">Inactive<br>
																<input name="status" class="form-control" type="radio" <?php echo (($fetch_pro_details['status'] == 'pending')?'selected disabled':'')?> style="float:left;">Pending

																	<!--<input value="inactive"<?php echo (($fetch_pro_details['status']=='inactive')?'selected disabled':'')?>>Inactive
																	<input value="pending"<?php echo (($fetch_pro_details['status']=='pending')?'selected disabled':'')?>>Pending	-->																
																</select>
															</div>
															</div>
															<div class="input-group col-md-4" style="float:left;">
																<input type="submit" class="btn btn-primary" value="submit" name="sub_<?php echo $fetch_pro_details['product_id'];?>" style="float:left;">
															</div>
															</form>
														</div>
													</div>
												</td>												
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