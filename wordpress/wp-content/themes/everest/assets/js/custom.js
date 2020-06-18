
jQuery( document ).ready(function($) {
    $("button#hide-show").click(function(){
         $("#navigation").slideToggle('slow');
    });

    $("#navigation ul li").click(function(){
         $("#navigation").slideUp('slow');
    });

});