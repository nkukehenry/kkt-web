
    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix auto-init" 
    style="background: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_about']; ?>) no-repeat center top;">
        
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s"><?php echo $page_about['about_heading']; ?></h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_about['about_heading']; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

 <section class="about-us-area section-padding-100-70">
<!--About Start-->
<div class="about-page pt_60 pb_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo $page_about['about_content']; ?>
            </div>
        </div>
    </div>
</div>

<div class="recent-project bg-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo RECENT_PORTFOLIO; ?></h2>
                    <h3><?php echo RECENT_PORTFOLIO_SUBTITLE; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="project-carousel owl-carousel">
                    <?php
                    $i=0;
                    foreach ($portfolio_order_by_name as $row) {
                        if($i>10) {
                            break;
                        }
                        ?>
                        <div class="portfolio-group">
                            <div class="portfolio-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
                                <div class="portfolio-bg"></div>
                                <div class="portfolio-table">
                                    <div class="portfolio-icon">
                                        <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" class="magnific"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-text">
                                <h3><a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<!--About End-->
</section>