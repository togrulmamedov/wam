<?php

/*
===============================
    THEME SUPPORT OPTIONS
===============================
*/

$options = get_option('mw_post_formats');
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();

foreach ($formats as $format){
    $output[] = (@$options[$format] == 1) ? $format : '';
}

if (!empty($options)){
    add_theme_support('post-formats', $output);
}

$headerOption = get_option('mw_custom_header');

if (@$headerOption == 1){
    add_theme_support('custom-header');
}

$backgroundOption = get_option('mw_custom_background');

if (@$backgroundOption == 1){
    add_theme_support('custom-background');
}

/*
==============================
    THEME SUPPORT SETUPS
==============================
*/

function mw_theme_setup(){
    add_theme_support('menus');
}

add_action('init', 'mw_theme_setup');

add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));

function mw_get_embedded_media($type = array()){
    $content = do_shortcode(apply_filters('the_content', get_the_content()));
    $embed = get_media_embedded_in_content($content, $type);

    if (in_array('audio', $type)){
        return str_replace('?visual=true', '?visual=false', $embed[0]);
    }

    return $embed[0];
}

add_filter('body_class','alter_search_classes');
function alter_search_classes($classes) {
    if(is_search()){
       return array();
    } else {
       return $classes;
    }

}

/*
==============================
    CUSTOM STRINGS (POLYLANG)
==============================
*/

function mw_register_strings(){
    pll_register_string('mw-pro', 'Всегда с ВАМи!');
    pll_register_string('mw-pro', 'Объявление!');
    pll_register_string('mw-pro', 'Поиск');
    pll_register_string('mw-pro', 'Результаты поиска');
    pll_register_string('mw-pro', 'найдено');
    pll_register_string('mw-pro', '04071, г. Киев, ул. Лукьяновская 46');

    pll_register_string('mw-pro', 'Главная');
    pll_register_string('mw-pro', 'Медиа');
    pll_register_string('mw-pro', 'Интересное');
    pll_register_string('mw-pro', 'Контакты');

}

add_action('init', 'mw_register_strings');

/*
==============================
    NAVIGATION MENUS
==============================
*/

function mw_register_menus(){
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'Sidebar menu'),
            'secondary' => __('Secondary Menu', 'Mobile nav')
        )
    );
}

add_action('init', 'mw_register_menus');

/*
==============================
    PAGINATION
==============================
*/

ini_set( 'mysql.trace_mode', 0 );

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="page-link"';
}

/*
==============================
    WIDGET AREAS
==============================
*/

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Language switcher area',
		'id'            => 'mw-lang-switch',
		'before_widget' => '<div class="mw-lang form-group">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}

add_action( 'widgets_init', 'arphabet_widgets_init' );
?>