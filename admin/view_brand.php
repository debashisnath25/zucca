<?php
include("config.php");

$get_brand_id = $_GET['brand_id'];

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title>Zucca | View Brand</title>
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
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Edit Sub-Category</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Sub-Category -
                        <small>Edit Sub-Category</small>
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
                                        <span class="caption-subject font-dark sbold uppercase">Edit Sub-Category</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->

									<?php
									$get_brand_details = mysqli_query($mysqli,"select * from brand where brand_id = '$get_brand_id'");
									$fetch_brand_info = mysqli_fetch_array($get_brand_details);
									?>
                                    <form  class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                            
									<div class="col-md-12" style="padding-top:30px;" >
									<div class="col-md-7">				
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Brand Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-9">
													<div class="form-control">														
														<label><?php echo $fetch_brand_info['brand_name'];?></label>
													</div>
												</div>
                                            </div>											
										</div>											
                                      </div>
										
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-6">
                                                    <input type="submit" class="btn green" name="submit_brand" value="Submit">
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
					$(wrapper).append("<div class='col-md-12'><div class='fileinput fileinput-new' data-provides='fileinput' style='width:600px;padding-top:20px;'><div class='fileinput-new thumbnail' style='width: 200px; height: 150px;'><img src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image' alt='' /> </div><div class='fileinput-preview fileinput-exists thumbnail' style='width: 335px; height: 255px;'> </div><br/><span class='btn default btn-file'><span class='fileinput-new'> Select image </span>&nbsp;&nbsp;&nbsp;<span class='fileinput-exists'> Change </span><input type='file' required name='image[]' style='width: 335px; height: 255px;'> </span> &nbsp;&nbsp;<a href='javascript:;' class='btn yellow fileinput-exists' data-dismiss='fileinput'> Remove </a> &nbsp;<a href='#' class='remove_field btn red '>Delete</a></div></div>"); //add input box
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