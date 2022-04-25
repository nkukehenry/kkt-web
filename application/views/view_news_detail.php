<!--Banner Start-->
<div class="breadcumb-area clearfix auto-init" 
style="background: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_news']; ?>) no-repeat center top;">
    
    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s"><?php echo $news_detail['news_title']; ?></h2>
                        <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Blog-One Start-->
 <section class="blog-area section-padding-100-0">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-blog">
                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $news_detail['photo']; ?>" alt="News Photo" style="width: 100%;"/>
                    <br>
                    <h3 class="mt-10"><?php echo $news_detail['news_title']; ?></h3>
                    <ul>
                        <li><i class="fa fa-calendar-o"></i>
                            <?=timeago($news_detail['news_date']); ?>
                        </li>
                    </ul>

                    <br>
                    <?php echo $news_detail['news_content']; ?>
                </div>
                
                <div class="comment-form headstyle mt_50">
                    <h4><?php echo SHARE_THIS_NEWS; ?></h4>
                    <?php $url = base_url().'news/view/'.$news_detail['news_id']; ?>
                    <br/>
                    <div class="btn-group">
                        <a class="btn" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>&t=<?php echo $news_detail['news_title']; ?>"><i class="fa fa-facebook-f"></i></a>

                        <a class="btn" target="_blank" href="https://twitter.com/share?text=<?php echo $news_detail['news_title']; ?>&url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a>

                        <a class="btn" target="_blank" href="https://www.pinterest.com/pin/create/button/?description=<?php echo $news_detail['news_title']; ?>&media=&url=<?php echo $url; ?>"><i class="fa fa-pinterest"></i></a>

                        <a class="btn" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=<?php echo $news_detail['news_title']; ?>"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <?php /*if($news_detail['comment'] == 'On'): ?>
                <div class="comment-form headstyle mt_50">
                    <h4><?php echo COMMENT; ?></h4>
                    <div class="comment-inner">
                        <?php
                        $final_url = base_url().'news/view/'.$id;
                        ?>
                        <div class="fb-comments" data-href="<?php echo $final_url; ?>" data-numposts="5"></div>
                    </div>
                </div>
                <?php endif;*/ ?>

                <br>

            </div>

            <!--Sidebar Start-->
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
            <!--Sidebar End-->
        </div>
    </div>
</section>
<!--Blog-One End-->