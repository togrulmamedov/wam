<?php

/**
 * Loads scripts for administration panel
 *
 * @return void
 */
function mw_load_admin_scripts($hook){
    if('custom-settings_page_custom-settings-announcement' != $hook) {
        return;
    }

    // CSS
    wp_register_style('mw-admin-style', get_template_directory_uri() . '/css/mw-admin.css', array(), '1.0.0', 'all');
    wp_enqueue_style('mw-admin-style');

    // MEDIA
    wp_enqueue_media();

    // JS
    wp_register_script('mw-admin-script', get_template_directory_uri() . '/js/mw-admin.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mw-admin-script');
}

add_action('admin_enqueue_scripts', 'mw_load_admin_scripts');

/**
 * Loads scripts for front-end
 *
 * @return void
 */
function mw_load_site_scripts(){
    // CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.2', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.css', array(), '5.2.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.1.0', 'all');
    wp_enqueue_style('side-button', get_template_directory_uri() . '/css/side-button.css', array(), '1.0.1', 'all');
    wp_enqueue_style('loader', get_template_directory_uri() . '/css/loader.css', '1.0.0', array(), 'all');
    wp_enqueue_style('blogs', get_template_directory_uri() . '/css/blogs.css', '1.1.0', array(), 'all');
    wp_enqueue_style('add-google-font', 'https://fonts.googleapis.com/css?family=Pattaya', false);

    // JS
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.js', array(), '3.3.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.2', true);
    wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'loader', get_template_directory_uri() . '/js/loader.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'mw_load_site_scripts');