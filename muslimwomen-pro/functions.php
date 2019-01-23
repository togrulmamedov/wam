<?php

require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';    // https://github.com/wp-bootstrap/wp-bootstrap-navwalker
require_once get_template_directory() . '/classes/class-sidebar-walker.php';

function startwordpress_scripts() {
    //  STYLES
    // wp_register_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // wp_enqueue_style('font-awesome');

    wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', '4.1.2', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri(), '/fontawesome/css/all.css', '5.2.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri(). '/style.css', '1.0.1', 'all');
    wp_enqueue_style('side-button', get_template_directory_uri(), '/css/side-button.css', '1.0.0', 'all');
    wp_enqueue_style('loader', get_template_directory_uri(), '/css/loader.css', '1.0.0', 'all');

    // wp_enqueue_style('gallery', get_template_directory_uri(). '/css/gallery.css');
    // wp_enqueue_style('map', get_template_directory_uri(). '/css/map.css');
    // wp_enqueue_style('menu', get_template_directory_uri(). '/css/menu.css');
    // wp_enqueue_style('news', get_template_directory_uri(). '/css/news.css');
    // wp_enqueue_style('sidebar-addon', get_template_directory_uri(). '/css/sidebar-addon.css');
    // wp_enqueue_style('simple-sidebar', get_template_directory_uri(). '/css/simple-sidebar.css');
    // wp_enqueue_style('social', get_template_directory_uri(). '/css/social.css');
    // wp_enqueue_style('styles', get_template_directory_uri(). '/css/styles.css');
    // wp_enqueue_style('toggle', get_template_directory_uri(). '/css/toggle.css');
    

    // SCRIPTS
    // wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', null, null, true);
    // wp_enqueue_script('popper');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery.min.js', array(), '3.3.1');
    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array(), '4.1.2', true);
    // wp_enqueue_script('google', get_template_directory_uri(). '/js/google.js', array('jquery'), null, true);
    wp_enqueue_script('menu', get_template_directory_uri(). '/js/menu.js', array('jquery'), null, true);
    wp_enqueue_script( 'loader', get_template_directory_uri(), '/js/loader.js', array('jquery'), null, true);
    // wp_enqueue_script('toggle', get_template_directory_uri(). '/js/toggle.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'startwordpress_scripts');

/*
==============================
    ADDING CUSTOM SETTINGS
==============================
*/

function custom_settings_add_menu() { //removed null and 99 at the end
    add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page');
}

add_action('admin_menu', 'custom_settings_add_menu');


function custom_settings_page() { ?>
    <div class="wrap">
        <h1>Social Settings</h1>
        <form method="post" action="options.php">
            <?php
            do_settings_sections('theme-options');
            settings_fields('custom');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function setting_facebook() { ?>
    <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
    <?php
}

function setting_instagram() { ?>
    <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
    <?php
}

function setting_youtube() { ?>
    <input type="text" name="youtube" id="youtube" value="<?php echo get_option('youtube'); ?>" />
    <?php
}

function setting_banner() { ?>
    <input type="text" name="banner" id="banner" value="<?php echo get_option('banner'); ?>" />
    <?php
}

function setting_banner_width() { ?>
    <input type="number" name="banner-width" id="banner-width" value="<?php echo get_option('banner-width'); ?>" />
    <?php
}

function setting_banner_height() { ?>
    <input type="number" name="banner-height" id="banner-height" value="<?php echo get_option('banner-height'); ?>" />
    <?php
}

function setting_advert() { ?>
    <input type="text" name="advert" id="advert" value="<?php echo get_option('advert'); ?>" />
    <?php
}

function setting_advert_width() { ?>
    <input type="number" name="advert-width" id="advert-width" value="<?php echo get_option('advert-width'); ?>" />
    <?php
}

function setting_advert_height() { ?>
    <input type="number" name="advert-height" id="advert-height" value="<?php echo get_option('advert-height'); ?>" />
    <?php
}

add_action('admin_init', 'social_settings_init');
function social_settings_init() {
    add_settings_section('section', 'Social Settings', null, 'theme-options');
    add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
    add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');
    add_settings_field('youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section');

    register_setting('custom', 'facebook');
    register_setting('custom', 'instagram');
    register_setting('custom', 'youtube');

}

add_action('admin_init', 'banner_settings_init');
function banner_settings_init() {
    add_settings_section('banner-section', 'Banner Settings', null, 'theme-options');
    add_settings_field('banner', 'Banner image URL', 'setting_banner', 'theme-options', 'banner-section');
    add_settings_field('banner-width', 'Image width', 'setting_banner_width', 'theme-options', 'banner-section');
    add_settings_field('banner-height', 'Image height', 'setting_banner_height', 'theme-options', 'banner-section');

    register_setting('custom', 'banner');
    register_setting('custom', 'banner-width');
    register_setting('custom', 'banner-height');
}

add_action ('admin_init', 'advert_settings_init');
function advert_settings_init() {
    add_settings_section('advert-section', 'Advert Settings', null, 'theme-options');
    add_settings_field('advert', 'Advert image URL', 'setting_advert', 'theme-options', 'advert-section');
    add_settings_field('advert-width', 'Image width', 'setting_advert_width', 'theme-options', 'advert-section');
    add_settings_field('advert-height', 'Image height', 'setting_advert_height', 'theme-options', 'advert-section');

    register_setting('custom', 'advert');
    register_setting('custom', 'advert-width');
    register_setting('custom', 'advert-height');
}

/*
==============================
    ADDING THEME SUPPORT
==============================
*/

function mw_theme_setup(){
    add_theme_support('menus');
}

add_action('init', 'mw_theme_setup');

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('gallery', 'video'));
add_theme_support('html5', array('search-form'));

/*
==============================
    IMAGE SIZES
==============================
*/

add_image_size('custom-medium', 260, 180, true);    // name, width, height, crop

add_filter('image_size_names_choose', 'wpshout_custom_sizes');

function wpshout_custom_sizes($sizes){
    return array_merge($sizes, array(
        'custom-medium' => __('Custom Medium'),
    ));
}

/*
==============================
    INITIALIZE WIDGETS ADMIN MENU
==============================
*/

function mw_widgets_init(){

    // register_sidebar(array(
    //     'name' => 'Header widget zone',
    //     'id' => 'header-lang',
    //     'before_widget' => '<div class="header-lang--widget">',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h2>',
    //     'after_title' => '</h2>',
    // ));

    // to add another one - add another register_sidebar
    register_sidebar(
        array(
            'name' => 'Sidebar menu',
            'id' => 'sidebar-menu',
            'before_widget' => '<nav class="col-md-2 d-none d-md-block mw-sidebar">',
            'after_widget' => '</nav>'
        )
    );
}
add_action( 'widgets_init', 'mw_widgets_init' );

/*
==============================
    NAVIGATION MENUS
==============================
*/
register_nav_menus(
    array(
        'primary' => __('Primary Menu', 'Sidebar menu'),
        'secondary' => __('Secondary Menu', 'Mobile nav')
    )
);

/*
==============================
    HEADER FUNCTIONS
==============================
*/

function mw_remove_version() {
    return '';
}

add_filter('the_generator', 'mw_remove_version');

/*
==============================
    
==============================
*/
?>
