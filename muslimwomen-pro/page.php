<?php
/**
 * Created by PhpStorm.
 * User: togrul.mamedov
 * Date: 22.08.2018
 * Time: 15:55
 */
?>
<?php get_header(); ?>

<?php
if (have_posts()) :while (have_posts()) : the_post();
    get_template_part( 'single', get_post_format());
endwhile; endif;
?>

<?php get_footer(); ?>