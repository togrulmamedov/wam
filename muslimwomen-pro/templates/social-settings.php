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