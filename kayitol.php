<?php
global $baseUrl;
require 'master/header.php';
?>

</div>

<div id="step-1" class="page position-relative kayit-page mt-150 step-container">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center max-w560">
                <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                <p class="form-subtitle text-white mb-5 font-raleway">Kayıt olmak için bilgilerinizi girin</p>
                <div class="progress-container mb-3">
                    <div class="fs-14 font-raleway d-flex justify-content-between">
                        <div class="text-left">
                            <div class="step" data-step="1">
                                <div class="step-text">Bilgileriniz</div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="step" data-step="2">
                                <div class="step-text">SMS Doğrulama</div>
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="step" data-step="3">
                                <div class="step-text ">Şifre Belirleme</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="step" data-step="4">
                                <div class="step-text">Kimlik</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-line">
                            <div class="progress-line-active"></div>
                        </div>
                        <div class="progress-dots">
                            <div class="dot" data-step="1"></div>
                            <div class="dot" data-step="2"></div>
                            <div class="dot" data-step="3"></div>
                            <div class="dot" data-step="4"></div>
                        </div>
                    </div>

                </div>

                <form novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-4 text-start">
                            <label class="font-raleway mb-2 text-lgrey">Adınız</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3 text-start">
                            <label class="font-raleway mb-2 text-lgrey">Soyadınız</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="font-raleway mb-2 text-lgrey">E-posta</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="font-raleway mb-2 text-lgrey text-start">Telefon Nuraması</label>
                        <div class="d-flex">
                            <select class="form-select w-25">
                                <option value="+90">+90</option>
                                <option value="+1">+1</option>
                            </select>
                            <input type="tel" class="form-control ms-2" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between button-container my-5">
                        <button type="button" class="btn button-outline fs-14 font-raleway fw-semibold" id="back">Vazgeç</button>
                        <button type="button" class="btn btn-primary" id="nextButtonPrg">Devam Et</button>
                    </div>
                </form>
                <p class="already-have-account step-text">Zaten bir hesabın var mı? <a href="#" class="text-white ms-1 fw-bold hover-link-underline">Giriş Yap</a></p>
            </div>
    </main>


</div>

