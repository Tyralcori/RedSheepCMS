/** Automatic generated js file **/
/** Script for plugin RedSheepGallery: Start **/
$(document).ready(function() {
    if(window.location.pathname == '/') {
        var currentOffset = $('.itemContainer').length;
        $(window).scroll(function(){
            if ($(window).scrollTop() == $(document).height() - $(window).height()){
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    data: {offset: currentOffset},
                    url: "/",
                    success: function(response) {
                        if(response.images.length) {
                            // Increase by loaded elements
                            currentOffset = currentOffset + response.images.length;
                        }
                        
                        $(response.images).each(function(index, image){
                            $('.images').append(
                                    '<div class="itemContainer"><div class="itemTitle">' +
                                    '<a href="/image/' + image.headline + '" hidefocus="true" style="outline:none;">' + 
                                    '<h2>' + image.headline + '</h2>' +
                                    '</a></div><div class="itemMeta">' + 
                                    '<span class="itemMetaDate"><i class="service-icon fa fa-clock-o"></i>&nbsp;' + image.prettyDate + '</span>' + 
                                    '<span class="itemMetaAuthor"><i class="service-icon fa fa-user"></i>&nbsp;' + image.author + '</span>' +
                                    '</div><div class="itemPicture">' +
                                    '<a href="/image/' + image.headline + '" hidefocus="true" style="outline:none;">' +
                                    '<img src="' + image.name + '" alt="itemTitle" width="500" height="" class="itemPictureInner">' +
                                    '</a></div><div class="itemSocial"></div><div class="itemMore">' + 
                                    '<a href="/image/' + image.headline + '" hidefocus="true" class="btn btn-primary readMore">' + 
                                    'READ MORE</a>' +
                                    '<a href="/image/' + image.headline +'#comments" class="link-comments commentMore" hidefocus="true" style="outline: none;">' + 
                                    '0 Comments</a></div></div><br/><br/>');
                        });
                    }
                });
            }
        });
    }
});
/** Script for plugin RedSheepGallery: END **/
