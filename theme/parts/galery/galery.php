<?php
    wp_register_style('galery-style', get_template_directory_uri().'/parts/galery/galery.css');
    wp_enqueue_style('galery-style');
    
    wp_register_script('galery-script', get_template_directory_uri().'/parts/galery/galery.js');
    wp_enqueue_script('galery-script');
?>


<section class="galery-section">
    <h1>Galeria TOOT</h1>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="modal" id="imageGaleryModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Zoom</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <img src=""/>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
</section>