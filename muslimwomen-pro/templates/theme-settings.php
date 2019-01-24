<div class="wrap">
    <h1>Theme Options</h1>
    <?php settings_errors(); ?>
    <form method="post" action="options.php">
        <?php
            do_settings_sections('custom-settings-theme');
            settings_fields('theme-group');
            submit_button();
        ?>
    </form>
</div>