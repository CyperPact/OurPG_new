<?php $this->load->view('pg_guest/header'); ?>
<body class=" sidebar_main_open sidebar_main_swipe">
   <?php $this->load->view('pg_guest/menues'); ?>
    <div id="page_content">
        <div id="page_content_inner">
            <!-- statistics (small charts) -->
            <h2><span class="alert_msg" style="float:right; font-size:14px; color:red;"></span></h2><br/>
            <div class="md-card">
                

                
            </div>
            
        </div>
    </div>


  <?php $this->load->view('pg_guest/footerjs'); ?>

</body>
</html>
<script>
    $('#dashboard_menu').addClass('current_section'); 
</script>