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
    <link rel="stylesheet" href="<?= $baseUrl ?>css/bootstrap.min.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/styles.css?v=<?= time() ?>">
</head>

<body>
<div class="page-container blog-page">
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
                <h1 class="mb-4 text-white fw-bold fs-40 w-1052">Vonboarding Blog: Ödeme Sistemi Entegrasyonu Hakkında Bilmeniz Gereken Her Şey</h1>
                <p class="mb-4 text-lgrey">Entegre ödeme çözümleri, başvuru süreçleri ve dijital dönüşümle <br> ilgili en güncel bilgileri burada bulabilirsiniz.</p>

            </div>
        </div>
    </div>


    <div class="page position-relative">
        <main>
            <div class="container mt-100 max-w1140">
                <div class="row">

                    <div class="col-lg-7 col-md-12">
                        <h2 class="fs-40 text-grey fw-bold ">Makalelerimiz</h2>
                        <div class="article-box mb-4 max-w678 mt-4">
                            <a href="blog-id.php" class="text-decoration-none text-dark">
                                <div class="d-flex resp-box">
                                    <img src="<?= $baseUrl ?>/assets/images/blog-1.png" alt="Makale Resmi" class="me-4">
                                    <div class="ms-3">
                                        <h5 class="text-dark fs-18 fw-bold">Vonboarding Nedir?</h5>
                                        <p class="fs-18 font-raleway text-grey max-w495 truncated-text">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                            alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem
                                            Ipsum,
                                            you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on.</p>
                                        <div class="user-info fs-14 ">
                                            <img src="<?= $baseUrl ?>/assets/images/pp.png" alt="Kullanıcı Resmi" class="rounded-circle me-2">
                                            <span class="fw-bold me-3 text-user-color">Metehan Akcan</span> | <span class="ms-3 text-date">20 Temmuz 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <img src="<?= $baseUrl ?>/assets/images/boldLine.svg" alt="Line" class="mt-4 w-100">

                        </div>

                        <div class="article-box mb-4 max-w678">
                            <div class="d-flex resp-box">
                                <img src="<?= $baseUrl ?>/assets/images/blog-2.png" alt="Makale Resmi" class="me-4">
                                <div class="ms-3">
                                    <h5 class="text-dark fs-18 fw-bold">Vonboarding'de Gelir Fırsatları</h5>
                                    <p class="fs-18 font-raleway text-grey max-w495 truncated-text">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                        alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                        you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on.</p>
                                    <div class="user-info fs-14 ">
                                        <img src="<?= $baseUrl ?>/assets/images/pp.png" alt="Kullanıcı Resmi" class="rounded-circle me-2">
                                        <span class="fw-bold me-3 text-user-color">Metehan Akcan</span> | <span class="ms-3 text-date">20 Temmuz 2024</span>
                                    </div>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/boldLine.svg" alt="Line" class="mt-4 w-100">

                        </div>

                        <div class="article-box mb-4 max-w678">
                            <div class="d-flex resp-box">
                                <img src="<?= $baseUrl ?>/assets/images/blog-3.png" alt="Makale Resmi" class="me-4">
                                <div class="ms-3">
                                    <h5 class="text-dark fs-18 fw-bold">Vonboarding'i Tercih Etmenin Avantajları</h5>
                                    <p class="fs-18 font-raleway text-grey max-w495 truncated-text">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                        alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                        you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on.</p>
                                    <div class="user-info fs-14 ">
                                        <img src="<?= $baseUrl ?>/assets/images/pp.png" alt="Kullanıcı Resmi" class="rounded-circle me-2">
                                        <span class="fw-bold me-3 text-user-color">Metehan Akcan</span> | <span class="ms-3 text-date">20 Temmuz 2024</span>
                                    </div>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/boldLine.svg" alt="Line" class="mt-4 w-100">

                        </div>

                        <div class="article-box mb-4 max-w678">
                            <div class="d-flex resp-box">
                                <img src="<?= $baseUrl ?>/assets/images/blog-1.png" alt="Makale Resmi" class="me-4">
                                <div class="ms-3">
                                    <h5 class="text-dark fs-18 fw-bold">Vonboarding Nedir?</h5>
                                    <p class="fs-18 font-raleway text-grey max-w495 truncated-text">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                        alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                        you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on.</p>
                                    <div class="user-info fs-14 ">
                                        <img src="<?= $baseUrl ?>/assets/images/pp.png" alt="Kullanıcı Resmi" class="rounded-circle me-2">
                                        <span class="fw-bold me-3 text-user-color">Metehan Akcan</span> | <span class="ms-3 text-date">20 Temmuz 2024</span>
                                    </div>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/boldLine.svg" alt="Line" class="mt-4 w-100">

                        </div>

                        <div class="article-box mb-4 max-w678">
                            <div class="d-flex resp-box">
                                <img src="<?= $baseUrl ?>/assets/images/blog-2.png" alt="Makale Resmi" class="me-4">
                                <div class="ms-3">
                                    <h5 class="text-dark fs-18 fw-bold">Vonboarding'de Gelir Fırsatları</h5>
                                    <p class="fs-18 font-raleway text-grey max-w495 truncated-text">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                        alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                        you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on.</p>
                                    <div class="user-info fs-14 ">
                                        <img src="<?= $baseUrl ?>/assets/images/pp.png" alt="Kullanıcı Resmi" class="rounded-circle me-2">
                                        <span class="fw-bold me-3 text-user-color">Metehan Akcan</span> | <span class="ms-3 text-date">20 Temmuz 2024</span>
                                    </div>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/boldLine.svg" alt="Line" class="mt-4 w-100">

                        </div>

                        <div class="article-box mb-4 max-w678">
                            <div class="d-flex resp-box">
                                <img src="<?= $baseUrl ?>/assets/images/blog-3.png" alt="Makale Resmi" class="me-4">
                                <div class="ms-3">
                                    <h5 class="text-dark fs-18 fw-bold">Vonboarding'i Tercih Etmenin Avantajları</h5>
                                    <p class="fs-18 font-raleway text-grey max-w495 truncated-text">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                        alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                        you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on.</p>
                                    <div class="user-info fs-14 ">
                                        <img src="<?= $baseUrl ?>/assets/images/pp.png" alt="Kullanıcı Resmi" class="rounded-circle me-2">
                                        <span class="fw-bold me-3 text-user-color">Metehan Akcan</span> | <span class="ms-3 text-date">20 Temmuz 2024</span>
                                    </div>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/boldLine.svg" alt="Line" class="mt-4 w-100 last-line">

                        </div>
                    </div>

                    <div class="col-lg-1 d-none d-lg-flex justify-content-center divi-img">
                        <img src="<?= $baseUrl ?>/assets/images/verticalLine.svg" alt="Divider Image">
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <h2 class="fs-40 text-grey fw-bold last-title">Çok Okunanlar</h2>
                        <div class="popular-box">
                            <div class=" d-flex">
                                <img src="<?= $baseUrl ?>/assets/images/blog-1.png" alt="Makale Resmi" class="me-4">
                                <div class=" align-content-center">
                                    <h5 class="fw-bold fs-18 text-dark">Vonboarding Nedir?</h5>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/boldLine.svg" alt="Line" class=" w-100">
                        </div>

                        <div class="popular-box">
                            <div class=" d-flex">
                                <img src="<?= $baseUrl ?>/assets/images/blog-2.png" alt="Makale Resmi" class="me-4">
                                <div class=" align-content-center">
                                    <h5 class="fw-bold fs-18 text-dark">Vonboarding'de Gelir Fırsatları</h5>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/acordion-line.svg" alt="Line" class=" w-100">
                        </div>

                        <div class="popular-box">
                            <div class=" d-flex">
                                <img src="<?= $baseUrl ?>/assets/images/blog-3.png" alt="Makale Resmi" class="me-4">
                                <div class=" align-content-center">
                                    <h5 class="fw-bold fs-18 text-dark">Sanal POS Entegrasyonu İçin Vonboarding'i Tercih Etmenin Avantajları</h5>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/acordion-line.svg" alt="Line" class=" w-100">
                        </div>

                        <div class="popular-box">
                            <div class=" d-flex">
                                <img src="<?= $baseUrl ?>/assets/images/blog-2.png" alt="Makale Resmi" class="me-4">
                                <div class=" align-content-center">
                                    <h5 class="fw-bold fs-18 text-dark">Vonboarding Nedir?</h5>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/acordion-line.svg" alt="Line" class=" w-100">
                        </div>

                        <div class="popular-box">
                            <div class=" d-flex">
                                <img src="<?= $baseUrl ?>/assets/images/blog-2.png" alt="Makale Resmi" class="me-4">
                                <div class=" align-content-center">
                                    <h5 class="fw-bold fs-18 text-dark">Vonboarding Nedir?</h5>
                                </div>
                            </div>
                            <img src="<?= $baseUrl ?>/assets/images/acordion-line.svg" alt="Line" class=" w-100">
                        </div>

                        <div class="popular-box mt-5">
                            <h2 class="fs-40 text-date fw-bold">Bizi Takip Edin</h2>
                            <div class="d-flex d-flex justify-content-start gap-4 social-media">
                                <a href="#" class="mx-2"><img src="/assets/images/instagram.svg" alt="Instagram Logo"></a>
                                <a href="#" class="mx-2"><img src="/assets/images/twitter.svg" alt="Twitter Logo"></a>
                                <a href="#" class="mx-2"><img src="/assets/images/linkedin.svg" alt="Linkedin Logo"></a>
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
<script src="js/script.js"></script>
</body>

</html>


