$(document).ready(function () {
    let smsToken = ''; // SMS Token'ı global olarak saklıyoruz
    let countdown = 180; // Timer için başlangıç değeri
    let timer; // Timer'ı global olarak tanımlıyoruz
    let smsCode = '';
    let smsTokenActive = true; // SMS kodunun geçerli olup olmadığını kontrol etmek için

    //GIRIS FORMS - Step 1
    let $emailInput = $('#loginEmail');
    let $passwordInput = $('#passwordInput');
    let $loginNextButton = $('#loginNextButton');
    let $emailError = $('#emailError');
    let $passwordError = $('#passwordError');
    let $baseUrl = "https://gokhan.valletbeta2.site/dashboard";

    // Çerez oluşturma fonksiyonu
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires
            + "; path=/"
            + "; domain=.valletbeta2.site" // Subdomain'ler arası paylaşım için domain ayarı
            + "; Secure"               // Sadece HTTPS üzerinden gönderilsin
            + "; SameSite=None";        // Subdomain'ler arasında paylaşım için SameSite=None ayarı
    }

    // Email doğrulama fonksiyonu
    function validateEmail() {
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test($emailInput.val())) {
            $emailError.show();
            $emailInput.addClass('error-border');
            return false;
        } else {
            $emailError.hide();
            $emailInput.removeClass('error-border');
            return true;
        }
    }

    // Şifre doğrulama fonksiyonu
    function validatePassword() {
        if ($passwordInput.val().length < 2) {
            $passwordError.show();
            $passwordInput.addClass('error-border');
            return false;
        } else {
            $passwordError.hide();
            $passwordInput.removeClass('error-border');
            return true;
        }
    }

    // Form validasyonu kontrolü
    function checkFormValidity() {
        let isEmailValid = validateEmail();
        let isPasswordValid = validatePassword();
        if (isEmailValid && isPasswordValid) {
            $loginNextButton.prop('disabled', false);
        } else {
            $loginNextButton.prop('disabled', true);
        }
    }

    // Email ve şifre alanlarına event listener ekleyin
    $emailInput.on('input', validateEmail);
    $passwordInput.on('input', function () {
        validatePassword();
        checkFormValidity();
    });

    // Devam Et butonuna tıklama işlemi (Aynı zamanda tekrar SMS gönderme işlemi de burada olacak)
    $('#loginNextButton, p.timer-text').on('click', function () {
        if (countdown <= 0 || $(this).is('#loginNextButton')) {
            let email = $emailInput.val();
            let password = $passwordInput.val();
            let hashedPassword = sha256(password); // Şifreyi hashle

            let payload = {
                email: email,
                password: hashedPassword
            };

            // AJAX isteği ile sunucuya istek gönderiyoruz
            $.ajax({
                url: "https://recep.valletbeta2.site/onbV2/login",
                method: "POST",
                headers: {
                    'WEBAPP': 'true'
                },
                data: payload,
                success: function (response) {
                    if (response.status === 'success') {
                        if (response.data.smsToken) {
                            smsToken = response.data.smsToken; // SMS token'ı sakla
                            smsTokenActive = true; // Token aktif hale geliyor
                            $('#login-step-1').hide(); // İlk adımı gizle
                            $('#login-step-2').show(); // İkinci adımı göster
                            startTimer(); // Zamanlayıcıyı başlat
                        } else {
                            setCookie('authToken', response.data.token, 7);
                            setTimeout(function () {
                                window.location.href = `${$baseUrl}/${response.data.redirect}`;
                            }, 100);
                        }
                    } else {
                        alert(response.message);
                    }
                },
                error: function () {
                    alert('Bir hata oluştu. Lütfen tekrar deneyin.');
                }
            });
        }
    });

    // SMS doğrulaması Step 2
    $('.sms-input').on('input', function () {
        let inputLength = $(this).val().length;
        let maxLength = $(this).attr('maxlength');

        if (inputLength >= maxLength) {
            $(this).next('.sms-input').focus();
        }

        checkSmsCode();
    });

    function startTimer() {
        countdown = 180; // 180 saniyelik timer
        $('p.timer-text').text(`Tekrar gönder (${countdown}sn)`); // Sayaç gösterimi
        timer = setInterval(function () {
            countdown--;
            $('p.timer-text').text(`Tekrar gönder (${countdown}sn)`); // Sayaç gösterimi
            if (countdown <= 0) {
                clearInterval(timer); // Zamanlayıcıyı durdur
                $('p.timer-text').text('Tekrar gönder').css('cursor','pointer');
                smsTokenActive = false; // SMS token süresi doldu
            }
        }, 1000);
    }

    // SMS kodunu kontrol et
    function checkSmsCode() {
        smsCode = '';
        $('.sms-input').each(function () {
            smsCode += $(this).val();
        });

        if (smsCode.length === 6 && smsTokenActive) {
            $.ajax({
                url: "https://recep.valletbeta2.site/onbV2/login/sms-validate",
                method: "POST",
                headers: {
                    'SMSTOKEN': smsToken,
                    'WEBAPP': 'true'
                },
                data: {
                    dogrulamaKodu: smsCode
                },
                success: function (response) {
                    if (response.status === 'success') {
                        setCookie('authToken', response.data.token, 7);
                        setTimeout(function () {
                            window.location.href = `${$baseUrl}/${response.data.redirect}`;
                        }, 100);
                    } else {
                        $('#smsLoginError').show();
                        $('.sms-input').addClass('is-invalid');
                    }
                },
                error: function () {
                    alert('Bir hata oluştu. Lütfen tekrar deneyin.');
                }
            });
        } else if (!smsTokenActive) {
            alert('Süre doldu, lütfen yeni bir SMS isteyin.');
        }
    }

    // Giriş Yap butonuna tıklama işlemi
    $('#loginFinishButton').on('click', checkSmsCode);
});
