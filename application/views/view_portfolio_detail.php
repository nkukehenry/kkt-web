
 <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix auto-init" 
    style="background: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_portfolio']; ?>) no-repeat center top;">
        
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s"><?php echo $portfolio['name']; ?></h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url()?>portfolio">Portfolio</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $portfolio['name']; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--Portfolio-Details Start-->
  <section class="blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="portfolio-carousel owl-carousel">

                    <a href="<?php echo base_url(); ?>public/uploads/<?php echo $portfolio['photo']; ?>" class="magnific">
                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $portfolio['photo']; ?>" alt="Project Photo">
                    </a>

                    <?php
                    if(!empty($portfolio_photo)) {
                        foreach ($portfolio_photo as $row) {
                            ?>
                            <a href="<?php echo base_url(); ?>public/uploads/portfolio_photos/<?php echo $row['photo']; ?>" class="magnific">
                                <img src="<?php echo base_url(); ?>public/uploads/portfolio_photos/<?php echo $row['photo']; ?>" alt="Project Photo">
                            </a>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="portfolio-details-text">
                    <h3><?php echo PROJECT_OVERVIEW; ?></h3>
                    <?php echo $portfolio['content']; ?>
                    <br>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-sidebar">
                    <div class="portfolio-details headstyle">
                        <h4><?php echo SIDEBAR_PORTFOLIO_HEADING_1; ?></h4>
                        <ul>
                            <li><span><?php echo CLIENT_NAME; ?>:</span><br><?php echo $portfolio['client_name']; ?></li>
                            <li><span><?php echo CLIENT_COMPANY_NAME; ?>:<br></span><?php echo $portfolio['client_company']; ?></li>
                            <li><span><?php echo PROJECT_START_DATE; ?>:<br></span><?php echo $portfolio['start_date']; ?></li>
                            <li><span><?php echo PROJECT_END_DATE; ?>:<br></span><?php echo $portfolio['end_date']; ?></li>
                            <li><span><?php echo CLIENT_COMMENT; ?>:<br></span><?php echo $portfolio['client_comment']; ?></li>
                        </ul>
                    </div>
                    <div class="row mt-5"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Portfolio-Details End-->

<!--Recent Project Start-->
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
</section>
<!--Recent Project End-->