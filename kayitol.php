<?php
global $baseUrl;
require 'master/header.php';
?>

</div>

<div id="step-1" class="page position-relative kayit-page mt-150 step-container">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center w550">
                <div class="step-header">
                    <img src="<?= $baseUrl ?>assets/images/modal.png" alt="Image" class="mb-4">
                    <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                    <p class="form-subtitle text-lgrey mb-5 font-raleway">Kayıt olmak için bilgilerinizi girin</p>
                    <div class="progress-container mb-3">
                        <div class="fs-14 font-raleway d-flex justify-content-between">
                            <div class="text-left">
                                <div class="step active" data-step="1">
                                    <div class="step-text">Bilgileriniz</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="step" data-step="2">
                                    <div class="step-text">Şifre Belirleme</div>
                                </div>
                            </div>
                            <div class="text-end  w-15">
                                <div class="step" data-step="3">
                                    <div class="step-text">Kimlik</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="step" data-step="4">
                                    <div class="step-text">SMS Doğrulama</div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-line">
                                <div class="progress-line-active"></div>
                            </div>
                            <div class="progress-dots">
                                <div class="dot active" data-step="1"></div>
                                <div class="dot" data-step="2"></div>
                                <div class="dot" data-step="3"></div>
                                <div class="dot" data-step="4"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <form novalidate>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-4 text-start">
                            <label class="font-raleway mb-2 text-lgrey fw-medium">Adınız</label>
                            <input type="text" class="form-control" id="firstNameRg" required>
                            <div class="error-message text-danger mt-1" style="display: none;" id="firstNameRgError">Geçerli bir isim girin</div>
                        </div>
                        <div class="col-md-6 mb-3 text-start">
                            <label class="font-raleway mb-2 text-lgrey fw-medium fw-medium">Soyadınız</label>
                            <input type="text" class="form-control" id="lastNameRg" required>
                            <div class="error-message text-danger mt-1" style="display: none;" id="lastNameRgError">Geçerli bir soyadı girin</div>
                        </div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="font-raleway mb-2 text-lgrey">E-posta</label>
                        <input type="email" class="form-control" id="emailRg" required>
                        <div class="error-message text-danger mt-1" style="display: none;" id="emailRgError">Lütfen geçerli bir e-posta adresi girin</div>
                    </div>
                    <div class="my-3 text-start">
                        <label class="font-raleway mb-2 text-lgrey text-start fw-medium">Telefon Nuraması</label>
                        <div class="d-flex">
                            <select class="form-select w-25">
                                <option value="+90">+90</option>
                            </select>
                            <input type="tel" class="form-control ms-2" id="phoneRg" required>
                        </div>
                        <div class="error-message text-danger mt-1" style="display: none;" id="phoneRgError">Lütfen geçerli bir telefon numarası girin</div>
                    </div>
                    <div class="d-flex justify-content-between button-container my-5">
                        <a href="<?= $baseUrl ?>" class="btn button-outline fs-14 font-raleway fw-semibold" id="back">Vazgeç</a>
                        <button type="button" class="btn btn-primary" id="nextButtonPrg" disabled>Devam Et</button>
                    </div>
                </form>
                <p class="already-have-account step-text">Zaten bir hesabın var mı? <a href="<?= $baseUrl ?>girisyap" class="text-white ms-1 fw-bold hover-link-underline">Giriş Yap</a></p>
            </div>
    </main>


</div>

