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
		
	</head>

        <body style="overflow: hidden;">
		
			<div class="container">
		 <div class="top_logo">
			<img src="<?php echo asset_url('images/logo.jpg'); ?>">
		  </div>
		
		
		<!--Login-->
			<div class="wrapper">
			    <form class="form-signin" id="login" name="login" method="post">
			    	<div class="top_head"><p>Indias first SAAS based</p></div>		       
			      <h2 class="form-signin-heading newhead">Paying Guest Management System</h2>
					<p><?php
					if(isset($_SESSION['flash'])):
						echo $_SESSION['flash'];
						unset($_SESSION['flash']); //flash is one time only
					endif;
					?>
			      <div class="newinput">
			      	<input type="text" class="form-control" name="username" placeholder="User ID" required="" autofocus="" />
                                <div id="usernameerror" class="errorMessage"></div>
			      	<input type="password" class="form-control" name="password" placeholder="Password" required="" autocomplete="off" />  
                                <div id="passerror" class="errorMessage"></div>     
			      </div>
					<div id="credentialerror" class="errorMessage"></div>
			       <button class="btn btn-lg btn-primary btn-block nwbtn" type="button" id="click_form"  >Login</button> 

			      <div class="center_line">
			      	<p>Empower your business never before.</p> 
			      </div>
				</form>
			</div>
		<!--Login-End-->	
		
		 		 <div class="form_footer">
			    	<div class="col-md-4">Veraion 1.0.10</div>
					<div class="col-md-4 midcontfooter">
						<p>2017 CyberPact solutions</p>
						<a href="#">User Agreement</a>
						<a href="#">Privacy Policy</a>
					</div> 
			    	<div class="col-md-4 ritflt"><a href="#">www.cyberpact.in</a></div>
			    </div>
		
		</div>

		<script src="<?php echo asset_url('js/jquery.min.js'); ?>"></script>  
		<script src="<?php echo asset_url('js/jquery.loading-indicator.js'); ?>"></script>
                <script src="<?php echo asset_url('js/bootstrap.min.js'); ?>"></script>
                <script type="text/javascript">
                    $(document).ready(function() {   
                       $('#click_form').click(function(){
                        jQuery.ajax({
                        type: "POST",
                        url: "<?php echo site_url('registration/ajax_signup') ?>",    
                        data: $("#login").serialize(),
                        success: function(res) {
                            var data = JSON.parse(res);
                            if(data.status.Status == "success")
                            {  
                                $('#credentialerror').html("");
                                $('#usernameerror').html("");
                                $('#passerror').html("");
                               $(location).attr('href',data.status.URL);
                            } else if(data.status.Status == "wrong"){
                                $('#credentialerror').html(data.errormsg.credentialerror);
                                $('#usernameerror').html("");
                                $('#passerror').html("");
                            }
                            else{
                                $('#usernameerror').html(data.errormsg.username);
                                $('#passerror').html(data.errormsg.password);
                                $('#credentialerror').html("");
                            }
                         }
                        });
                      });
                    });
            </script>
	</body>
</html>