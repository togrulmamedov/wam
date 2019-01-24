<div class="wrap">
    <h1>Social Settings</h1>
    <?php settings_errors(); ?>
    <form method="post" action="options.php">
        <?php
            do_settings_sections('custom-settings');
            settings_fields('social-group');
            submit_button();
        ?>
    </form>
</div>