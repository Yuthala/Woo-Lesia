<?php

// https://woocommerce.com/document/woocommerce-theme-developer-handbook/#section-5
add_action( 'after_setup_theme', function () {
	load_theme_textdomain('woolesia', get_template_directory() . '/languages');
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag');

	register_nav_menus( 
		array(
			'header-menu' => __( 'Header menu', 'woolesia'),
		)
	);
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'woolesia-google-fonts','https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap' );
	wp_enqueue_style( 'woolesia-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'woolesia-fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css' );
	wp_enqueue_style( 'woolesia-main', get_template_directory_uri(  ) . '/assets/css/main.css' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'woolesia-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), false, true );
	wp_enqueue_script( 'woolesia-main',  get_template_directory_uri() . '/assets/js/main.js' );
} );

require_once get_template_directory() . '/incs/woocommerce-hooks.php';
require_once get_template_directory() . '/incs/class-woolesia-header-menu.php';
require_once get_template_directory() . '/incs/customizer.php';