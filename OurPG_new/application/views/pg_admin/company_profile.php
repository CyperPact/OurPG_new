<?php $this->load->view('pg_admin/header'); ?>
<?php
if(!empty($images['company_logo'])):
 ?>   
<style>
    .picture-element-principal{  background:url("<?php echo $images['company_logo']; ?>") no-repeat 50% 50% !important;  background-size: 167px 148px !important;  }
    </style>
 <?php   
endif;
?>

<body class=" sidebar_main_open sidebar_main_swipe">
   <?php $this->load->view('pg_admin/menues'); ?>
    <div id="page_content" >
        <div id="page_content_inner">
			<div class="md-card">
                <div class="md-card-content">
					<h3 class="heading_a">Company Profile
					<a class="md-fab md-fab-small md-fab-accent edit_pg_profile" style="float:right">
                        <i id="saveprofile" class="material-icons md-color-white"></i>
                    </a>
					</h3>
					<div class="uk-grid" data-uk-grid-margin>
						 <div class="uk-width-medium-1-3">
                            <div style="padding:15px;">
                                <div class="uk-animation-toggle">
                                    <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
                                        <p class="uk-text-center">
                                            <!-- upload image -->
                            <div class="form-group">                                            
                                            <div id="container_photo"></div>
                                            <i>Click on image to change company logo</i>
                                        </div>
                            <!-- upload image /-->  
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                                                     
                           
                        </div>
                        <div class="uk-width-medium-4-6">
						<form name="company_profile" id="company_profile">
						 <input type="hidden" value="<?php echo $secured_data['company_id']; ?>" id="company_id" name="company_id" />
						<div class="uk-width-medium-1-2 floatl">
                            <div style="padding:15px;">
                                
                                <div class="uk-form-row">
                                    <label for="total_bed">Company Name <span class="required">*</span></label>
                                    <input class="md-input" type="text" value="<?php echo $company_dtl[0]['company_name']; ?>" id="company_name" name="company_name"  />
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_line_2">Company PAN <span class="required">*</span></label>
                                    <input class="md-input" type="text" id="company_PAN" value="<?php echo $company_dtl[0]['company_PAN']; ?>" name="company_PAN" />
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_state">Service Tax No. </label>
                                    <input class="md-input" type="text" id="company_service_tx_no"  value="<?php echo $company_dtl[0]['company_service_tx_no']; ?>" name="company_service_tx_no" />
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_pincode">TAN </label>
                                    <input class="md-input" type="text"  value="<?php echo $company_dtl[0]['company_tan']; ?>"  id="company_tan" name="company_tan" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2 floatl">
                            <div style="padding:15px;">
                                <div class="uk-form-row">
                                    <label for="total_bed">Email <span class="required">*</span></label>
                                    <input class="md-input" type="text"  value="<?php echo $company_dtl[0]['company_email']; ?>"  id="company_email" name="company_email"  />
                                </div>
								
                                <div class="uk-form-row">
                                    <label for="pg_address_line_2">Contact No <span class="required">*</span></label>
                                    <input class="md-input" type="text"  value="<?php echo $company_dtl[0]['company_contact_no']; ?>"  id="company_contact_no" name="company_contact_no"  />
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_state">WEB URL </label>
                                    <input class="md-input" type="text"  value="<?php echo $company_dtl[0]['company_website']; ?>"  id="company_website" name="company_website" />
                                </div>
                                
                            </div>
                        </div>
                       </form> 
                    </div>
					</div>
					  <h3 class="heading_c uk-margin-large-top">Address & Account Details
						<a id="save_bankaddress" class="md-fab md-fab-small md-fab-accent edit_pg_profile" style="float:right">
							<i class="material-icons md-color-white"></i>
						</a>
					  </h3>
					  <form name="company_bankaddress" id="company_bankaddress">
						 <input type="hidden" value="<?php echo $secured_data['company_id']; ?>" id="abcompany_id" name="company_id" />
					  <div class="uk-grid uk-margin-medium-top" data-uk-grid-margin>
					  <div class="uk-width-medium-1-2">
                            <div style="padding:15px;">
                                <div class="uk-form-row">
                                    <label for="total_bed">Company Address <span class="required">*</span></label>
                                    <textarea class="md-input" type="text" id="company_address"  name="company_address"  ><?php echo $company_dtl[0]['company_address']; ?></textarea>
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_line_2">City <span class="required">*</span></label>
                                    <input class="md-input" type="text" id="company_city"  value="<?php echo $company_dtl[0]['company_city']; ?>" name="company_city" />
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_state">State <span class="required">*</span></label>
                                    <input class="md-input" type="text" id="company_state"   value="<?php echo $company_dtl[0]['company_state']; ?>"  name="company_state" />
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_pincode">Zip Code <span class="required">*</span></label>
                                    <input class="md-input" type="text" id="company_pin_code"   value="<?php echo $company_dtl[0]['company_pin_code']; ?>"  name="company_pin_code" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div style="padding:15px;">
                                <div class="uk-form-row">
                                    <label for="total_bed">Company Bank Name <span class="required">*</span></label>
                                    <input class="md-input" type="text" id="company_bank_name"  value="<?php echo $company_dtl[0]['company_bank_name']; ?>"  name="company_bank_name"  />
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_line_2">Account  Number <span class="required">*</span></label>
                                    <input class="md-input" type="text" id="company_bank_acc_no"  value="<?php echo $company_dtl[0]['company_bank_acc_no']; ?>" name="company_bank_acc_no" />
                                </div>
                                <div class="uk-form-row">
                                    <label for="pg_address_state">IFSC Code <span class="required">*</span></label>
                                    <input class="md-input" type="text" id="company_ifsc"  value="<?php echo $company_dtl[0]['company_ifsc']; ?>"  name="company_ifsc" />
                                </div>
                                
                            </div>
                        </div>
                        
					  </div>
					  </form>
				</div>
        </div>
    </div>
             
