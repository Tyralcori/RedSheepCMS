$(document).ready(function() {
    // Check, if root or latest given
    if (window.location.pathname == '/' || window.location.pathname == '/latest') {
        // Register the current offset (first limit)
        var currentOffset = $('.itemContainer').length;

        // On scroll to bottom, register function
        $(window).scroll(function() {
            // On top
            if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                // Send Ajax request to current path
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    data: {offset: currentOffset},
                    url: window.location.pathname,
                    success: function(response) {
                        if (response.images.length) {
                            // Increase by loaded elements
                            currentOffset = currentOffset + response.images.length;
                        }

                        // Add each image into the container
                        $(response.images).each(function(index, image) {
                            $('.images').append(
                                    '<div class="itemContainer"><div class="itemTitle">' +
                                    '<a href="/image/' + image.headline + '" hidefocus="true" style="outline:none;">' +
                                    '<h2>' + image.headline + '</h2>' +
                                    '</a></div><div class="itemMeta">' +
                                    '<span class="itemMetaDate"><i class="service-icon fa fa-clock-o"></i>&nbsp;' + image.prettyDate + '</span>' +
                                    '<span class="itemMetaAuthor"><i class="service-icon fa fa-user"></i>&nbsp;' + image.author + '</span>' +
                                    '</div><div class="itemVote">' +
                                    '<i class="fa fa-thumbs-up upvote_' + image.smallLink + '"></i><br/>' +
                                    '<i class="fa fa-thumbs-down downvote_' + image.smallLink + '"></i><br/>' +
                                    '<span class="voteResult result_' + image.smallLink + '">' + image.voteSum + '</span>' +
                                    '</div><div class="itemPicture"><a href="/image/' + image.headline + '" hidefocus="true" style="outline:none;">' +
                                    '<img src="' + image.name + '" alt="itemTitle" width="500" height="" class="itemPictureInner">' +
                                    '</a></div><div class="itemSocial"></div><div class="itemMore">' +
                                    '<a href="/image/' + image.headline + '" hidefocus="true" class="btn btn-primary readMore">' +
                                    'READ MORE</a>' +
                                    '<a href="/image/' + image.headline + '#comments" class="link-comments commentMore" hidefocus="true" style="outline: none;">' +
                                    '0 Comments</a></div></div><br/><br/>');
                        });
                        
                        //Re-register votes
                        registerVotes();
                    }
                });
            }
        });
    }

    // Register Vote Handle
    function registerVotes() {
        // Register upvote
        $('.fa-thumbs-up').each(function() {
                $( this ).unbind("click");
                $( this ).click(function() {
                    var currentID = $( this ).attr('class').replace('fa', '').replace('fa-thumbs-up', '').replace('upvote_', '').trim();
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        data: {pictureID: currentID},
                        url: '/upvote',
                        success: function(response) {
                            $('.result_' + currentID).html(response.voteSum);
                        }
                    });
                });
        });

        // Register downvote
        $('.fa-thumbs-down').each(function() {
                $( this ).unbind("click");
                $( this ).click(function() {
                    var currentID = $( this ).attr('class').replace('fa', '').replace('fa-thumbs-down', '').replace('downvote_', '').trim();
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        data: {pictureID: currentID},
                        url: '/downvote',
                        success: function(response) {
                            $('.result_' + currentID).html(response.voteSum);
                        }
                    });
                });
        });
    }
    
    registerVotes();
});