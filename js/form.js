$(document).ready(function () {
    let currentStep = 1;

    // İlk stepi gösterme
    function showStep(step) {
        $('.step-container').hide();  // Tüm stepleri gizle
        $('#step-' + step).show();    // İlgili stepi göster
    }

    // Progress barı güncelleme fonksiyonu
    function updateProgressBar(step) {
        $('.step').each(function () {
            var stepNum = $(this).data('step');
            if (stepNum <= step) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
        $('.dot').each(function () {
            var stepNum = $(this).data('step');
            if (stepNum <= step) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });

        var totalSteps = 4;
        var percentage = (step - 1) / (totalSteps - 1) * 100;
        $('.progress-line .progress-line-active').css('width', percentage + '%');
    }

    // İlk adımı başlat
    showStep(currentStep);
    updateProgressBar(currentStep);

    // Adım geçiş fonksiyonları
    $('#nextButtonPrg, #nextButtonStep2, #nextButtonStep3').click(function (event) {
        event.preventDefault();
        if (currentStep < 4) {
            currentStep++;
            showStep(currentStep);
            updateProgressBar(currentStep);
        }
    });

    // "Geri Dön" butonuna tıklandığında bir önceki adımı göster
    $('.back-button').click(function (event) {
        event.preventDefault();
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
            updateProgressBar(currentStep);
        }
    });

    // Şifre göster/gizle işlevi
    $('.password-toggle').click(function () {
        var input = $(this).siblings('input');  // İlgili input alanını seç
        var type = input.attr('type') === 'password' ? 'text' : 'password';
        input.attr('type', type);

        // Göz simgesini değiştir
        var icon = $(this).children('img');
        var newIconSrc = input.attr('type') === 'password' ? 'https://busra.valletbeta2.site/Vonboarding/assets/images/hidePassword.svg' : 'https://busra.valletbeta2.site/Vonboarding/assets/images/showPassword.svg';
        icon.attr('src', newIconSrc);
    });

    // 2FA doğrulama switch kontrolü
    $('#twoFactorSwitch').change(function () {
        if ($(this).is(':checked')) {
            console.log("2FA doğrulama aktif.");
        } else {
            console.log("2FA doğrulama pasif.");
        }
    });

    // Kimlik dosya yükleme işlemleri
    $('#frontUploadBox img, #backUploadBox img').on('click', function () {
        var input = $(this).closest('div').find('input');
        input.click();
    });

    $('#frontIDUpload, #backIDUpload').on('change', function () {
        var file = this.files[0];
        if (file) {
            var fileType = file.type;
            var validExtensions = ['image/jpeg', 'image/png', 'application/pdf'];
            if (validExtensions.includes(fileType)) {
                $(this).closest('div').find('label').text(file.name);
            } else {
                alert('Lütfen yalnızca jpeg, png veya pdf formatında dosya yükleyin.');
                $(this).val('');
            }
        }
    });

});
