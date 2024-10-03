$(document).ready(function () {
    let currentStep = 1;
    let correctCode = "111111"; // Doğru SMS kodu
    let timerDuration = 180; // 180 saniye timer süresi
    let timerInterval; // Timer interval
    let isFrontUploaded = false;
    let isBackUploaded = false;

    // Türkçe karakterleri destekleyen isim/soyisim doğrulama
    function validateName(name) {
        return /^[a-zA-ZçÇğĞıİöÖşŞüÜ\s]+$/.test(name);  // Türkçe karakterleri ve boşlukları kabul eden regex
    }

    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);  // Geçerli e-posta formatı
    }

    function validatePhone(phone) {
        return /^\d{10}$/.test(phone); // 10 haneli telefon numarası kontrolü
    }

    function validateInput(input, validationFn, errorMsgDiv) {
        const value = input.val();  // Input değerini al
        if (value && validationFn(value.trim())) {  // Değer boş değilse ve doğrulamadan geçiyorsa
            input.removeClass('error-border');
            errorMsgDiv.hide();
            return true;
        } else if (value) {  // Eğer kullanıcı alanı doldurduysa ve hatalıysa
            input.addClass('error-border');
            errorMsgDiv.show();
            return false;
        }
        return true;  // Eğer kullanıcı inputa hiç veri girmemişse
    }

    // İlk stepin form geçerliliğini kontrol et ve butonu etkinleştir/devre dışı bırak
    function checkFormValidity() {
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

    // Input alanından ayrıldığında (blur) validasyon yap (ilk step için)
    $('#firstNameRg, #lastNameRg, #emailRg, #phoneRg').on('blur', function () {
        checkFormValidity();
    });

    // İlk stepten ikinciye geçiş
    $('#nextButtonPrg').click(function (event) {
        event.preventDefault();
        if (checkFormValidity()) {  // İlk step doğrulama başarılıysa
            currentStep++;
            // Step 2'yi göster
            showStep(currentStep);
            updateProgressBar(currentStep);
            startTimer(); // Step 2'deki timer'ı başlat
        } else {
            alert('Lütfen form alanlarını doğru doldurun.');  // Hata mesajı
        }
    });

    // Step 2: SMS doğrulama fonksiyonları
    function validateSmsCode() {
        let smsCode = '';
        // Tüm input'lardan değerleri al ve birleştir
        $('.sms-rg-input').each(function () {
            smsCode += $(this).val();
        });

        // Tüm input'lar dolu mu diye kontrol et
        if (smsCode.length === 6) {
            // SMS doğrulama kodu '111111' ise
            if (smsCode === '111111') {
                // Doğruysa işlemleri yap
                $('.sms-rg-input').removeClass('error-border');
                $('#smsRgError').hide(); // Hata mesajını gizle
                $('#nextButtonStep2').prop('disabled', false); // Butonu aktif yap
                return true;
            } else {
                // Yanlışsa hatayı göster
                $('.sms-rg-input').addClass('error-border');
                $('#smsRgError').show(); // Hata mesajını göster
                $('#nextButtonStep2').prop('disabled', true); // Butonu devre dışı bırak
                return false;
            }
        } else {
            // Eğer 6 haneden az ise butonu devre dışı bırak
            $('#nextButtonStep2').prop('disabled', true);
            return false;
        }
    }

// SMS inputlar arasında otomatik geçiş ve geri gitme (silme)
    $('.sms-rg-input').on('input', function () {
        let $this = $(this);
        if ($this.val().length === 1) {
            $this.next('.sms-rg-input').focus(); // Bir sonraki inputa geç
        }
        validateSmsCode(); // Her input değişikliğinde doğrulama yap
    }).on('keydown', function (e) {
        if (e.key === "Backspace" && $(this).val().length === 0) {
            $(this).prev('.sms-rg-input').focus(); // Geri git
        }
    });


    // SMS doğrulaması için timer başlatma ve 180 saniye geri sayım
    function startTimer() {
        let timeLeft = timerDuration;
        timerInterval = setInterval(function () {
            timeLeft--;
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                //alert('Süre doldu, tekrar deneyin.');
                $('#nextButtonStep2').prop('disabled', true); // Timer bittiğinde butonu devre dışı bırak
            }
            $('#timerRg').text(`Tekrar gönder (${timeLeft}sn)`); // Timer'ı güncelle
        }, 1000);
    }

    // Step 2'de "Devam Et" butonuna tıklandığında 3. adıma geçiş
    $('#nextButtonStep2').click(function (event) {
        event.preventDefault();
        if (validateSmsCode()) {  // Eğer SMS kodu doğruysa
            clearInterval(timerInterval);  // Timer'ı durdur
            currentStep++;
            showStep(currentStep); // Step 3'e geç
            updateProgressBar(currentStep);
        } else {
            alert('Lütfen geçerli bir SMS kodu girin.');
        }
    });

    // Step 3: Şifre kontrolü
    function validatePasswords() {
        let password = $('#passwordInput').val();
        let confirmPassword = $('#confirmPasswordInput').val();
        let isValid = true; // İki durumu kontrol etmek için genel bir validasyon durumu

        // Şifre en az 8 karakter kontrolü (sadece passwordInput için)
        if (password.length < 8) {
            $('#passwordInput').addClass('error-border');
            $('#password1RgError').show(); // Hata mesajını göster
            isValid = false; // Hatalı olduğu için isValid false yapılır
        } else {
            $('#passwordInput').removeClass('error-border');
            $('#password1RgError').hide(); // Hata mesajını gizle
        }

        // Şifrelerin eşleşip eşleşmediğini kontrol et (sadece confirmPasswordInput için)
        if (confirmPassword.length > 0 && password !== confirmPassword) {
            $('#confirmPasswordInput').addClass('error-border');
            $('#passwordRgError').show(); // Hata mesajını göster
            isValid = false; // Hatalı olduğu için isValid false yapılır
        } else {
            $('#confirmPasswordInput').removeClass('error-border');
            $('#passwordRgError').hide(); // Hata mesajını gizle
        }

        // Eğer iki şart da sağlanıyorsa butonu aktif hale getir
        $('#nextButtonStep3').prop('disabled', !isValid);

        return isValid;
    }

