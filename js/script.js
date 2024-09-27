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
    const navItems = document.querySelectorAll('.nav-item');


    const currentPath = window.location.pathname;
    $('.nav-item a').each(function () {
        if ($(this).attr('href') === currentPath) {
            $(this).parent().addClass('active');
        }
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
