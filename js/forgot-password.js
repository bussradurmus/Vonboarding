$(document).ready(function() {
    let smsToken = '';
    let email = '';

    // Email formatını kontrol eden fonksiyon
    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    // 1. Step Email Validation
    $('#fpEmail').on('blur', function() {
        email = $(this).val();

        if (validateEmail(email)) {
            $('#fpNextButton').prop('disabled', false); // Butonu aktif et
            $('#emailErrorFp').hide(); // Error mesajını gizle
            $(this).removeClass('error-border'); // Error border kaldır
        } else {
            $('#emailErrorFp').show(); // Error mesajını göster
            $(this).addClass('error-border'); // Error border ekle
            $('#fpNextButton').prop('disabled', true); // Butonu pasif yap
        }
    });

    $('#fpNextButton').click(function() {
        let email = $('#fpEmail').val();

        if (validateEmail(email)) {
            $.ajax({
                url: 'https://recep.valletbeta2.site/onbV2/login/forgotPass',
                type: 'POST',
                data: { email: email },
                headers: {
                    'WEBAPP': 'true'
                },
                success: function(response) {
                    if (response.status === "error") {
                        $('#emailErrorFp').text(response.message).show();
                        $('#fpEmail').addClass('error-border');
                    } else {
                        smsToken = response.data.smsToken;
                        $('#fp-step-1').addClass('d-none');
                        $('#fp-step-2').removeClass('d-none');
                        startTimer(); // Zamanlayıcıyı başlat
                    }
                }
            });
        }
    });

    // 2. Step SMS Verification
    $('.sms-input').on('input', function() {
        let smsCode = '';
        $('.sms-input').each(function() {
            smsCode += $(this).val(); // Tüm inputları al
        });

        if (smsCode.length === 6) {
            $('#fpNextButton2').prop('disabled', false); // Butonu aktif et
        } else {
            $('#fpNextButton2').prop('disabled', true); // Butonu pasif yap
        }
    });

    // İleri ve geri otomatik geçiş
    $('.sms-input').on('input', function(e) {
        let $input = $(this);
        let nextInput = $input.next('.sms-input'); // Bir sonraki input
        let prevInput = $input.prev('.sms-input'); // Bir önceki input

        if ($input.val().length === 1 && nextInput.length) {
            nextInput.focus(); // Bir karakter girildiğinde sonraki inputa geç
        } else if (e.key === "Backspace" && $input.val().length === 0 && prevInput.length) {
            prevInput.focus(); // Geri silme ile önceki inputa geç
        }
    });

    $('#fpNextButton2').click(function() {
        let smsCode = '';
        $('.sms-input').each(function() {
            smsCode += $(this).val();
        });

        // SMS kodu doğrulama
        if (smsCode.length !== 6 || !/^\d+$/.test(smsCode)) {
            $('#smsLoginErrorFp').text('Lütfen 6 haneli geçerli bir SMS kodu girin.').show();
            $('.sms-input').addClass('error-border');
            return;
        }

        // dogrulamaKodu'nu string olarak gönderiyoruz
        const smsData = {
            dogrulamaKodu: smsCode  // Değer string olarak ayarlandı
        };

        $.ajax({
            url: 'https://recep.valletbeta2.site/onbV2/login/forgotPassSms',
            type: 'POST',
            data: JSON.stringify(smsData), // JSON formatında string gönderiliyor
            contentType: 'application/json',  // İçerik türü JSON olarak ayarlandı
            dataType: 'json',
            headers: {
                'WEBAPP': 'true',
                'SMSTOKEN': smsToken
            },
            success: function(response) {
                if (response.status === "error") {
                    $('#smsLoginErrorFp').text(response.message).show();
                    $('.sms-input').addClass('error-border');
                } else {
                    $('#fp-step-2').addClass('d-none');
                    $('#fp-step-3').removeClass('d-none');
                }
            },
            error: function(xhr, status, error) {
                console.error('Hata Detayları:', xhr.responseText);
                if (xhr.status === 500) {
                    $('#smsLoginErrorFp').text('Sunucu hatası oluştu. Lütfen daha sonra tekrar deneyin.').show();
                } else {
                    $('#smsLoginErrorFp').text('Bir hata oluştu. Lütfen tekrar deneyin.').show();
                }
                $('.sms-input').addClass('error-border');
            }
        });
    });




    // SMS inputları temizlenince hata mesajlarını kaldır
    $('.sms-input').on('input', function() {
        $('#smsLoginErrorFp').hide();
        $('.sms-input').removeClass('error-border');
    });

    // Timer başlatma fonksiyonu
    function startTimer() {
        let timeLeft = 180;
        $('#fpTimer').text('Tekrar gönder (' + timeLeft + 'sn)').css('cursor', 'default');
        $('#fpTimer').prop('disabled', true); // Timer çalışırken tıklanamaz
        $('#fpTimer').off('click'); // Timer sırasında tıklanmayı devre dışı bırak

        timer = setInterval(function() {
            timeLeft--;
            $('#fpTimer').text('Tekrar gönder (' + timeLeft + 'sn)');

            if (timeLeft <= 0) {
                clearInterval(timer);
                $('#fpTimer').text('Tekrar gönder').css('cursor', 'pointer'); // Timer bittikten sonra cursor pointer yap
                $('#fpTimer').prop('disabled', false); // Tıklanabilir hale getir

                // Timer sona erdiğinde tekrar gönderme fonksiyonunu aktif et
                $('#fpTimer').on('click', function() {
                    startTimer(); // Tekrar gönderme işlemi başlatılınca timerı tekrar başlatabilirsin
                    $.ajax({
                        url: 'https://recep.valletbeta2.site/onbV2/login/forgotPass',
                        type: 'POST',
                        data: { email: email },
                        headers: {
                            'WEBAPP': 'true'
                        },
                        success: function(response) {
                            if (response.status === "error") {
                                $('#emailErrorFp').text(response.message).show();
                                $('#fpEmail').addClass('error-border');
                            } else {
                                smsToken = response.data.smsToken;
                                $('#fp-step-1').addClass('d-none');
                                $('#fp-step-2').removeClass('d-none');
                                startTimer(); // Zamanlayıcıyı başlat
                            }
                        }
                    });
                });
            }
        }, 1000);
    }
});
