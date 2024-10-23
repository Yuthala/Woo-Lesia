<?php

add_action( 'customize_register', function( WP_Customize_Manager $wp_customize ) {
	$wp_customize->add_section( 'woolesia_theme_options', array( //woolesia_theme_settings - ID секции
		'title' => __('Theme options', 'woolesia'),
		'priority' => 10,
	) );

	//phone
	$wp_customize->add_setting('woolesia_phone'); //option, параметры array() необязательные
	$wp_customize->add_control('woolesia', array( //control
		'label' => __('Phone in header', 'woolesia'),//подпись для поля
		'section' => 'woolesia_theme_options', //в какую секцию  добавить этот control (указать ID секции)
	));
});