<?php

function abroller_load_scripts() {
  	wp_enqueue_script( 'prism', get_template_directory_uri().'/scripts/prism.js', array(), '1.9.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'abroller_load_scripts' );

function abroller_load_style() {
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), '0.0.2', 'all' );
}

add_action( 'wp_enqueue_scripts', 'abroller_load_style' );