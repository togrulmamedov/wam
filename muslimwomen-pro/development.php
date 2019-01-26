<?php
/*
    Template Name: Development template
*/

?>
<?php get_header(); ?>
<div class="container-fluid text-type">
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