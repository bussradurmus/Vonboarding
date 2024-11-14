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
                    <p class="form-subtitle text-lgrey mb-3 font-raleway">Ödeme kuruluşu olarak kayıt olmak için lütfen formu doldurun</p>
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


<div id="step-2" class="page position-relative kayit-page mt-150 step-container" style="display:none">
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




