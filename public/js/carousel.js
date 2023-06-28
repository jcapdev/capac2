$( document ).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        nav:true,
        center: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
                nav:false                
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })

});
  