<?php

function loadThemeResources() {
	// Get the timestamp the files were created to create version number for caching
	$styleVersion = filemtime( get_stylesheet_directory() . '/a/css/style.css' );
	$swiperCssVersion = filemtime( get_stylesheet_directory() . '/a/css/swiper.min.css' );
	$swiperLazyVersion = filemtime( get_stylesheet_directory() . '/a/css/swiper-lazy-min.css' );
	
	// CSS
	wp_enqueue_style( 'template', get_template_directory_uri() . '/style.css', array(), $styleVersion );
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/a/css/style.css', array(), $styleVersion );
	wp_enqueue_style( 'swiper_css', get_template_directory_uri() . '/a/css/swiper.min.css', array(), $swiperCssVersion );
	wp_enqueue_style( 'swiper_lazy_css', get_template_directory_uri() . '/a/css/swiper-lazy-min.css', array(), $swiperLazyVersion );
	wp_enqueue_style( 'typekit','https://use.typekit.net/xyj0qzk.css');
	wp_enqueue_style( 'googlefonts','https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap');
	
	$jsVersion = filemtime( get_stylesheet_directory() . '/a/js/theme.js' );
	$swiperJsVersion = filemtime( get_stylesheet_directory() . '/a/js/swiper.min.js' );

	// JavaScript
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/a/js/theme.js', array('jquery'), $jsVersion, true );
	wp_enqueue_script( 'swiper_js', get_template_directory_uri() . '/a/js/swiper.min.js', array('jquery'), $swiperJsVersion, true );
}
add_action( 'wp_enqueue_scripts', 'loadThemeResources' );
