<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/'); ?>css/bs.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/'); ?>css/fa.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/'); ?>css/admin_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/'); ?>css/admin_responsive.css">

	<style type="text/css">
		


	</style>
</head>
<body id="body_id">
	<div id="login_overlay">
		<div class="container">
			<div class="row my-3" id="loginPageRow">
				<div class="col-md-1">
					
				</div>
				<div class="col-md-4 rounded-left py-5" id="login_form_side_div">
					<div class="my-2" id="login_form_side_img_div">
						<img src="<?php echo base_url('adminAssets/'); ?>images/adminLoginSideImg3.gif" class="mx-auto d-block img-fluid" style="width:90%"> 
					</div>
					<h2 class="text-center text-light text-uppercase my-4">admin login page</h2>
					<p class="text-light mt-2 text-capitalize text-center">
						Please Login To access admin dashboard
					</p>
				</div>
				<div class="col-md-7 p-4 rounded-right" id="login_form_div">

		        <?php if($this->session->flashdata('success')){ ?>
					<div class="alert alert-success alert-dismissible">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>.
					</div>
		        <?php }else if($this->session->flashdata('failure')){ ?>
					<div class="alert alert-warning alert-dismissible">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Sorry!</strong> <?php echo $this->session->flashdata('failure'); ?>.
					</div>
		        <?php } ?>	
					<!-- class="needs-validation" -->
				 <div class="my-3 col-md-11 mx-auto p-4" id="login_form_elements_div">
					 <form action="<?php echo base_url('admin-login') ?>" autocomplete="off" id="loginForm" method="post">
					  <div class="form-group">
					    <label for="uname">Username:</label>
					    <input type="text" class="form-control" id="admin_login_uname" placeholder="Enter username or email" name="admin_login_uname">
					    
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="admin_login_pwd" placeholder="Enter password" name="admin_login_pwd">
					    
					  </div>
					 
					  <button type="submit" class="btn btn-primary btn-block">Login</button>
					</form>
				 </div>
				 <div class="my-3 col-md-9 mx-auto text-center">
				 	<p>Or</p>
				 	<span><a href="#" class="text-primary"  data-toggle="modal" data-target="#modalContactForm">Contact</a> Super Admin To Register</span>
				 </div>

				</div>	
			</div>
		</div>
	</div>



<!-- ############# MODALS ############### -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg-info-admin-contact">
      <!-- <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body mx-3">
      	<div class="alert alert-success alert-dismissible" id="contactFormAlert" style="display: none;">
      	  <button type="button" class="close" data-dismiss="alert">&times;</button>
      	  <strong>Success!</strong> Indicates a successful or positive action.
      	</div>
        
        <form id="admin_contact_form" action="index.html" method="post">
            <div class="card border-primary rounded-0">
                <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Write To Us</h3>
                        <p class="m-0">Let Us Serve You Better</p>
                    </div>
                </div>
                <div class="card-body p-3">

                    <!--Body-->
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="nombre" name="usercontactname" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                            </div>
                            <input type="email" class="form-control" id="usercontactemail" name="usercontactemail" placeholder="Your Email-Id">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="usercontactphone" name="usercontactphone" placeholder="Your Contact Number">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                            </div>
                            <textarea class="form-control" placeholder="Your Message" name="usercontactmsg"></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Send Message" class="btn btn-info btn-block rounded-0 py-2">
                    </div>
                </div>

            </div>
        </form>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      	<button class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


	
	<script type="text/javascript" src="<?php echo base_url('adminAssets/'); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url('adminAssets/'); ?>js/bs.js"></script>
	<script type="text/javascript" src="<?php echo base_url('adminAssets/'); ?>js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo base_url('adminAssets/'); ?>js/additional-methods.js"></script>
	<script type="text/javascript" src="<?php echo base_url('adminAssets/'); ?>js/cook.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			
		});

		// function setCookie() 
		// {
		//     var customObject = {};

		//     customObject.name = document.getElementById("txtName").value;
		//     customObject.email = document.getElementById("txtEmail").value;
		//     customObject.gender = document.getElementById("txtGender").value;

		//     var jsonString = JSON.stringify(customObject);

		//     document.cookie = "cookieObject=" + jsonString;
		// }

		// function getCookie() 
		// {
		//     var nameValueArray = document.cookie.split("=");

		//     var customObject = JSON.parse(nameValueArray[1]);

		//     document.getElementById("txtName").value = customObject.name;
		//     document.getElementById("txtEmail").value = customObject.email;
		//     document.getElementById("txtGender").value = customObject.gender;
		// }

		// $("#remember").change(function() {
		//     if(this.checked) {

		//         var username = $('#admin_login_uname').val();
		//         var password = $('#admin_login_pwd').val();
		//         // set cookies to expire in 14 days
		//         $.cookie('username', username, { expires: 14 });
		//         $.cookie('password', password, { expires: 14 });
		//         $.cookie('remember', true, { expires: 14 });
		//     }
		//     else {
		//     	// reset cookies
		//     	$.cookie('username', null);
		//     	$.cookie('password', null);
		//     	$.cookie('remember', null);
		//     }
		// });

		// var remember = $.cookie('remember');
		// if ( remember == 'true' ) {
		// 	var username = $.cookie('username');
		// 	var password = $.cookie('password');
		// // autofill the fields
		// 	$('#admin_login_uname').attr("value", username);
		// 	$('#admin_login_pwd').attr("value", password);
		// }

		// jQuery.validator.setDefaults({
		//   debug: true,
		//   success: "valid"
		// });

		$("#loginForm").validate({

		 rules:{
		   'admin_login_uname': {
		     required: true
		   },
		   'admin_login_pwd': {
		     required: true
		   },
		 },

		 messages:{
		 	'admin_login_uname': {
		 	  required: 'Enter Your Username or Email'
		 	},
		 	'admin_login_pwd': {
		 	  required: 'Enter Your Password'
		 	},
		 },
		
		 submitHandler: function(form) {
		   form.submit();
		   // window.location.assign('dashboard.html');
		 }
		});


		$("#admin_contact_form").validate({
			
			
			
		 rules:{
		   'usercontactname': {
		     required: true
		   },
		   'usercontactemail': {
		     required: true,
		     email:true
		   },
		   'usercontactphone': {
		     required: true,
		     number:true,
		     minlength:10,
		     maxlength:15,
		   },
		   'usercontactmsg': {
		     required: true,
		     minlength:50
		   },
		 },

		 messages:{
		 	'usercontactname': {
		 	  required:'Enter Your Name'
		 	},
		 	'usercontactemail': {
		 	  required:'Enter Your Email Id',
		      email:'Check the email format'
		 	},
		   'usercontactphone': {
		     required:'Enter your Contact Number',
		     number:'Enter only digits (Numbers)',
		     minlength:'Number must be at least 10 digits',
		     maxlength:'Number must be at most 15 digits',
		   },
		 	'usercontactmsg': {
		 	  required:'Enter Your Message',
		      minlength:'Aleast 50 characters' 
		 	},
		 },
		
		 submitHandler: function(form) {

		 	$('#contactFormAlert').css("display","block");
		 	setTimeout(function(){
		   		form.submit();
		   		// $("#modalContactForm").modal('hide');
		 	},5000);
		 }
		});

	</script>
	<script type="text/javascript">
		$(".alert-dismissible").fadeOut(10000);
	</script>
</body>
</html>