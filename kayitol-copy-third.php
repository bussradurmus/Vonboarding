<?php
global $baseUrl;
require 'master/header.php';
?>

</div>

<div  class="page position-relative kayit-page mt-150 ">
    <main>
        <div class="container d-flex justify-content-center">
            <div class="form-container text-center w550">
            <img src="<?= $baseUrl ?>assets/images/party-popper.png" alt="Image" class="mb-4">
                <h3 class="form-title text-white fw-bold mb-3">Tebrikler! Başvurunuz Alındı</h3>
              
                <p class="form-subtitle text-lgrey mb-5 font-raleway">
                Başvurunuz başarıyla alındı. Kısa süre içinde yetkililerimiz sizinle <span class="fw-bold">telefon üzerinden</span>
                 iletişime geçecek ve kayıt sürecinizin devamı hakkında detaylı bilgi verecekler. İlginiz için teşekkür ederiz!</p>

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
<script src="js/script.js?v=<?= time() ?>"></script>
<script src="js/form.js?v=<?= time() ?>"></script>
<script src="js/register.js?v=<?= time() ?>"></script>
</body>

</html>




