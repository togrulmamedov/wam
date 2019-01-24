</main>
<!-- конец основного контента -->

<!-- подвал -->
<footer class="footer">
    <div class="container">
        <span>Всегда с ВАМи!</span>
        <div class="social-footer d-flex flex-row justify-content-center align-items-center">
            <a class="mw-social--link" href="<?php echo get_option('facebook'); ?>">
                <i class="fab fa-facebook-f fa-2x"></i>
            </a>
            <a class="mw-social--link" href="<?php echo get_option('instagram'); ?>">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a class="mw-social--link" href="<?php echo get_option('youtube'); ?>">
                <i class="fab fa-youtube fa-2x"></i>
            </a>
        </div>
    </div>
</footer>
<!-- конец подвала -->
</div>
</div>
</div>

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
            <img class="popup-image" src="<?php bloginfo('template_directory'); ?>/images/author.jpg" alt="Adverts">
        </div>
    </div>
</div>
<!-- конец объявления -->

<?php wp_footer(); ?>
</body>
</html>
