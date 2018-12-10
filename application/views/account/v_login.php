<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/<?php echo base_url(); ?>/asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
      <?php
   // Cetak jika ada notifikasi
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>    
    
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					
           <?php
   //Cetak jika ada notifikasi
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?> 
 
      <?php echo form_open('login');?>
	  
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>"/>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						<?php echo form_error('username'); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						<?php echo form_error('password'); ?>
					</div>

					<div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" name="btnSubmit" value="Login" />
					</div>
				     <center><p style="color:white">  
     Belum punya akun? silakan daftar
     <?php echo anchor('register','disini'); ?>

                         </p></center>   
		<?php echo form_close();?> 	
			</div>            
		</div>       
	</div>	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/asset/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/asset/js/main.js"></script>

</body>
</html>