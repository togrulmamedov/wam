<?php

function custom_settings_add_menu(){
    // Generate 'Custom Settings' admin page
    add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page');

    // Generate 'Custom Settings' admin sub-page
    add_submenu_page('custom-settings', 'Custom Settings', 'Social', 'manage_options', 'custom-settings', 'custom_settings_page');
    add_submenu_page('custom-settings', 'Announcement Settings', 'Announcement', 'manage_options', 'custom-settings-announcement', 'custom_settings_announcement_page');
    add_submenu_page('custom-settings', 'MW Theme Settings', 'Theme Options', 'manage_options', 'custom-settings-theme', 'custom_settings_theme_page');

    // Activate 'Custom Settings'
    add_action('admin_init', 'custom_settings_init');
}

add_action('admin_menu', 'custom_settings_add_menu');

/*
===============================
    Include templates
===============================
 */
function custom_settings_page(){
    require_once get_template_directory() . '/templates/social-settings.php';
}

function custom_settings_announcement_page(){
    require_once get_template_directory() . '/templates/announcement-settings.php';
}

function custom_settings_theme_page(){
    require_once get_template_directory() . '/templates/theme-settings.php';
}

/*
===============================
    Define fields
===============================
 */
function setting_facebook(){ 
    echo '<input type="text" name="facebook" id="facebook" value="' . esc_attr(get_option('facebook')) . '"/>';
}

function setting_instagram(){ 
    echo '<input type="text" name="instagram" id="instagram" value="' . esc_attr(get_option('instagram')) . '"/>';
}

function setting_youtube(){ 
    echo '<input type="text" name="youtube" id="youtube" value="' . esc_attr(get_option('youtube')) . '"/>';
}

function setting_announcement(){
    $announcement = esc_attr(get_option('announcement'));

    if (empty($announcement)){
        echo '<input type="button" class="button button-secondary" value="Upload announcement" id="upload-announcement"/>';
        echo '<input type="hidden" id="image-announcement" name="announcement" value="' . $announcement . '"/>';
    } else {
        echo '<input type="button" class="button button-secondary" value="Replace announcement" id="upload-announcement"/>';
        echo '<input type="hidden" id="image-announcement" name="announcement" value="' . $announcement . '"/>';
        echo '<input type="button" class="button button-secondary" value="Delete announcement" id="delete-announcement"/>';
    }
}

function setting_post_formats(){
    $options = get_option('mw_post_formats');
    $formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
    $output = '';

    foreach ($formats as $format){
        $checked = (@$options[$format] == 1) ? 'checked' : '';
        $output .= '<label><input type="checkbox" id="post-' . $format . '" name="mw_post_formats[' . $format . ']" value="v-' . $format . '"' . $checked . '/>' . $format . '</label><br />';
    }

    echo $output;
}

function setting_custom_header(){
    $options = get_option('mw_custom_header');
    $checked = (@$options == 1) ? 'checked' : '';
    echo '<label><input type="checkbox" id="mw-custom-header" name="mw-custom-header" value="custom_header"' . $checked . '/>Activate custom header</label><br />';
}

function setting_custom_background(){
    $options = get_option('mw_custom_background');
    $checked = (@$options == 1) ? 'checked' : '';
    echo '<label><input type="checkbox" id="mw-custom-background" name="mw-custom-background" value="custom_background"' . $checked . '/>Activate custom background</label><br />';
}

/**
 * Initializing social settings fields on custom settings page.
 */
function custom_settings_init(){
    //Social
    add_settings_section('social-section', 'Social Settings', null, 'custom-settings');

    add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'custom-settings', 'social-section');
    add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'custom-settings', 'social-section');
    add_settings_field('youtube', 'Youtube URL', 'setting_youtube', 'custom-settings', 'social-section');

    register_setting('social-group', 'facebook');
    register_setting('social-group', 'instagram');
    register_setting('social-group', 'youtube');

    // Announcement
    add_settings_section('announcement-section', 'Announcement Settings', null, 'custom_settings_announcement_page');

    add_settings_field('announcement', 'Upload image', 'setting_announcement', 'custom-settings-announcement', 'announcement-section');
    
    register_setting('announcement-group', 'announcement');

    // Theme Options
    add_settings_section('theme-section', 'Theme Options', null, 'custom_settings_theme_page');

    add_settings_field('formats', 'Post Formats', 'setting_post_formats', 'custom-settings-theme', 'theme-section');
    add_settings_field('header', 'Custom Header', 'setting_custom_header', 'custom-settings-theme', 'theme-section');
    add_settings_field('background', 'Custom Background', 'setting_custom_background', 'custom-settings-theme', 'theme-section');

    register_setting('theme-group', 'mw_post_formats');
    register_setting('theme-group', 'mw_custom_header');
    register_setting('theme-group', 'mw_custom_background');
}

/*
===============================
    Callbacks
===============================
 */
