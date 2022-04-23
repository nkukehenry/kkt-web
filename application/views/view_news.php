
    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix auto-init" 
    style="background: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_news']; ?>) no-repeat center top;">
        
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s"><?php echo $page_news['news_heading']; ?></h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_news['news_heading']; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Blog-One Start-->
  <section class="blog-area section-padding-100-0">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-9">            

                <?php
                foreach($news_fetched as $row) {
                    ?>

                     <!-- Single Blog Post -->
                        <div class="col-12 col-sm-4">
                            <div class="single-blog-area wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="blog_thumbnail">
                                    <img src="<?php echo base_url().'public/uploads/'.$row->photo; ?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="blog-content">
                                    
                                    <div class="post-meta">
                                        <p><a href="#"><?=timeago($row->news_date)?></a> 
                                        <!-- <a href="<?php echo base_url(); ?>category/<?php echo $row->category_id; ?>" class="post-comments bardge"><?php echo $row->category_name; ?></a> --></p>
                                    </div>
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>" class="post-title">
                                        <h4><?php echo $row->news_title; ?></h4>
                                    </a>
                                    <p><?php echo truncate($row->news_content_short,170); ?></p>
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>" class="btn btn-paint mt-15">Read Details</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>


                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="sidebar-area">

                        <!-- Search Widget -->
                        <div class="search-widget-area mb-50 wow fadeInUp" data-wow-delay="0.2s">
                           <?php echo form_open(base_url().'search'); ?>
                                <input type="search" name="search" id="search" placeholder="Search...">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            <?php echo form_close(); ?>
                        </div>

                        <!-- Don't Miss Widget -->
                        <div class="donnot-miss-widget mb-50">
                            <div class="widget-title wow fadeInUp" data-wow-delay="0.3s">
                                <h5>Recent News</h5>
                            </div>

                            <?php
                                $i=0;
                                foreach($news as $row) {
                                    $i++;
                                    if($i>$setting['sidebar_total_recent_post']) {
                                        break;
                                    }
                            ?>
                            <!-- Single Don't Miss Post -->
                            <div class="single-dont-miss-post mb-30 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="dont-miss-post-thumb">
                                    <img src="<?php echo base_url().'public/uploads/'.$row['photo']; ?>" alt="">
                                </div>
                                <div class="dont-miss-post-content">
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a>
                                    <span><?=timeago($row['news_date'])?></span>
                                </div>
                            </div>



                             <?php } ?>

                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12" style="margin-top:30px;text-align: center;">
                    <?php echo $links; ?>
                </div>
            </div>
        </div>
    </section>
