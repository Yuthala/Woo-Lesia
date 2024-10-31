<?php 

add_action( 'init', function() {
	register_post_type( 'slider', array(
		'labels' => array(
			'name' => __( 'Slider', 'woolesia' ),
			'singualar_name' => __( 'Slider', 'woolesia'),
			'add_new' => __( 'Add new slide', 'woolesia'),
			'add_new_item' => __( 'New slide', 'woolesia'),
			'edit_item' => __( 'Edit', 'woolesia'),
			'new_item' => __( 'New slide', 'woolesia'),
			'view_item' => __( 'View', 'woolesia'),
			'menu_name' => __( 'Slider', 'woolesia'),
			'all_items' => __( 'All slides', 'woolesia'),
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail'),//необходимые поля (заголовок, контент, картинка)
		'menu_icon' => 'dashicons-format-gallery',//иконка из галереи WP
		'show_in_rest' => true, //чтобы работал Gutenberg
	));
});