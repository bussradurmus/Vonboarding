$(document).ready(function () {
    let currentStep = 1;
    let timerDuration = 180; // 180 saniye timer süresi
    let timerInterval;
    let isFrontUploaded = false;
    let isBackUploaded = false;
    let formData = new FormData(); // Form verilerini tutmak için FormData objesi
    let smsToken = ''; // SMS token'ı saklamak için
    function formatPhoneNumber(phoneNumber) {
        // Telefon numarasını +90 formatında gösterirken ortadaki rakamları gizle
        return '+90 ' + phoneNumber.slice(0, 3) + ' *** ** ' + phoneNumber.slice(-2);
    }

    // Türkçe karakterleri destekleyen isim/soyisim doğrulama
    function validateName(name) {
        return /^[a-zA-ZçÇğĞıİöÖşŞüÜ\s]+$/.test(name);
    }

    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function validatePhone(phone) {
        return /^\d{10}$/.test(phone); // 10 haneli telefon numarası kontrolü
    }

    // SHA256 ile şifre hashleme
    function hashPassword(password) {
        return sha256(password);
    }

    // Dosya türünü kontrol et
    function isValidFileType(file) {
        const validTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        return validTypes.includes(file.type);
    }

    // Kişisel Bilgiler adımındaki form geçerliliğini kontrol et
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

    // Step 2: Şifre Belirleme adımındaki şifre geçerliliğini kontrol et
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

    // Kimlik yükleme adımındaki dosya yüklemelerini kontrol et
    function checkStep3Validity() {
        if (isFrontUploaded && isBackUploaded) {
            $('#nextButtonStep3').prop('disabled', false);
        } else {
            $('#nextButtonStep3').prop('disabled', true);
        }
    }

    // FormData'da alan güncelleme (bir alan sadece bir kere olacak)
    function updateFormData(key, value) {
        if (formData.has(key)) {
            formData.delete(key);
        }
        formData.append(key, value);
    }

    // Dosya yükleme işlemleri
    $('#frontUploadBox .up-img').click(function () {
        $('#frontIDUpload').click(); // Yükleme inputunu tetikle
    });

    $('#frontIDUpload').on('change', function () {
        let file = this.files[0];
        if (file && isValidFileType(file)) {
            isFrontUploaded = true;
            const fileName = file.name;
            $('#frontUploadBox .up-img').hide();
            $('#frontUploadBox .del-img').show();
            $('#frontUploadBox label').text(fileName);
            updateFormData('userKimlikOn', file); // Kimlik ön yüzü formData'ya ekleniyor
            checkStep3Validity();
        } else {
            alert('Yalnızca JPEG, PNG veya PDF dosyaları yükleyebilirsiniz.');
        }
    });

    $('#frontUploadBox .del-img').click(function () {
        $('#frontIDUpload').val('');
        isFrontUploaded = false;
        $('#frontUploadBox .up-img').show();
        $('#frontUploadBox .del-img').hide();
        $('#frontUploadBox label').text('Kimlik Ön Yüzünü Yükleyiniz');
        formData.delete('userKimlikOn');
        checkStep3Validity();
    });

    $('#backUploadBox .up-img').click(function () {
        $('#backIDUpload').click(); // Yükleme inputunu tetikle
    });

    $('#backIDUpload').on('change', function () {
        let file = this.files[0];
        if (file && isValidFileType(file)) {
            isBackUploaded = true;
            const fileName = file.name;
            $('#backUploadBox .up-img').hide();
            $('#backUploadBox .del2-img').show();
            $('#backUploadBox label').text(fileName);
            updateFormData('userKimlikArka', file); // Kimlik arka yüzü formData'ya ekleniyor
            checkStep3Validity();
        } else {
            alert('Yalnızca JPEG, PNG veya PDF dosyaları yükleyebilirsiniz.');
        }
    });

    $('#backUploadBox .del2-img').click(function () {
        $('#backIDUpload').val('');
        isBackUploaded = false;
        $('#backUploadBox .up-img').show();
        $('#backUploadBox .del2-img').hide();
        $('#backUploadBox label').text('Kimlik Arka Yüzünü Yükleyiniz');
        formData.delete('userKimlikArka');
        checkStep3Validity();
    });

    // SMS inputlar arasında otomatik geçiş ve geri gitme
    $('.sms-rg-input').on('input', function () {
        let $this = $(this);
        if ($this.val().length === 1) {
            $this.next('.sms-rg-input').focus(); // Sonraki inputa geçiş
        }
    }).on('keydown', function (e) {
        if (e.key === "Backspace" && $(this).val().length === 0) {
            $(this).prev('.sms-rg-input').focus(); // Önceki inputa geçiş
        }
    });

    // SMS doğrulama adımındaki kod geçerliliğini kontrol et
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

    // Step 1'de "Devam Et" butonuna basıldığında
    $('#nextButtonPrg').click(function (event) {
        event.preventDefault();
        if (checkStep1Validity()) {
            // Form verilerini güncelle
            updateFormData('name', $('#firstNameRg').val());
            updateFormData('surname', $('#lastNameRg').val());
            updateFormData('email', $('#emailRg').val());

            // Telefon numarasını al ve FormData'ya ekle
            let phoneNumber = $('#phoneRg').val(); // Input'tan telefon numarasını al
            updateFormData('gsmNo', phoneNumber);

            // Telefon numarasını formatla
            let formattedPhoneNumber = formatPhoneNumber(phoneNumber);

            // Dinamik olarak user-phone alanına formatlanmış numarayı yazdır
            $('.user-phone').text(formattedPhoneNumber);

            // Sonraki adıma geç
            currentStep = 2;
            showStep(currentStep);
            updateProgressBar(currentStep);
        }
    });


    // Step 2'de şifreyi doğrula ve formData'ya ekle
    $('#nextButtonStep2').click(function (event) {
        event.preventDefault();
        if (checkStep2Validity()) {
            const passwordHash = hashPassword($('#passwordInput').val());
            updateFormData('password', passwordHash);
            updateFormData('password2', passwordHash);

            // 2FA durumu kontrolü (SMS doğrulama)
            let smsDogrulama = $('#twoFactorSwitch').is(':checked') ? '1' : '0';
            updateFormData('smsDogrulama', smsDogrulama);

            currentStep = 3;
            showStep(currentStep);
            updateProgressBar(currentStep);
        }
    });

    // Step 3'te "Devam Et" butonuna basıldığında
    $('#nextButtonStep3').click(function (event) {
        event.preventDefault();
        currentStep = 4;
        showStep(currentStep);
        updateProgressBar(currentStep);
        startTimer();

        // SMS doğrulaması için istek at
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
                    // Hata mesajını toast içine yazdırıyoruz
                    $('#errorToast .toast-body').text(response.message);

                    // Toast'ı gösteriyoruz
                    var toast = new bootstrap.Toast($('#errorToast'));
                    toast.show();
                } else {
                    console.log('SMS gönderildi, kodu girin.');
                    smsToken = response.data.smsToken;
                }
            },
            error: function(xhr, status, error) {
                const response = xhr.responseJSON;
                if (response && response.message) {
                    // Hata mesajını toast içine yazdırıyoruz
                    $('#errorToast .toast-body').text(response.message);

                    // Toast'ı gösteriyoruz
                    var toast = new bootstrap.Toast($('#errorToast'));
                    toast.show();
                } else {
                    $('#errorToast .toast-body').text('Bir hata oluştu. Lütfen tekrar deneyin.');

                    // Toast'ı gösteriyoruz
                    var toast = new bootstrap.Toast($('#errorToast'));
                    toast.show();
                }
            }
        });


    });

    // Step 4'te SMS kodunu doğrula ve formData'ya ekle
    $('#finishButton').click(function (event) {
        event.preventDefault();
        let smsCode = validateSmsCode(); // Kullanıcı tarafından girilen SMS kodunu al
        if (smsCode) {
            updateFormData('dogrulamaKodu', smsCode); // SMS kodunu formData'ya ekle

            // Kayıt verilerini POST et
            $.ajax({
                url: 'https://recep.valletbeta2.site/onbV2/register/kayitAction',
                type: 'POST',
                data: formData,
                headers: {
                    'WEBAPP': 'true',
                    'SMSTOKEN': smsToken // SMSTOKEN ekleniyor
                },
                processData: false, // FormData için gerekli
                contentType: false, // FormData için gerekli
                success: function (response) {
                    $('.step-container').hide(); // Tüm stepleri gizle
                    $('#completedSection').show();
                },
                error: function (response) {
                    // Toast kullanarak hatayı göster
                    let errorMessage = response.responseJSON && response.responseJSON.message ? response.responseJSON.message : 'Bir hata oluştu. Lütfen tekrar deneyin.';

                    $('#errorToast .toast-body').text(errorMessage); // Hata mesajını toast içine yaz
                    var toast = new bootstrap.Toast($('#errorToast')); // Toast'ı başlat
                    toast.show(); // Toast'ı göster
                }
            });
        } else {
            // Geçersiz SMS kodu hatası için de toast gösterelim
            $('#errorToast .toast-body').text('Lütfen geçerli bir SMS kodu girin.');
            var toast = new bootstrap.Toast($('#errorToast'));
            toast.show();
        }
    });


    // Step gösterme fonksiyonu
    function showStep(step) {
        $('.step-container').hide();
        $('#step-' + step).show();
    }

    // Progress barı güncelleme fonksiyonu
    function updateProgressBar(step) {
        let totalSteps = 4;
        let percentage = (step - 1) / (totalSteps - 1) * 100;
        $('.progress-line .progress-line-active').css('width', percentage + '%');
    }

    // Timer başlatma
    function startTimer() {
        let timeLeft = timerDuration;
        timerInterval = setInterval(function () {
            timeLeft--;
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                $('#finishButton').prop('disabled', true);
            }
            $('#timerRg').text(`Tekrar gönder (${timeLeft}sn)`);
        }, 1000);
    }

    // Geri dön butonları için işlev
    $('.back-button').click(function (event) {
        event.preventDefault();
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
            updateProgressBar(currentStep);
        }
    });

    // Adım 1: Kişisel bilgiler kontrolü
    $('#firstNameRg, #lastNameRg, #emailRg, #phoneRg').on('blur', checkStep1Validity);

    // Adım 2: Şifre kontrolü
    $('#passwordInput, #confirmPasswordInput').on('blur', checkStep2Validity);

    // Adım 4: SMS kodu kontrolü
    $('.sms-rg-input').on('input', validateSmsCode);

    // İlk adımı başlat
    showStep(currentStep);
    updateProgressBar(currentStep);
});
