<?php
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css');
    
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap');

    wp_register_script('jquery', get_template_directory_uri().'/assets/jquery/js/jquery-3.3.1.min.js');
    wp_register_script('bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.js');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
?>