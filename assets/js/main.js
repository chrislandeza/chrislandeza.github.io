//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    
    var x = $(this).scrollTop();
    
    $("#home").css('background-position', '0% ' + parseInt(-x / 1) + 'px');
    
    if($("#navigation-sticky-wrapper").hasClass('is-sticky')){
        $("#nav").addClass('top-nav-collapse');
    } else {
        $("#nav").removeClass('top-nav-collapse');
    }
    
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $("#navigation").sticky({ topSpacing: 0  });
    
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
