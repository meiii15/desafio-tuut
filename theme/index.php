<?php
    get_header();
?>

<body>
    <?php get_template_part('parts/opening/opening')?>
    <?php get_template_part('parts/galery/galery')?>
    <?php get_template_part('parts/projects/projects')?>
    <?php get_template_part('parts/blog/blog')?>
    <?php get_template_part('parts/footer/footer')?>
</body>

<?php
    wp_head();
?>