<?php
    wp_register_style('blog-style', get_template_directory_uri().'/parts/blog/blog.css');
    wp_enqueue_style('blog-style');
    
    wp_register_script('blog-script', get_template_directory_uri().'/parts/blog/blog.js');
    wp_enqueue_script('blog-script');
?>

<section class="blog-section">
    <h1>Blog da TOOT</h1>
    
    <div class="posts-container-horizontal">
        <div class="posts-container">
        </div>
    </div>

</section>