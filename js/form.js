$(document).ready(function () {

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


});
