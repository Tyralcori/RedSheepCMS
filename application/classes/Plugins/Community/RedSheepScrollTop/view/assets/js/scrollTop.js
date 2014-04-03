$( document ).ready(function() {
    // Scroll on Top, if click on DIV
    $('.scrollTop').click(function() {
        $(document).scrollTop(0);
    });
    
    // FadeIn if scroll more to bottom. If on top, hide div
    $(document).scroll(function() {
        if($(document).scrollTop() > 0) {
            $('.scrollTop').fadeIn();
        } else {
            $('.scrollTop').fadeOut();
        }
    })
});