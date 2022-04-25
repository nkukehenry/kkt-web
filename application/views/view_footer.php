   <?php
    $CI =& get_instance();
    $CI->load->model('Model_common');
    $footer_setting = $CI->Model_common->all_footer_setting();
    $footer_setting_lang_independent = $CI->Model_common->all_footer_setting_lang_independent();
    $all_setting = $CI->Model_common->all_setting();
     $recent_news = recent_news();
    ?>

    <!--Call Start-->
    <div class="call-us" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $footer_setting_lang_independent['cta_background']; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="call-text">
                        <h3><?php echo $footer_setting['cta_text']; ?></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="button call-button">
                        <a  href="<?php echo $footer_setting['cta_button_url']; ?>"><?php echo $footer_setting['cta_button_text']; ?> <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Call End-->

    <!--Footer-Area Start-->
    <div class="footer-area pt_60 pb_50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item" id="newsletter">
                        <h3><?php echo FOOTER_1_HEADING; ?></h3>
                        <p>
                            <?php echo nl2br($footer_setting['newsletter_text']); ?>
                        </p>
                        <?php echo form_open(base_url().'newsletter/send',array('class' => '')); ?>
                        <div class="input-group">                            
                            <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="email_subscribe">
                            <span class="input-group-btn">
                                <button class="btn" type="submit" name="form_subscribe"><i class="fa fa-location-arrow"></i></button>
                            </span>                            
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item footer-recent-post">
                        <h3><?php echo FOOTER_2_HEADING; ?></h3>
                        <ul>
                            <?php
                            $i=0;
                            foreach ($recent_news as $news) {
                               
                                ?>
                                <li><a href="<?php echo base_url(); ?>news/view/<?php echo $news->news_id; ?>"><?php echo $news->news_title; ?></a></li>    
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo FOOTER_3_HEADING; ?></h3>
                        <div class="row pl-10 pr-10">                            
                            <?php
                            $i=0;
                            foreach($portfolio_footer as $row) {
                                $i++;
                                if($i > $footer_setting_lang_independent['footer_recent_portfolio_item']) {
                                    break;
                                }
                                ?>
                                <div class="col-4 footer-project">
                                    <a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Project Photo"></a>
                                </div>
                                <?php
                            }
                            ?>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo FOOTER_4_HEADING; ?></h3>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($footer_setting['footer_address']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($footer_setting['footer_phone']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($footer_setting['footer_email']); ?>
                                </span>
                            </div>
                        </div>
                        <ul class="footer-social">
                            <?php
                            foreach ($social as $row)
                            {
                                if($row['social_url']!='')
                                {
                                    echo '<li><a href="'.$row['social_url'].'"><i class="'.$row['social_icon'].'"></i></a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt_10 pb_10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-menu hidden">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>terms-and-conditions"><?php echo TERMS_AND_CONDITIONS; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>privacy-policy"><?php echo PRIVACY_POLICY; ?></a></li>
                        </ul>
                    </div>
                    <div class="copy-text">
                        <p>
                            <?php echo $footer_setting['footer_copyright']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-Area End-->



    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="<?=base_url('public/front/js/jquery.min.js')?>"></script>
    <!-- Popper js -->
    <script src="<?=base_url('public/front/js/popper.min.js')?>"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url('public/front/js/bootstrap.min.js')?>"></script>
    <!-- All Plugins js -->
    <script src="<?=base_url('public/front/js/plugins.js')?>"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.filterizr.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/viewportchecker.js"></script>

    <!-- script js -->
    <script src="<?=base_url('public/front/js/script.js')?>"></script>

    <script src="<?php echo base_url(); ?>public/js/custom.js"></script>

</body>
</html>