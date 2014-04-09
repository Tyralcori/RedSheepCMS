/** Automatic generated js file **/
/** Script for plugin RedSheepScrollTop: Start **/
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
/** Script for plugin RedSheepScrollTop: END **/

/** Script for plugin RedSheepBugTracker: Start **/
$( document ).ready(function() {
    $('.bugTracker').click(function() {
        $('.bugTrackerForm').fadeIn();
    });
    
    $('.bugTrackerFormClose a').click(function() {
        $('.bugTrackerForm').fadeOut();
    });
    
    $('.bugTrackerFormCloseResponse').click(function() {
        $('.bugTrackerFormResponse').fadeOut();
    });
    
    if(typeof $('.bugTrackerFormResponse') != "undefined") {
        $('.bugTrackerFormResponse').fadeIn();
    }
});
/** Script for plugin RedSheepBugTracker: END **/

/** Script for plugin RedSheepNewsletter: Start **/
$( document ).ready(function() {
    $('.bugTracker').click(function() {
        $('.bugTrackerForm').fadeIn();
    });
    
    $('.bugTrackerFormClose a').click(function() {
        $('.bugTrackerForm').fadeOut();
    });
    
    $('.bugTrackerFormCloseResponse').click(function() {
        $('.bugTrackerFormResponse').fadeOut();
    });
    
    if(typeof $('.bugTrackerFormResponse') != "undefined") {
        $('.bugTrackerFormResponse').fadeIn();
    }
});
/** Script for plugin RedSheepNewsletter: END **/
