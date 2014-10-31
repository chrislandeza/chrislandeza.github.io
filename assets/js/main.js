
jQuery(window).load(function () {
 
    //$("body").removeClass("hidden");
});

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    
    var x = $(this).scrollTop();
    
   // $("#home").css('background-position', '0% ' + parseInt(-x / 1) + 'px');
    
    if($("#navigation-sticky-wrapper").hasClass('is-sticky')){
        $("#nav").addClass('top-nav-collapse');
    } else {
        $("#nav").removeClass('top-nav-collapse');
    }

//    if($(".navbar-nav li:gt(0)").hasClass('active')){
//        $("#nav").addClass('top-nav-collapse');
//    } else {
//        $("#nav").removeClass('top-nav-collapse');
//    }
    
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $("#navigation").sticky({ topSpacing: 0  });
    
    $("#navigation").on('sticky-start', function() { 
        $("#nav").addClass('top-nav-collapse');
    });
    
    $("#navigation").on('sticky-end', function() { 
        $("#nav").removeClass('top-nav-collapse');
    });
    
    
    $('a.page-scroll').bind('click', function(event) {
        var hash = this.hash;
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000, 'easeInOutExpo', function (){
            window.location.hash = hash;
        
        });
        event.preventDefault();
       
    });
    
   
    
    
});

jQuery(window).load(function () {
    var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    
});


