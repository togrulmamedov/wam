<?php


/*
==============================
    REMOVE WORDPRESS VERSIONS
==============================
*/

/**
 * Removes WP version from CSS and JS
 *
 * @param [type] $src
 * @return void
 */
function mw_remove_wp_version_strings($src){
    global $wp_version;

    parse_str(parse_url($src, PHP_URL_QUERY), $query);

    if (!empty($query['ver']) && ($query['ver'] === $wp_version)){
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}

add_filter('script_loader_src', 'mw_remove_wp_version_strings');
add_filter('style_loader_src', 'mw_remove_wp_version_strings');

/**
 * Removes WP version from <meta> tag
 *
 * @return void
 */
function mw_remove_wp_meta_version() {
    return '';
}

add_filter('the_generator', 'mw_remove_wp_meta_version');

/*
==============================
    
==============================
*/