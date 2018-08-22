<?php
/**
 * Created by PhpStorm.
 * User: togrul.mamedov
 * Date: 22.08.2018
 * Time: 16:26
 */
?>

<?php get_header(); ?>
<?php // NEED TO CUSTOMIZE IT! ?>
<div class="container-fluid text-type">
    <h1 class="page-title"><?php the_title(); ?></h1>

    <?php if (have_posts()) :while (have_posts()) : the_post(); ?>
        <?php if (has_post_thumbnail()){
            the_post_thumbnail('medium', array('class' => 'alignleft'));
        } ?>
        <div class="post-customized">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
