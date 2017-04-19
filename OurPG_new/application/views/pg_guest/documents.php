
<?php $this->load->view('pg_guest/header'); ?>
<!-- dropify -->
    <link rel="stylesheet" href="<?php echo asset_url('pg_admin/assets/skins/dropify/css/dropify.css'); ?>">
<body class=" sidebar_main_open sidebar_main_swipe">
   <?php $this->load->view('pg_guest/menues'); ?>
    <div id="page_content">
        <div id="page_content_inner">
            <!-- statistics (small charts) -->

            
            <h2><span class="alert_msg" style="float:right; font-size:14px; color:red;"></span></h2><br/>
            <div class="md-card">
                   <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content" id="adharfile" >
                            <h3 class="heading_a uk-margin-small-bottom">
                                Adhar Card
                                <a href="#" onclick="addadhar();" ><i class="material-icons md-24">&#xE146;</i></a>
                            </h3>
<!--                            <input type="file" id="input-file-b" class="dropify" data-default-file="assets/img/gallery/Image08.jpg"/>-->
                            
                            <input type="file" name="adhardoc[]" id="input-file-b" class="dropify"/>
                            <input type="file" name="adhardoc[]" id="input-file-b" class="dropify"/>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>
    </div>


  <?php $this->load->view('pg_guest/footerjs'); ?>
 <!-- page specific plugins -->
    <!--  dropify -->
    <script src="<?php echo asset_url('pg_admin/assets/js/custom/dropify/dist/js/dropify.min.js'); ?>"></script>

    <!--  form file input functions -->
    <script src="<?php echo asset_url('pg_admin/assets/js/pages/forms_file_input.min.js'); ?>"></script>
    
    <script >
    function addadhar(){
         var objTo = document.getElementById('adharfile')
         var btn = document.createElement("file");
    var t = document.createTextNode("CLICK ME");
    btn.appendChild(t);
    objTo.appendChild(btn);
    }
    </script>
</body>
</html>
<script>
    $('#docs').addClass('current_section'); 
</script>