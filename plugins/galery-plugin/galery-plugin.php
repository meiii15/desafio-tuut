<?php
    /**
     * Plugin Name: Galery
     * Plugin URI: https://github.com/meiii15/teste-tuut.git
     * Description: 
     * Version: 1.0.0
     * Author: Meirilene Nascimento
     * Author URI: https://github.com/meiii15
     * License: GPL3
     */
    
    class Galery{
        function __construct(){
            add_action('wp_ajax_get_images_galery', array($this , '__get_galery'));
            add_action('wp_ajax_nopriv_get_images_galery', array($this , '__get_galery'));
        }
        
        public function __get_galery(){
            $query_images_args = array(
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'post_status'    => 'inherit',
                'posts_per_page' => - 1,
            );
        
            $query_images = new WP_Query( $query_images_args );

            $images_urls = [];
            
            foreach($query_images->posts as $currentPost)
            {
                array_push($images_urls, $currentPost->guid);
            }
            
            wp_send_json($images_urls);
        }
    }

    function Galery(){
        global $galery;

        if(!isset($galery)){
            $galery = new Galery();
        }

        return $galery;
    }

    Galery();
?>