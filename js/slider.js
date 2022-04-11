$('.slides').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
});
$('.slides-content').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});


var currents = $('.slides')
currents.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var currentsSlide = (currentSlide + 1);
    var cur = ("0" + currentsSlide);
    var curnum = (currentsSlide);

    if ($(currents).children().length <= 9) {
        $('#current').html(cur);
    } else {
        $('#current').html(curnum);
    }
});
var count1 = $('.slider').children().length;
var insgesamt1 = "" + count1 -2;
if ($('.slider').children().length <= 9) {
    $('#counter').html(". " + "0" + insgesamt1);
} else {
    $('#counter').html(". " + insgesamt1-2);
}


var currents1 = $('.slides-content')
currents1.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var currentsSlide1 = (currentSlide + 1);
    var cur1 = ("0" + currentsSlide1);
    var curnum1 = ("adwawd" + currentsSlide1);

    if ($(currentsSlide1).children().length <= 9) {
        $('#current_slider-content').html(cur1);
    } else {
        $('#current_slider-content').html(curnum1);
    }
});
var count2 = $('.slides-content .slick-track .slick-cloned .image').children().length;
var insgesamt2 = "" + count2 -1;
//adding all counter
if ($('.slider-with-content .slick-slide').children().length <= 9) {
    $('#counter_slider-content').html("." + "0" + insgesamt2);
} else {
    $('#counter_slider-content').html(". " +"" + insgesamt2);
}