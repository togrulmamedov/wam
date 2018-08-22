<?php
/**
 * Created by PhpStorm.
 * User: togrul.mamedov
 * Date: 22.08.2018
 * Time: 16:25
 */
?>

<?php get_header(); ?>
    <!-- заголовок -->
    <div class="container-fluid mw-page--title text-center text-sm-left mt-3 mb-3">
        <h1><?php the_title(); ?></h1>
    </div>
    <!-- конец заголовка -->

    <div class="container-fluid text-justify">
        <!-- основной контент -->
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile; endif;
        ?>
        <!-- конец основного контента -->
    </div>

<?php get_footer(); ?>