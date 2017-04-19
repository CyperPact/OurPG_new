<?php $this->load->view('pg_admin/header'); ?>
<body class=" sidebar_main_open sidebar_main_swipe">
     <style type="text/css">
           
            /*** nav ends here ****/


            .form-inline .form-group{
                margin-bottom: 20px;
                float: right;
            }


            input[type=number]{ -moz-appearance: textfield; }
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            .expense_table_body input, textarea {
                border-top: 0px;
                border-right: 0;
                border-left: 0;
                border-bottom: 1px solid #ccc;
                width: 98%;
                padding: 10px;
            }

            textarea {
                margin-top: -8px;
            }

        </style>
   <?php $this->load->view('pg_admin/menues'); ?>
    <div id="page_content">
        <div id="page_content_inner">
            <!-- statistics (small charts) -->
            <h2><span class="alert_msg" style="float:right; font-size:14px; color:red;"></span></h2><br/>
            <div class="md-card">
                
                        <div class="user_content">
                            <ul id="user_profile_tabs" class="uk-tab" data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}" data-uk-sticky="{ top: 48, media: 960 }">
                                <li class="uk-active"><a href="#" class="type_expense" data-flag="1">Send Guest Invitation</a></li>
                                <li><a href="#" class="type_expense" data-flag="2">Add Guest Complete Detail</a></li>                                
                            </ul>
                            <ul id="user_profile_tabs_content" class="uk-switcher uk-margin">
                                <li>
                                    <div class="md-card">
                                        <div class="md-card-toolbar">
                                            <div class="md-card-toolbar-actions">
<!--                                                <a class="md-fab md-fab-small md-fab-accent save_monthly_expense" style="float:left">
                                                    <i class="material-icons md-color-white"></i>
                                                </a>-->
                                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                                <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                                                
                                            </div>
<!--                                            <h2 class="md-card-toolbar-heading-text">
                                                <b>Add Your Monthly Expense</b>
                                            </h2>-->
                                        </div>
                                        <div class="md-card-content">
                                            <form id="sendinvetation">
                                            <table class="table table-bordered table-hover table_monthly">
                                                <thead>
                                                    <tr>
                                                        <th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>                                                        
                                                        <th width="20%">Name</th>
                                                        <th width="20%">Email</th>
                                                        <th width="20%">Mobile No</th>
                                                        <th width="20%">Joining Date</th>
                                                    </tr>
                                                </thead>                                                
                                                <tbody class="expense_table_body expense_table_monthly">
                                                </tbody>
                                            </table>   
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-3 col-md-3 col-lg-3' style="text-align:right;margin-top: 15px;">
                                                    <button class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light delete_monthly" type="button">- Delete</button>
                                                    <button class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light addmore_monthly" type="button">+ Add</button>
                                                    <button class="md-btn md-btn-flat-primary md-btn-wave-light waves-effect waves-button waves-light" type="submit">Send Invitation</button>
                                                </div>
                                            </div> 
                                            </form>                       
                                        </div>
                                    </div>
                                    
                                </li>
                                
                                <li>
                                    <div class="md-card">
                                        <div class="md-card-toolbar">
                                            <div class="md-card-toolbar-actions">
                                                <a class="md-fab md-fab-small md-fab-accent save_onetime_expense" style="float:left">
                                                    <i class="material-icons md-color-white"></i>
                                                </a>
                                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                                <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                                                
                                            </div>
                                            <h2 class="md-card-toolbar-heading-text">
                                                <b>Add guest complete details.</b>
                                            </h2>
                                        </div>
                                        <div class="md-card-content">  
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
            </div>
            
        </div>
    </div>


  <?php $this->load->view('pg_admin/footerjs'); ?>

</body>
</html>
<script>
    $('#addguest').addClass('current_section'); 
</script>
<script>
var i=$('.table_monthly tr').length;
$(".addmore_monthly").on('click',function(){
    html = '<tr class="monthly_table">';
    html += '<input type="hidden" value="0" class="e_id"/>';
    html += '<td><input class="case" type="checkbox"/></td>';
    html += '<td><input type="text" name="guest_name[]" id="itemNo_'+i+'" class="form-control autocomplete_txt" autocomplete="off"></td>';
    html += '<td><input type="text" name="guest_email[]" id="itemName_'+i+'" class=" form-control autocomplete_txt"  autocomplete="off"></td>';        
    html += '<td><input type="text" name="guest_mobile[]" id="total_'+i+'" class=" form-control totalLinePrice" autocomplete="off"  ondrop="return false;" onpaste="return false;"></td>';
    html += '<td><input type="text" name="guest_doj[]" id="" data-uk-datepicker="{format:"DD-MM-YYYY"}" class=" form-control changesNo" autocomplete="off"></td>';
    html += '</tr>';
    $('.table_monthly').append(html);
    i++;
});

$(".delete_monthly").on('click', function() {
    $('.case:checkbox:checked').parents("tr").remove();
    $('#check_all').prop("checked", false); 
    // calculateTotal();
});
//to check all checkboxes
$(document).on('change','#check_all',function(){
    $('input[class=case]:checkbox').prop("checked", $(this).is(':checked'));
});

// send Invitation
$("#sendinvetation").submit(function(e) {
               
            e.preventDefault();
            jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url().'pg_admin/MyGuest/sendNotification' ?>",    
                        data: $(this).serialize(),
                        success: function(data) {
                            var data = JSON.parse(data);
                            alert(data.status);
                            $("#sendinvetation").trigger('reset');
                         }
                        });
                });
</script>