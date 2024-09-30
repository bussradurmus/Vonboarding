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

    // 1. Stepten 2. Stepe geçiş
    $('#nextButtonPrg').click(function (event) {
        event.preventDefault();
        if (currentStep < 4) {
            currentStep++;
            showStep(currentStep);
            updateProgressBar(currentStep);
        }
    });

    // 2. Stepten 3. Stepe geçiş
    $('#nextButtonStep2').click(function (event) {
        event.preventDefault();
        if (currentStep < 4) {
            currentStep++;
            showStep(currentStep);
            updateProgressBar(currentStep);
        }
    });

    // 3. Stepten 4. Stepe geçiş (Bu henüz yoksa gelecekte ekleyebiliriz)
    $('#nextButtonStep3').click(function (event) {
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
// Kimlik Ön Yüz Dosya Yükleme
    $('#frontUploadBox img').on('click', function() {
        $('#frontIDUpload').click();
    });

    $('#frontIDUpload').on('change', function() {
        var file = this.files[0];
        if (file) {
            var fileType = file.type;
            var validExtensions = ['image/jpeg', 'image/png', 'application/pdf'];
            if (validExtensions.includes(fileType)) {
                // Dosya başarılı bir şekilde seçildiğinde resmin üzerine dosya ismi yazılır
                $('#frontUploadBox label').text(file.name);
            } else {
                alert('Lütfen yalnızca jpeg, png veya pdf formatında dosya yükleyin.');
                $(this).val(''); // Yanlış formatta dosya yüklendiğinde input'u temizle
            }
        }
    });

    // Kimlik Arka Yüz Dosya Yükleme
    $('#backUploadBox img').on('click', function() {
        $('#backIDUpload').click();
    });

    $('#backIDUpload').on('change', function() {
        var file = this.files[0];
        if (file) {
            var fileType = file.type;
            var validExtensions = ['image/jpeg', 'image/png', 'application/pdf'];
            if (validExtensions.includes(fileType)) {
                // Dosya başarılı bir şekilde seçildiğinde resmin üzerine dosya ismi yazılır
                $('#backUploadBox label').text(file.name);
            } else {
                alert('Lütfen yalnızca jpeg, png veya pdf formatında dosya yükleyin.');
                $(this).val(''); // Yanlış formatta dosya yüklendiğinde input'u temizle
            }
        }
    });

    //GIRIS YAP KONTROL

    // E-posta inputundan çıktığında (blur) doğrulama işlemi
    $('#loginEmail').on('blur', function () {
        var emailInput = $(this);
        var emailValue = emailInput.val();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;  // Basit e-posta regex kontrolü

        // Hata mesajını ve sınıfları temizle
        $('#emailError').hide();  // Hata mesajını başlangıçta gizle
        emailInput.removeClass('is-invalid');

        // E-posta kontrolü (Boş değil ve geçerli bir e-posta formatı)
        if (emailValue === '' || !emailPattern.test(emailValue)) {
            emailInput.addClass('is-invalid');
            $('#emailError').show();  // Hata mesajını göster
        }
    });

    // Şifre ve genel form doğrulama (Butona basıldığında)
    $('#loginNextButton').on('click', function (event) {
        event.preventDefault();

        // Şifre inputunu kontrol et
        var passwordInput = $('#passwordInput');

        // Şifre hatasını temizle
        $('#passwordError').hide();
        passwordInput.removeClass('is-invalid');

        var isValid = true;

        // E-posta doğrulaması (Blur'da yapılmış olabilir, ama bir kez daha butona basıldığında kontrol edilebilir)
        var emailInput = $('#loginEmail');
        var emailValue = emailInput.val();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailValue === '' || !emailPattern.test(emailValue)) {
            emailInput.addClass('is-invalid');
            $('#emailError').show();  // Hata mesajını göster
            isValid = false;
        }

        // Şifre kontrolü (Boş değil)
        var passwordValue = passwordInput.val();
        if (passwordValue === '') {
            passwordInput.addClass('is-invalid');
            $('#passwordError').show();  // Hata mesajını göster
            isValid = false;
        }

        // Eğer her iki input da geçerliyse bir sonraki adıma geç
        if (isValid) {
            $('#login-step-1').hide();
            $('#login-step-2').show();
        }
    });



});
