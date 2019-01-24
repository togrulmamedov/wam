<?php

require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';    // https://github.com/wp-bootstrap/wp-bootstrap-navwalker
require_once get_template_directory() . '/classes/class-sidebar-walker.php';
require_once get_template_directory() . '/functions/admin.php'; // administration panel settings
require_once get_template_directory() . '/functions/enqueue.php';

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
