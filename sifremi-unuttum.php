<?php
global $baseUrl;
require 'master/header.php';
?>

</div>

<div class="forgot-password-page">
    <main>
        <div class="container d-flex justify-content-center mt-150">
            <div class="form-container text-center w550">
                <img src="<?= $baseUrl ?>assets/images/modal.png" alt="Image" class="mb-4">
                <h3 class="form-title fw-bold mb-3 text-white">Şifrenizi Sıfırlayın</h3>
                <div id="fp-step-1">
                    <p class="form-subtitle mb-5 font-raleway text-lgrey">Şifrenizi sıfırlamak için kayıtlı e-posta adresinizi girin.</p>

                    <!-- E-posta Alanı -->
                    <div class="mb-3 text-start">
                        <label class="mb-2 text-lgrey font-raleway fw-medium">E-posta</label>
                        <input type="email" class="form-control" id="fpEmail" required>
                        <div class="error-message text-danger" id="emailErrorFp" style="display: none;">Lütfen geçerli bir e-posta adresi girin</div>
                    </div>

                    <div class="my-5">
                        <div class="d-flex justify-content-between mt-5 ">
                            <button type="button" class="btn btn-primary w-100" id="fpNextButton" disabled>Devam Et</button>
                        </div>
                    </div>
                </div>

                <div id="fp-step-2" class="d-none">
                    <p class="form-subtitle mb-5 text-lgrey font-raleway">Lütfen <span class="fw-bold fp-user-phone"> +90 532 *** ** 55</span> numaralı telefonunuza gönderdiğimiz 6 haneli <span class="fw-bold">sms kodunu</span> giriniz</p>

                    <!-- SMS Kodu Giriş Alanı -->
                    <div class="mb-3 text-start d-flex flex-column align-items-center">
                        <label class="font-raleway mb-4 text-lgrey fw-bold">SMS Kodu</label>
                        <div class="d-flex justify-content-evenly gap-2">
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                        </div>
                        <div class="error-message text-danger" id="smsLoginError" style="display: none;">SMS kodu geçerli değil</div>
                    </div>
                    <p class="text-white mt-5 mb-4 link-underline timer-text" id="fpTimer">Tekrar gönder (180sn)</p>

                    <!-- Geri Dön ve Devam Et Butonları -->
                    <div class="d-flex justify-content-between mt-5">
                        <button type="button" class="btn btn-primary w-100" id="fpNextButton2" disabled>Devam Et</button>
                    </div>
                </div >

                <div id="fp-step-2" class="d-none">
                    <p class="form-subtitle mb-5 text-lgrey font-raleway">Lütfen <span class="fw-bold fp-user-phone"> +90 532 *** ** 55</span> numaralı telefonunuza gönderdiğimiz 6 haneli <span class="fw-bold">sms kodunu</span> giriniz</p>

                    <!-- SMS Kodu Giriş Alanı -->
                    <div class="mb-3 text-start d-flex flex-column align-items-center">
                        <label class="font-raleway mb-4 text-lgrey fw-bold">SMS Kodu</label>
                        <div class="d-flex justify-content-evenly gap-2">
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                            <input type="text" maxlength="1" class="form-control sms-input" required>
                        </div>
                        <div class="error-message text-danger" id="smsLoginError" style="display: none;">SMS kodu geçerli değil</div>
                    </div>
                    <p class="text-white mt-5 mb-4 link-underline timer-text" id="fpTimer">Tekrar gönder (180sn)</p>

                    <!-- Geri Dön ve Devam Et Butonları -->
                    <div class="d-flex justify-content-between mt-5">
                        <button type="button" class="btn btn-primary w-100" id="fpNextButton2" disabled>Devam Et</button>
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
<script src="js/forgot-password.js?v=<?= time() ?>"></script>
</body>

</html>




