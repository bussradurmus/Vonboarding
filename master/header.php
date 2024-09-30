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
                            <a class="nav-link text-white fs-16 font-raleway" href="javascript:void(0)">Dökümantasyon</a>
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


                        <div class="modal fade" id="loginButton" aria-hidden="true" aria-labelledby="loginButtonLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="<?= $baseUrl ?>/assets/images/modal.png" alt="Login Image" class="mb-4">
                                        <h3 id="loginModalLabel" class="modal-title mb-3 text-white fw-bold">Vonboarding’e Giriş Yapın</h3>
                                        <p class="font-raleway text-white">Giriş yapmak için e-posta adresinizi ve şifrenizi girin</p>
                                        <form method="POST" novalidate>
                                            <div class="mb-3 text-start">
                                                <label class="text-lgrey mb-2 fs-16 font-raleway">E-posta</label>
                                                <input type="email" class="form-control" id="emailModal" name="email" placeholder="E-posta" required autocomplete="email">
                                                <div id="emailError" class="text-danger fs-14 mt-1" style="display: none;">Lütfen geçerli bir e-posta adresi girin</div>
                                            </div>
                                            <div class="mb-3 text-start position-relative">
                                                <label class="text-lgrey mb-2 fs-16 font-raleway">Şifre</label>
                                                <input type="password" class="form-control " id="passwordModal" name="password" placeholder="Şifre" required autocomplete="current-password">
                                                <button type="button" id="togglePassword" class="btn position-absolute">
                                                    <img src="<?= $baseUrl ?>/assets/images/hidePassword.svg" alt="Password Icon" id="eyeIcon" width="20" height="21">
                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <a href="#" class="text-lgrey text-underline fs-16 font-raleway">Şifremi Unuttum</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-bs-target="#loginButton2" data-bs-toggle="modal" id="submitButton" class="btn btn-primary w-100 disabled-button" disabled>
                                                    Devam Et
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="loginButton2" aria-hidden="true" aria-labelledby="loginButtonLabel2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <h3 class="modal-title mb-3 text-white fw-bold ">SMS Doğrulama</h3>
                                        <p class="mb-4 text-white">
                                            Lütfen <span class="fw-bold">+90 532 *** ** 55</span> numaralı telefonunuza gönderdiğimiz 6 haneli <span class="fw-bold">sms kodunu</span> giriniz.
                                        </p>
                                        <div id="otp" class="d-flex justify-content-center mb-4">
                                            <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1"/>
                                        </div>
                                        <div class="mb-3">
                                            <a href="#" id="resendLink" class="text-lgrey font-raleway fs-16 text-underline">Tekrar Gönder (180)</a>
                                        </div>
                                        <button type="button" class="btn btn-primary w-100 disabled-button" id="submitButtonSms" disabled>Giriş Yap</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="registerModal" aria-hidden="true" aria-labelledby="registerModalLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="<?= $baseUrl ?>/assets/images/modal.png" alt="Login Image" class="mb-4">
                                        <h3 id="registerModalLabel" class="modal-title mb-3 text-white fw-bold">Vonboarding’e Kayıt Olun</h3>
                                        <p class="font-raleway text-white">Kayıt olmak için bilgilerinizi girin</p>

                                        <!-- Progress Bar -->
                                        <div class="progress-container">
                                            <div class="progress-bar-step">
                                                <div class="progress-bar"></div>
                                                <div class="step active" data-step="1">Bilgileriniz</div>
                                                <div class="step" data-step="2">SMS Doğrulama</div>
                                                <div class="step" data-step="3">Şifre Belirleme</div>
                                                <div class="step" data-step="4">Kimlik</div>
                                            </div>
                                        </div>

                                        <form method="POST" novalidate>
                                            <div class="row">
                                                <div class="col-md-6 mb-3 text-start">
                                                    <label class="text-lgrey mb-2 fs-16 font-raleway">Adınız</label>
                                                    <input type="text" class="form-control" id="firstNameRegister" required>
                                                </div>
                                                <div class="col-md-6 mb-3 text-start">
                                                    <label class="text-lgrey mb-2 fs-16 font-raleway">Soyadınız</label>
                                                    <input type="text" class="form-control" id="lastNameRegister" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 text-start">
                                                <label class="text-lgrey mb-2 fs-16 font-raleway">E-Posta</label>
                                                <input type="email" class="form-control" id="emailRegister" required>
                                            </div>
                                            <div class="mb-3 text-start">
                                                <label class="text-lgrey mb-2 fs-16 font-raleway">Telefon Numarası</label>
                                                <div class="d-flex align-items-center text-start">
                                                    <div class="input-group-prepend w-25">
                                                        <select class="form-select" id="phoneCode">
                                                            <option value="90">+90</option>
                                                            <option value="1">+1</option>
                                                        </select>
                                                    </div>
                                                    <input type="tel" class="form-control ms-2 w-75" id="phoneNumberRegister" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                                <button type="button" class="btn btn-primary" id="nextButton" data-bs-target="#registerModal2" data-bs-toggle="modal">Devam Et</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SMS Doğrulama Modalı -->
                        <div class="modal fade" id="registerModal2" aria-hidden="true" aria-labelledby="registerModal2Label" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <h3 class="modal-title mb-3 text-white fw-bold ">SMS Doğrulama</h3>
                                        <p class="mb-4 text-white">
                                            Lütfen <span class="fw-bold">+90 532 *** ** 55</span> numaralı telefonunuza gönderdiğimiz 6 haneli <span class="fw-bold">sms kodunu</span> giriniz.
                                        </p>
                                        <!-- Progress Bar -->
                                        <div class="progress-container mb-4">
                                            <div class="progress-bar-step">
                                                <div class="progress-bar"></div>
                                                <div class="step active" data-step="1">Bilgileriniz</div>
                                                <div class="step active" data-step="2">SMS Doğrulama</div>
                                                <div class="step" data-step="3">Şifre Belirleme</div>
                                                <div class="step" data-step="4">Kimlik</div>
                                            </div>
                                        </div>

                                        <div id="otp" class="d-flex justify-content-center mb-4">
                                            <input class="m-2 text-center form-control rounded" type="text" id="firstRegister" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="secondRegister" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="thirdRegister" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="fourthRegister" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="fifthRegister" maxlength="1"/>
                                            <input class="m-2 text-center form-control rounded" type="text" id="sixthRegister" maxlength="1"/>
                                        </div>
                                        <div class="mb-3">
                                            <a href="#" id="resendLink" class="text-lgrey font-raleway fs-16 text-underline">Tekrar Gönder (180)</a>
                                        </div>
                                        <button type="button" class="btn btn-primary w-100" id="registerButtonSms">Giriş Yap</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </nav>
        </header>

