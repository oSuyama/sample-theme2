<?php
/**
*テーマ機能追加
*
*@version 1.0.0
*@since 1.0.0
*@author h.suyama
*
*
*
*/
function theme_setup(){
add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


register_nav_menus(
	 array(
		 'primary2' => 'Primary Menu2'
));
}
add_action('after_setup_theme','theme_setup');

/**
*スタイルシートの追加
*
*@version 1.0.0
*@since 1.0.0
*@author h.suyama
*
*
*
*/
function theme_style(){
	wp_enqueue_style('theme_common', get_template_directory_uri().'/css/common.css');
	wp_enqueue_style('theme-style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','theme_style');
