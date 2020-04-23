$(document).ready(function() {

    $(".owl-carousel").owlCarousel({
        items: 1,
        startPosition: CURRENT_MONTH - 1
    });

    $(".slider-nav-elem").on("click", function () {
        var monthindex = $(this).data("monthindex") - 1;

        $(".owl-carousel").trigger('to.owl.carousel', monthindex);
    })
    
});