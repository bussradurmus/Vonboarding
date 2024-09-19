<?PHP
$baseUrl = 'https://busra.valletbeta2.site/';
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vonboarding - Ana Sayfa</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?= $baseUrl ?>css/bootstrap.min.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/styles.css?v=<?= time() ?>">
</head>

<body>
<div class="page-container blog-detail-page">
    <div class="hero-banner pt-3 pb-5 position-relative">
        <header class="container">
            <nav class="navbar navbar-expand-lg navbar-light px-3">
                <a class="navbar-brand" href="#">
                    <img src="./assets/images/logo.svg" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item me-lg-2">
                            <a class="nav-link text-white fs-16" href="/">Ana Sayfa</a>
                            <div class="nav-underline">
                                <img src="/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item me-lg-2 ms-lg-2">
                            <a class="nav-link text-white fs-16 font-raleway" href="#">Dökümantasyon</a>
                            <div class="nav-underline">
                                <svg viewBox="0 0 82 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.333333 3.5C0.333333 4.97276 1.52724 6.16667 3 6.16667C4.47276 6.16667 5.66667 4.97276 5.66667 3.5C5.66667 2.02724 4.47276 0.833333 3 0.833333C1.52724 0.833333 0.333333 2.02724 0.333333 3.5ZM76.3333 3.5C76.3333 4.97276 77.5272 6.16667 79 6.16667C80.4728 6.16667 81.6667 4.97276 81.6667 3.5C81.6667 2.02724 80.4728 0.833333 79 0.833333C77.5272 0.833333 76.3333 2.02724 76.3333 3.5ZM3 4H79V3H3V4Z"
                                          fill="#626C85"/>
                                </svg>
                            </div>
                        </li>
                        <li class="nav-item me-lg-2 ms-lg-2">
                            <a class="nav-link text-white fs-16" href="#">Hakkımızda</a>
                            <div class="nav-underline">
                                <img src="/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item me-lg-2 ms-lg-2">
                            <a class="nav-link text-white fs-16" href="/blog.php">Blog</a>
                            <div class="nav-underline">
                                <img src="/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>
                        <li class="nav-item ms-lg-2">
                            <a class="nav-link text-white fs-16" href="index.php#iletisim">İletişim</a>
                            <div class="nav-underline">
                                <img src="/assets/images/hover-line.svg" alt="Hover Line">
                            </div>
                        </li>

                    </ul>
                    <div class="d-flex">
                        <button class="btn text-white me-lg-2 ps-0 fs-14">Giriş Yap</button>
                        <button class="btn button-outline fs-14">Kayıt Ol</button>
                    </div>
                </div>
            </nav>
        </header>

        <div class="hero-text-container ">
            <div class="col-lg-8 col-md-10 mx-auto hero-content text-center">
                <h6 class="fw-bold fs-16 text-center text-lgrey">20 Temmuz 2024</h6>
                <h1 class="mb-4 text-white fw-bold fs-40 w-1052">Vonboarding Nedir?</h1>
                <div class="d-flex justify-content-center">
                    <p class="mb-4 text-lgrey max-w560">Vonboarding, işletmelerin sanal POS ve ödeme sistemi sağlayıcılarına olan başvurularını tek bir yerden yönetmelerini sağlayan bir platformdur. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="page position-relative">
        <main>
            <div class="container max-w744">
                <div class="row mb-4">
                    <div class="col-12">
                        <img src="<?= $baseUrl ?>/assets/images/blog-detail1.png" alt="Makale Resmi" class="w-100">
                    </div>
                    <div class="col-12 mt-100">
                        <h2 class="fs-32 fw-500 text-dgrey mb-3">V<span class="text-blue">ON</span>BOARDING</h2>
                        <p class="fs-18 font-raleway mb-4 text-user-color"><span class="ms-5">Here</span> are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                            by injected humour, or
                            randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                            in the middle of text. All the Lorem Ipsum generators on.</p>
                        <p class="fs-18 font-raleway text-user-color mb-4"><span
                                    class="fw-bold"><span class="ms-5">It</span> is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                            The point of
                            using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12 mb-4">
                        <img src="<?= $baseUrl ?>/assets/images/blog-detail2.png" alt="Makale Resmi" class="w-100">
                    </div>
                    <div class="col-12 mt-3">
                        <p class="fs-18 font-raleway text-user-color mb-4"><span class="ms-5">Here</span> are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
                            randomised words which </p>
                        <p class="fs-18 font-raleway text-user-color mb-4"><span class="ms-5">Here</span> are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
                            randomised words which don't
                            look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                            Lorem Ipsum generators on.</p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <blockquote class="quote">
                            <p class="fs-32 fst-italic fw-bold ps-3 text-user-color"> "Herkes bir problem çözebilirse, herkes bir icat çıkarabilirse, o zaman ilerleme sonsuz olacaktır."</p>
                        </blockquote>
                        <p class="fs-20 text-grey">-Henry Ford</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="fs-32 fw-500 text-dgrey mb-4">V<span class="text-blue">ON</span>BOARDING Avantajları</h2>
                        <div class="avantaj-box">
                            <h3 class="fw-bold fs-18 font-raleway dot-title">Kolay Kullanım</h3>
                            <p class="fs-18 font-raleway text-user-color mb-4 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                over 2000
                                years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                        </div>
                        <div class="avantaj-box">
                            <h3 class="fw-bold fs-18 font-raleway dot-title">Hızlı Çözüm</h3>
                            <p class="fs-18 font-raleway text-user-color mb-4 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                over 2000
                                years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                        </div>
                        <div class="avantaj-box pb-3 border-bottom">
                            <h3 class="fw-bold fs-18 font-raleway dot-title">Kolay Entegrasyon</h3>
                            <p class="fs-18 font-raleway text-user-color mb-4 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                over 2000
                                years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between flex-column flex-sm-row gap-3 gap-sm-0">
                    <div class="d-flex user-info fs-14">
                        <img src="<?= $baseUrl ?>/assets/images/pp.png" alt="Kullanıcı Resmi" class="rounded-circle me-2">
                        <div class="d-flex flex-column">
                            <span class="fw-bold text-user-color max-content">Metehan Akcan</span>
                            <span class="text-date max-content">20 Temmuz 2024</span>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="fs-14 font-raleway fw-bold copy-button">
                            <img src="<?= $baseUrl ?>/assets/images/copy.svg" alt="Copy Image" class="me-2">
                            Linki Kopyala
                        </button>
                        <a href="#"><img src="/assets/images/instagram.svg" alt="Instagram Logo"></a>
                        <a href="#"><img src="/assets/images/linkedin.svg" alt="Linkedin Logo"></a>
                    </div>
                </div>
            </div>

            <div class="container pt-5 max-w1140 mt-3">
                <h2 class="fs-32 fw-500 text-center">Diğer Makalelerimiz</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="slick">
                            <div class="item">
                                <div class="bg">
                                    <img src="<?= $baseUrl ?>/assets/images/slider-img.png" alt="Copy Image">

                                    <div class="slide-content">
                                        <h4 class="fs-18 fw-bold">Vonboarding Nedir?</h4>
                                        <p class="truncated-text font-raleway text-user-color">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                            the
                                            middle of text. All the Lorem Ipsum generators on.</p>
                                        <div class="d-flex justify-content-between mt-4">
                                            <span class="text-date max-content fs-14">20 Temmuz 2024</span>
                                            <div class="d-flex font-raleway fw-500 text-blue fs-14"> <div class="max-content continue-text">Devamını Oku</div>
                                                <svg class="ms-1 icon-auto" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="12" fill="#1C64FE"/>
                                                    <g clip-path="url(#clip0_164_14086)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0883 11.411C15.2445 11.5673 15.3323 11.7792 15.3323 12.0002C15.3323 12.2211 15.2445 12.433 15.0883 12.5893L10.3741 17.3035C10.2973 17.3831 10.2053 17.4466 10.1037 17.4902C10.002 17.5339 9.89263 17.5569 9.78198 17.5579C9.67133 17.5588 9.5616 17.5377 9.45919 17.4958C9.35677 17.4539 9.26373 17.3921 9.18548 17.3138C9.10724 17.2356 9.04536 17.1425 9.00346 17.0401C8.96156 16.9377 8.94048 16.828 8.94144 16.7173C8.9424 16.6067 8.96539 16.4973 9.00906 16.3956C9.05274 16.294 9.11622 16.202 9.19581 16.1252L13.3208 12.0002L9.19581 7.87515C9.04401 7.71798 8.96002 7.50748 8.96192 7.28898C8.96382 7.07049 9.05146 6.86147 9.20596 6.70697C9.36047 6.55246 9.56948 6.46482 9.78798 6.46292C10.0065 6.46102 10.217 6.54502 10.3741 6.69682L15.0883 11.411Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_164_14086">
                                                            <rect width="8" height="12" fill="white" transform="translate(8 6)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg">
                                    <img src="<?= $baseUrl ?>/assets/images/slider-img.png" alt="Copy Image">
                                    <div class="slide-content">
                                        <h4 class="fs-18 fw-bold">Vonboarding Nedir?</h4>
                                        <p class="truncated-text font-raleway">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                            the
                                            middle of text. All the Lorem Ipsum generators on.</p>
                                        <div class="d-flex justify-content-between mt-4">
                                            <span class="text-date max-content fs-14">20 Temmuz 2024</span>
                                            <div class="d-flex font-raleway fw-500 text-blue fs-14"> <div class="max-content continue-text">Devamını Oku</div>
                                                <svg class="ms-1 icon-auto" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="12" fill="#1C64FE"/>
                                                    <g clip-path="url(#clip0_164_14086)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0883 11.411C15.2445 11.5673 15.3323 11.7792 15.3323 12.0002C15.3323 12.2211 15.2445 12.433 15.0883 12.5893L10.3741 17.3035C10.2973 17.3831 10.2053 17.4466 10.1037 17.4902C10.002 17.5339 9.89263 17.5569 9.78198 17.5579C9.67133 17.5588 9.5616 17.5377 9.45919 17.4958C9.35677 17.4539 9.26373 17.3921 9.18548 17.3138C9.10724 17.2356 9.04536 17.1425 9.00346 17.0401C8.96156 16.9377 8.94048 16.828 8.94144 16.7173C8.9424 16.6067 8.96539 16.4973 9.00906 16.3956C9.05274 16.294 9.11622 16.202 9.19581 16.1252L13.3208 12.0002L9.19581 7.87515C9.04401 7.71798 8.96002 7.50748 8.96192 7.28898C8.96382 7.07049 9.05146 6.86147 9.20596 6.70697C9.36047 6.55246 9.56948 6.46482 9.78798 6.46292C10.0065 6.46102 10.217 6.54502 10.3741 6.69682L15.0883 11.411Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_164_14086">
                                                            <rect width="8" height="12" fill="white" transform="translate(8 6)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg">
                                    <img src="<?= $baseUrl ?>/assets/images/slider-img.png" alt="Copy Image">
                                    <div class="slide-content">
                                        <h4 class="fs-18 fw-bold">Vonboarding Nedir?</h4>
                                        <p class="truncated-text font-raleway">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                            the
                                            middle of text. All the Lorem Ipsum generators on.</p>
                                        <div class="d-flex justify-content-between mt-4">
                                            <span class="text-date max-content fs-14">20 Temmuz 2024</span>
                                            <div class="d-flex font-raleway fw-500 text-blue fs-14"> <div class="max-content continue-text">Devamını Oku</div>
                                                <svg class="ms-1 icon-auto" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="12" fill="#1C64FE"/>
                                                    <g clip-path="url(#clip0_164_14086)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0883 11.411C15.2445 11.5673 15.3323 11.7792 15.3323 12.0002C15.3323 12.2211 15.2445 12.433 15.0883 12.5893L10.3741 17.3035C10.2973 17.3831 10.2053 17.4466 10.1037 17.4902C10.002 17.5339 9.89263 17.5569 9.78198 17.5579C9.67133 17.5588 9.5616 17.5377 9.45919 17.4958C9.35677 17.4539 9.26373 17.3921 9.18548 17.3138C9.10724 17.2356 9.04536 17.1425 9.00346 17.0401C8.96156 16.9377 8.94048 16.828 8.94144 16.7173C8.9424 16.6067 8.96539 16.4973 9.00906 16.3956C9.05274 16.294 9.11622 16.202 9.19581 16.1252L13.3208 12.0002L9.19581 7.87515C9.04401 7.71798 8.96002 7.50748 8.96192 7.28898C8.96382 7.07049 9.05146 6.86147 9.20596 6.70697C9.36047 6.55246 9.56948 6.46482 9.78798 6.46292C10.0065 6.46102 10.217 6.54502 10.3741 6.69682L15.0883 11.411Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_164_14086">
                                                            <rect width="8" height="12" fill="white" transform="translate(8 6)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="bg">
                                    <img src="<?= $baseUrl ?>/assets/images/slider-img.png" alt="Copy Image">
                                    <div class="slide-content">
                                        <h4 class="fs-18 fw-bold">Vonboarding Nedir?</h4>
                                        <p class="truncated-text font-raleway">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                            the
                                            middle of text. All the Lorem Ipsum generators on.</p>
                                        <div class="d-flex justify-content-between mt-4">
                                            <span class="text-date max-content fs-14">20 Temmuz 2024</span>
                                            <div class="d-flex font-raleway fw-500 text-blue fs-14"> <div class="max-content continue-text">Devamını Oku</div>
                                                <svg class="ms-1 icon-auto" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="12" fill="#1C64FE"/>
                                                    <g clip-path="url(#clip0_164_14086)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0883 11.411C15.2445 11.5673 15.3323 11.7792 15.3323 12.0002C15.3323 12.2211 15.2445 12.433 15.0883 12.5893L10.3741 17.3035C10.2973 17.3831 10.2053 17.4466 10.1037 17.4902C10.002 17.5339 9.89263 17.5569 9.78198 17.5579C9.67133 17.5588 9.5616 17.5377 9.45919 17.4958C9.35677 17.4539 9.26373 17.3921 9.18548 17.3138C9.10724 17.2356 9.04536 17.1425 9.00346 17.0401C8.96156 16.9377 8.94048 16.828 8.94144 16.7173C8.9424 16.6067 8.96539 16.4973 9.00906 16.3956C9.05274 16.294 9.11622 16.202 9.19581 16.1252L13.3208 12.0002L9.19581 7.87515C9.04401 7.71798 8.96002 7.50748 8.96192 7.28898C8.96382 7.07049 9.05146 6.86147 9.20596 6.70697C9.36047 6.55246 9.56948 6.46482 9.78798 6.46292C10.0065 6.46102 10.217 6.54502 10.3741 6.69682L15.0883 11.411Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_164_14086">
                                                            <rect width="8" height="12" fill="white" transform="translate(8 6)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </main>

        <?php
        require 'master/footer-white.php';
        ?>

    </div>
</div>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/script.js?v=<?= time() ?>"></script>
<script src="js/blog-id.js?v=<?= time() ?>"></script>

</body>

</html>


