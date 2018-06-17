<?php
    wp_register_style('opening-style', get_template_directory_uri().'/parts/opening/opening.css');
    wp_enqueue_style('opening-style');

    // wp_head();
?>

<section class="opening">
    <div class="opening-banner-container">
        <img class="opening-banner" src="<?php echo get_template_directory_uri()."/imgs/opening-bkg.jpg"; ?>"/>
    </div>

    <div class="about-us-container">
        <h3>Sobre a TUUT</h3>

        <div class="about-us-content-vertical-align">
            <div class="about-us-content">
                A <b>TUUT</b> conduz seu negócio com inteligência emocional, pensamento criativo e entusiasmo coletivo. Primando por uma comunicação integrada, nossa plataforma de atuação é múltipla e o nosso posicionamento é multidisciplinar. Aqui, a gente executa todo o projeto com estratégia, conceito, conteúdo e design. Raciocinamos em todas as mídias, viabilizando projetos para pequenas e grandes marcas, no Brasil e no exterior.
            </div>
        </div>

    </div>

</section>