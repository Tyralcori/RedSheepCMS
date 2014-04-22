$( document ).ready(function() {
    // Scroll on Top, if click on DIV
    $('.scrollTop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
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