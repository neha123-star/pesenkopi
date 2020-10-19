<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/animate.css">

    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('assets/coffe/') ?>css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" style="text-transform: lowercase;" href="<?= base_url('coffe'); ?>">pesenkopi.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?= base_url('coffe'); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?= base_url('coffe/menu'); ?>" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="<?= base_url('coffe/about'); ?>" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="<?= base_url('coffe/contact'); ?>" class="nav-link">Contact</a></li>

                    <li class="nav-item"><a href="<?= base_url('auth/login'); ?>" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="<?= base_url('auth/registration'); ?>" class="nav-link">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->