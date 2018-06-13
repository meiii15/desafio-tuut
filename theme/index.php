<?php
    get_header();
?>

<body>
    <div class="header">
        <!--FIXME: LOGO DEVE VIR AQUI-->
        <h1>TUUT</h1>
        <ul>
            <li>Home</li>
            <li>Sobre</li>
            <li>Contato</li>
        </ul>
    </div>

    <?php get_template_part('parts/opening/opening')?>
    <?php get_template_part('parts/galery/galery')?>
    <?php get_template_part('parts/projects/projects')?>
    <?php get_template_part('parts/blog/blog')?>
    <?php get_template_part('parts/footer/footer')?>
</body>

<?php
    wp_head();
?>