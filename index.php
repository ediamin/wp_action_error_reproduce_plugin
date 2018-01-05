<?php
/**
 * Plugin Name: action error reproduce test plugin
 */

add_action( 'admin_enqueue_scripts', function () {
    $assets =  plugins_url( '', __FILE__ );

    wp_enqueue_script( 'test-script', plugins_url( '', __FILE__ ) . '/assets/js/script.js', ['jquery'], time(), true );

    wp_localize_script( 'test-script', 'foo', [
        'wp' => 'WordPress'
    ] );
} );
