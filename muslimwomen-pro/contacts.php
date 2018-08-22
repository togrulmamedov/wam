<?php
/**
 * Created by PhpStorm.
 * User: togrul.mamedov
 * Date: 22.08.2018
 * Time: 16:25
 */
?>

<?php get_header(); ?>

<div class="container-fluid" style="margin-bottom: 10px">
    <?php echo do_shortcode('[put_wpgm id=1]'); ?>
</div>

<?php if (have_posts()) :while (have_posts()) : the_post(); ?>
    <div class="container-fluid">
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
