$(document).ready(function () {
    // Toggle between hamburger icon and close icon
    $('.navbar-toggler').on('click', function () {
        var $this = $(this);
        if ($this.hasClass('collapsed')) {
            $this.find('.navbar-toggler-icon').css('background-image', 'url(data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 30 30\'%3E%3Cpath stroke=\'white\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' stroke-width=\'2\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E)');
        } else {
            $this.find('.navbar-toggler-icon').css('background-image', 'url(data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 30 30\'%3E%3Cpath stroke=\'white\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' stroke-width=\'2\' d=\'M6 6l18 18M6 24L24 6\'/%3E%3C/svg%3E)');
        }
    });

    const currentPath = window.location.href; // Tam URL'yi alıyoruz
    console.log(currentPath); // Debug amaçlı console.log

    $('.nav-item a').each(function () {
        const href = $(this).attr('href'); // Her bir href'i alıyoruz
        if (href && (currentPath === href)) { // Tam URL eşleşiyor mu veya URL, href ile başlıyor mu kontrol ediyoruz
            $(this).parent().addClass('active'); // Eşleşiyorsa 'active' sınıfını ekle
        }
    });

// Türkçe karakterleri destekleyen isim/soyisim doğrulama
    function validateName(name) {
        return /^[a-zA-ZçÇğĞıİöÖşŞüÜ\s]+$/.test(name);  // Türkçe karakterleri ve boşlukları kabul eden regex
    }

    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);  // Geçerli e-posta formatı
    }

    function validateMessage(message) {
        return message.trim().length > 0; // Mesaj alanının boş olmadığını kontrol et
    }

// Her input alanı için hata kontrolü yapan fonksiyon
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
        return false;  // Eğer kullanıcı inputa hiç veri girmemişse ve boşsa geçersiz say
    }

// Formun tüm alanlarının doğruluğunu kontrol eden fonksiyon
    function validateForm() {
        const isFirstNameValid = validateInput($('#firstName'), validateName, $('#indexName'));
        const isLastNameValid = validateInput($('#lastName'), validateName, $('#indexSurame'));
        const isEmailValid = validateInput($('#email'), validateEmail, $('#indexEmail'));
        const isMessageValid = validateInput($('#message'), validateMessage, $('#indexMessage'));

        // Eğer tüm alanlar geçerliyse butonu aktif et, aksi halde devre dışı bırak
        if (isFirstNameValid && isLastNameValid && isEmailValid && isMessageValid) {
            $('.form-button').removeAttr('disabled');  // Butonu aktif et
        } else {
            $('.form-button').attr('disabled', 'disabled');  // Butonu devre dışı bırak
        }
    }

// Her alan için blur (alan dışına çıkma) olayına bağlı doğrulama
    $('#firstName').on('blur', function () {
        validateInput($(this), validateName, $('#indexName'));
        validateForm();  // Formu kontrol et
    });

    $('#lastName').on('blur', function () {
        validateInput($(this), validateName, $('#indexSurame'));
        validateForm();  // Formu kontrol et
    });

    $('#email').on('blur', function () {
        validateInput($(this), validateEmail, $('#indexEmail'));
        validateForm();  // Formu kontrol et
    });

    $('#message').on('blur', function () {
        validateInput($(this), validateMessage, $('#indexMessage'));
        validateForm();  // Formu kontrol et
    });

// Mesaj alanı için input event'ine bağlı kontrol
    $('#message').on('input', function () {
        validateForm();  // Mesaj kutusu her değiştiğinde formu tekrar kontrol et
    });

// Sayfa yüklendiğinde butonu devre dışı bırak
  $('#iletisim .form-button').attr('disabled', 'disabled');


    //yasal sözleşmeler sayfası tab geçişleri yönetimi
    $('.contract-nav-link').click(function() {
        $('.contract-nav-link').removeClass('active');
        $(this).addClass('active');

        // Hide all content sections
        $('.content-section').removeClass('active');

        // Show the selected section
        var target = $(this).attr('href') + '-content';
        $(target).addClass('active');

        return false; // Prevent default link behavior
    });
});

// Sıralı animasyonları tetikleyen fonksiyon
function animateSequentially(entries, observerSeq) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const firstShow = document.querySelector('.first-show');
            const secondShow = document.querySelector('.second-show');
            const thirdShow = document.querySelector('.third-show');
            const forthShow = document.querySelector('.forth-show');
            const divider = document.querySelector('.divider-img');

            if (firstShow) {
                setTimeout(() => {
                    firstShow.classList.add('show-animation');
                }, 500); // 0.5 saniye sonra başlar
            }
            if (divider) {
                setTimeout(() => {
                    divider.classList.add('show-animation');
                }, 700);
            }
            if (secondShow) {
                setTimeout(() => {
                    secondShow.classList.add('show-animation');
                }, 800);
            }
            if (thirdShow) {
                setTimeout(() => {
                    thirdShow.classList.add('show-animation');
                }, 1000);
            }
            if (forthShow) {
                setTimeout(() => {
                    forthShow.classList.add('show-animation');
                }, 1200);
            }
        } else {
            // Görünürlükten çıkınca animasyon sınıflarını kaldır
            const firstShow = document.querySelector('.first-show');
            const secondShow = document.querySelector('.second-show');
            const thirdShow = document.querySelector('.third-show');
            const forthShow = document.querySelector('.forth-show');
            const divider = document.querySelector('.divider-img');

            if (firstShow) firstShow.classList.remove('show-animation');
            if (secondShow) secondShow.classList.remove('show-animation');
            if (thirdShow) thirdShow.classList.remove('show-animation');
            if (forthShow) forthShow.classList.remove('show-animation');
            if (divider) divider.classList.remove('show-animation');
        }
    });
}

// Sıralı animasyon gözlemcisi (observerSeq)
const observerSeq = new IntersectionObserver(animateSequentially, {
    threshold: 0.1 // Component'in %10'u görünür olduğunda tetiklenir
});

// Gözlemlenecek elementleri seçiyoruz
const elementsToAnimate = document.querySelectorAll('.hidden-animation');

// Tüm elementler için gözlem başlatıyoruz
elementsToAnimate.forEach(element => {
    observerSeq.observe(element);
});

// Görsel animasyonu tetikleyen fonksiyon
function animateImage(entries, observerImg) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        } else {
            entry.target.classList.remove('animate');
        }
    });
}

const observerImg = new IntersectionObserver(animateImage, {
    threshold: 0.2
});

const imgContents = document.querySelectorAll('.img-content');
imgContents.forEach(imgContent => {
    observerImg.observe(imgContent);
});
