<?php

function custom_settings_add_menu() {
    // Generate 'Custom Settings' admin page
    add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page');

    // Generate 'Custom Settings' admin sub-page
    add_submenu_page('custom-settings', 'Custom Settings', 'Social', 'manage_options', 'custom-settings', 'custom_settings_page');
    add_submenu_page('custom-settings', 'Banner Settings', 'Banner', 'manage_options', 'custom-settings-banner', 'custom_settings_banner_page');
}

add_action('admin_menu', 'custom_settings_add_menu');


function custom_settings_page() {
    require_once get_template_directory() . '/templates/social-settings.php';
}

function custom_settings_banner_page() {

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