(function($) {
    'use strict';

    // Navbar scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });

    // Smooth scrolling for anchor links
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 70
                }, 1000);
                return false;
            }
        }
    });

    // Scroll animations
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function() {
        $('.feature-card, .service-card, .blog-card, .testimony-card').each(function() {
            if (isScrolledIntoView(this) === true) {
                $(this).addClass('animate__animated animate__fadeInUp');
            }
        });
    });

    // Mobile menu close on click
    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });

    // WhatsApp button tooltip (optional)
    if ($('.whatsapp-float').length) {
        $('.whatsapp-float').hover(
            function() {
                $(this).css('transform', 'scale(1.1)');
            },
            function() {
                $(this).css('transform', 'scale(1)');
            }
        );
    }

    // Lazy loading for images (if needed)
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    }

    // Carousel auto-height
    $('#heroCarousel').on('slide.bs.carousel', function (e) {
        var nextH = $(e.relatedTarget).height();
        $(this).find('.active.item').parent().animate({ height: nextH }, 500);
    });

    // Initialize on load
    $(document).ready(function() {
        // Trigger scroll event once to catch any elements already in view
        $(window).trigger('scroll');
    });

})(jQuery);
