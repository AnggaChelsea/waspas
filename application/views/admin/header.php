<!DOCTYPE html>
<html lang="en">

<head>

    <title>Waspas</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <!-- <link rel="icon" href="<?php echo base_url(); ?>public/assets/images/favicon.ico" type="image/x-icon"> -->
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/style.css">

    <!-- sweet alert -->
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" />
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
        <div class="navbar-wrapper ">
            <div class="navbar-brand header-logo">
                <a href="" class="b-brand">
                    <font color="#ffffff">WASPAS AIR MINERAL</font>
                    <!-- <img src="<?php echo base_url(); ?>public/assets/images/logo.svg" alt="" class="logo images">
                    <img src="<?php echo base_url(); ?>public/assets/images/logo-icon.svg" alt="" class="logo-thumb images"> -->
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">

                        <label>Menu</label>

                    </li>
                    <?php if ($_SESSION['level'] == 1) { ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>chome" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>data-kriteria" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Data Kriteria</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>data-penduduk" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Data Penduduk Dan Penilaian</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>proses-spk" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Proses SPK</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Coutput" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Output Penilaian</span></a>
                        </li>
                    <?php }
                    if ($_SESSION['level'] == 2) { ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>data-penduduk" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Data Penduduk Dan Penilaian</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>proses-spk" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Proses SPK</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Coutput" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Output Penilaian</span></a>
                        </li>
                    <?php }
                    if ($_SESSION['level'] == 3) { ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Chome" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Penilaian</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Chome/penerima_bantuan" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Daftar Penerima Bantuan</span></a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="" class="b-brand">
                <font color="#ffffff">SPK WASPAS</font>
                <!-- <img src="<?php echo base_url(); ?>public/assets/images/logo.svg" alt="" class="logo images">
                <img src="<?php echo base_url(); ?>public/assets/images/logo-icon.svg" alt="" class="logo-thumb images"> -->
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <a href="#!" class="mob-toggler"></a>
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="list-group-item"><a href="<?php echo base_url(); ?>clogin/logout"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
            </ul>
        </div>
    </header>