  <!-- ##### Welcome Area Start ##### -->
    <section 
     style="background: url(<?=base_url('public/uploads/'.$slider->photo)?>) no-repeat center center;"
    class="hero-section banner1-bg relative section-padding" id="home"
   >

        <div class="hero-section-content">
            
            <div class="container h-100">
                <div class="row h-100 mb-50 align-items-center">

                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content">
                            <div class="promo-section">
                                <h3 class="special-head"><?=$slider->heading?></h3>
                            </div>
                            <h1 class="w-text bolder fadeInUp" data-wow-delay="0.2s">
                                <?=$slider->sub_heading?>   
                            </h1>
                            <p class="g-text fadeInUp" data-wow-delay="0.3s">
                                <?=$slider->content?>  
                            </p>
                            <div class="more-btn-group fadeInUp" data-wow-delay="0.4s">
                                <?php if($slider->button1_url): ?>
                                <a href="<?=$slider->button1_url?>" class="btn-paint mr-3"><?=$slider->button1_text?></a></a>
                                  <?php endif; ?>

                                <?php if($slider->button2_url): ?>
                                    <a href="<?=$slider->button2_url?>" class="btn-paint"><?=$slider->button2_text?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->


    <div class="clearfix"></div>

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-100-70">
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12">
                    <div class="fadeInUp">
                        <!-- <img src="<?=base_url('public/front/img/core-img/img-1.jpg')?>" class="mb-15" alt="">
                        <img src="<?=base_url('public/front/img/core-img/img-2.jpg')?>" class="mb-15 ml-30" alt=""> -->
                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home_lang_independent['home_welcome_video_bg']; ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="who-we-contant mt-s">
                        <div class="more-dots text-left fadeInUp" data-wow-delay="0.2s">
                            <span class="special-head"><?=$page_home['home_welcome_title']?></span>
                        </div>
                        <h5 class="bold fadeInUp" data-wow-delay="0.3s">
                            <?=$page_home['home_welcome_subtitle']?>
                        </h5>
                        <p class="fadeInUp" data-wow-delay="0.5s">
                            <?=$page_home['home_welcome_text']?></p>
                        <div class="row">

                            <?php 
                                foreach ($portfolio as $portif):
                                    $portif = (Object) $portif;
                             ?>
                                <div class="col-sm-12 ">
                                    <div class="services-block-four">
                                        <div class="inner-box">
                                            <div class="icon-img-box hot-box">
                                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $portif->photo; ?>" alt="">
                                            </div>
                                            <h3 class="fadeInUp" data-wow-delay="0.8s"><a href="#"><?=$portif->name?></a></h3>
                                            <div class="text fadeInUp" data-wow-delay="1s">
                                                <?=nl2br($portif->short_content)?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

<!--Feature-Area Start-->
<?php if($page_home_lang_independent['home_feature_status'] == 'Show'): ?>
    <section class="how section-padding-0-70 relative map-before">

        <div class="container">

            <div class="section-heading text-center">
                
                <h2 class="wow fadeInUp d-blue bold" data-wow-delay="0.3s">
                   <?php echo $page_home['home_feature_title']; ?>
                </h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">
                    <?php echo $page_home['home_feature_subtitle']; ?>
                </p>
            </div>
            <div class="row">
                  <?php foreach ($features as $row) {  ?>
                    
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Content -->
                    <div class="service_single_content box-shadow text-center wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="how_icon">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" class="colored-icon" alt="">
                        </div>
                        <h6><?php echo $row['name']; ?></h6>
                        <p><?php echo nl2br($row['content']); ?></p>
                    </div>
                </div>
               <?php } ?>
                
            </div>
        </div>
    </section>

<?php endif; ?>



