<?php 


		function out($var) {
            echo '<pre>';
            print_r($var);
            echo '</pre>';

        }

        function register_my_menus() {
          register_nav_menu('main-menu',__( 'Main Menu' ));
          register_nav_menu('footer-menu',__( 'Footer Menu' ));
        }
        add_action( 'init', 'register_my_menus' );

   add_theme_support( 'post-thumbnails' ); 



  add_action( 'wp', 'redirect_single_to_catalog' );

    function redirect_single_to_catalog() {
      if ( is_product() ) {
        global $post;        
          wp_redirect(get_bloginfo('url'). '/shop/#' . $post->post_name);

      }

    }