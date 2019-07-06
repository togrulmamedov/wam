<?php
?>
<nav class="col-md-2 d-none d-md-block mw-sidebar">
    <!-- <div class="mw-sidebar\-sticky"> -->
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container' => 'div',
                    'container_class' => 'mw-sidebar--sticky',
                    'menu_class' => 'mw-menu',
                    'walker' => new SidebarWalker()
                )
            );
        ?>
</nav>