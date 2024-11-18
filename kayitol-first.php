<?php
global $baseUrl;
$metaTitle = 'KAYIT OL - VONBOARDING';
$metaDescription = 'Vonboarding’e Kayıt Ol: Ödeme kuruluşları için hızlı ve kolay başvuru süreçlerine adım atmanızı sağlar. Dijital başvuru yönetimi, sanal POS entegrasyonu ve güvenli ödeme çözümleriyle işletmenizi büyütmek için hemen kayıt olun ve başvuru süreçlerinizi hızlandırın.';
$metaKeywords = 'Vonboarding, başvuru süreçleri, ödeme kuruluşları, entegrasyon, iş verimliliği';
require 'master/header.php';
?>

</div>

<div id="step-1" class="page position-relative kayit-page mt-150 step-container">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center w550">
                <div class="pb-5">
                    <h3 class="text-white fw-bold">Vonboarding’e Kayıt Olun</h3>
                    <p class="text-lgrey fw-normal">Hangi kullanıcı katergorisindesiniz?</p>
                </div>
                <div class="d-flex flex-column gap-5 w-100">
                    <div class="option-box border rounded-5 px-4 py-5 custom-cursor" data-category="partnerUser">
                        <div class="d-flex gap-4 align-items-center w-100">
                            <div>
                                <img src="<?= $baseUrl ?>assets/images/odeme-blue.svg" alt="Ödeme Kuruluşu Resim" />
                            </div>
                            <div>
                                <h3 class="text-white fw-bold">Ödeme Kuruluşuyum</h3>
                            </div>
                        </div>
                    </div>

                    <div class="option-box border rounded-5 px-4 py-5 custom-cursor" data-category="paymentOrganization">
                        <div class="d-flex gap-4 align-items-center w-100">
                            <div>
                                <img src="<?= $baseUrl ?>assets/images/partner-blue.svg" alt="Partner Kullanıcı Resim" />
                            </div>
                            <div>
                                <h3 class="text-white fw-bold">Partner Kullanıcıyım</h3>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between button-container my-5">
                        <a href="<?= $baseUrl ?>" class="btn button-outline fs-14 font-raleway fw-semibold" id="back">Vazgeç</a>
                        <button type="button" class="btn btn-primary" id="nextButtonPrg" disabled>Devam Et</button>
                    </div>
                    <div>
                        <p class="already-have-account step-text">Zaten bir hesabın var mı? <a href="<?= $baseUrl ?>girisyap" class="text-white ms-1 fw-bold hover-link-underline">Giriş Yap</a></p>
                    </div>
                </div>
            </div>
    </main>
</div>



</div>
<script>
    const optionBoxes = document.querySelectorAll('.option-box');
    const nextButton = document.getElementById('nextButtonPrg');
    let selectedCategory = null;

    optionBoxes.forEach(box => {
        box.addEventListener('click', () => {
            // Remove 'active-box' class from all boxes
            optionBoxes.forEach(b => b.classList.remove('active-box'));

            // Add 'active-box' class to the clicked box
            box.classList.add('active-box');

            // Enable the 'Devam Et' button
            nextButton.disabled = false;

            // Set the selected category for the button action
            selectedCategory = box.getAttribute('data-category');
        });
    });

    // 'Devam Et' button click event
    nextButton.addEventListener('click', () => {
        if (!selectedCategory) return; // If no category selected, do nothing

        // Redirect based on the selected category
        if (selectedCategory === 'paymentOrganization') {
            window.location.href = '<?= $baseUrl ?>kayitol'; // Redirect for 'paymentOrganization'
        } else if (selectedCategory === 'partnerUser') {
            window.location.href = '<?= $baseUrl ?>kayitol-odeme-kurulusu'; // Redirect for 'partnerUser'
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-sha256@0.9.0/build/sha256.min.js"></script>
<script src="js/script.js?v=<?= $version ?>"></script>

</body>

</html>