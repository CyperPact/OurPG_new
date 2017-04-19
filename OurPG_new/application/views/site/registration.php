<!doctype html>
<html>
	<head>
		<link href="<?php echo asset_url('css/bootstrap.css'); ?>" rel="stylesheet">
		<link href="<?php echo asset_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
	    <link href="<?php echo asset_url('css/bootstrap-toggle.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo asset_url('css/font-awesome.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo asset_url('css/font-awesome.css'); ?>" rel="stylesheet">
		<link href="<?php echo asset_url('css/main.css'); ?>" rel="stylesheet">
		<link href="<?php echo asset_url('css/jquery.loading-indicator.css'); ?>" rel="stylesheet">
                <style>
                    @import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
                </style>
        </head>

        <body>
		
		<div class="container">
    
	<div class="col-lg-offset-2 col-lg-8 well">
            <div class="row">
                <div class="col-sm-12">
                <h3>Paying Guest Management System</h3>
                <?php echo $this->session->flashdata('message'); ?>
                </div>
                <form id="regform" name="regform" method="POST" action="<?php echo base_url()."registration/pgownerregister" ?>" >
					<div class="col-sm-12">						
												
					<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
                                                                <input type="text" name="first_name" placeholder="Enter First Name Here.." class="form-control" required="" />
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
                                                                <input type="text" name="last_name" placeholder="Enter Last Name Here.." class="form-control" required="" />
							</div>
                                            <div class="errorMessage"><?php echo form_error('first_name'); ?></div>
                                            <div class="errorMessage"><?php echo form_error('last_name'); ?></div>
                                        </div>	
					<div class="form-group">
						<label>Phone Number</label>
                                                <input pattern="[0-9]{10}" name="mobile_no" title="Enter your mobile number" type="text" placeholder="Enter Phone Number Here.. eg 9XXXXXXXX8" class="form-control" required="" />
                                                <div class="errorMessage"><?php echo form_error('mobile_no'); ?></div>
					</div>		
					<div class="row">
							<div class="col-sm-6 form-group">
								<label>Email</label>
                                                                <input type="text" id="pg_contact_email" name="pg_contact_email" placeholder="Enter Email Here.. eg. abc@pq.co" class="form-control" required="" />
							</div>
							<div class="col-sm-6 form-group" id="usernameresult">
								<label>Username</label>
                                                                
							</div>
                                            
                                        </div>	
					<div class="form-group">
						<label>Password</label>
                                                <input name="password" type="password" placeholder="Enter Password" class="form-control" required=""  id="password" />
					</div>	
					<div class="form-group">
						<label>Conform Password</label>
						<input name="conform_password"  type="password" placeholder="Conform Your Password Here.." class="form-control" required="" id="confirm_password"  />
                                                <div class="errorMessage"><?php echo form_error('password'); ?></div>
					</div>	
					
                                            <button type="submit" class="btn btn-lg btn-info" >Register</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>

		<script src="<?php echo asset_url('js/jquery.min.js'); ?>"></script>  
		<script src="<?php echo asset_url('js/jquery.loading-indicator.js'); ?>"></script>
                <script src="<?php echo asset_url('js/bootstrap.min.js'); ?>"></script>
                <script type="text/javascript">
                    
$(document).ready(function() {
    
   // pg username chk
   
   $("#pg_contact_email").keyup(function(){
       var name = $(this).val(); 
       if(name.length > 3)
        {  
         $("#usernameresult").html('checking...');
         $.post("checkusername", $("#regform").serialize())
                  .done(function(data){
           $("#usernameresult").html(data);
          });
        } else
        {
         $("#usernameresult").html('');
        }
   });
    
    });
    // conform password
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

	</body>
</html>