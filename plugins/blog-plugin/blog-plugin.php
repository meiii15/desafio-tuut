<?php
    /**
     * Plugin Name: Blog
     * Plugin URI: https://github.com/meiii15/teste-tuut.git
     * Description: This plugin allow you to add blog posts in read me later lists using Ajax
     * Version: 1.0.0
     * Author: Meirilene Nascimento
     * Author URI: https://github.com/meiii15
     * License: GPL3
     */

    class Blog{
        function __construct()
        {
            add_action('wp_ajax_', array($this, 'fetch_recent_posts'));
        }
        
        public function fetch_recent_posts()
        {
            $recent_posts = wp_get_recent_posts();

            return wp_send_json($recent_posts);
        }
    }
?>