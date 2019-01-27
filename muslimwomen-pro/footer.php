</main>
<!-- конец основного контента -->

<!-- подвал -->
<footer class="footer">
    <div class="container">
        <span class="footer-phrase">Всегда с ВАМи!</span>
        <div class="social-footer d-flex flex-row justify-content-center align-items-center">
            <a class="mw-social--link" href="<?php echo get_option('facebook'); ?>">
                <img class="mw-icon" src="<?php bloginfo('template_directory'); ?>/icons/facebook.svg" />
            </a>
            <a class="mw-social--link" href="<?php echo get_option('instagram'); ?>">
                <img class="mw-icon" src="<?php bloginfo('template_directory'); ?>/icons/instagram.svg" />
            </a>
            <a class="mw-social--link" href="<?php echo get_option('youtube'); ?>">
                <img class="mw-icon" src="<?php bloginfo('template_directory'); ?>/icons/youtube.svg" />
            </a>
            <a class="mw-social--link" href="<?php echo get_option('telegram'); ?>">
                <img class="mw-icon" src="<?php bloginfo('template_directory'); ?>/icons/telegram.svg" />
            </a>
        </div>
    </div>
</footer>
<!-- конец подвала -->
</div>
</div>
</div>

<?php if (!empty(get_option('announcement'))): ?>
    <!-- объявление -->
    <div id="feedback">
        <a href="#popup1">Объявление!</a>
    </div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <div class="div1">
                <a class="close" href="#">
                    <i class="fas fa-times fa-2x"></i>
                </a>
                <img class="popup-image" src="<?php echo get_option('announcement'); ?>" alt="Adverts">
            </div>
        </div>
    </div>
    <!-- конец объявления -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
