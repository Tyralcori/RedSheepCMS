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