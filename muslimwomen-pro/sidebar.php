<?php
    // dynamic_sidebar('sidebar-menu');
?>
<nav class="col-md-2 d-none d-md-block mw-sidebar">
    <!-- <div class="mw-sidebar--sticky"> -->
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
        <!-- <ul class="mw-menu">
            <li class="mw-menu--item"><a class="mw-menu--link" href="#">Мы</a></li>
            <li class="mw-menu--item"><a class="mw-menu--link" href="#">Главная</a></li>
            <li class="mw-menu--item"><a class="mw-menu--link" href="#">Деятельность "ВАМ"</a></li>
            <li class="mw-menu--item no-border">
                <a class="mw-menu--link" id="mw-media" href="#">
                    Медиа
                    <i class="fa fa-angle-down mw-angle"></i>
                </a>
                <hr class="mw-line"/>
                <ul class="sub-menu sub-menu--media">
                    <li class="sub-menu--item"><a class="sub-menu--link" href="#">Фотографии</a></li>
                    <li class="sub-menu--item"><a class="sub-menu--link" href="#">Видео</a></li>
                </ul>
            </li>
            <li class="mw-menu--item no-border">
                <a class="mw-menu--link" id="mw-interesting" href="#">
                    Интересное
                    <i class="fa fa-angle-down mw-angle"></i>
                </a>
                <hr class="mw-line"/>
                <ul class="sub-menu sub-menu--interesting">
                    <li class="sub-menu--item"><a class="sub-menu--link" href="#">Здоровье и красота</a></li>
                    <li class="sub-menu--item"><a class="sub-menu--link" href="#">Религия</a></li>
                    <li class="sub-menu--item"><a class="sub-menu--link" href="#">Семья</a></li>
                    <li class="sub-menu--item"><a class="sub-menu--link" href="#">Искусство</a></li>
                    <li class="sub-menu--item"><a class="sub-menu--link" href="#">Жизнь</a></li>
                    <li class="sub-menu--item"><a class="sub-menu--link" href="#">Кулинария</a></li>
                </ul>
            </li>
            <li class="mw-menu--item"><a class="mw-menu--link" href="#">Проекты</a></li>
            <li class="mw-menu--item"><a class="mw-menu--link" href="#">Контакты</a></li>
        </ul> -->
    <!-- </div> -->
</nav>