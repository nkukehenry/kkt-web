
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
<!--About End-->
</section>