// Şifre alanlarının her birine yazıldığında bu fonksiyonu çağırabilirsin
    $('#passwordInput, #confirmPasswordInput').on('blur', validatePasswords);

// Step 3'te "Devam Et" butonuna tıklandığında 4. adıma geçiş
    $('#nextButtonStep3').click(function (event) {
        event.preventDefault();
        if (validatePasswords()) {  // Şifreler eşleşiyorsa
            currentStep++;
            showStep(currentStep); // Step 4'e geç
            updateProgressBar(currentStep);
        } else {
            alert('Lütfen şifrelerin eşleştiğinden emin olun.');
        }
    });

    // 2FA switch kontrolü
    $('#twoFactorSwitch').change(function () {
        if ($(this).is(':checked')) {
            console.log("2FA aktif.");
        } else {
            console.log("2FA pasif.");
        }
    });
// Ön yüz kimlik yükleme işlemi
    $('#frontUploadBox .up-img').click(function () {
        $('#frontIDUpload').click(); // Yükleme inputunu tetikle
    });

    $('#frontIDUpload').on('change', function () {
        if (this.files && this.files[0]) {
            isFrontUploaded = true;
            const fileName = this.files[0].name; // Yüklenen dosyanın adını al
            $('#frontUploadBox .up-img').hide();
            $('#frontUploadBox .del-img').show(); // X butonunu göster
            $('#frontUploadBox label').text(fileName); // Label'e dosya adını bas
            checkUploads(); // Yüklemeyi kontrol et
        }
    });

    // Ön yüz silme işlemi
    $('#frontUploadBox .del-img').click(function () {
        $('#frontIDUpload').val(''); // Inputu temizle
        isFrontUploaded = false;
        $('#frontUploadBox .up-img').show();
        $('#frontUploadBox .del-img').hide(); // X butonunu gizle
        $('#frontUploadBox label').text('Kimlik Ön Yüzünü Yükleyiniz'); // Label'ı varsayılan haline döndür
        checkUploads(); // Yüklemeyi tekrar kontrol et
    });

    // Arka yüz kimlik yükleme işlemi
    $('#backUploadBox .up-img').click(function () {
        $('#backIDUpload').click(); // Yükleme inputunu tetikle
    });

    $('#backIDUpload').on('change', function () {
        if (this.files && this.files[0]) {
            isBackUploaded = true;
            const fileName = this.files[0].name; // Yüklenen dosyanın adını al
            $('#backUploadBox .up-img').hide();
            $('#backUploadBox .del2-img').show(); // X butonunu göster
            $('#backUploadBox label').text(fileName); // Label'e dosya adını bas
            checkUploads(); // Yüklemeyi kontrol et
        }
    });

    // Arka yüz silme işlemi
    $('#backUploadBox .del2-img').click(function () {
        $('#backIDUpload').val(''); // Inputu temizle
        isBackUploaded = false;
        $('#backUploadBox .up-img').show();
        $('#backUploadBox .del2-img').hide(); // X butonunu gizle
        $('#backUploadBox label').text('Kimlik Arka Yüzünü Yükleyiniz'); // Label'ı varsayılan haline döndür
        checkUploads(); // Yüklemeyi tekrar kontrol et
    });

    // Dosya yükleme kontrolü
    function checkUploads() {
        if (isFrontUploaded && isBackUploaded) {
            $('#finishButton').prop('disabled', false); // Eğer iki dosya da yüklendiyse butonu aktif yap
        } else {
            $('#finishButton').prop('disabled', true); // Eğer iki dosya yüklenmemişse butonu devre dışı bırak
        }
    }

    // Kaydı Tamamla butonuna tıklanıldığında 5. adımı göster
    $('#finishButton').click(function (event) {
        event.preventDefault();
        if (isFrontUploaded && isBackUploaded) {
            $('.step-container').hide();  // Tüm stepleri gizle
            $('#completedSection').show();
        }
    });

    // Geri butonu için
    $('.back-button').click(function (event) {
        event.preventDefault();
        if (currentStep > 1) {
            currentStep--; // Mevcut adımı bir geri al
            showStep(currentStep); // Bir önceki adımı göster
            updateProgressBar(currentStep); // Progress bar'ı geri al
        }
    });

    // Adım gösterme fonksiyonu
    function showStep(step) {
        $('.step-container').hide();  // Tüm stepleri gizle
        $('#step-' + step).show();    // İlgili stepi göster
    }

    // Progress barı güncelleme fonksiyonu
    function updateProgressBar(step) {

        var totalSteps = 4;
        var percentage = (step - 1) / (totalSteps - 1) * 100;
        $('.progress-line .progress-line-active').css('width', percentage + '%');
    }

    // İlk adımı başlat
    showStep(currentStep);
    updateProgressBar(currentStep);
});
