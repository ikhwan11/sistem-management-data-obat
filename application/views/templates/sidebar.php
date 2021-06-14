<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/'); ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?= base_url('assets/'); ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('assets/'); ?>/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?= base_url('assets/'); ?>/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Medicine Management
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item 
                    <?php if ($this->uri->segment(1) == "welcome") {
                        echo "active";
                    } ?>
                    ">
                        <a class="nav-link" href="<?= base_url('welcome/'); ?>">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item 
                    <?php if ($this->uri->segment(1) == "user") {
                        echo "active";
                    } ?>
                    ">
                        <a class="nav-link" href="<?= base_url('user/'); ?>">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Data user</p>
                        </a>
                    </li>
                    <li class="nav-item 
                    <?php if ($this->uri->segment(1) == "obat") {
                        echo "active";
                    } ?>
                    ">
                        <a class="nav-link" href="<?= base_url('obat/'); ?>">
                            <i class="nc-icon nc-sun-fog-29"></i>
                            <p>Data obat</p>
                        </a>
                    </li>
                    <li class="nav-item 
                    <?php if ($this->uri->segment(1) == "obat_tambah") {
                        echo "active";
                    } ?>
                    ">
                        <a class="nav-link" href="<?= base_url('obat_tambah/tambah_obat'); ?>">
                            <i class="nc-icon nc-puzzle-10"></i>
                            <p>Tambah data obat</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="#">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <p>Buat laporan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>