$( document ).ready(function() {
    $('.bugTracker').click(function() {
        $('.bugTrackerForm').fadeIn();
    });
    
    $('.bugTrackerFormClose a').click(function() {
        $('.bugTrackerForm').fadeOut();
    })
});