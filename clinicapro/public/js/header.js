$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 0 ){
            $('header').addClass('headergc');
        } else {
            $('header').removeClass('headergc');
        }
    });
});