<?php

    /*

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-100">
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12">
                    <div class="fadeInUp" data-wow-delay="0.7s">
                        <img src="<?=base_url('public/front/img/core-img/about1.png')?>" alt="">
                    </div>
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="who-we-contant mt-s">
                        <div class="more-dots text-left fadeInUp" data-wow-delay="0.2s">
                            <span class="">Logistics & Transportation Company</span>
                        </div>
                        <h4 class="bold fadeInUp" data-wow-delay="0.3s">We are the most popular Logistics and Transportation company.</h4>
                        <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. sit amet convallis nunc scelerisque in. ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. sit amet convallis nunc scelerisque in.</p>
                        <div class="list-wrap align-items-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                        <div class="foot-c-info">Custom & new Solutions</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                        <div class="foot-c-info">24/7 Support services</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                        <div class="foot-c-info">Dedicated Team </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                        <div class="foot-c-info">Latest Technologies</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                        <div class="foot-c-info">The best Quality Ever</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                        <div class="foot-c-info">unlimited opportunities</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <a class="btn-paint mt-30 fadeInUp" data-wow-delay="0.6s" href="about-us.html">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    */

    ?>

    <!-- ##### Our Services Area Start ##### -->
    <section class="our_services_area section-padding-100-0 relative map-bg map-before">
        <div class="container">
            
            <div class="section-heading text-center">
                
                <h2 class="d-blue bold fadeInUp" data-wow-delay="0.3s"> <?php echo $page_home['home_service_title']; ?> </h2>
                <p class=" fadeInUp" data-wow-delay="0.4s"><?php echo $page_home['home_service_subtitle']; ?></p>
            </div>
                

            <div class="row justify-content-center">
                <?php foreach ($services as $row): ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Content -->
                    <a href="">
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="">
                        </div>
                        <h6><?php echo $row['name']; ?></h6>
                        <p> <?php echo nl2br(truncate($row['short_description'])); ?></p>
                    </div>
                   </a>
                </div>
                <?php endforeach; ?>
               
              
            </div>
        </div>
    </section>

<?php if($page_home_lang_independent['home_team_status'] == 'Show'): ?>
    <!-- ##### Team Area Start ##### -->
    <section class="our_team_area section-padding-100-0 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        
                        <h2 class="fadeInUp" data-wow-delay="0.3s"><?php echo $page_home['home_team_title']; ?></h2>
                        <p class="fadeInUp" data-wow-delay="0.4s"><?php echo $page_home['home_team_subtitle']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member -->


                <?php foreach ($team_members as $row) { ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member hos fadeInUp" data-wow-delay="0.2s">
                        <!-- Image -->
                        <div class="team-member-thumb hos">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5 class="w-text">
                                <a style="color:white!important;" href="<?php echo base_url(); ?>team-member/<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                                </a></h5>
                            <p class="g-text"><?php echo $row['designation']; ?></p>
                        </div>
                       
                    </div>
                </div>

                <?php } ?>


            </div>
        </div>
    </section>
    <!-- ##### Team Area End ##### -->
<?php endif; ?>

    <div class="clearfix"></div>

<!--Blog-Area Start-->
<?php if($page_home_lang_independent['home_blog_status'] == 'Show'): ?>

    <section class="our_blog_area clearfix section-padding-100-0" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    
                        <h2 class="fadeInUp" data-wow-delay="0.3s">
                            <?php echo $page_home['home_blog_title']; ?></h2>
                        <p class="fadeInUp" data-wow-delay="0.4s">
                            <?php echo $page_home['home_blog_subtitle']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <?php
                    $i=0;
                    foreach ($all_news_category as $news):
                        $i++; ?>
                <!-- Single Blog Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="blog_thumbnail">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="blog-content">
                            <div class="post-meta mt-20">
                                <p>
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><?=timeago($news['news_date'])?></a>
                                </p>
                            </div>
                            <a href="#" class="post-title">
                                <h4><?php echo $news['news_title']; ?></h4>
                            </a>
                            <p> <?php echo $news['news_content_short']; ?></p>
                            <a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>" class="more-info">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

                
            </div>
        </div>
    </section>

<?php endif; ?>    
  

