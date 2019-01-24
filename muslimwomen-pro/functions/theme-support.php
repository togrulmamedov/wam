<?php

/*
===============================
    Theme Support Options
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