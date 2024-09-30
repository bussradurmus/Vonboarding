<?php
require 'master/header.php';
?>

</div>

<div class="page position-relative kayit-page mt-150">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center max-w560">
                <h3 class="form-title text-white fw-bold mb-3">Vonboarding’e Kayıt Olun</h3>
                <p class="form-subtitle text-white mb-3 font-raleway">Kayıt olmak için bilgilerinizi girin</p>
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
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" placeholder="Adınız" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Soyadınız" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="E-Posta" required>
                    </div>
                    <div class="mb-3 d-flex">
                        <select class="form-select w-25">
                            <option value="+90">+90</option>
                            <option value="+1">+1</option>
                        </select>
                        <input type="tel" class="form-control ms-2" placeholder="Telefon Numarası" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn button-outline fs-14 font-raleway fw-semibold" id="back">Vazgeç</button>
                        <button type="button" class="btn btn-primary" id="nextButtonPrg">Devam Et</button>
                    </div>
                </form>
                <p class="already-have-account">Zaten bir hesabın var mı? <a href="#">Giriş Yap</a></p>
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
