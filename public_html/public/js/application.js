$(document).ready(function () {
    //for AOS
    AOS.init();
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
    $(".testimony-carousel").owlCarousel({
        //stagePadding: 100,
        items: 1,
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 5500,
        autoplayHoverPause: true,
        //animateOut: 'fadeOut',
        //animateIn: 'fadeIn',
        smartSpeed: 500,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            600: {
                items: 2,
            },
            768: {
                items: 2,
            },
            960: {
                items: 3,
            },
            1024: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".scroll-top").addClass("d-inline-flex");
            $(".site-header").addClass("animate__fadeInDown site-header-fixed");
        } else {
            $(".scroll-top").removeClass("d-inline-flex");
            $(".site-header").removeClass("animate__fadeInDown site-header-fixed");
        }
    });

    //Click event to scroll to top
    $(".scroll-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });

    // input type number
    $("form").on("focus", "input[type=number]", function (e) {
        $(this).on("wheel.disableScroll", function (e) {
            e.preventDefault();
        });
    });
    $("form").on("blur", "input[type=number]", function (e) {
        $(this).off("wheel.disableScroll");
    });
    $("input[type=number]").on("focus", function () {
        $(this).on("keydown", function (event) {
            if (event.keyCode === 38 || event.keyCode === 40) {
                event.preventDefault();
            }
        });
    });
    //input type number end
    $("#datepicker").datepicker({
        uiLibrary: "bootstrap4",
        dateFormat: 'yyyy-mm-dd'
    });
    $("#timepicker").timepicker({
        uiLibrary: "bootstrap4",
    });

    $("#submit").click(function () {
        setTimeout("$('#bookNowModal').modal('hide');", 3000);
    });
});


function _saveBooking(fields) {
    const messageNode = document.querySelector('.form-message');
    messageNode.innerHTML = "";
    $('#bookNowModal .submit-button').addClass("d-none");
    $('#bookNowModal .loading-button').removeClass("d-none");
    httpRequest('/save_booking', 'POST', fields, 'formdata', ({
        success,
        response
    }) => {
        $('#bookNowModal .loading-button').addClass("d-none");
        if (success) {
            $('#save-booking').addClass("d-none");
            $('#save-booking').removeClass("d-block");
            $('.save-booking-success').removeClass("d-none");
            $('.save-booking-success').addClass("d-block");
            setTimeout(function () {
                $('#bookNowModal').modal('hide');
            }, 3000);
        } else {
            $('#bookNowModal .submit-button').removeClass("d-none");
            messageNode.innerHTML = response;
            messageNode.className = "form-message error";
        }
    })
    return false;
}

function _saveContact(fields) {
    const messageNode = document.querySelector('.form-message');
    messageNode.innerHTML = "";
    $('#save-contact .submit-button').addClass("d-none");
    $('#save-contact .loading-button').removeClass("d-none");
    httpRequest('/save_contact', 'POST', fields, 'formdata', ({
        success,
        response
    }) => {
        if (success) {
            setTimeout(function () {
                $("#save-contact").trigger("reset");
                $('#save-contact .loading-button').addClass("d-none");
                $('#save-contact .submit-button').removeClass("d-none");
                alert('We have recieved Your query will get in touch with you soon');
            }, 3000);
        } else {
            $('#save-contact .loading-button').addClass("d-none");
            $('#save-contact .submit-button').removeClass("d-none");
            alert('Seems some issue please try later or call us');
        }
    })
    return false;
}