<div id="step-2" class="page position-relative kayit-page mt-150 step-container" style="display:none;">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center w550">
                <div class="step-header">
                    <img src="<?= $baseUrl ?>assets/images/modal.png" alt="Image" class="mb-4">
                    <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                    <p class="form-subtitle text-lgrey mb-5 font-raleway">Şifrenizi belirleyin</p>

                    <!-- Progress Bar -->
                    <div class="progress-container mb-3">
                        <div class="fs-14 font-raleway d-flex justify-content-between">
                            <div class="step" data-step="1">
                                <div class="step-text">Bilgileriniz</div>
                            </div>
                            <div class="step active" data-step="2">
                                <div class="step-text">Şifre Belirleme</div>
                            </div>
                            <div class="step text-end w-15" data-step="3">
                                <div class="step-text">Kimlik</div>
                            </div>
                            <div class="step" data-step="4">
                                <div class="step-text">SMS Doğrulama</div>
                            </div>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-line">
                                <div class="progress-line-active"></div>
                            </div>
                            <div class="progress-dots">
                                <div class="dot active" data-step="1"></div>
                                <div class="dot active" data-step="2"></div>
                                <div class="dot " data-step="3"></div>
                                <div class="dot" data-step="4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Şifre belirleme formu -->
                <form>
                    <div class="my-3 text-start position-relative">
                        <label class="font-raleway mb-2 text-lgrey">Şifreniz</label>
                        <input type="password" class="form-control" id="passwordInput" required>
                        <span class="password-toggle" id="togglePassword">
                          <img src="<?= $baseUrl ?>/assets/images/hidePassword.svg" alt="Password Image">
                        </span>
                        <div class="error-message text-danger mt-1" style="display: none;" id="password1RgError">Şifreniz en az 8 karakter olmalı</div>
                    </div>
                    <div class="my-3 text-start position-relative">
                        <label class="font-raleway mb-2 text-lgrey">Şifrenizi tekrar girin</label>
                        <input type="password" class="form-control" id="confirmPasswordInput" required>
                        <span class="password-toggle" id="toggleConfirmPassword">
                          <img src="<?= $baseUrl ?>/assets/images/hidePassword.svg" alt="Password Image">
                        </span>
                        <div class="error-message text-danger mt-1" style="display: none;" id="passwordRgError">Girdiğiniz şifreler eşleşmemektedir</div>
                    </div>

                    <!-- 2FA Switch -->
                    <div class="form-check form-switch ps-0 d-flex align-items-center justify-content-between mt-4">
                        <label class="form-check-label font-raleway fw-bold text-white" for="twoFactorSwitch">2FA Doğrulama (SMS doğrulama)</label>
                        <input class="form-check-input custom-switch" type="checkbox" id="twoFactorSwitch" checked>
                    </div>

                    <!-- Geri Dön ve Devam Et Butonları -->
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
            <div class="form-container text-center w550">
                <div class="step-header">
                    <img src="<?= $baseUrl ?>assets/images/modal.png" alt="Image" class="mb-4">
                    <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                    <p class="form-subtitle text-lgrey mb-5 font-raleway">Kimlik resimlerini yükleyin </p>

                    <!-- Progress Bar -->
                    <div class="progress-container mb-3">
                        <div class="fs-14 font-raleway d-flex justify-content-between">
                            <div class="step" data-step="1">
                                <div class="step-text">Bilgileriniz</div>
                            </div>
                            <div class="step" data-step="2">
                                <div class="step-text">Şifre Belirleme</div>
                            </div>
                            <div class="step active text-end w-15" data-step="3">
                                <div class="step-text">Kimlik</div>
                            </div>
                            <div class="step" data-step="4">
                                <div class="step-text">SMS Doğrulama</div>
                            </div>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-line">
                                <div class="progress-line-active"></div>
                            </div>
                            <div class="progress-dots">
                                <div class="dot active" data-step="1"></div>
                                <div class="dot active" data-step="2"></div>
                                <div class="dot active" data-step="3"></div>
                                <div class="dot " data-step="4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kimlik Yükleme Ön Yüz -->
                <div class="my-5 d-flex justify-content-evenly align-items-center text-start file-upload-box" id="frontIdCard">
                    <img src="<?= $baseUrl ?>assets/images/kimlik1.svg" alt="IDCARD IMAGE">
                    <div class="d-flex align-items-center" id="frontUploadBox">
                        <label class="font-raleway mb-2 text-white w-75 fw-bold">Kimlik Ön Yüzünü Yükleyiniz</label>
                        <input type="file" id="frontIDUpload" class="form-control-file" accept=".jpeg, .png, .pdf" style="display: none;">
                        <img src="<?= $baseUrl ?>assets/images/upload.svg" alt="Upload IMAGE" class="up-img">
                        <img src="<?= $baseUrl ?>assets/images/x-icon.svg" alt="Delete IMAGE" class="del-img" style="display: none;">
                    </div>
                </div>

                <!-- Kimlik Yükleme Arka Yüz -->
                <div class="mb-3 d-flex justify-content-evenly align-items-center text-start file-upload-box" id="backIdCard">
                    <img src="<?= $baseUrl ?>assets/images/kimlik2.svg" alt="IDCARD IMAGE">
                    <div class="d-flex align-items-center" id="backUploadBox">
                        <label class="font-raleway mb-2 text-white w-75 fw-bold">Kimlik Arka Yüzünü Yükleyiniz</label>
                        <input type="file" id="backIDUpload" class="form-control-file" accept=".jpeg, .png, .pdf" style="display: none;">
                        <img src="<?= $baseUrl ?>assets/images/upload.svg" alt="Upload IMAGE" class="up-img">
                        <img src="<?= $baseUrl ?>assets/images/x-icon.svg" alt="Delete IMAGE" class="del2-img" style="display: none;">
                    </div>
                </div>

                <!-- Uyarı Mesajı -->
                <div class="d-flex justify-content-center mt-3">
                    <img src="<?= $baseUrl ?>assets/images/info.svg" alt="Information Icon">
                    <p class="text-lgrey font-raleway mt-3 ms-2">Kimlik resimlerinizi, jpeg, png, pdf olarak yükleyebilirsiniz.</p>
                </div>
                <!-- Geri Dön ve Devam Et Butonları -->
                <div class="d-flex justify-content-between button-container my-5">
                    <button type="button" class="btn button-outline fs-14 font-raleway fw-semibold back-button">Geri Dön</button>
                    <button type="button" class="btn btn-primary" id="nextButtonStep3" disabled>Devam Et</button>
                </div>

            </div>
        </div>
    </main>
