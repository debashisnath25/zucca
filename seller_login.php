<?php
	include ("config.php");
	

	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$save_reg = mysqli_query($mysqli,"insert into user values('','".$fname."','".$lname."','','".$email."','','".$phone."','','','','','','','','','".$password."','active','','','seller')");
		if($save_reg)
		{
			$_SESSION['id'] = mysqli_insert_id($mysqli);
			echo "<script>window.location.href='admin/upload_seller_docs.php'</script>";
		}
		else
		{
			echo "<script>alert('noo')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
   
 <?php include ('header.php')?>
 
 
        <!-- Page Content Wraper -->
        <div class="page-content-wraper">
            <!-- Bread Crumb -->
            <section class="breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb-link">
                                <a href="#">Home</a>
                                <span>Seller's Register Page</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bread Crumb -->

            <!-- Page Content -->
            <section class="content-page">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-8 col-sm-3">
                            <div class="form-border-box">
                                <form method="POST">
                                    <h2 class="normal"><span>Register New Seller</span></h2>
                                    <p style="color:#f48342;">Within Internet users, you have a big chunk of people who can convert to online shopping...</p>
									
									<div class="form-field-wrapper">
                                        <label>Enter Your First Name <span class="required">*</span></label>
                                        <input id="fname" class="input-md form-full-width" name="fname" placeholder="Enter Your Name" value="" size="30" aria-required="true" required="" type="text">
                                    </div>
									<div class="form-field-wrapper">
                                        <label>Enter Your Last Name <span class="required">*</span></label>
                                        <input id="lname" class="input-md form-full-width" name="lname" placeholder="Enter Your Name" value="" size="30" aria-required="true" required="" type="text">
                                    </div>
									<div class="form-field-wrapper">
                                        <label>Enter Your Phone Number <span class="required">*</span></label>
                                        <input id="phone" class="input-md form-full-width" name="phone" placeholder="Enter Your Phone Number" value="" size="30" aria-required="true" required="" type="number_format">
                                    </div>									
                                    <div class="form-field-wrapper">
                                        <label>Enter Your Email <span class="required">*</span></label>
                                        <input id="email" class="input-md form-full-width" name="email" placeholder="Enter Your Email Address" value="" size="30" aria-required="true" required="" type="email">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label>Enter Your Password <span class="required">*</span></label>
                                        <input id="pass" class="input-md form-full-width" name="pass" placeholder="Enter Your Password" value="" size="30" aria-required="true" required="" type="password">
                                    </div>
									
                                    <div class="form-field-wrapper">
                                        <input name="submit" id="submit" class="submit btn btn-md btn-black" value="Sign Up" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
						
						
						<div class="col-md-4 col-sm-6">
						<div class="contact-address">
						
						<div class="same orange_box" style="text-align:center" onclick="location.href='/closed-deals';">
						<img  id="myImg" src="images/install.png" class="rounded mx-auto d-block img-responsive hvr-underline-from-center" style="position:relative; height:150px;" alt="image">
					<strong style="color:#f48342;"> 5 minute Setup</strong>
						</div>
						<br />
						
					<div class="same orange_box" style="text-align:center" onclick="location.href='/closed-deals';">
					<img  id="myImg" src="images/access.png" class="rounded mx-auto d-block img-responsive hvr-underline-from-center" style="position:relative; height:150px;" alt="image">
					<strong style="color:#f48342;"> Easy and Fast Approval</strong>
						</div>
						<br />
						
					<div class="same orange_box" style="text-align:center" onclick="location.href='/closed-deals';">
					<img  id="myImg" src="images/install.png" class="rounded mx-auto d-block img-responsive hvr-underline-from-center" style="position:relative; height:150px;" alt="image">
					<strong style="color:#f48342;"> Fast and Secure Payments</strong>
						</div>
						<br />
						
						</div>
						</div>
                    </div>
                </div>
            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

 <?php include ('footer.php')?>
 
 <script type="text/javascript">
		jQuery(document).ready(function($){
			"use strict";
			
			// Example login validation
			$('#rs-validation-login-page').validate({
				ignore: 'input[type=hidden]', // ignore hidden fields
				rules: {
					username: "required email",
					password: "required",
					phone:"required number",
					country: "required",
					business: "required",
					type: "required"
				},
				messages: {
					username: "Please enter your email",
					password: "Please provide a password",
					phone: "Please enter your phone number",
					country: "Please choose your country",
					business: "Please enter your business name",
					type: "Please choose your business category"
				},
				errorElement: "p",
				errorPlacement: function ( error, element ) {
					error.addClass( "help-block" );
					// Has feedback
					if (element.parents('div').hasClass('has-feedback')) {
						error.appendTo( element.parent() );
					}
					else{
						error.insertAfter(element);
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).removeClass( "has-error" );
				}
			});
		});
	</script>
 
</body>
</html>
