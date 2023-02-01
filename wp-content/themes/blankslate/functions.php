<?php
add_action( 'wp_enqueue_scripts', 'blankslate_enqueue' );
function blankslate_enqueue() {
wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
}


//Include ACF Block
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/testimonial' );
    register_block_type( __DIR__ . '/blocks/contacts' );
    register_block_type( __DIR__ . '/blocks/faqs' );
}