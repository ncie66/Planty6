<?php
    add_action( 'wp_enqueue_scripts', 'enqueue_astra_child_styles' );
    function enqueue_astra_child_styles() {
        wp_enqueue_style( 'astra-child-style', get_stylesheet_directory_uri() . '/style.css' );
    }
?>
