<?php
include("config.php");

if(isset($_POST['submit_product']))
{
	$pro_name = $_POST['pro_name'];
	$desc_short = $_POST['desc_short'];
	$desc = $_POST['desc'];
	$sell_price = $_POST['sell_price'];
	$cat_type = $_POST['cat_type'];
	$sub_cat_type = $_POST['sub_cat_type'];
	$brand_type = $_POST['brand_type'];

	$tmp_image = $_FILES['pro_image']['tmp_name'];
	$image = $_FILES['pro_image']['name'];
	$add_product = mysqli_query($mysqli,"INSERT INTO product Values ('','$pro_name','$desc_short','$desc','$sell_price','$cat_type','$sub_cat_type','$brand_type','pending','')");
	if($add_product){
		

		$last_product_id = mysqli_insert_id($mysqli);
		for($i=0;$i<sizeof($image);$i++)
		{
		$image[$i];
		$save_product_image = rand(99,9999).$image[$i];
		move_uploaded_file($tmp_image[$i] , "uploads/".$save_product_image);
		$add_pro_image = mysqli_query($mysqli,"INSERT INTO product_image VALUES('','$last_product_id','$save_product_image')");
			}

			if($add_pro_image)
			{
				$data = "success";
			}
			else
			{
				$data = "success";
			}
	
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

    <head>
        <meta charset="utf-8" />
        <title>Zucca | Add Product</title>
        <?php include('metalinks.php'); ?>
		<style>
		  .hidden {
		   display:none;
		  }
		  .help-block{
			color: #e73d4a;
		  }
		</style>
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
                                <a href="listing_product.php">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Add Product</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Product -
                        <small>Add Product</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                           <div class="portlet light portlet-fit portlet-form bordered">
							<div class="col-md-12 col-sm-12">
						<?php
								if(isset($data) && $data == "success")
						{
						?>
						<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Added Successfully </p>
						<?php
						}else if(isset($data) && $data == "error"){
						?>
						<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Error in Insertion </p>
						<?php
						}else if(isset($data) && $data == "customer_exist"){
						?>
						<p style="text-align:center;background:#4a89dc;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Customer Details Already Exist </p>
						<?php
						}
						?>
						</div>

                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">Add Product</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form  class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                            
									<div class="col-md-12" style="padding-top:30px;" >
										<div class="col-md-7">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Product Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-bookmark"></i>
														</span>
														<input type="text" name="pro_name" data-required="1" class="form-control" placeholder="Enter The Product Name"/>
													</div>
												</div>
                                            </div>	
											<div class="form-group">
                                                <label class="control-label col-md-4">Product Description (Short)
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-bookmark"></i>
														</span>
														<input type="text" name="desc_short" data-required="1" class="form-control" placeholder="Enter The Description (in short)"/>
													</div>
												</div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-md-4">Product Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-bookmark"></i>
														</span>
														<textarea name="desc" data-required="1" class="form-control" placeholder="Enter The Description "></textarea>
													</div>
												</div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-md-4">Selling Price
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-inr"></i>
														</span>
														<input type="integer" name="sell_price" data-required="1" class="form-control" placeholder="Enter The Selling Price">
													</div>
												</div>
                                            </div>
											<div class="form-group">
											 <label class="control-label col-md-4">Category Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-briefcase"></i>
														</span>
														<select class="form-control select2me " name="cat_type">
															<option value="" selected disabled>Select</option>
															<?php
															$get_cat_name = mysqli_query($mysqli,"select * from category");
															while($fetch_cat_name = mysqli_fetch_array($get_cat_name))
															{
															?>
															<option value="<?php echo $fetch_cat_name['cat_id'];?>" ><?php echo $fetch_cat_name['cat_type'];?>&nbsp;<?php echo $fetch_cat_name['category_name'];?>
															</option>
															<?php
															}
															?>
														</select>
													</div>
                                                </div>
											</div>
											<div class="form-group">
											 <label class="control-label col-md-4">Sub Category Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-briefcase"></i>
														</span>
														<select class="form-control select2me " name="sub_cat_type">
															<option value="" selected disabled>Select</option>
															<?php
															$get_sub_cat_name = mysqli_query($mysqli,"select * from sub_category");
															while($fetch_sub_cat_name = mysqli_fetch_array($get_sub_cat_name))
															{
															?>
															<option value="<?php echo $fetch_sub_cat_name['subcat_id'];?>" ><?php echo $fetch_sub_cat_name['subcat_name'];?>
															</option>
															<?php
															}
															?>
														</select>
													</div>
                                                </div>
											</div>
											<div class="form-group">
											 <label class="control-label col-md-4">Brand Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-briefcase"></i>
														</span>
														<select class="form-control select2me " name="brand_type">
															<option value="no_brand" selected>No Brand</option>
															<?php
															$get_brand_name = mysqli_query($mysqli,"select * from brand");
															while($fetch_brand_name = mysqli_fetch_array($get_brand_name))
															{
															?>
															<option value="<?php echo $fetch_brand_name['brand_id'];?>" ><?php echo $fetch_brand_name['brand_name'];?>
															</option>
															<?php
															}
															?>
														</select>
													</div>
                                                </div>
											  </div>
											</div>

										<div class="col-md-5">
											<div class="form-group last">
												<label class="control-label col-md-4">Product Image 
												<span class="required"> * </span>
												</label>
												<div class="col-md-8 ">
													<div class="addsz">
													<div class="col-md-12">
													<div class="fileinput fileinput-new" data-provides="fileinput">
														<div class="fileinput-new thumbnail" >
															<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
														<div class="fileinput-preview fileinput-exists thumbnail" style="width: 335px; height: 255px;"> </div>
														<br/>
															<span class="btn default btn-file">
																<span class="fileinput-new"> Select image </span>
																<span class="fileinput-exists"> Change </span>
																<input type="file" name="pro_image[]" required style="width: 335px; height: 255px;"> </span>
															<a href="javascript:;" class="btn yellow fileinput-exists" data-dismiss="fileinput"> Remove </a>
														
													</div>
													</div>
													</div>
													<div class="controls" >
														<div class="add_somethin btn green" style="margin-top:20px">Add More Image</div>	
													</div>
												</div>
												
											</div>
										</div>											
                                      </div>
										
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-4 col-md-6">
                                                    <input type="submit" class="btn green" name="submit_product" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php include('footer.php'); ?>
    </body>
		<script>
				$(document).ready(function() {
			var max_fields      = 10; //maximum input boxes allowed
			var wrapper         = $(".addsz"); //Fields wrapper
			var add_button      = $(".add_somethin"); //Add button ID
			
			var x = 1; //initlal text box count
			$(add_button).click(function(e){ //on add input button click
				
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
					x++; //text box increment
					$(wrapper).append("<div class='col-md-12'><div class='fileinput fileinput-new' data-provides='fileinput' style='width:600px;padding-top:20px;'><div class='fileinput-new thumbnail' style='width: 200px; height: 150px;'><img src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image' alt='' /> </div><div class='fileinput-preview fileinput-exists thumbnail' style='width: 335px; height: 255px;'> </div><br/><span class='btn default btn-file'><span class='fileinput-new'> Select image </span>&nbsp;&nbsp;&nbsp;<span class='fileinput-exists'> Change </span><input type='file' required name='pro_image[]' style='width: 335px; height: 255px;'> </span> &nbsp;&nbsp;<a href='javascript:;' class='btn yellow fileinput-exists' data-dismiss='fileinput'> Remove </a> &nbsp;<a href='#' class='remove_field btn red '>Delete</a></div></div>"); //add input box
				}
			});
			
			$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
				e.preventDefault(); $(this).parent('div').remove(); x--;
			})
		});
			
		</script>
	<!-- jQuery Form Validation code -->
	  <script>
	  
	  var FormValidation=function()
	  {
		  var e=function(){},
			  r=function(){},
		      i=function(){
		  var e=$("#form_sample_3"),
			  r=$(".alert-danger",e),
			  i=$(".alert-success",e);
		  e.on("submit",function()
		  {
			  for(var e in CKEDITOR.instances)CKEDITOR.instances[e].updateElement()
		  }),
		  e.validate(
		  {
			errorElement:"span",
		    errorClass:"help-block help-block-error",
			focusInvalid:!1,
			ignore:"",
			rules:
			{
				property_title:{required:!0},
				property_location:{required:!0},
				property_for:{required:!0},
				property_size:{required:!0},
				no_of_bedrooms:{required:!0},
				no_of_bathrooms:{required:!0},
				agent_fee:{required:!0},
				no_of_floors:{required:!0},
				out_of_floors:{required:!0},
				Price:{required:!0},
				Description:{required:!0,minlength:20},
				Contact_section:{required:!0},
				Contact_name:{required:!0},
				Contact_number:{required:!0,number:!0,minlength:10,maxlength:10},
				Contact_email:{required:!0,email:!0},
				check :{required:!0}
			},
			messages:
			{
				property_title:{required:"Please Enter Title For Your Property"},
				property_location:{required:"Please Enter Location For Your Property"},
				property_for:{required:"Please Mention What Kind Of Availabity For Property"},
				property_size:{required:"Please Enter Property Size"},
				no_of_bedrooms:{required:"Choose Number Of Bedrooms"},
				no_of_bathrooms:{required:"Choose Number Of Bathrooms"},
				agent_fee:{required:"Please Choose Your Preference"},
				no_of_floors:{required:"Please Select The Floor"},
				out_of_floors:{required:"Please Select Number Of Floor(s)"},
				Price:{required:"Please Enter Price Of The Property"},
				Description:{required:"Description Is Required",minlength:"Atleast {0} Characters"},
				Contact_section:{required:"Please Enter Contact Section"},
				Contact_name:{required:"Please Enter Contact Person's Name"},
				Contact_number:{required:"Please Enter Contact Person's Number",minlength:"Must Be 8 Digit",
				//Contact_number:{required:"Please Enter Contact Person's Number",number:"Contact Must Be In Number",minlength:"Must Be 10 Digit",maxlength:"Must Be 10 Digit"},
				Contact_email:{required:"Please Enter Contact Person's Email",email:"Please Enter A Valid Email Address"},
				check :{required:"Please Accept The Terms & Condition"}
			},
			errorPlacement:function(e,r)
			{
				r.parent(".input-group").size()>0?e.insertAfter(r.parent(".input-group")):r.attr("data-error-container")?e.appendTo(r.attr("data-error-container")):r.parents(".radio-list").size()>0?e.appendTo(r.parents(".radio-list").attr("data-error-container")):r.parents(".radio-inline").size()>0?e.appendTo(r.parents(".radio-inline").attr("data-error-container")):r.parents(".checkbox-list").size()>0?e.appendTo(r.parents(".checkbox-list").attr("data-error-container")):r.parents(".checkbox-inline").size()>0?e.appendTo(r.parents(".checkbox-inline").attr("data-error-container")):e.insertAfter(r)
			},
			invalidHandler:function(e,t)
			{
				i.hide(),
				r.show(),
				App.scrollTo(r,-200)
			},
			highlight:function(e)
			{
				$(e).closest(".form-group").addClass("has-error")
			},
			unhighlight:function(e)
			{
				$(e).closest(".form-group").removeClass("has-error")
			},
			success:function(e)
			{
				e.closest(".form-group").removeClass("has-error")
			},
			submitHandler:function(e)
			{
				i.show(),
				r.hide(),
				e[0].submit()
			}
		}),
		$(".select2me",e).change(function(){e.validate().element($(this))}),
		$(".date-picker").datepicker({rtl:App.isRTL(),autoclose:!0}),
		$(".date-picker .form-control").change(function(){e.validate().element($(this))})},
		t=function(){};return{init:function(){t(),e(),r(),i()}}
	  }();
	  jQuery(document).ready(function(){FormValidation.init()});


	  var FormInputMask=function()
	  {
		  var a=function()
		  {
			  $('#price').inputmask("numeric", {
				radixPoint: ".",
				groupSeparator: ",",
				digits: 2,
				autoGroup: true,
				rightAlign: false,
				oncleared: function () { self.Value(''); }
			});
			$('#size').inputmask("numeric", {
				radixPoint: ".",
				groupSeparator: ",",
				digits: 2,
				autoGroup: true,
				rightAlign: false,
				oncleared: function () { self.Value(''); }
			});
			 
			  
		  };
		  return{init:function(){a(),n()}}
	  }();
	  App.isAngularJsApp()===!1&&jQuery(document).ready(function(){FormInputMask.init()});
	  
	  </script>
		<script type='text/javascript'>//<![CDATA[
			$(window).load(function(){
				function readURL(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();

						reader.onload = function (e) {
						$('#image_upload_preview').attr('src', e.target.result);
						}

						reader.readAsDataURL(input.files[0]);
					}
				}

				$("#uploadFile").change(function () {
				readURL(this);
				});
			});//]]> 
			$("#uploadTrigger").click(function(){
			   $("#uploadFile").click();
			});

		</script>
</html>