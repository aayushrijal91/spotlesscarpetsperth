// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#testimonials"], a[href="#faqs"], a[href="#projects"], a[href="#about"], a[href="#services"], a[href="#home"]').forEach(function (anchor) {
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
            breakpoint: 1100,
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
    $('.accordion-card .answer').slideUp();
    $(this).next('.answer').slideToggle();
    $('.accordion-card').removeClass('active');
    $(this).parents('.accordion-card').addClass('active');

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
});

function validateForm() {
    let phoneInput = $('#contactNumber').val();
    let re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    if(!re.test(phoneInput)) {
        $('#phoneError').fadeIn();

        return false;
    } else {
        $('#phoneError').fadeOut();
    }

    return true;
}

$("#submission-form").on('submit', function (e) {
    e.preventDefault();
    return validateForm();
});