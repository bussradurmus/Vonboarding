$(document).ready(function () {
    let currentStep = 1;
    let timerDuration = 180; // 180 saniye timer süresi
    let timerInterval; // Timer'ı tutmak için
    let isFrontUploaded = false;
    let isBackUploaded = false;
    let formData = new FormData(); // Form verilerini tutmak için FormData objesi
    let smsToken = ''; // SMS token'ı saklamak için

    function formatPhoneNumber(phoneNumber) {
        return '+90 ' + phoneNumber.slice(0, 3) + ' *** ** ' + phoneNumber.slice(-2);
    }

    function validateName(name) {
        return /^[a-zA-ZçÇğĞıİöÖşŞüÜ\s]+$/.test(name);
    }

    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function validatePhone(phone) {
        return /^\d{10}$/.test(phone);
    }

    function hashPassword(password) {
        return sha256(password);
    }

    function isValidFileType(file) {
        const validTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        return validTypes.includes(file.type);
    }

    function checkStep1Validity() {
        const isFirstNameValid = validateInput($('#firstNameRg'), validateName, $('#firstNameRgError'));
        const isLastNameValid = validateInput($('#lastNameRg'), validateName, $('#lastNameRgError'));
        const isEmailValid = validateInput($('#emailRg'), validateEmail, $('#emailRgError'));
        const isPhoneValid = validateInput($('#phoneRg'), validatePhone, $('#phoneRgError'));

        if (isFirstNameValid && isLastNameValid && isEmailValid && isPhoneValid) {
            $('#nextButtonPrg').prop('disabled', false);
            return true;
        } else {
            $('#nextButtonPrg').prop('disabled', true);
            return false;
        }
    }

    function validateInput(input, validationFn, errorMsgDiv) {
        const value = input.val();
        if (value && validationFn(value.trim())) {
            input.removeClass('error-border');
            errorMsgDiv.hide();
            return true;
        } else if (value) {
            input.addClass('error-border');
            errorMsgDiv.show();
            return false;
        }
        return true;
    }

    function checkStep2Validity() {
        let password = $('#passwordInput').val();
        let confirmPassword = $('#confirmPasswordInput').val();
        let isValid = true;

        if (password.length < 8) {
            $('#passwordInput').addClass('error-border');
            $('#password1RgError').show();
            isValid = false;
        } else {
            $('#passwordInput').removeClass('error-border');
            $('#password1RgError').hide();
        }

        if (confirmPassword.length > 0 && password !== confirmPassword) {
            $('#confirmPasswordInput').addClass('error-border');
            $('#passwordRgError').show();
            isValid = false;
        } else {
            $('#confirmPasswordInput').removeClass('error-border');
            $('#passwordRgError').hide();
        }

        $('#nextButtonStep2').prop('disabled', !isValid);
        return isValid;
    }

    function checkStep3Validity() {
        if (isFrontUploaded && isBackUploaded) {
            $('#nextButtonStep3').prop('disabled', false);
        } else {
            $('#nextButtonStep3').prop('disabled', true);
        }
    }

    function updateFormData(key, value) {
        if (formData.has(key)) {
            formData.delete(key);
        }
        formData.append(key, value);
    }

    // Geri Butonu İçin Tıklama Olayı
    $('.back-button').click(function () {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
            updateProgressBar(currentStep);

            // Eğer 4. adımdan geri dönülüyorsa, timer'ı durdurun
            if (currentStep === 3) {
                clearInterval(timerInterval);
                $('#timerRg').text('Tekrar gönder (180sn)').css('cursor', 'default');
                $('#finishButton').prop('disabled', true);
            }
        }
    });

    // Kutuya tıklama olayını bağla
    function bindFrontIdCardClick() {
        $('#frontIdCard').on('click.upload', function () {
            $('#frontIDUpload').click();
        });
    }

    // Kutuya tıklama olayını kaldır
    function unbindFrontIdCardClick() {
        $('#frontIdCard').off('click.upload');
    }

    // Sayfa yüklendiğinde tıklama olayını bağla
    bindFrontIdCardClick();

    // Dosya seçildiğinde
    $('#frontIDUpload').on('change', function (event) {
        event.stopPropagation();
        let file = this.files[0];
        if (file && isValidFileType(file)) {
            isFrontUploaded = true;
            const fileName = file.name;
            $('#frontUploadBox .up-img').hide();
            $('#frontUploadBox .del-img').show();
            $('#frontUploadBox label').text(fileName);
            updateFormData('userKimlikOn', file);
            checkStep3Validity();

            // Dosya yüklendikten sonra tıklama olayını kaldır
            unbindFrontIdCardClick();
            // İsteğe bağlı: Kutuya 'disabled' sınıfı ekleyerek stil değişikliği yapabilirsiniz
            $('#frontIdCard').addClass('disabled');
        } else {
            alert('Yalnızca JPEG, PNG veya PDF dosyaları yükleyebilirsiniz.');
        }
    });

    // Dosya seçme input'una tıklanınca olayın yukarı yayılmasını engelle
    $('#frontIDUpload').click(function(event) {
        event.stopPropagation();
    });

    // Silme ikonuna tıklayınca
    $('#frontUploadBox .del-img').click(function (event) {
        event.stopPropagation();
        $('#frontIDUpload').val('');
        isFrontUploaded = false;
        $('#frontUploadBox .up-img').show();
        $('#frontUploadBox .del-img').hide();
        $('#frontUploadBox label').text('Kimlik Ön Yüzünü Yükleyiniz');
        formData.delete('userKimlikOn');
        checkStep3Validity();

        // Dosya silindikten sonra tıklama olayını tekrar bağla
        bindFrontIdCardClick();
        // İsteğe bağlı: Kutuya 'disabled' sınıfını kaldırarak stil değişikliğini geri alabilirsiniz
        $('#frontIdCard').removeClass('disabled');
    });
// Arka Yüz için fonksiyonlar ve olaylar
    function bindBackIdCardClick() {
        $('#backIdCard').on('click.upload', function () {
            $('#backIDUpload').click();
        });
    }

    function unbindBackIdCardClick() {
        $('#backIdCard').off('click.upload');
    }

// Sayfa yüklendiğinde tıklama olayını bağla
    bindBackIdCardClick();

// Dosya seçildiğinde
    $('#backIDUpload').on('change', function (event) {
        event.stopPropagation();
        let file = this.files[0];
        if (file && isValidFileType(file)) {
            isBackUploaded = true;
            const fileName = file.name;
            $('#backUploadBox .up-img').hide();
            $('#backUploadBox .del2-img').show();
            $('#backUploadBox label').text(fileName);
            updateFormData('userKimlikArka', file);
            checkStep3Validity();

            // Dosya yüklendikten sonra tıklama olayını kaldır
            unbindBackIdCardClick();
            // Kutuya 'disabled' sınıfı ekleyerek stil değişikliği yapabilirsiniz
            $('#backIdCard').addClass('disabled');
        } else {
            alert('Yalnızca JPEG, PNG veya PDF dosyaları yükleyebilirsiniz.');
        }
    });

// Dosya seçme input'una tıklanınca olayın yukarı yayılmasını engelle
    $('#backIDUpload').click(function(event) {
        event.stopPropagation();
    });

// Silme ikonuna tıklayınca
    $('#backUploadBox .del2-img').click(function (event) {
        event.stopPropagation();
        $('#backIDUpload').val('');
        isBackUploaded = false;
        $('#backUploadBox .up-img').show();
        $('#backUploadBox .del2-img').hide();
        $('#backUploadBox label').text('Kimlik Arka Yüzünü Yükleyiniz');
        formData.delete('userKimlikArka');
        checkStep3Validity();

        // Dosya silindikten sonra tıklama olayını tekrar bağla
        bindBackIdCardClick();
        // 'disabled' sınıfını kaldırarak kutuyu tekrar tıklanabilir hale getiriyoruz
        $('#backIdCard').removeClass('disabled');
    });

    $('.sms-rg-input').on('input', function () {
        let $this = $(this);
        if ($this.val().length === 1) {
            $this.next('.sms-rg-input').focus();
        }
    }).on('keydown', function (e) {
        if (e.key === "Backspace" && $(this).val().length === 0) {
            $(this).prev('.sms-rg-input').focus();
        }
    });

    function validateSmsCode() {
        let smsCode = '';
        $('.sms-rg-input').each(function () {
            smsCode += $(this).val();
        });

        if (smsCode.length === 6) {
            $('#finishButton').prop('disabled', false);
            return smsCode;
        } else {
            $('#finishButton').prop('disabled', true);
            return false;
        }
    }

    $('#nextButtonPrg').click(function (event) {
        event.preventDefault();
        if (checkStep1Validity()) {
            updateFormData('name', $('#firstNameRg').val());
            updateFormData('surname', $('#lastNameRg').val());
            updateFormData('email', $('#emailRg').val());

            let phoneNumber = $('#phoneRg').val();
            updateFormData('gsmNo', phoneNumber);
            let formattedPhoneNumber = formatPhoneNumber(phoneNumber);
            $('.user-phone').text(formattedPhoneNumber);

            const smsData = {
                gsmNo: $('#phoneRg').val(),
                email: $('#emailRg').val()
            };

            $.ajax({
                url: 'https://recep.valletbeta2.site/onbV2/register/kayitSmsDogrulama',
                type: 'POST',
                data: JSON.stringify(smsData),
                headers: {
                    'WEBAPP': 'true'
                },
                contentType: 'application/json',
                success: function (response) {
                    if (response.status === "error") {
                        $('#phoneRgError').text(response.message).show();
                        $('#phoneRg').addClass('error-border');
                    } else {
                        console.log('SMS gönderildi, kodu girin.');
                        smsToken = response.data.smsToken;
                        currentStep = 2;
                        showStep(currentStep);
                        updateProgressBar(currentStep);
                    }
                }
            });
        }
    });

    $('#nextButtonStep2').click(function (event) {
        event.preventDefault();
        if (checkStep2Validity()) {
            const passwordHash = hashPassword($('#passwordInput').val());
            updateFormData('password', passwordHash);
            updateFormData('password2', passwordHash);

            let smsDogrulama = $('#twoFactorSwitch').is(':checked') ? '1' : '0';
            updateFormData('smsDogrulama', smsDogrulama);

            currentStep = 3;
            showStep(currentStep);
            updateProgressBar(currentStep);
        }
    });

    $('#nextButtonStep3').click(function (event) {
        event.preventDefault();
        currentStep = 4;
        showStep(currentStep);
        updateProgressBar(currentStep);
        startTimer();
    });

    $('#finishButton').click(function (event) {
        event.preventDefault();
        let smsCode = validateSmsCode();
        if (smsCode) {
            updateFormData('dogrulamaKodu', smsCode);
            $.ajax({
                url: 'https://recep.valletbeta2.site/onbV2/register/kayitAction',
                type: 'POST',
                data: formData,
                headers: {
                    'WEBAPP': 'true',
                    'SMSTOKEN': smsToken
                },
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status === "error") {
                        // Hata durumunda mesajı '#smsRgError' div'ine yazdır ve göster
                        if (response.message === "Hatalı Token.") {
                            $('#smsRgError').text("SMS kodu hatalı.").show();
                            $('.sms-rg-input').addClass('error-border');
                        } else {
                            $('#smsRgError').text(response.message).show();
                            $('.sms-rg-input').addClass('error-border');
                        }
                        // Gerekirse input alanlarını da hata durumuna getirebilirsiniz
                        $('.sms-rg-input').addClass('error-border');
                    } else {
                        $('.step-container').hide();
                        $('#completedSection').show();
                    }
                },
                error: function (xhr, status, error) {
                    // AJAX isteği başarısız olursa
                    $('#smsRgError').text('Bir hata oluştu. Lütfen tekrar deneyin.').show();
                    $('.sms-rg-input').addClass('error-border');
                }
            });
        } else {
            $('#smsRgError').text('SMS kodunu eksiksiz giriniz.').show();
            $('.sms-rg-input').addClass('error-border');
        }
    });


    function startTimer() {
        let timeLeft = timerDuration;
        clearInterval(timerInterval); // Eski timer'ı durdur
        $('#finishButton').prop('disabled', true); // Timer başladığında finish butonunu devre dışı bırak
        timerInterval = setInterval(function () {
            timeLeft--;
            $('#timerRg').text(`Tekrar gönder (${timeLeft}sn)`); // Sayaç gösterimi
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                $('#timerRg').text('Tekrar gönder').css('cursor', 'pointer'); // Sayaç bittiğinde buton görünümü değiştir
                $('#finishButton').prop('disabled', false); // Timer bittiğinde finish butonunu tekrar aktif hale getir
            }
        }, 1000);
    }

    $('#timerRg').click(function () {
        if ($('#timerRg').text() === 'Tekrar gönder') { // Timer bittiyse tekrar gönder tıklanabilir olmalı
            const smsData = {
                gsmNo: $('#phoneRg').val(),
                email: $('#emailRg').val()
            };

            $.ajax({
                url: 'https://recep.valletbeta2.site/onbV2/register/kayitSmsDogrulama',
                type: 'POST',
                data: JSON.stringify(smsData),
                headers: {
                    'WEBAPP': 'true'
                },
                contentType: 'application/json',
                success: function (response) {
                    if (response.status === "error") {
                        $('#phoneRgError').text(response.message).show();
                        $('#phoneRg').addClass('error-border');
                    } else {
                        console.log('SMS yeniden gönderildi.');
                        smsToken = response.data.smsToken;
                        startTimer(); // Timer'ı yeniden başlat
                    }
                }
            });
        }
    });

    function showStep(step) {
        $('.step-container').hide();
        $('#step-' + step).show();
    }

    function updateProgressBar(step) {
        let totalSteps = 4;
        let percentage = (step - 1) / (totalSteps - 1) * 100;
        $('.progress-line .progress-line-active').css('width', percentage + '%');
    }

    $('#firstNameRg, #lastNameRg, #emailRg, #phoneRg').on('blur', checkStep1Validity);
    $('#phoneRg').on('input', function () {
        let phoneInput = $(this);
        let phoneValue = phoneInput.val();

        // Hata mesajını ve hata stilini kaldır
        $('#phoneRgError').hide();
        phoneInput.removeClass('error-border');

        // Eğer telefon numarası 10 haneye ulaştıysa validasyonu yap
        if (phoneValue.length === 10) {
            // Validasyonu tekrar yap
            checkStep1Validity();
        } else {
            // Telefon numarası 10 haneden az ise "Devam Et" butonunu devre dışı bırak
            $('#nextButtonPrg').prop('disabled', true);
        }
    });
    $('#passwordInput, #confirmPasswordInput').on('blur', checkStep2Validity);
    $('.sms-rg-input').on('input', validateSmsCode);
    showStep(currentStep);
    updateProgressBar(currentStep);
});
