<?php
    wp_register_style('projects-style', get_template_directory_uri().'/parts/projects/projects.css');
    wp_enqueue_style('projects-style');

    wp_register_script('projects-script', get_template_directory_uri().'/parts/projects/projects.js');
    wp_enqueue_script('projects-script');
?>

<section class="projects-section">
    
    <h3>Alguns de nossos projetos</h3>

    <div class="projects-container">
        <div class="projects-list">
        </div>

        <div class="project-area">
            <div class="project-description">
            </div>

            <div class="project-title-container">
                <div class="project-title">
                </div>
            </div>
        </div>
    </div>
</section>