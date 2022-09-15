<?php

/**
 * header file
 * included in all pages for displaying header section
 */

require __DIR__ . '/index.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DOT.NET - Digital Agency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://localhost/PHP-working-on-backend/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://localhost/PHP-working-on-backend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="http://localhost/PHP-working-on-backend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost/PHP-working-on-backend/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-white position-relative">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="<?php echo homepage_url() ?>" class="navbar-brand text-secondary">
                <h1 class="display-4 text-uppercase">DOT.NET</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                    <a href="<?php echo homepage_url() ?>" class="nav-item nav-link active">Home</a>
                    <a href="http://localhost/PHP-working-on-backend/about/" class="nav-item nav-link">About</a>
                    <a href="http://localhost/PHP-working-on-backend/service/" class="nav-item nav-link">Services</a>
                    <a href="http://localhost/PHP-working-on-backend/price/" class="nav-item nav-link">Prices</a>
                    <a href="http://localhost/PHP-working-on-backend/project/" class="nav-item nav-link">Projects</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="http://localhost/PHP-working-on-backend/team/" class="dropdown-item">Meet The Team</a>
                            <a href="http://localhost/PHP-working-on-backend/testimonial/" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="http://localhost/PHP-working-on-backend/contact/" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex align-items-center pl-4">
                    <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                    <div>
                        <h6 class="text-body text-uppercase mb-1"><small>Call Anytime</small></h6>
                        <h6 class="m-0">+012 345 6789</h6>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->