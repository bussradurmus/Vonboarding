<?php
global $baseUrl;
$metaTitle = 'GİRİŞ YAP - VONBOARDING';
$metaDescription = 'Vonboarding’e Giriş Yap: Ödeme kuruluşları için kolay entegrasyon, hızlı sanal POS entegrasyonu ve dijital başvuru yönetimi sunar. Başvuru süreçlerinizi hızlandırın, ödeme entegrasyonu yönetimini tek panelden takip edin ve işletmenizin verimliliğini artırın. Güvenli, kullanıcı dostu ve şeffaf ödeme süreçleri ile dijital dönüşümünüzü hızlandırın.';
$metaKeywords = 'Vonboarding, başvuru süreçleri, ödeme kuruluşları, entegrasyon, iş verimliliği';
require 'master/header.php';
?>

</div>
<div id="login-step-1" class="login-page">
    <main>
        <div class="container d-flex justify-content-center mt-150">
            <div class="form-container text-center w550">
                <img src="<?= $baseUrl ?>assets/images/modal.png" alt="Image" class="mb-4">
                <h3 class="form-title fw-bold mb-3 text-white">Vonboarding’e Giriş Yapın</h3>
                <p class="form-subtitle mb-5 font-raleway text-lgrey">Giriş yapmak için e-posta adresinizi ve şifrenizi girin</p>

                <!-- E-posta Alanı -->
                <div class="mb-3 text-start">
                    <label class="mb-2 text-lgrey font-raleway fw-medium">E-posta</label>
                    <input type="email" class="form-control" id="loginEmail" required>
                    <div class="error-message text-danger" id="emailError" style="display: none;">Lütfen geçerli bir e-posta adresi girin</div>
                </div>

                <!-- Şifre Alanı -->
                <div class="mb-3 text-start position-relative mt-4">
                    <label class="mb-2 text-lgrey font-raleway fw-medium">Şifreniz</label>
                    <input type="password" class="form-control" id="passwordInput" required>
                    <span class="password-toggle" id="togglePassword">
                         <img src="<?= $baseUrl ?>/assets/images/hidePassword.svg" alt="Password Image">
                    </span>
                    <div class="error-message text-danger" id="passwordError" style="display: none;">Lütfen şifrenizi girin</div>
                </div>

                <div class="my-5">
                    <a href="<?= $baseUrl ?>sifremi-unuttum.php" class="text-lgrey text-underline fs-16 font-raleway">Şifremi Unuttum</a>
                    <div class="d-flex justify-content-between mt-5 font-raleway">
                        <button type="button" class="btn btn-primary w-100" id="loginNextButton" disabled>Devam Et</button>
                    </div>
                </div>
            </div>
    </main>
</div>

<div id="login-step-2" class="login-page" style="display:none;">
    <main>
        <div class="container d-flex justify-content-center mt-150">
            <div class="form-container text-center w550">
                <img src="<?= $baseUrl ?>assets/images/modal.png" alt="Image" class="mb-4">
                <h3 class="form-title fw-bold mb-3 text-white">SMS Doğrulama</h3>
                <p class="form-subtitle mb-5 text-lgrey font-raleway">Lütfen telefonunuza gönderdiğimiz 6 haneli <span
                            class="fw-bold">sms kodunu</span> giriniz</p>

                <!-- SMS Kodu Giriş Alanı -->
                <div class="mb-3 text-start d-flex flex-column align-items-center">
                    <label class="font-raleway mb-4 text-lgrey fw-bold">SMS Kodu</label>
                    <div class="d-flex justify-content-evenly gap-2">
                        <input type="text" maxlength="1" class="form-control sms-input text-center" required>
                        <input type="text" maxlength="1" class="form-control sms-input text-center" required>
                        <input type="text" maxlength="1" class="form-control sms-input text-center" required>
                        <input type="text" maxlength="1" class="form-control sms-input text-center" required>
                        <input type="text" maxlength="1" class="form-control sms-input text-center" required>
                        <input type="text" maxlength="1" class="form-control sms-input text-center" required>
                    </div>
                    <div class="error-message text-danger" id="smsLoginError" style="display: none;">SMS kodu geçerli değil</div>
                </div>
                <p class="text-white mt-5 mb-4 link-underline timer-text">Tekrar gönder (180sn)</p>

                <!-- Geri Dön ve Devam Et Butonları -->
                <div class="d-flex justify-content-between mt-5" style="display: none !important;">
                    <button type="button" class="btn btn-primary w-100" id="loginFinishButton" disabled>Giriş Yap</button>
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
<script src="js/script.js?v=<?= time() ?>"></script>
<script src="js/form.js?v=<?= time() ?>"></script>
<script src="js/login.js?v=<?= time() ?>"></script>
</body>

</html>
