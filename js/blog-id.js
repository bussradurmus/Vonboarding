$(document).ready(function(){
    $('.slick').slick({
        dots: true,
        infinite: true,
        touchThreshold : 100,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true,
        nextArrow: '<button class="slick-next"><img src="/assets/images/next-arrow.svg" alt="Next Arrow"></button>',
        prevArrow: '<button class="slick-prev"><img src="/assets/images/prev-arrow.svg" alt="Prev Arrow"></button>',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('#copyButton').on('click', function() {
        // Geçerli sayfanın URL'sini al
        const pageUrl = window.location.href;

        // Clipboard API kullanarak URL'yi kopyala
        navigator.clipboard.writeText(pageUrl).then(function() {
            alert('Sayfa linki başarıyla kopyalandı!');
        }, function(err) {
            console.error('Link kopyalanamadı: ', err);
        });
    });

});