<?php
$baseUrl = 'https://vonboarding.com/';
$version = '1.0.0';
// Meta etiketleri için varsayılan değerler
$metaTitle = $metaTitle ?? 'Varsayılan Sayfa Başlığı';
$metaDescription = $metaDescription ?? 'Varsayılan açıklama metni';
$metaKeywords = $metaKeywords ?? 'Varsayılan anahtar kelimeler';
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($metaTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($metaKeywords) ?>">
    <title>Vonboarding</title>
    <link rel="icon" href="<?= $baseUrl ?>assets/images/fav.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?= $baseUrl ?>css/bootstrap.min.css?v=<?= $version ?>"/>
    <link rel="stylesheet" href="<?= $baseUrl ?>css/styles.css?v=<?= $version ?>"/>
</head>

<body>
<div class="page-container">
    <div class="hero-banner pt-3 position-relative">

        <header class="container">
            <nav class="navbar navbar-expand-xl navbar-light px-3">
                <a class="navbar-brand header-logo-container" href="<?= $baseUrl ?>">
                    <svg width="151" height="25" viewBox="0 0 151 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <filter id="hover-shadow" x="-50%" y="-50%" width="400%" height="400%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="8"/>
                                <feOffset dx="0" dy="0" result="offsetblur"/>
                                <feFlood flood-color="#1C64FE" flood-opacity="0.8"/>
                                <feComposite in2="offsetblur" operator="in"/>
                                <feMerge>
                                    <feMergeNode/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                            </filter>
                        </defs>
                        <path class="hover-blue" d="M43.9727 0H49.7365C51.7041 0 53.1393 0.462963 54.0421 1.38889C54.9449 2.29167 55.3963 3.69213 55.3963 5.59028V6.5625C55.3963 7.8125 55.1879 8.83102 54.7713 9.61806C54.3777 10.4051 53.7643 10.9722 52.931 11.3194V11.3889C54.8291 12.037 55.7782 13.7268 55.7782 16.4583V18.5417C55.7782 20.4167 55.2805 21.8518 54.2852 22.8472C53.3129 23.8194 51.8777 24.3055 49.9796 24.3055H44.3199C44.1281 24.3055 43.9727 24.1501 43.9727 23.9583V0ZM49.2852 9.89583C50.049 9.89583 50.6162 9.69907 50.9865 9.30555C51.3801 8.91204 51.5768 8.25231 51.5768 7.32639V5.97222C51.5768 5.09259 51.4148 4.45602 51.0907 4.0625C50.7898 3.66898 50.3037 3.47222 49.6324 3.47222H47.7921V9.89583H49.2852ZM49.9796 20.8333C50.6509 20.8333 51.1486 20.6597 51.4727 20.3125C51.7967 19.9421 51.9588 19.3171 51.9588 18.4375V16.3194C51.9588 15.2083 51.762 14.4444 51.3685 14.0278C50.9981 13.588 50.3731 13.3681 49.4935 13.3681H47.7921V20.8333H49.9796Z" fill="white"/>
                        <path class="hover-blue" d="M63.3123 25C61.4373 25 60.0021 24.4676 59.0067 23.4028C58.0114 22.338 57.5137 20.8333 57.5137 18.8889V6.11111C57.5137 4.16667 58.0114 2.66204 59.0067 1.59722C60.0021 0.532407 61.4373 0 63.3123 0C65.1873 0 66.6225 0.532407 67.6178 1.59722C68.6132 2.66204 69.1109 4.16667 69.1109 6.11111V18.8889C69.1109 20.8333 68.6132 22.338 67.6178 23.4028C66.6225 24.4676 65.1873 25 63.3123 25ZM63.3123 21.5278C64.6317 21.5278 65.2914 20.7292 65.2914 19.1319V5.86805C65.2914 4.27083 64.6317 3.47222 63.3123 3.47222C61.9928 3.47222 61.3331 4.27083 61.3331 5.86805V19.1319C61.3331 20.7292 61.9928 21.5278 63.3123 21.5278Z" fill="white"/>
                        <path class="hover-blue" d="M70.9071 23.9063C70.8753 24.1164 71.038 24.3055 71.2504 24.3055H74.3966C74.5707 24.3055 74.7179 24.1766 74.7408 24.004L77.2008 5.45138H77.2703L79.7303 24.004C79.7532 24.1766 79.9004 24.3055 80.0745 24.3055H82.8735C83.0859 24.3055 83.2486 24.1164 83.2168 23.9063L79.5967 -1.14441e-05H74.5272L70.9071 23.9063Z" fill="white"/>
                        <path class="hover-blue" d="M85.0137 0H90.6734C92.641 0 94.0762 0.462963 94.9789 1.38889C95.8817 2.29167 96.3331 3.69213 96.3331 5.59028V7.08333C96.3331 9.60648 95.4998 11.2037 93.8331 11.875V11.9444C94.759 12.2222 95.4072 12.7894 95.7776 13.6458C96.1711 14.5023 96.3678 15.6481 96.3678 17.0833V21.3542C96.3678 22.0486 96.391 22.6157 96.4373 23.0556C96.4651 23.3057 96.5179 23.5559 96.5958 23.806C96.6704 24.0459 96.5015 24.3055 96.2502 24.3055H93.1413C92.9941 24.3055 92.8619 24.213 92.8179 24.0725C92.7216 23.765 92.6549 23.4723 92.6178 23.1944C92.5715 22.8472 92.5484 22.2222 92.5484 21.3194V16.875C92.5484 15.7639 92.3632 14.9884 91.9928 14.5486C91.6456 14.1088 91.0322 13.8889 90.1526 13.8889H88.8331V23.9583C88.8331 24.1501 88.6777 24.3055 88.4859 24.3055H85.3609C85.1691 24.3055 85.0137 24.1501 85.0137 23.9583V0ZM90.222 10.4167C90.9859 10.4167 91.553 10.2199 91.9234 9.82639C92.3169 9.43287 92.5137 8.77315 92.5137 7.84722V5.97222C92.5137 5.09259 92.3516 4.45602 92.0276 4.0625C91.7266 3.66898 91.2405 3.47222 90.5692 3.47222H88.8331V10.4167H90.222Z" fill="white"/>
                        <path class="hover-dark-blue" d="M119.076 0H122.896V23.9583C122.896 24.1501 122.74 24.3055 122.548 24.3055H119.423C119.232 24.3055 119.076 24.1501 119.076 23.9583V0Z" fill="white"/>
                        <path class="hover-dark-blue" d="M124.979 0H129.77L133.485 14.5486H133.555V0H136.958V23.9583C136.958 24.1501 136.802 24.3055 136.61 24.3055H133.303C133.145 24.3055 133.006 24.1985 132.967 24.0452L128.451 6.5625H128.381V23.9583C128.381 24.1501 128.226 24.3055 128.034 24.3055H125.326C125.134 24.3055 124.979 24.1501 124.979 23.9583V0Z" fill="white"/>
                        <path class="hover-dark-blue" d="M144.389 25C142.537 25 141.125 24.4792 140.153 23.4375C139.18 22.3727 138.694 20.8565 138.694 18.8889V6.11111C138.694 4.14352 139.18 2.63889 140.153 1.59722C141.125 0.532407 142.537 0 144.389 0C146.241 0 147.653 0.532407 148.625 1.59722C149.597 2.63889 150.083 4.14352 150.083 6.11111V8.19444H146.472V5.86805C146.472 4.27083 145.812 3.47222 144.493 3.47222C143.174 3.47222 142.514 4.27083 142.514 5.86805V19.1667C142.514 20.7407 143.174 21.5278 144.493 21.5278C145.812 21.5278 146.472 20.7407 146.472 19.1667V14.4097H144.562V10.9375H150.083V18.8889C150.083 20.8565 149.597 22.3727 148.625 23.4375C147.653 24.4792 146.241 25 144.389 25Z" fill="white"/>
                        <path class="hover-blue" d="M2.16699 0H6.02116L8.52116 18.8542H8.5906L11.0906 0H14.5975L10.9617 24.0103C10.936 24.1801 10.7901 24.3056 10.6184 24.3056H6.14615C5.97446 24.3056 5.82855 24.1801 5.80284 24.0103L2.16699 0Z" fill="white"/>
                        <path class="hover-blue" d="M29.7753 23.9063C29.7435 24.1164 29.9061 24.3055 30.1186 24.3055H33.2648C33.4389 24.3055 33.5861 24.1766 33.609 24.004L36.069 5.45138H36.1385L38.5985 24.004C38.6214 24.1766 38.7686 24.3055 38.9427 24.3055H41.7416C41.9541 24.3055 42.1168 24.1164 42.0849 23.9063L38.4648 -1.14441e-05H33.3954L29.7753 23.9063Z" fill="white"/>
                        <path class="hover-blue" d="M22.2986 25C20.4236 25 18.9884 24.4676 17.9931 23.4028C16.9977 22.338 16.5 20.8333 16.5 18.8889V6.11111C16.5 4.16667 16.9977 2.66204 17.9931 1.59722C18.9884 0.532407 20.4236 0 22.2986 0C24.1736 0 25.6088 0.532407 26.6042 1.59722C27.5995 2.66204 28.0972 4.16667 28.0972 6.11111V18.8889C28.0972 20.8333 27.5995 22.338 26.6042 23.4028C25.6088 24.4676 24.1736 25 22.2986 25ZM22.2986 21.5278C23.6181 21.5278 24.2778 20.7292 24.2778 19.1319V5.86805C24.2778 4.27083 23.6181 3.47222 22.2986 3.47222C20.9792 3.47222 20.3194 4.27083 20.3194 5.86805V19.1319C20.3194 20.7292 20.9792 21.5278 22.2986 21.5278Z" fill="white"/>
                        <path class="blue-object" d="M98.7402 0.347229L104.628 9.9398L110.827 0.347229H98.7402Z" fill="#1C64FE"/>
                        <g class="rotating-group">
                        <path class="blue-object" d="M110.826 0.347229L116.763 9.33335C117.008 9.70376 117.008 10.1795 116.765 10.5499L110.927 19.4725L104.627 9.94162L110.826 0.347229Z" fill="#1C64FE"/>
                        <path class="blue-object" d="M104.627 9.93982L98.5059 19.4707L101.229 23.6378C101.641 24.2697 102.352 24.6528 103.115 24.6528H106.313C107.076 24.6528 107.787 24.2715 108.199 23.6396L110.928 19.4707L104.627 9.93982Z" fill="#0245CA"/>
                        </g>
                    </svg>
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
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg"  alt="Hover Line for navigation">
                            </div>
                        </li>
                        <li class="nav-item me-xl-2 ms-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway"
                               href="<?= $baseUrl ?>hakkimizda.php">Hakkımızda</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg"  alt="Hover Line for navigation">
                            </div>
                        </li>
                        <li class="nav-item me-xl-2 ms-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="https://vallet.gitbook.io/vonboarding">Dökümantasyon</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg"  alt="Hover Line for navigation">
                            </div>
                        </li>
                        <li class="nav-item me-lg-2 ms-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="<?= $baseUrl ?>blog.php">Blog</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg"  alt="Hover Line for navigation">
                            </div>
                        </li>
                        <li class="nav-item ms-xl-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="<?= $baseUrl ?>index.php#iletisim">İletişim</a>
                            <div class="nav-underline">
                                <img src="<?= $baseUrl ?>/assets/images/hover-line.svg"  alt="Hover Line for navigation">
                            </div>
                        </li>
                    </ul>
                    <div class="d-flex mb-2 ms-3 ms-xl-0">
                        <a href="https://gokhan.valletbeta2.site/login" class="btn text-white me-lg-2 ps-0 fs-14 font-raleway fw-semibold align-content-center" >Giriş Yap</a>
                        <a href="<?= $baseUrl ?>kayitol.php" class="btn button-outline fs-14 font-raleway fw-semibold">Kayıt Ol</a>
                    </div>
                </div>
            </nav>
        </header>

