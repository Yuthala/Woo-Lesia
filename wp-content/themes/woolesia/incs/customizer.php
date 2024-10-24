<?php

add_action( 'customize_register', function( WP_Customize_Manager $wp_customize ) {
	$wp_customize->add_section( 'woolesia_theme_options', array( //woolesia_theme_settings - ID секции
		'title' => __('Theme options', 'woolesia'),
		'priority' => 10,
	) );

	//phone
	$wp_customize->add_setting('woolesia_phone'); //option, параметры array() необязательные
	$wp_customize->add_control('woolesia_phone', array( //control
		'label' => __('Phone in header', 'woolesia'),//подпись для поля
		'section' => 'woolesia_theme_options', //в какую секцию  добавить этот control (указать ID секции)
	));

	//youtube
	$wp_customize->add_setting('woolesia_youtube'); //option, параметры array() необязательные
	$wp_customize->add_control('woolesia_youtube', array( //control
		'label' => __('Youtube link', 'woolesia'),//подпись для поля
		'section' => 'woolesia_theme_options', //в какую секцию  добавить этот control (указать ID секции)
	));

	//facebook
	$wp_customize->add_setting('woolesia_facebook'); //option, параметры array() необязательные
	$wp_customize->add_control('woolesia_facebook', array( //control
		'label' => __('Facebook link', 'woolesia'),//подпись для поля
		'section' => 'woolesia_theme_options', //в какую секцию  добавить этот control (указать ID секции)
	));

	//Instagram
	$wp_customize->add_setting('woolesia_instagram'); //option, параметры array() необязательные
	$wp_customize->add_control('woolesia_instagram', array( //control
		'label' => __('Instagram link', 'woolesia'),//подпись для поля
		'section' => 'woolesia_theme_options', //в какую секцию  добавить этот control (указать ID секции)
	));
});

function woolesia_theme_options() {
	return array(
		'phone' => get_theme_mod('woolesia_phone'),
		'youtube' => get_theme_mod('woolesia_youtube'),
		'facebook' => get_theme_mod('woolesia_facebook'),
		'instagram' => get_theme_mod('woolesia_instagram'),
	);
}