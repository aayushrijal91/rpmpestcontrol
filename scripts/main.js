// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#forms"], a[href="#services"]').forEach(function (anchor) {
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

$("#testimonialSlider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "260px",
    arrows: false,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerPadding: "100px"
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerPadding: "100px"
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerPadding: "20px"
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: "20px"
            }
        }
    ]
});

$("#propertyTypeSlider").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    dots: true,
    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});

if ($(window).width() < 900) {
    $("#ctaSlider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        infinite: false,
        initialSlide: 1,
        centerPadding: "20px",
        arrows: false,
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    infinite: false,
                    centerPadding: "20px",
                    arrows: false,
                }
            }
        ]
    });

    $("#servicesSlider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: $("#service-prev"),
        nextArrow: $("#service-next"),
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    })
}

$('.formToggleButton').on('click', function () {
    $('.formToggleButton').removeClass('active');
    $(this).addClass('active');
    $('.formwrapper').hide();
    $(`#${$(this).data('target')}`).fadeIn();
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

$("#form").on('submit', function () {
    return validateForm();
});

$('#fileUpload').on('change', function() {
    let file = $(this).val();
    if (file != "") {
        let theSplit = file.split('\\');
        let fileName = theSplit[theSplit.length - 1];
        $('#file-label').html(fileName.substring(0, 50));
    }
});

$('#fileUpload2').on('change', function() {
    let file = $(this).val();
    if (file != "") {
        let theSplit = file.split('\\');
        let fileName = theSplit[theSplit.length - 1];
        $('#file-label-2').html(fileName.substring(0, 50));
    }
});