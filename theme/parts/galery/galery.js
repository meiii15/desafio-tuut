(function($){
    var target = 'http://' +  window.location.hostname  + '/wp/wp-admin/admin-ajax.php' ;
    
    $.ajax({
        url: target,
        type:'get',
        data: { 'action': 'get_images_galery'}
    }).done(function(data){
        var images = [];
        for(let currrentImageUrlIndex in data){
            let currentImageGalery = data[currrentImageUrlIndex];
            
            let imageGalery = $("<img>");
            imageGalery.attr('src', currentImageGalery);
            
            imageGalery.click(function(e){
                $("#imageGaleryModal").find('.modal-dialog').css('max-width', 'fit-content');
                
                var imageModal = $("#imageGaleryModal").find('img');
                imageModal.attr('src', currentImageGalery);
                $("#imageGaleryModal").modal();
            });

            images.push(imageGalery);
        }
        
        var carouselItens = [];
        var isFirst = true;
        const SHOWING_IMAGES = 3;

        while(images.length > 0)
        {
            let carouselItem = $("<div>");
            carouselItem.addClass("carousel-item");

            if(isFirst){
                carouselItem.addClass('active');
                isFirst = false;
            }

            var imagesItemCount = images.length > SHOWING_IMAGES ? SHOWING_IMAGES : images.length;
            var itemImages = images.splice(0, imagesItemCount);

            carouselItem.append(itemImages);
            carouselItens.push(carouselItem);
        }

        $(".carousel-inner").append(carouselItens);
        $('#carousel').carousel({
            interval: 10000
        });
    });

    
    // $('.carousel .carousel-item').each(function(){
    //     var next = $(this).next();
    //     if (!next.length) {
    //         next = $(this).siblings(':first');
    //     }
    //     next.children(':first-child').clone().appendTo($(this));
        
    //     for (var i=0;i<2;i++) {
    //         next=next.next();
    //         if (!next.length) {
    //             next = $(this).siblings(':first');
    //         }
            
    //         next.children(':first-child').clone().appendTo($(this));
    //     }
    // });
})(jQuery);
