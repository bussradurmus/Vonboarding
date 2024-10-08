$(document).ready(function () {
    let smsToken = ''; // SMS Token'ı global olarak saklıyoruz

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


    // Çerez okuma fonksiyonu
    function getCookie(name) {
        let nameEQ = name + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Çerez silme fonksiyonu
    function deleteCookie(name) {
        document.cookie = name + '=; Max-Age=-99999999;';
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

    // Devam Et butonuna tıklama işlemi
    $('#loginNextButton').on('click', async function () {
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
                        $('#login-step-1').hide(); // İlk adımı gizle
                        $('#login-step-2').show(); // İkinci adımı göster
                        startTimer(); // Zamanlayıcıyı başlat
                    } else {
                        // Token'ı çerezde sakla (örneğin 7 gün boyunca)
                        setCookie('authToken', response.data.token, 7);
                        // Başarılı giriş yapıldığında panele yönlendirme
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

    let countdown = 180;
    let smsCode = '';

    function startTimer() {
        let timer = setInterval(function () {
            countdown--;
            $('p.timer-text').text(`Tekrar gönder (${countdown}sn)`); // Sayacın görseli
            if (countdown <= 0) {
                clearInterval(timer);
                $('p.timer-text').text('Tekrar gönder');
                $('#loginFinishButton').prop('disabled', true);
            }
        }, 1000);
    }

    // SMS kodunu kontrol et
    function checkSmsCode() {
        smsCode = '';
        $('.sms-input').each(function () {
            smsCode += $(this).val();
        });

        if (smsCode.length === 6) {
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
                        // Token'ı çerezde sakla
                        setCookie('authToken', response.data.token, 7);

                        // Başarılı SMS doğrulamasından sonra panele yönlendirme
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
        }
    }

    // Giriş Yap butonuna tıklama işlemi
    $('#loginFinishButton').on('click', checkSmsCode);
});
