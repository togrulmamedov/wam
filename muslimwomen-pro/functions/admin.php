<?php

function custom_settings_add_menu(){
    // Generate 'Custom Settings' admin page
    add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page');

    // Generate 'Custom Settings' admin sub-page
    add_submenu_page('custom-settings', 'Custom Settings', 'Social', 'manage_options', 'custom-settings', 'custom_settings_page');
    add_submenu_page('announcement-settings', 'Announcement Settings', 'Announcement', 'manage_options', 'custom-settings-announcement', 'custom_settings_announcement_page');

    // Activate 'Custom Settings'
    add_action('admin_init', 'social_settings_init');
}

add_action('admin_menu', 'custom_settings_add_menu');

function custom_settings_page(){
    require_once get_template_directory() . '/templates/social-settings.php';
}

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
    echo '<input type="button" class="button button-secondary" value="Upload image" id="upload-announcement"/>';
    echo '<input type="hidden" id="image-announcement" name="announcement" value="' . esc_attr(get_option('announcement')) . '"/>';
}

/**
 * Initializing social settings fields on custom settings page.
 */
function social_settings_init(){
    add_settings_section('social-section', 'Social Settings', null, 'custom-settings');

    add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'custom-settings', 'social-section');
    add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'custom-settings', 'social-section');
    add_settings_field('youtube', 'Youtube URL', 'setting_youtube', 'custom-settings', 'social-section');

    register_setting('social-group', 'facebook');
    register_setting('social-group', 'instagram');
    register_setting('social-group', 'youtube');
}

function announcement_settings_init(){
    add_settings_section('announcement-section', 'Announcement Settings', null, 'announcement-settings');

    add_settings_field('announcement', 'Upload image', 'setting_announcement', 'announcement-settings', 'announcement-section');
    
    register_setting('announcement-group', 'announcement');
}