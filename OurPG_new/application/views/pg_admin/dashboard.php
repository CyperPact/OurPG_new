<?php $this->load->view('pg_admin/header'); ?>
<body class=" sidebar_main_open sidebar_main_swipe">
   <?php $this->load->view('pg_admin/menues'); ?>
    <div id="page_content">
        <div id="page_content_inner">
            <!-- statistics (small charts) -->
            <h2><span class="alert_msg" style="float:right; font-size:14px; color:red;"></span></h2><br/>
            <div class="md-card">                
            </div>
            
        </div>
    </div>


   

    <!-- This is the modal -->
    <div id="global_make_payment" class="uk-modal">
        <div class="uk-modal-dialog">
            <a class="uk-modal-close uk-close add_guest_close"></a>
            <h2 style="border-bottom: 1px solid #ccc; padding: 5px;">Fill the details <span class="alert_msg" style="float:right; font-size:14px; color:red;"></span></h2>
            <div class="uk-form-row">
                <div class="uk-grid">
                    <div class="uk-width-medium-1-2">
                        <div class="md-input-wrapper md-input-filled"> <label>Name <span style="color:red">*</span></label><input type="text" class="md-input payment_name"><span class="md-input-bar"></span></div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="md-input-wrapper"><label>Amount<span style="color:red">*</span></label><input type="text" class="md-input payment_amount" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"><span class="md-input-bar"></span></div>
                    </div>
                </div>
            </div>

            <div class="uk-form-row">
                <div class="uk-grid">
                    <div class="uk-width-medium">
                        <div class="md-input-wrapper md-input-filled"><label>Payment Description</label><input type="text" class="md-input payment_description" value="Monthly Rent"><span class="md-input-bar"></span></div>
                    </div>
                </div>
            </div>
            <div class="uk-form-row">
                <div class="uk-grid">
                    <div class="uk-width-medium-1-2">
                        <div class="md-input-wrapper md-input-filled"><label>Discount if Any (in Rupees) <span style="color:red"></span></label><input type="text" value="0" class="md-input payment_discount" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"><span class="md-input-bar"></span></div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="md-input-wrapper"><label>Final Amount<span style="color:red"></span></label><input type="text" class="md-input payment_final_amount" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" readonly="readonly"><span class="md-input-bar"></span></div>
                    </div>
                </div>
            </div>
            <div style="width:100%; text-align:center;    margin-top: 15px;">
                <button class="payment_submit md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" style="width:100px;">Pay</button>
            </div>
        </div>
    </div>
  <?php $this->load->view('pg_admin/footerjs'); ?>

</body>
</html>
<script>
    $('#dashboard_menu').addClass('current_section'); 
</script>