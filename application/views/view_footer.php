   <?php
    $CI =& get_instance();
    $CI->load->model('Model_common');
    $footer_setting = $CI->Model_common->all_footer_setting();
    $footer_setting_lang_independent = $CI->Model_common->all_footer_setting_lang_independent();
    $all_setting = $CI->Model_common->all_setting();
    ?>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <div class="footer-content-area mt-0">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="<?=base_url()?>">
                                        <img width="100px" src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="logo"> 
                                        <h5><?php echo $footer_setting['cta_text']; ?></h5> 
                                    </a>
                                </div>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            
                                <p>  <?php echo $footer_setting['footer_copyright']; ?></p>
                        </div>
                    </div>

                   
                      
                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>MENU</h5>
                                <a href="<?=base_url()?>"><p>Home</p></a>
                                <a href="<?=base_url('about')?>"><p>About Us</p></a>
                                <a href="<?=base_url('service')?>"><p>Services</p></a>
                                <a href="<?=base_url('contact')?>"><p>Contact Us</p></a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5><?php echo FOOTER_4_HEADING; ?></h5>
                                <p><?php echo nl2br($footer_setting['footer_address']); ?></p>
                                <p><?php echo nl2br($footer_setting['footer_phone']); ?></p>
                                <p><?php echo nl2br($footer_setting['footer_email']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->


    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="<?=base_url('public/front/js/jquery.min.js')?>"></script>
    <!-- Popper js -->
    <script src="<?=base_url('public/front/js/popper.min.js')?>"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url('public/front/js/bootstrap.min.js')?>"></script>
    <!-- All Plugins js -->
    <script src="<?=base_url('public/front/js/plugins.js')?>"></script>

    <!-- script js -->
    <script src="<?=base_url('public/front/js/script.js')?>"></script>

</body>
</html>