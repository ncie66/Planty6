<?php
    add_action( 'wp_enqueue_scripts', 'enqueue_astra_child_styles' );
    function enqueue_astra_child_styles() {
        wp_enqueue_style( 'astra-child-style', get_stylesheet_directory_uri() . '/style.css' );
    }

    function admin_menu( $items, $args ) {
        if ( $args->theme_location === 'primary' && is_user_logged_in() ) {
            $admin_link = '<li class="menu-item admin-link"><a href="' . admin_url() . '">Admin</a></li>';
            $items = preg_replace( '/(id="menu-item-222"[^>]*>.*?<\/li>)/', '$1' . $admin_link, $items );
        }
        
        return $items;
    }
    add_filter( 'wp_nav_menu_items', 'admin_menu', 10, 2 );
    
    
    
    
?>
