$('.banner').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navSpeed: 2000,
    dragEndSpeed: 2000,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
})
$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');


 $('.owl-review').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navSpeed: 2000,
    dragEndSpeed: 2000,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplaySpeed: 2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:2
        }
    }
})
$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
// $( ".owl-prev").html('<i class="fa fa-mail-reply"></i>');
//  $( ".owl-next").html('<i class="fa fa-mail-forward"></i>');