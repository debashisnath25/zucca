<?php
	include ("config.php");
	
	if(isset($_POST['submit_log']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$check_reg = mysqli_query($mysqli,"select * from user where email='$email' and password='$password' and user_type='customer' and status='active'");
		$fetch_user_data = mysqli_fetch_array($check_reg);
		$check_rows = mysqli_num_rows($check_reg);
		if($check_rows > 0)
		{
			$_SESSION['id'] = $fetch_user_data['user_id'];
			echo "<script>window.location.href='index.php'</script>";
		}
		else
		{
			$data = "error";
		}
	}
	
	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$save_reg = mysqli_query($mysqli,"insert into user values('','".$fname."','".$lname."','','".$email."','','".$phone."','','','','','','','','','".$password."','active','','','customer')");
		if($save_reg)
		{
        	$_SESSION['id'] = mysqli_insert_id($mysqli);
			echo "<script>window.location.href='index.php'</script>";
		}
		else
		{
			$data = "error";
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
                                <span>Login & Register</span>
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
					
                        <div class="col-md-6">
			<?php
			if(isset($data) && $data == "error"){
			?>
				<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;"> Username and password didnot match! </p>
			<?php
			}
			?>
                            <div class="form-border-box">
                                <form method="POST">
                                    <h2 class="normal"><span>Login Old Customers</span></h2>
                                    <p>People are always like to go shopping. A lot of our effort is just: 'How do we make the retail experience a great one?'.</p>
                                    <div class="form-field-wrapper">
                                        <label>Enter Your Email <span class="required">*</span></label>
                                        <input class="input-md form-full-width" name="email" placeholder="Enter Your Email Address" value="" size="30" aria-required="true" required="" type="email">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label>Enter Your Password <span class="required">*</span></label>
                                        <input class="input-md form-full-width" name="password" placeholder="Enter Your Password" value="" size="30" aria-required="true" required="" type="password">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <input name="submit_log" class="submit btn btn-md btn-black" value="Sign In" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
						
			<?php
				if(isset($data) && $data == "success"){
			?>
				<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;"> Registration Successfull </p>
			<?php
			}else if(isset($data) && $data == "error"){
			?>
				<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;"> Something went wrong! please try again later. </p>

			<?php
			}else if(isset($data) && $data == "email"){
			?>
				<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;"> Email Already Exists! Try using another email. </p>
			<?php
			}
			?>
							
                            <div class="form-border-box">
                               <form method="POST">
                                    <h2 class="normal"><span>Register New Seller</span></h2>
                                    <p>Within Internet users, you have a big chunk of people who can convert to online shopping.</p>
									
									<div class="form-field-wrapper">
                                        <label>Enter Your First Name <span class="required">*</span></label>
                                        <input class="input-md form-full-width" name="fname" placeholder="Enter Your First Name" value="" size="30" aria-required="true" required="" type="text">
                                    </div>
									<div class="form-field-wrapper">
                                        <label>Enter Your Last Name <span class="required">*</span></label>
                                        <input  class="input-md form-full-width" name="lname" placeholder="Enter Your Last Name" value="" size="30" aria-required="true" required="" type="text">
                                    </div>
									<div class="form-field-wrapper">
                                        <label>Enter Your Phone Number <span class="required">*</span></label>
                                        <input  class="input-md form-full-width" name="phone" placeholder="Enter Your Phone Number" value="" size="30" aria-required="true" required="" type="number_format">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label>Enter Your Email <span class="required">*</span></label>
                                        <input class="input-md form-full-width" name="email" placeholder="Enter Your Email Address" value="" size="30" aria-required="true" required="" type="email">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label>Enter Your Password <span class="required">*</span></label>
                                        <input class="input-md form-full-width" name="password" placeholder="Enter Your Password" value="" size="30" aria-required="true" required="" type="password">
                                    </div>
									
                                    <div class="form-field-wrapper">
                                        <input name="submit" id="submit" class="submit btn btn-md btn-black" value="Sign Up" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

 <?php include ('footer.php')?>
 

 
 
</body>
</html>
