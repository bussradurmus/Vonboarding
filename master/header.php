<?php
$baseUrl = 'https://busra.valletbeta2.site/Vonboarding/';
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vonboarding</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?= $baseUrl ?>css/bootstrap.min.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/styles.css?v=<?= time() ?>">
</head>

<body>
<div class="page-container">
    <div class="hero-banner pt-3 position-relative">

        <header class="container">
            <nav class="navbar navbar-expand-xl navbar-light px-3">
                <a class="navbar-brand" href="<?= $baseUrl ?>">
                    <img src="<?= $baseUrl ?>/assets/images/logo.svg" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item me-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="<?= $baseUrl ?>">Ana Sayfa</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item me-xl-2 ms-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway"
                               href="<?= $baseUrl ?>hakkimizda.php">Hakkımızda</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item me-xl-2 ms-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="https://vallet.gitbook.io/vonboarding">Dökümantasyon</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item me-lg-2 ms-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="<?= $baseUrl ?>blog.php">Blog</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item ms-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="<?= $baseUrl ?>index.php#iletisim">İletişim</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                    </ul>
                    <div class="d-flex mb-2 ms-3 ms-xl-0">
                        <a href="<?= $baseUrl ?>girisyap.php" class="btn text-white me-lg-2 ps-0 fs-14 font-raleway fw-semibold align-content-center" >Giriş Yap</a>
                        <a href="<?= $baseUrl ?>kayitol.php" class="btn button-outline fs-14 font-raleway fw-semibold">Kayıt Ol</a>


                    </div>
                </div>
            </nav>
        </header>

