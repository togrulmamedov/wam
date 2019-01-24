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