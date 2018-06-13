<?php
    /**
     * Plugin Name: Projects
     * Plugin URI: https://github.com/meiii15/teste-tuut.git
     * Description: 
     * Version: 1.0.0
     * Author: Meirilene Nascimento
     * Author URI: https://github.com/meiii15
     * License: GPL3
     */

    class Projects{
        /*ATUALIZA TABELAS PARA PROJETOS QUANDO NECESSÁRIO*/
        function _update_database()
        {
            global $wpdb;
            
            $table_projects_name = $wpdb->prefix . 'projects';

            $charset_collate = $wpdb->get_charset_collate();
            
            $sql = "CREATE TABLE $table_projects_name(
                id INT NOT NULL AUTO_INCREMENT,
                title VARCHAR(100) NOT NULL,
                description TEXT,
                PRIMARY KEY(id)
            ) $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );            
        }
        
        /*CONFIGURA PLUGIN*/
        function _setup()
        {
            $this->_update_database();
            add_action('wp_ajax_fetch_projects', array($this, '__fetch_projects'));
            add_action('wp_ajax_nopriv_fetch_projects', array($this, '__fetch_projects'));
        }

        function __construct(){
            $this->_setup();
        }

        /*OBTEM TODOS OS PROJETOS*/
        public function __fetch_projects(){
            global $wpdb;

            $projects = $wpdb->get_results("SELECT * FROM wp_projects;");

            return wp_send_json($projects);
        }
    }

    function Projects(){
        global $projs;

        if(!isset($projs)){
            $projs = new Projects();
        }

        return $projs;
    }
    
    
    /*INITIALIZE*/
    Projects();
?>