<div id="step-2" class="page position-relative kayit-page mt-150 step-container" style="display:none;">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center max-w560">
                <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                <p class="form-subtitle text-white mb-5 font-raleway">Lütfen +90 532 *** ** 55 numaralı telefonunuza gönderdiğimiz 6 haneli SMS kodunu giriniz</p>
                <!-- Progress Bar -->
                <div class="progress-container mb-3">
                    <div class="fs-14 font-raleway d-flex justify-content-between">
                        <div class="step" data-step="1">
                            <div class="step-text">Bilgileriniz</div>
                        </div>
                        <div class="step active" data-step="2">
                            <div class="step-text">SMS Doğrulama</div>
                        </div>
                        <div class="step" data-step="3">
                            <div class="step-text">Şifre Belirleme</div>
                        </div>
                        <div class="step" data-step="4">
                            <div class="step-text">Kimlik</div>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-line">
                            <div class="progress-line-active"></div>
                        </div>
                        <div class="progress-dots">
                            <div class="dot" data-step="1"></div>
                            <div class="dot active" data-step="2"></div>
                            <div class="dot" data-step="3"></div>
                            <div class="dot" data-step="4"></div>
                        </div>
                    </div>
                </div>
                <!-- SMS doğrulama formu -->
                <form>
                    <div class="mb-3 text-start d-flex flex-column align-items-center">
                        <label class="font-raleway mb-2 text-lgrey">SMS Kodu</label>
                        <div class="d-flex justify-content-evenly gap-2">
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                        </div>
                    </div>
                    <p class="text-white mt-2">Tekrar gönder (180sn)</p>
                    <div class="d-flex justify-content-between button-container my-5">
                        <button type="button" class="btn button-outline fs-14 font-raleway fw-semibold back-button">Geri Dön</button>
                        <button type="button" class="btn btn-primary" id="nextButtonStep2">Devam Et</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<div id="step-3" class="page position-relative kayit-page mt-150 step-container" style="display:none;">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center max-w560">
                <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                <p class="form-subtitle text-white mb-5 font-raleway">Şifrenizi belirleyin</p>

                <!-- Progress Bar -->
                <div class="progress-container mb-3">
                    <div class="fs-14 font-raleway d-flex justify-content-between">
                        <div class="step" data-step="1">
                            <div class="step-text">Bilgileriniz</div>
                        </div>
                        <div class="step" data-step="2">
                            <div class="step-text">SMS Doğrulama</div>
                        </div>
                        <div class="step active" data-step="3">
                            <div class="step-text">Şifre Belirleme</div>
                        </div>
                        <div class="step" data-step="4">
                            <div class="step-text">Kimlik</div>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-line">
                            <div class="progress-line-active"></div>
                        </div>
                        <div class="progress-dots">
                            <div class="dot" data-step="1"></div>
                            <div class="dot" data-step="2"></div>
                            <div class="dot active" data-step="3"></div>
                            <div class="dot" data-step="4"></div>
                        </div>
                    </div>
                </div>

                <!-- Şifre belirleme formu -->
                <form>
                    <div class="mb-3 text-start position-relative">
                        <label class="font-raleway mb-2 text-lgrey">Şifreniz</label>
                        <input type="password" class="form-control" id="passwordInput" required>
                        <span class="password-toggle" id="togglePassword">
                <img src="<?= $baseUrl ?>/assets/images/hidePassword.svg" alt="Password Image">
            </span>
                    </div>
                    <div class="mb-3 text-start position-relative">
                        <label class="font-raleway mb-2 text-lgrey">Şifrenizi tekrar girin</label>
                        <input type="password" class="form-control" id="confirmPasswordInput" required>
                        <span class="password-toggle" id="toggleConfirmPassword" >
               <img src="<?= $baseUrl ?>/assets/images/hidePassword.svg" alt="Password Image">
            </span>
                    </div>

                    <!-- 2FA Switch -->
                    <div class="form-check form-switch ps-0 d-flex align-items-center justify-content-between mt-3">
                        <label class="form-check-label font-raleway fw-bold text-white" for="twoFactorSwitch">2FA Doğrulama (SMS doğrulama)</label>
                        <input class="form-check-input custom-switch" type="checkbox" id="twoFactorSwitch" checked>
                    </div>

                    <!-- Geri Dön ve Devam Et Butonları -->
                    <div class="d-flex justify-content-between button-container my-5">
                        <button type="button" class="btn button-outline fs-14 font-raleway fw-semibold back-button">Geri Dön</button>
                        <button type="button" class="btn btn-primary" id="nextButtonStep3">Devam Et</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<div id="step-4" class="page position-relative kayit-page mt-150 step-container" style="display:none;">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center max-w560">
                <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                <p class="form-subtitle text-white mb-5 font-raleway">Kimlik Yükleme</p>

                <!-- Progress Bar -->
                <div class="progress-container mb-3">
                    <div class="fs-14 font-raleway d-flex justify-content-between">
                        <div class="step" data-step="1">
                            <div class="step-text">Bilgileriniz</div>
                        </div>
                        <div class="step" data-step="2">
                            <div class="step-text">SMS Doğrulama</div>
                        </div>
                        <div class="step active" data-step="3">
                            <div class="step-text">Şifre Belirleme</div>
                        </div>
                        <div class="step" data-step="4">
                            <div class="step-text">Kimlik</div>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-line">
                            <div class="progress-line-active"></div>
                        </div>
                        <div class="progress-dots">
                            <div class="dot" data-step="1"></div>
                            <div class="dot" data-step="2"></div>
                            <div class="dot active" data-step="3"></div>
                            <div class="dot" data-step="4"></div>
                        </div>
                    </div>
                </div>

                <!-- Kimlik Yükleme Ön Yüz -->
                <div class="my-5 d-flex justify-content-evenly align-items-center text-start file-upload-box">
                    <img src="<?= $baseUrl ?>assets/images/kimlik1.svg" alt="IDCARD IMAGE">
                    <div class="d-flex align-items-center" id="frontUploadBox">
                        <label class="font-raleway mb-2 text-lgrey me-2">Kimlik Ön Yüzünü Yükleyiniz</label>
                        <input type="file" id="frontIDUpload" class="form-control-file" accept=".jpeg, .png, .pdf" style="display: none;">
                        <img src="<?= $baseUrl ?>assets/images/upload.svg" alt="Upload IMAGE" class="up-img">
                    </div>
                </div>

                <!-- Kimlik Yükleme Arka Yüz -->
                <div class="mb-3 d-flex justify-content-evenly align-items-center text-start file-upload-box">
                    <img src="<?= $baseUrl ?>assets/images/kimlik2.svg" alt="IDCARD IMAGE">
                    <div class="d-flex align-items-center" id="backUploadBox">
                        <label class="font-raleway mb-2 text-lgrey me-2">Kimlik Arka Yüzünü Yükleyiniz</label>
                        <input type="file" id="backIDUpload" class="form-control-file" accept=".jpeg, .png, .pdf" style="display: none;">
                        <img src="<?= $baseUrl ?>assets/images/upload.svg" alt="Upload IMAGE" class="up-img">
                    </div>
                </div>



                <!-- Uyarı Mesajı -->
                <p class="text-muted mt-3">Kimlik resimlerinizi, jpeg, png, pdf olarak yükleyebilirsiniz.</p>

                <!-- Geri Dön ve Devam Et Butonları -->
                <div class="d-flex justify-content-between button-container my-5">
                    <button type="button" class="btn button-outline fs-14 font-raleway fw-semibold back-button">Geri Dön</button>
                    <button type="button" class="btn btn-primary" id="finishButton">Kaydı Tamamla</button>
                </div>
            </div>
        </div>
    </main>
</div>


</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="js/script.js?v=<?= time() ?>"></script>
<script src="js/form.js?v=<?= time() ?>"></script>
</body>

</html>
