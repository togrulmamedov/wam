<div class="wrap">
    <h1>Announcement Settings</h1>
    <?php settings_errors(); ?>
    <form class="announcement-form" method="post" action="options.php">
        <?php
            do_settings_sections('custom-settings-announcement');
            settings_fields('announcement-group');
            submit_button('Save Changes', 'primary', 'submit-announcement');
        ?>
    </form>
    <div class="mw-admin--imageWrapper">
        <div class="mw-admin--announcement">
            <img id="mw-admin--announcementPreview" src="<?php print esc_attr(get_option('announcement')); ?>" />
        </div>
    </div>
</div>