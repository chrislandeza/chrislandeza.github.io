/*!
 * (http://chrislandeza.co.nf)
 * Copyright 2015 Chris Landeza.
 */

$(window).load(function() {
    $(".loader-container").slideDown(500, function(){
        $("body").removeClass("loading");
        
        var wow = new WOW(
        { boxClass:     'wow',      
          animateClass: 'animated', 
          offset:       0,          
          mobile:       false,       
          live:         true   
        });
        wow.init();
      
    });
	
});



function changeLogo(){
    
    if($(window).scrollTop() >= ($("#contact").position().top - 70)) {
        $("#logo").addClass('dark');
        if($("#logo").hasClass("orange")){
           
//            $("#logo").fadeOut(100, function(){
                $("#logo").attr('src','assets/img/logo.png').bind('onreadystatechange load', function(){
                    if (this.complete) $(this).fadeIn(300);
                    $("#logo").removeClass('orange');
                    $("#logo").addClass('dark');
                }); 
//            });
           
        } 
    } else {
        $("#logo").addClass('orange');
         if($("#logo").hasClass("dark")){
             
//            $("#logo").fadeOut(100, function(){
                $("#logo").attr('src','assets/img/logo-orange.png').bind('onreadystatechange load', function(){
                    if (this.complete) $(this).fadeIn(300);
                    $("#logo").removeClass('dark');
                    $("#logo").addClass('orange');
                }); 
//            });
        } 
    }
    
}

$(window).scroll(function(){
    changeLogo();
});


$(function() {
    changeLogo();
    // Make the navigation sticky
    $("#navigation").sticky({ topSpacing: 0 });
    
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
        // set the right hash
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


