// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$('#brands_slider').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                speed: 3000,
                autoplaySpeed: 0,
                autoplay: true,
                cssEase: 'linear'
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                speed: 3000,
                autoplaySpeed: 0,
                autoplay: true,
                cssEase: 'linear'
            }
        }
    ]
});

$('#cta_slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 8000,
    cssEase: 'linear',
    variableWidth: true,
});

$('.accordion-card .question').on('click', function () {
    $(this).next('.answer').slideToggle();
});

$('#client_slider').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true,
    variableWidth: true,
    asNavFor: '#testimonial_slider',
    // autoplay: true,
    focusOnSelect: true,
});

$('#testimonial_slider').slick({
    draggable: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '#client_slider',
})