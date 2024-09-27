$(document).ready(function () {
    const passwordField = $("#passwordModal");
    const eyeIcon = $('#eyeIcon');
    let emailField = $('#emailModal');
    const submitButton = $("#submitButton");
    const inputs = $('#otp input');
    const submitButtonSms = $('#submitButtonSms');
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    let currentStep = 1;

    // Toggle Password Visibility
    $("#togglePassword").on('click', function () {
        let type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);

        // Change the icon based on password visibility
        if (type === 'password') {
            eyeIcon.attr('src', '/assets/images/hidePassword.svg');
        } else {
            eyeIcon.attr('src', '/assets/images/showPassword.svg');
        }
    });

    // Email Validation Function
    function validateEmail(email) {
        return emailPattern.test(email);
    }

    // Password Validation Function
    function validatePassword() {
        return passwordField.val().length > 0;
    }

    // Checks if all OTP (SMS) boxes are filled
    function validateOtpFields() {
        let isAllFilled = false;

        inputs.each(function() {
            if ($(this).val().length === 1) {
                isAllFilled = true;
            }
        });

        return isAllFilled;
    }

    // Email and Password Validation (First Modal)
    function validateForm() {
        const email = emailField.val();
        const isEmailValid = validateEmail(email);
        const isPasswordValid = validatePassword();

        if (isEmailValid && isPasswordValid) {
            submitButton.prop('disabled', false);
            submitButton.removeClass('disabled-button');
        } else {
            submitButton.prop('disabled', true);
            submitButton.addClass('disabled-button');
        }
    }

    // SMS Validation (Second Modal)
    function validateFormSms() {
        const isSmsValid = validateOtpFields();

        if (isSmsValid) {
            submitButtonSms.prop('disabled', false);
            submitButtonSms.removeClass('disabled-button');
        } else {
            submitButtonSms.prop('disabled', true);
            submitButtonSms.addClass('disabled-button');
        }
    }

    // Email Input Blur Validation
    $('#emailModal').on('blur', function () {
        const email = $(this).val();
        if (!validateEmail(email)) {
            $(this).addClass('is-invalid');
            $("#emailError").show();
        } else {
            $(this).removeClass('is-invalid');
            $('#emailError').hide();
        }
    });

    // When input fields change, validate
    $('#emailModal, #passwordModal').on('input', validateForm);
    inputs.on('input', function() {
        validateFormSms();
    });

    // Validate the form on page load
    validateForm();
    validateFormSms();

    // OTP (SMS) Input Keyup Handler for Auto Tab
    inputs.on('keyup', function(e) {
        const input = $(this);
        const index = inputs.index(this);

        // Automatically move to the next field when filled
        if (input.val().length === 1 && index < inputs.length - 1) {
            inputs.eq(index + 1).focus();
        }
        // Move back to the previous field when pressing backspace
        else if (e.key === 'Backspace' && index > 0) {
            inputs.eq(index - 1).focus();
        }

        // Validate the OTP fields after keyup
        validateFormSms();
    });

    // 2. When the modal is opened, re-add the modal-open class
    $('#loginButton2').on('shown.bs.modal', function () {
        $('body').addClass('modal-open');
    });

    $('#loginButton').on('hidden.bs.modal', function (e) {
        if ($('.modal.show').length) {
            $('body').addClass('modal-open');
        }
    });
    let timeLeft = 180;
    let resendLink = $('#resendLink');
    let timer;

    function startTimer() {
        timeLeft = 180;
        timer = setInterval(updateTimer, 1000);

        function updateTimer() {
            if (timeLeft > 0) {
                timeLeft--;
                resendLink.text(' (' + timeLeft + ')');
                resendLink.css('pointer-events', 'none');
                resendLink.addClass('disabled');
            } else {
                clearInterval(timer);
                resendLink.text('Tekrar Gönder');
                resendLink.css('pointer-events', 'auto');
                resendLink.removeClass('disabled');
            }
        }
    }


    $('#nextButtonPrg').click(function(event){
        event.preventDefault();
        if(currentStep < 4){
            currentStep++;
            updateProgressBar(currentStep);
        }
    });

    function updateProgressBar(step){
        $('.step').each(function(){
            var stepNum = $(this).data('step');
            if(stepNum == step){
                $(this).addClass('active');
            }else{
                $(this).removeClass('active');
            }
        });
        $('.dot').each(function(){
            var stepNum = $(this).data('step');
            if(stepNum <= step){
                $(this).addClass('active');
            }else{
                $(this).removeClass('active');
            }
        });

        // Çizgiyi güncelle
        var totalSteps = 4;
        var percentage = (step - 1) / (totalSteps - 1) * 100;
        $('.progress-line .progress-line-active').css('width', percentage + '%');
    }

    updateProgressBar(currentStep);
});
