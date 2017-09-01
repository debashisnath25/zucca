<?php
include('config.php');

if(isset($_GET['seller_id'])){
	
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
		<title>Zucca | Assign Associate to Seller</title>
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
                                <a href="#">Assign Associate to Seller</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Assign</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Associate to Seller -
                        <small>Assign Associate to Seller</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">							
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
									<div class="col-md-12 col-sm-12">
									<?php
									if(isset($_GET['data']) && $_GET['data'] == "success"){
									?>
									<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Assigned Successfully </p>
									<?php
									}else if(isset($_GET['data']) && $_GET['data'] == "error"){
									?>
									<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Error in Assign </p>
									<?php
									}
									?>
								</div>

                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">Assign Associate to Seller</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
												<th class="all">Sl. No.</th>
												<th class="all col-md-3">Seller</th>
												<th class="all col-md-3">Enterprise Name</th>
                                                <th class="all col-md-5">Associate</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											$i=1;
											$get_user_details = mysqli_query($mysqli,"select * from user where user_type = 'seller'");
											while($fetch_user_details = mysqli_fetch_array($get_user_details))
											{
												$user_is = $fetch_user_details['user_id'];
												if(isset($_POST['sub_'.$user_is.''])){
													if(isset($_POST['assoc_id_'.$user_is.''])){
														$associate_id = $_POST['assoc_id_'.$user_is.''];
													}else{
														$associate_id = "";
													}
													
													$update_assoc = mysqli_query($mysqli,"UPDATE user SET associate_id='$associate_id' where user_id='$user_is'");
													if($update_assoc){
														echo "<script>window.location.href='associate_to_sellers.php?data=success'</script>";
													}else{
														echo "<script>window.location.href='associate_to_sellers.php?data=error'</script>";
													}
												}
											?>
                                            <tr>
												<td><?php echo $i;?></td>	
												<td><?php echo $fetch_user_details['fname'];?>&nbsp;<?php echo $fetch_user_details['lname'];?></td>
												<td><?php echo $fetch_user_details['enterprise_name'];?></td> 
                                                <td>
													<div class="form-group">													 
														<div class="col-md-9">
															<div class="input-group col-md-8" style="float:left;">														<form name="assoc_<?php echo $fetch_user_details['user_id'];?>" method="POST">		
																<select class="form-control select2me " name="assoc_id_<?php echo $fetch_user_details['user_id'];?>" style="float:left;">
																	<option value="" selected disabled>Select</option>
																	<?php
																	$get_user_id = mysqli_query($mysqli,"select * from user where user_type='associate'");
																	while($fetch_assoc_id = mysqli_fetch_array($get_user_id))
																	{
																	?>
																	<option value="<?php echo $fetch_assoc_id['user_id'];?>" <?php echo(($fetch_assoc_id['user_id']==$fetch_user_details['associate_id'])?'selected':'');?>><?php echo $fetch_assoc_id['fname'];?>&nbsp;<?php echo $fetch_assoc_id['lname'];?>
																	</option>
																	<?php
																	}
																	?>
																</select>
															</div>
															<div class="input-group col-md-4" style="float:left;">
																<input type="submit" class="btn btn-primary" value="submit" name="sub_<?php echo $fetch_user_details['user_id'];?>" style="float:left;">
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