<?php
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title>Israfind</title>
        <?php include('metalinks.php'); ?>
		<style>
		  .hidden {
		   display:none;
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
                                <a href="dashboard.php">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Settings</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Settings
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet light portlet-fit portlet-form bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">User Details </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form  id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below.
											</div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful!
											</div>
											<div class="alert alert-success <?php if((isset($success)) && ($success == 1)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> You have successfully Updated your Password. .
											</div>
                                            <div class="alert alert-danger <?php if((isset($success)) && ($success == 0)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> Oops!! Something went wrong. Please try again.
											</div>
											 <div class="alert alert-danger <?php if((isset($success)) && ($success == 2)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> Oops!! Something went wrong. Please Check Your Password Again.
											</div>
                                      
											
											<div class="form-group">
                                                <label class="control-label col-md-3">Email
                                                </label>
                                                <div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="text" name="email" data-required="1" class="form-control" value="" disabled/>
													</div>
												</div>
                                            </div>
											<div class="form-group last">
													<label class="control-label col-md-3">Image </label>
													<div class="col-md-9">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="" alt="" /> </div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="width: 335px; height: 255px;"> </div>
															<div>
																<span class="btn default btn-file">
																	<span class="fileinput-new"> Select image </span>
																	<span class="fileinput-exists"> Change </span>
																	<input type="file" name="image" style="width: 335px; height: 255px;"> </span>
																<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
															</div>
														</div>
													</div>
												</div>
											<div class="form-group">
                                                <label class="control-label col-md-3">Old Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-bookmark"></i>
														</span>
														<input type="password" name="old_password" data-required="1" class="form-control" placeholder="Enter The Old Password"/>
													</div>
												</div>
                                            </div>

											<div class="form-group">
                                                <label class="control-label col-md-3">New Password
													<span class="required"> * </span>
                                                </label>
                                                <div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-bookmark"></i>
														</span>
														<input type="password" name="nw_password" data-required="1" class="form-control" placeholder="Enter The New Password"/>
													</div>
												</div>
                                            </div>
                                      
										
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="submit" class="btn green" name="submit_property" value="Submit">
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
				
				Description:{required:!0,minlength:20},
			
			},
			messages:
			{
				
				Description:{required:"Description Is Required",minlength:"Atleast {0} Characters"},
				
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
		
</html>
