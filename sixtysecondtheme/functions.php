<?php

function load_css() {
	wp_enqueue_style( 'sixtysecondtheme_stylesheet', get_stylesheet_uri() );
	wp_enqueue_style( 'sixtysecondtheme_gfonts', 'https://fonts.googleapis.com/css?family=Bentham|PT+Serif:400,700,400italic,700italic' );
}

add_action( 'wp_enqueue_scripts', 'load_css' );

?>