<?php
    wp_register_style('galery-style', get_template_directory_uri().'/parts/galery/galery.css');
    wp_enqueue_style('galery-style');
    
    wp_register_script('galery-script', get_template_directory_uri().'/parts/galery/galery.js');
    wp_enqueue_script('galery-script');
?>


<section class="galery-section">
    
    <h1>Galeria TOOT</h1>

    <div class="galery-carousel">

    <?php
    $query_images_args = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => - 1,
    );

    $query_images = new WP_Query( $query_images_args );

    ?>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
    <?php
    
    $isFirst = true;
    
    foreach ( $query_images->posts as $image ) {
        
        $images[] = wp_get_attachment_url( $image->ID );
                
        foreach($images as $currentImage)
        {    
            ?>
                <div class="carousel-item <?php if ($isFirst) { echo 'active'; $isFirst = false; } ?>">
                    <img class="d-block w-100" src="<?php echo $currentImage?>"/>
                </div>
            <?php
        }

    }
        ?>
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
        <?php
    ?>
    
    </div>
</section>