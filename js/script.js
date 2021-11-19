$("[data-trigger]").on("click", function () {
    var trigger_id = $(this).attr("data-trigger");
    $(trigger_id).toggleClass("show");
    $("body").toggleClass("offcanvas-active");
});

// close button
$(".btn-close").click(function (e) {
    $(".navbar-collapse").removeClass("show");
    $("body").removeClass("offcanvas-active");
});

// ______________page-load
$(document).ready(function () {
    const pageName = $("#pageName").text();
    $("body").addClass(pageName);
});
// __________humburger__________
$(".hamburger").click(function () {
    $(this).toggleClass("is-active");
});




// flex-slider
$(document).ready(function() {
  $('.flex-next').html('<i class="fa fa-chevron-right" aria-hidden="true"></i>');
  $('.flex-prev').html('<i class="fa fa-chevron-left" aria-hidden="true"></i>')
});
$('.slide-image').each(function() {
  var bg = $(this).data('bg');
  var pos = $(this).data('flex-start');
  $(this).css({
    "background-image" : "url("+bg+")",
    "transform-origin": pos,
  })
});
$('.flex-slider').flexslider({
  slideshow: false,
  slideshowSpeed: 5000,
  animationSpeed: 3000,
  controlNav: false,
  // autoplay
  pauseOnAction: true,
  after: function(slider) {
    if (!slider.playing) {
      slider.play();
    }
  }
  //autoplay
});


// testimonial
$(".testimonial-block").owlCarousel({
    autoplay: false,
    autoplayTimeout: 5000,
    loop: true,
    margin: 0,
    dots: false,
    items: 1,
    nav: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            margin: 0,
        },
        600: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 1,
            nav: false,
            loop: true,
        },
    },
});

$(".testimonial-content").owlCarousel({
    autoplay: false,
    autoplayTimeout: 5000,
    loop: true,
    margin: 20,
    dots: false,
    items: 1,
    nav: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            margin: 0,
        },
        600: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 2,
            nav: false,
            loop: true,
        },
    },
});

// menu-newClass
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $(".header-top").addClass("newClass");
    } else {
        $(".header-top").removeClass("newClass");
    }
});
