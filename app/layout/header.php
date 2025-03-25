<?php

// Start session management and output buffering
session_start();
ob_start();

// Array to store messages
$invalid = array();
$success = array();
$warning = array();
$info = array();

// Include necessary files for database connectivity and facade classes
include(__DIR__ . '/../../config/db/connector.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="One SysTeam | A leading system provider for school and business needs.">
    <meta name="keywords" content="One SysTeam, system provider, system for school, system for business, gingoog city system provider, gingoog city, gingoog">
    <meta name="robots" content="noindex" />
    <meta property="og:image" content="https://www.appworksco.com/images/social-media-banner.jpg">
    <meta property="og:title" content="One SysTeam">
    <link rel="icon" href="public/images/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="public/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="public/vendor/owl-carousel/owl.theme.default.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">
    <title>ONESYSTEAM | IT Solutions</title>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll(".nav-link");
            const currentPath = window.location.pathname.split("/").pop(); // Get the current page name

            navLinks.forEach(link => {
                const linkPath = link.getAttribute("href").split("/").pop(); // Get href value

                if (currentPath === linkPath) {
                    link.classList.add("navbar-active");
                } else {
                    link.classList.remove("navbar-active");
                }
            });
        });
    </script>

    <meta name="google-site-verification" content="UB0327ZluG5_q1WmBvOaSqO6zkP8oaVA8DQy5TTc1uc" />

</head>

<body>

    <!-- Header -->
    <nav class="border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="index"
                class="d-flex align-items-center text-dark text-decoration-none mb-3 mb-lg-0 me-lg-auto py-2">
                <img src="public/images/logo.png" style="width: 300px;" alt="Appworks Co. Logo">
            </a>
            <div class="col-12 col-lg-auto mb-3 mb-lg-0 d-block d-sm-flex align-items-center">
                <div class="d-flex pe-4">
                    <i class="bi bi-phone-fill fs-1 p-2 text-custom-lime-green"></i>
                    <div class="pt-sm-3 pt-1 m-1">
                        <p class="m-0">Call Us:</p>
                        <p class="fw-bold m-0">09535691629</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="bi bi-envelope-fill fs-1 p-2 text-custom-lime-green"></i>
                    <div class="pt-sm-3 pt-1 m-1">
                        <p class="m-0">Email Us:</p>
                        <p class="fw-bold m-0">info.onesysteam@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="border-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav text-uppercase mt-3 mt-sm-0">
                            <li class="nav-item me-0 me-sm-4">
                                <a class="nav-link px-4 px-sm-4" href="index">Home</a>
                            </li>
                            <li class="nav-item me-0 me-sm-4">
                                <a class="nav-link px-4 px-sm-4" href="portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item me-0 me-sm-4">
                                <a class="nav-link px-4 px-sm-4" href="products">Products</a>
                            </li>
                            <li class="nav-item me-0 me-sm-4">
                                <a class="nav-link px-4 px-sm-4" href="team">Team</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>