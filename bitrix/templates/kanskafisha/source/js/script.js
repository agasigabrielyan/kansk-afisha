$(document).ready(function() {
    $('#all_our_works').slick({
        slidesToShow: 3,
        prevArrow:"<button type='button' class='slick-buttom slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'><span class='glyphicon glyphicon-menu-right'></span></i></button>",
        nextArrow:"<button type='button' class='slick-buttom slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'><span class='glyphicon glyphicon-menu-left'></span></i></button>",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('#banners_on_main').slick({
        slidesToShow: 3,
        prevArrow:"<button type='button' class='slick-buttom slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'><span class='glyphicon glyphicon-menu-right'></span></i></button>",
        nextArrow:"<button type='button' class='slick-buttom slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'><span class='glyphicon glyphicon-menu-left'></span></i></button>",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});
$(document).ready(function() {
    $("[data-fancybox]").fancybox({
        helpers:{
            overlay:{
                locked:false
            }
        }
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});