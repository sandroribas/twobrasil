 var $j = jQuery.noConflict();
 <!-- FlexSlider -->
   
   
    var $ = jQuery.noConflict();
    $j(window).load(function() {
    $j('.flexslider').flexslider({
          animation: "fade"
    });

    $(function() {
        $j('.show_menu').click(function(){
                $j('.menu').fadeIn();
                $j('.show_menu').fadeOut();
                $j('.hide_menu').fadeIn();
        });

        $('.hide_menu').click(function(){
                $j('.menu').fadeOut();
                $j('.show_menu').fadeIn();
                $j('.hide_menu').fadeOut();
        });
    });
});
