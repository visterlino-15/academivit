(function($) {
  "use strict"; // Start of use strict

  

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

})(jQuery); // End of use strict


$(document).ready(function(){
    // Menu Responsive
    $(".boton-sidebar").click(function(e){
        e.preventDefault();
        if($(".boton-sidebar i").attr('class') == 'fa fa-bars'){
            $(".boton-sidebar i").removeClass('fa fa-bars').addClass('fa fa-times');
            $("#accordionSidebar").hide();
        } else {
            $(".boton-sidebar i").removeClass('fa fa-times').addClass('fa fa-bars');
            $("#accordionSidebar").show();
        }
    });
    // Agregando y Eliminando Clase nav-responsive
    if ($(window).width() <= 768){
        $("accordionSidebar").addClass('d-none');
        $("#accordionSidebar").hide();
    }else{
        $("#accordionSidebar").show();
        $("accordionSidebar").removeClass('d-none');
    }
    
});

