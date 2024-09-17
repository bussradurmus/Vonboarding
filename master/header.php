<?php
$baseUrl = 'https://busra.valletbeta2.site/';
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vonboarding - Ana Sayfa</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= $baseUrl ?>css/bootstrap.min.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/styles.css?v=<?= time() ?>">
</head>

<body>
<div class="page-container home-page">
    <div class="hero-banner pt-3 position-relative">
        <div class="video-filter">
            <video class="d-none d-md-block w-100" autoplay muted loop>
                <source src="/assets/images/5427792_Coll_wavebreak_Particles_1280x720_1.mp4" type="video/mp4">
            </video>
        </div>
        <header class="container">
            <nav class="navbar navbar-expand-lg navbar-light px-3">
                <a class="navbar-brand" href="#">
                    <img src="./assets/images/logo.svg" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item me-lg-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="/">Ana Sayfa</a>
                            <div class="nav-underline">
                                <img src="/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item me-lg-2 ms-lg-2">
                            <a class="nav-link text-white fs-16 font-raleway"
                               href="#">Hakkımızda</a>
                            <div class="nav-underline">
                                <svg viewBox="0 0 82 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.333333 3.5C0.333333 4.97276 1.52724 6.16667 3 6.16667C4.47276 6.16667 5.66667 4.97276 5.66667 3.5C5.66667 2.02724 4.47276 0.833333 3 0.833333C1.52724 0.833333 0.333333 2.02724 0.333333 3.5ZM76.3333 3.5C76.3333 4.97276 77.5272 6.16667 79 6.16667C80.4728 6.16667 81.6667 4.97276 81.6667 3.5C81.6667 2.02724 80.4728 0.833333 79 0.833333C77.5272 0.833333 76.3333 2.02724 76.3333 3.5ZM3 4H79V3H3V4Z"
                                          fill="#626C85"/>
                                </svg>
                            </div>
                        </li>
                        <li class="nav-item me-lg-2 ms-lg-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="#">Dökümantasyon</a>
                            <div class="nav-underline">
                                <img src="/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item me-lg-2 ms-lg-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="/blog.php">Blog</a>
                            <div class="nav-underline">
                                <img src="/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item ms-lg-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="#iletisim">İletişim</a>
                            <div class="nav-underline">
                                <img src="/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn text-white me-lg-2 ps-0 fs-14 font-raleway">Giriş Yap</button>
                        <button class="btn button-outline fs-14 font-raleway">Kayıt Ol</button>
                    </div>
                </div>
            </nav>
        </header>