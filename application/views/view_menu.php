

    <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><span>
                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="logo" width="250px"></span></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">

                     <?php
                            $CI =& get_instance();
                            $CI->load->model('Model_common');
                            $CI->load->model('Model_lang');
                            $CI->load->model('admin/Model_menu');

                            $all_dynamic_pages = array();
                            $all_dynamic_pages = $CI->Model_common->all_dynamic_pages();
                            if(count($all_dynamic_pages) >= 1)
                            {
                                $d_page = 1;
                            }
                            else
                            {
                                $d_page = 0;
                            }

                            $arr_menu = array();
                            $all_menu = $CI->Model_menu->show();
                            foreach($all_menu as $row)
                            {
                                $arr_menu[$row['menu_id']] = $row['menu_status'];
                            }
                            ?>
                            
                            <?php if($arr_menu[1] == 'Show'): ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
                            <?php endif; ?>
                            
                            <?php if($arr_menu[2] == 'Show'): ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li>
                            <?php endif; ?>
                            
                            <?php if($arr_menu[3] == 'Show'): ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>team"><?php echo TEAM; ?></a></li>
                            <?php endif; ?>                            


                            <?php if($arr_menu[9] == 'Show'): ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>service"><?php echo SERVICE; ?></a></li>
                            <?php endif; ?>

                            <?php if($arr_menu[10] == 'Show'): ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>portfolio"><?php echo PORTFOLIO; ?></a></li>
                            <?php endif; ?>

                            <?php if($arr_menu[11] == 'Show'): ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>news"><?php echo NEWS; ?></a></li>
                            <?php endif; ?>


                            <?php if( ($arr_menu[4] == 'Show') || ($arr_menu[5] == 'Show') || ($arr_menu[6] == 'Show') || ($arr_menu[7] == 'Show') || ($arr_menu[8] == 'Show') || ($d_page == 1) ): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">More</a>
                                 <div class="dropdown-menu">
                                    <?php if($arr_menu[4] == 'Show'): ?>
                                    <a class="dropdown-item"  href="<?php echo base_url(); ?>event"><?php echo EVENT; ?></a>
                                    <?php endif; ?>

                                    <?php if($arr_menu[5] == 'Show'): ?>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>photo-gallery"><?php echo PHOTO_GALLERY; ?></a>
                                    <?php endif; ?>
                                    
                                    <?php if($arr_menu[6] == 'Show'): ?>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>testimonial"><?php echo TESTIMONIAL; ?></a>
                                    <?php endif; ?>

                                    <?php if($arr_menu[7] == 'Show'): ?>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>faq"><?php echo FAQ; ?></a>
                                    <?php endif; ?>

                                </div>
                            </li>
                            <?php endif; ?>
                            

                            <?php if($arr_menu[12] == 'Show'): ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
                            <?php endif; ?>
                            <li class="lh-55px"><a href="<?php echo base_url(); ?>contact" class="btn login-btn ml-50">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->