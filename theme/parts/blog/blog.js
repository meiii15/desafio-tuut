(function($){
    var target = 'http://' +  window.location.hostname  + '/wp/wp-admin/admin-ajax.php' ;
    
    $.ajax({
        url: target,
        type:'get',
        data: { 'action': 'fetch_recent_posts'}
    }).done(function(data){
        for(let currentPostIndex in data){
            
            let currentPost = data[currentPostIndex];
            
            let postLine = $('<div>');
            postLine.addClass('post-line');

            let postContainer = $('<div>');
            postContainer.addClass('post-container');
            var positionClassStyle = currentPostIndex % 2 ? "right" : "left";
            postContainer.addClass(positionClassStyle);
            
            let postTitle = $('<h2>');
            postTitle.html(currentPost.post_title);

            let postContent = $('<div>');
            postContent.html(currentPost.post_content);

            postContainer.append(postTitle);
            postContainer.append(postContent);

            postLine.append(postContainer);

            $(".posts-container").append(postLine);
        }
    });

})(jQuery);