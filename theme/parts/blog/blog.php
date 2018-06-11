<?php
    wp_register_style('blog-style', get_template_directory_uri().'/parts/blog/blog.css');
    wp_enqueue_style('blog-style');  
?>

<section class="blog-section">
    <h1>Blog da TOOT</h1>
    
    <div class="posts-container">
        <?php
            $recent_posts = wp_get_recent_posts();

            $indexCount = 0;
            
            foreach( $recent_posts as $recent ) {
                ?>
                    <div class="post-line">
                        <div class="post-container <?php if($indexCount % 2) echo "right"; else echo "left"; ?>">
                            <h2>
                                <?php echo $recent["post_title"]; ?>
                            </h2>
    
                            <div>
                                <?php echo $recent["post_content"]; ?>
                            </div>
                        </div>
                    </div>
                <?php
                
                $indexCount++;
                // printf( '<li>
                //             <a href="%1$s">%2$s</a>
                //             <div> %3$s </div>
                //         </li>',
                //     $recent['ID'],
                //     $recent['post_content'],
                //     print_r(array_keys($recent))
                // );
            }
        ?>
    </div>

</section>