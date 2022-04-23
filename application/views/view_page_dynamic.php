<!--Banner Start-->
    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix auto-init" 
    style="background: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_about']; ?>) no-repeat center top;">
        
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s"><?php echo $page_dynamic_detail['name']; ?></h2>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Banner End-->

 <section class="about-us-area section-padding-100-70">
<!--About Start-->
<div class="about-page pt_60 pb_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo $page_dynamic_detail['content']; ?>
            </div>
        </div>
    </div>
</div>
<!--About End-->
</section>
