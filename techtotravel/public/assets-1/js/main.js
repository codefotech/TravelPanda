$(document).ready(function () {
    // Latest Trips Carousel
    var tripsOwl = $('#trips .owl-carousel');
    tripsOwl.owlCarousel({
        margin: 25,
        nav: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            800: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // Function to remove disabled class continuously
    function enableOwlNavAndDots() {
        $('#trips .owl-nav, #trips .owl-dots').removeClass('disabled');
    }

    // Remove disabled class on document ready
    enableOwlNavAndDots();

    // Set an interval to continuously remove disabled class
    setInterval(enableOwlNavAndDots, 1); // Check every second



    // Trusted Clients Carousel
    var clientsOwl = $('#clients .owl-carousel');
    clientsOwl.owlCarousel({
        margin: 25,
        nav: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });
});
