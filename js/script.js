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
    $('.nav-item a').each(function() {
        if ($(this).attr('href') === currentPath) {
            $(this).parent().addClass('active');
        }
    });

});

//
// document.addEventListener('DOMContentLoaded', function() {
//     var navbarCollapse = document.querySelector('.navbar-collapse');
//     var header = document.querySelector('header');
//
//     function updateHeaderBorderRadius() {
//         if (header.querySelector('.navbar-collapse.show')) {
//             header.style.borderRadius = '100px';
//
//         } else {
//             header.style.borderRadius = '40px';
//         }
//     }
//
//     updateHeaderBorderRadius();
//
//     navbarCollapse.addEventListener('show.bs.collapse', function () {
//         updateHeaderBorderRadius();
//     });
//
//     navbarCollapse.addEventListener('hide.bs.collapse', function () {
//         updateHeaderBorderRadius();
//     });
// });
