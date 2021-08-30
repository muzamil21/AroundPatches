// const responsive = {
//     0: {
//         items: 1
//     },
//     320: {
//         items: 1
//     },
//     560: {
//         items: 2
//     },
//     960: {
//         items: 3
//     }
// }

$(document).ready(function () {

    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');

    /** click event on toggle menu */
    $toggleCollapse.click(function () {
        $nav.toggleClass('collapse');
    })

    // owl-crousel for blog
    // $('.owl-carousel').owlCarousel({
    //     loop: true,
    //     autoplay: false,
    //     autoplayTimeout: 3000,
    //     dots: false,
    //     nav: true,
    //     navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
    //     responsive: responsive
    // });


    // click to scroll top
    $('.move-up span').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    })

    // AOS Instance
    AOS.init();

    
});

$(document).ready(function() {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function() {
      if ($('.accordion_body').is(':visible')) {
        $(".accordion_body").slideUp(300);
        $(".plusminus").find(".fa").removeClass("fa-minus").addClass("fa-plus");
      }
      if ($(this).next(".accordion_body").is(':visible')) {
        $(this).next(".accordion_body").slideUp(300);
        $(this).children(".plusminus").find(".fa").removeClass("fa-minus").addClass("fa-plus");
      } else {
        $(this).next(".accordion_body").slideDown(300);
        $(this).children(".plusminus").find(".fa").removeClass("fa-plus").addClass("fa-minus");
      }
    });
  });