</div>

<div id="step-4" class="page position-relative kayit-page mt-150 step-container" style="display:none;">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center w550">
                <div class="step-header">
                    <img src="<?= $baseUrl ?>assets/images/modal.png" alt="Image" class="mb-4">
                    <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                    <p class="form-subtitle mb-5 text-lgrey font-raleway">Lütfen <span class="fw-bold user-phone"> +90 532 *** ** 55</span> numaralı telefonunuza gönderdiğimiz 6 haneli <span class="fw-bold">sms kodunu</span> giriniz</p>                    <!-- Progress Bar -->
                    <div class="progress-container mb-3">
                        <div class="fs-14 font-raleway d-flex justify-content-between">
                            <div class="step" data-step="1">
                                <div class="step-text">Bilgileriniz</div>
                            </div>
                            <div class="step" data-step="2">
                                <div class="step-text">Şifre Belirleme</div>
                            </div>
                            <div class="step text-end  w-15" data-step="3">
                                <div class="step-text">Kimlik</div>
                            </div>
                            <div class="step active" data-step="4">
                                <div class="step-text">SMS Doğrulama</div>
                            </div>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-line">
                                <div class="progress-line-active"></div>
                            </div>
                            <div class="progress-dots">
                                <div class="dot active" data-step="1"></div>
                                <div class="dot active" data-step="2"></div>
                                <div class="dot active" data-step="3"></div>
                                <div class="dot active" data-step="4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SMS doğrulama formu -->
                <form>
                    <div class="my-5 text-start d-flex flex-column align-items-center">
                        <label class="font-raleway mb-4 text-lgrey">SMS Kodu</label>
                        <div class="d-flex justify-content-evenly gap-2">
                            <input type="text" maxlength="1" class="form-control sms-input sms-rg-input text-center" required>
                            <input type="text" maxlength="1" class="form-control sms-input sms-rg-input text-center" required>
                            <input type="text" maxlength="1" class="form-control sms-input sms-rg-input text-center" required>
                            <input type="text" maxlength="1" class="form-control sms-input sms-rg-input text-center" required>
                            <input type="text" maxlength="1" class="form-control sms-input sms-rg-input text-center" required>
                            <input type="text" maxlength="1" class="form-control sms-input sms-rg-input text-center" required>
                        </div>
                        <div class="error-message text-danger" id="smsRgError" style="display: none;">SMS kodu geçerli değil</div>
                    </div>
                    <p class="text-white my-5" id="timerRg">Tekrar gönder (180sn)</p>
                    <div class="d-flex justify-content-between button-container my-5">
                        <button type="button" class="btn button-outline fs-14 font-raleway fw-semibold back-button">Geri Dön</button>
                        <button type="button" class="btn btn-primary" id="finishButton" disabled>Kaydı Tamamla</button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</div>

<div id="completedSection" class="page position-relative kayit-page mt-150 step-container" style="display:none;">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center w550">
                <img src="<?= $baseUrl ?>assets/images/modal.png" alt="Image" class="mb-4">
                <h3 class="form-title text-white fw-bold mb-3">Tebrikler! Kaydınız Tamamlandı.</h3>
                <img src="<?= $baseUrl ?>assets/images/party-popper.png" alt="Image" class="mb-4">
                <p class="form-subtitle text-lgrey mb-5 font-raleway">Vonboarding’in tüm özelliklerini kullanabilmeniz için, hesabınızın onaylanması gerekmektedir. Onay sürecini <span class="fw-bold">Vonboarding’e giriş</span>
                    yaparak takip edebilirsiniz.</p>

                <div class="d-flex justify-content-between button-container my-5">
                    <a href="<?= $baseUrl ?>" type="button" class="btn btn-primary w-100" id="completed">Anladım</a>
                </div>
            </div>
        </div>
    </main>
</div>


</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-sha256@0.9.0/build/sha256.min.js"></script>
<script src="js/script.js?v=<?= $version ?>"></script>
<script src="js/form.js?v=<?= $version ?>"></script>
<script src="js/register.js?v=<?= $version ?>"></script>
</body>

</html>




