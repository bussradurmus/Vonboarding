$(document).ready(function () {
    //GIRIS FORMS - Step 1
    var $emailInput = $('#loginEmail');
    var $passwordInput = $('#passwordInput');
    var $emailError = $('#emailError');
    var $passwordError = $('#passwordError');
    var $loginNextButton = $('#loginNextButton');

    // Email doğrulama fonksiyonu - Step 1
    function validateEmail() {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test($emailInput.val())) {
            $emailError.show();
            $emailInput.addClass('error-border');  // Hatalı e-posta olduğunda sınıf ekle
            return false;
        } else {
            $emailError.hide();
            $emailInput.removeClass('error-border');  // Geçerli e-posta olduğunda sınıfı kaldır
            return true;
        }
    }


    // Şifre doğrulama fonksiyonu - Step 1
    function validatePassword() {
        if ($passwordInput.val().length < 2) {
            $passwordError.show();
            $passwordInput.css('border-color', 'red');
            return false;
        } else {
            $passwordError.hide();
            $passwordInput.css('border-color', '');
            return true;
        }
    }

    // Form validasyonu kontrolü - Step 1
    function checkFormValidity() {
        var isEmailValid = validateEmail(); // Email kontrolü
        var isPasswordValid = validatePassword(); // Şifre kontrolü

        // Email hatalıysa şifreyi kontrol etme, sadece email hatasını göster
        if (!isEmailValid) {
            $loginNextButton.prop('disabled', true);
            return; // E-mail hatalıysa, şifre doğrulaması yapılmaz
        }

        // Şifre hatalıysa sadece şifre hatasını göster
        if (!isPasswordValid) {
            $loginNextButton.prop('disabled', true);
            return;
        }

        // Her iki alan da geçerliyse butonu aktif yap
        if (isEmailValid && isPasswordValid) {
            $loginNextButton.prop('disabled', false);
        }
    }

    // Email ve şifre input'larına event listener - Step 1
    $emailInput.on('input', function() {
        validateEmail();
        //checkFormValidity();
    });

    $passwordInput.on('input', function() {
        validatePassword();
        checkFormValidity();
    });

    // Step 2 - SMS inputlar arasında otomatik geçiş
    $('.sms-input').on('input', function () {
        var inputLength = $(this).val().length;
        var maxLength = $(this).attr('maxlength');

        if (inputLength >= maxLength) {
            $(this).next('.sms-input').focus();  // Bir sonraki inputa odaklan
        }

        // Kullanıcı ilk inputa yazmaya başladığında tüm kırmızı border ve hata mesajını temizle
        if ($('.sms-input').first().val().length === 1) {
            $('.sms-input').removeClass('is-invalid'); // Tüm inputlardan kırmızı borderı kaldır
            $('#smsLoginError').hide(); // Hata mesajını gizle
        }

        checkSmsCode(); // Her inputa giriş yapıldığında SMS kodu yeniden kontrol edilir
    });

    // Geri silme işlemi sırasında otomatik olarak önceki inputa odaklanma
    $('.sms-input').on('keydown', function (e) {
        if (e.key === 'Backspace' && $(this).val().length === 0) {
            $(this).prev('.sms-input').focus();  // Bir önceki inputa geri odaklan
        }
    });

    let timer;
    let countdown = 180; // 180 saniye
    let smsCode = ''; // Kullanıcının girdiği SMS kodunu toplamak için

    // Step 2 açıldığında zamanlayıcı başlar
    function startTimer() {
        timer = setInterval(function () {
            countdown--;
            $('p.timer-text').text(`Tekrar gönder (${countdown}sn)`);
            if (countdown <= 0) {
                clearInterval(timer);
                $('p.timer-text').text('Tekrar gönder');
                $('#loginFinishButton').prop('disabled', true); // Zaman dolduğunda buton devre dışı
            }
        }, 1000);
    }

    $('#loginNextButton').on('click', function () {
        $('#login-step-1').hide();
        // Step 2 açıldığında zamanlayıcı başlat
        $('#login-step-2').show(function () {
            startTimer();
        });
    });

    // SMS kodunu kontrol et - Step 2
    function checkSmsCode() {
        smsCode = ''; // Kodları sıfırla
        $('.sms-input').each(function () {
            smsCode += $(this).val(); // Her inputun değerini toplar
        });

        if (smsCode.length === 6) { // Eğer tüm inputlar doluysa
            if (smsCode === '111111') {
                $('.sms-input').removeClass('is-invalid'); // Hatalı değil
                $('#smsLoginError').hide(); // Hata mesajını gizle
                $('#loginFinishButton').prop('disabled', false); // Butonu etkinleştir
            } else {
                $('.sms-input').addClass('is-invalid'); // Tüm inputları kırmızı yap
                $('#smsLoginError').show(); // Hata mesajını göster
                $('#loginFinishButton').prop('disabled', true); // Butonu devre dışı bırak
            }
        } else {
            $('#loginFinishButton').prop('disabled', true); // Tüm alanlar dolmadan butonu devre dışı bırak
        }
    }

    // Giriş butonuna tıklayınca yönlendirme - Step 2
    $('#loginFinishButton').on('click', function () {
        if (smsCode === '111111') {
            window.location.href = "https://busra.valletbeta2.site/Vonboarding/"; // Anasayfaya yönlendirme
        }
    });
});