<!-- model /-->

  <?php $this->load->view('pg_admin/footerjs'); ?>
</body>
</html>
<script>
$(document).ready(function() {	
   $('#companyprofile_menu').addClass('current_section'); 
    // check client side validation of company profiles 
	    $("#company_profile").validate({
			errorElement: 'div',
			errorClass: 'parsley-errors-list filled',
			highlight: function(element) {
			   $(element).addClass('md-input-danger');
			   $(element).parent('div').addClass('md-input-wrapper-danger');
		   },
		   unhighlight: function(element) {
			   $(element).removeClass('md-input-danger');
			   $(element).parent('div').removeClass('md-input-wrapper-danger');
		   },
			rules: {				
				company_name: "required",								
				company_email: {
					required: true,
					email: true,
					validemail:true
				},	
				company_PAN: {
					 required: true,
					 pan: true					 
					},
				company_contact_no: {
					required: true,
					specialChars: true,
					number: true,
					minlength: 10,	
					maxlength: 10,			

					}
				
			},
			messages: {
				
				company_name: "Please provide your company name",							
				company_email: {
					required: "Please provide your email address",
					email:"Please provide a valid email address",
					validemail:"Please provide a valid email address",
					},
				company_PAN: {required: "Please provide your pan card no", pan:"Please provide a valid pan card no"},
				company_contact_no: {
					required: "Please provide your contact number",
					specialChars:"please use only alphanumeric or alphabetic characters",
					number: "Please enter a valid contact number.",			
					minlength: "Contact number should be 10 digits",
					maxlength: "Contact number should be 10 digits",	
				}
			},
			errorElement: "div",
						errorPlacement: function(error, element) {
							element.parent('div').after(error);
			}
		});
	 // check client side validation of Address & Account Details
	    $("#company_bankaddress").validate({
			errorElement: 'div',
			errorClass: 'parsley-errors-list filled',
			highlight: function(element) {
			   $(element).addClass('md-input-danger');
			   $(element).parent('div').addClass('md-input-wrapper-danger');
		    },
		    unhighlight: function(element) {
			   $(element).removeClass('md-input-danger');
			   $(element).parent('div').removeClass('md-input-wrapper-danger');
		    },
			rules: {
				company_address:"required",
				company_city:"required",
				company_state:"required",
				company_pin_code:{
					required: true,	
					zipcode:true,
				},				
				company_bank_name:"required",
				company_bank_acc_no: {
					required: true,					
					number: true,
					minlength: 11,	
					maxlength: 15,	
				},
				company_ifsc: {
					required: true,					
					ifsccode: true
				}
			},
			messages: {
				company_address:"Please provide your company address",
				company_city:"Please provide your city",
				company_state:"Please provide your state",
				company_pin_code:{
					required:"Please provide your zip code",
					zipcode:"Please enter valid PIN code",
				},
				company_bank_name:"Please provide your bank name",
				company_bank_acc_no: {
					required:"Please enter your bank account number",
					number:"Please enter a valid account number",							
					minlength: "Bank account number consist of min. 11 digits",
					maxlength: "Bank account number consist of max. 15 digits",
				},
				company_ifsc: {
					required:"Please enter your bank account number",
					ifsccode:"Please enter a valid IFSC Code"						
					
				}	
			},
			errorElement: "div",
						errorPlacement: function(error, element) {
							element.parent('div').after(error);
			}
		});
		
		$('#saveprofile').click(function(){
			var form = $( "#company_profile" );
			if(form.valid()==true){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo site_url('pg_admin/dashboard/saveCompanyDetails') ?>",    
					data: $("#company_profile").serialize(),
					success: function(res) {
						var data = JSON.parse(res);
						if(data.status == "success")
						{                                
						   $("#company_id").val(data.record_id);
						   UIkit.modal.alert("Detailed save sucessfully.");
						   //$(location).attr('href',data.status.URL);
						}
						else{
							$('.errors').html(data.errordata);
						}
					}
                });
			}
        });
		
     $('#save_bankaddress').click(function(){
		 var form = $( "#company_bankaddress" );
			if(form.valid()==true){
                        jQuery.ajax({
                        type: "POST",
                        url: "<?php echo site_url('pg_admin/dashboard/saveCompanyBankAddress') ?>",    
                        data: $("#company_bankaddress").serialize(),
                        success: function(res) {
                            var data = JSON.parse(res);
                            if(data.status == "success")
                            {                                
                               $("#abcompany_id").val(data.record_id);
                               UIkit.modal.alert("Detailed save sucessfully.");
                               //$(location).attr('href',data.status.URL);
                            } 
                         }
                        });
						}
        });
			
 });
</script>

<script src="http://picturecut.tuyoshi.com.br/dependencies/jquery-ui-1.11.1.custom/jquery-ui.min.js"></script>
 <script src="<?php echo asset_url("jquery.picture.cut/src/jquery.picture.cut.js"); ?>"></script>  

    <script>
    $("#container_photo").PictureCut({                    
    InputOfImageDirectory       : "image",
    PluginFolderOnServer        : "/assets/jquery.picture.cut/",
    FolderOnServer              : "/assets/temp_img/",    
    EnableCrop                  : true,
    CropWindowStyle             : "Bootstrap",              
});

function initveriables(){
     var profile_id =  '<?php echo $secured_data['company_id']; ?>';
     localStorage.setItem("profile_id",profile_id);     
 }
 initveriables();
 function finalise_upload(){ 
     $.post( "<?php echo base_url()."pg_admin/dashboard/saveCompanyLogo"; ?>", { profile_id: localStorage.getItem('profile_id'), img_name: localStorage.getItem('image_name') }).done(function( data ) { $("#respimg").html(data); });
						  }
                       
</script>