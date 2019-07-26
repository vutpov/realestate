$(document).ready(function() {
    $('#lightSlider').lightSlider({
        item: 1,
        auto: true,
        loop: true,
        speed: 1000,
        gallery: true,
        thumbItem: 8,
        thumbMargin: 5,
    });

    $('.carousel').carousel({
        interval: 2500,
    });
});
