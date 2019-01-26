<?php

require_once get_template_directory() . '/functions/cleanup.php';
require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';    // https://github.com/wp-bootstrap/wp-bootstrap-navwalker
require_once get_template_directory() . '/classes/class-sidebar-walker.php';
require_once get_template_directory() . '/functions/admin.php'; // administration panel settings
require_once get_template_directory() . '/functions/enqueue.php';
require_once get_template_directory() . '/functions/theme-support.php';

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