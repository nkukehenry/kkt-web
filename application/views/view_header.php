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

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>


<?php $this->load->view('view_menu'); ?>
