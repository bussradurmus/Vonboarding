$(document).ready(function() {
    // Form elementleri
    const firstName = $('#firstNameOk');
    const lastName = $('#lastNameOk');
    const email = $('#emailOk');
    const phone = $('#phoneOk');
    const companyName = $('#companyName')
    const nextButton = $('#nextButtonPrg');
    const step2 = $('#step-2');

    // Regex desenleri
    const nameRegex = /^[a-zA-ZğüşöçİĞÜŞÖÇ]+$/;
    const phoneRegex = /^[0-9]{10}$/; // Türkiye telefon formatı
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zAZ0-9.-]+\.[a-zA-Z]{2,}$/;

    // Geçerli giriş kontrol fonksiyonu
    function validateInput(inputElement, regex, errorElement) {
        if (!regex.test(inputElement.val())) {
            errorElement.show();
        } else {
            errorElement.hide();
        }
    }

    // Geçerli giriş kontrolü için her input alanına 'input' event'ini ekleyelim
    firstName.on('input', function() {
        validateInput(firstName, nameRegex, $('#firstNameOkError'));
        toggleNextButton();
    });

    lastName.on('input', function() {
        validateInput(lastName, nameRegex, $('#lastNameOkError'));
        toggleNextButton();
    });

    companyName.on('input', function() {
        validateInput(companyName, nameRegex, $('#companyNameError'));
        toggleNextButton();
    });

    email.on('input', function() {
        validateInput(email, emailRegex, $('#emailOkError'));
        toggleNextButton();
    });

    phone.on('input', function() {
        validateInput(phone, phoneRegex, $('#phoneOkError'));
        toggleNextButton();
    });

    // Tüm alanlar geçerliyse "Devam Et" butonunu aktif et
    function toggleNextButton() {
        if (
            nameRegex.test(firstName.val()) &&
            nameRegex.test(lastName.val()) &&
            nameRegex.test(companyName.val()) &&
            emailRegex.test(email.val()) &&
            phoneRegex.test(phone.val())
        ) {
            nextButton.prop('disabled', false);
        } else {
            nextButton.prop('disabled', true);
        }
    }

    // Başlangıçta buton durumunu kontrol et
    toggleNextButton();

    // "Devam Et" butonuna tıklanırsa, Step-2'yi göster
    nextButton.on('click', function() {
        if (!nextButton.prop('disabled')) {
            $('#step-1').hide();
            step2.show();
        }
    });
});
