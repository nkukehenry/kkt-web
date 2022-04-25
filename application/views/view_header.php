<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $error_message = '';
    $success_message = '';
?>
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <?php require_once 'meta_headers.php'; ?>

    <!-- Favicon -->
      <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?=base_url('public/front/css/style.css')?>">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="<?=base_url('public/front/css/responsive.css')?>">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/spacing.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery-ui.min.css">


</head>

<body class="light-version">

  <?php if($setting['preloader_status'] == 'On'): ?>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>
  <?php endif; ?>


<?php $this->load->view('view_menu'); ?>
