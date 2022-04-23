

    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix auto-init" 
    style="background: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>) no-repeat center top;">
        
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s"><?php echo $page_service['service_heading']; ?></h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_service['service_heading']; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- ##### Our Services Area Start ##### -->
    <section class="our_services_area section-padding-100-0 relative map-bg map-before">
        <div class="container">

            <div class="row">
                <?php foreach ($services as $row): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="">
                        </div>
                        <h6><?php echo $row['name']; ?></h6>
                        <p> <?php echo nl2br(truncate($row['short_description'])); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
               
              
            </div>
        </div>
    </section>