
// Triggers when the page finished loading..
jQuery(window).load(function () {
    //$("body").removeClass("hidden");
});


// Scrolling Function
$(window).scroll(function() {
});


$(function() {
    // Make the navigation sticky
    $("#navigation").sticky({ topSpacing: 0  });
    
    // When the navigation becomes sticky put a collapse class on the nav (It would make the height smaller)
    $("#navigation").on('sticky-start', function() { 
        $("#nav").addClass('top-nav-collapse');
    });
    
    // Remove the collapse class if the navigation isn't sticky
    $("#navigation").on('sticky-end', function() { 
        $("#nav").removeClass('top-nav-collapse');
    });
    
    
    // for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var hash = this.hash;
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 500, 'easeInOutExpo', function (){
            window.location.hash = hash;
        });
        event.preventDefault();
    });

});

jQuery(window).load(function () {
    var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
});


