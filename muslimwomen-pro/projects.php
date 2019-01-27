<?php
/*
    Template Name: Projects template
*/
?>

<?php get_header(); ?>
<!-- заголовок -->
<div class="container-fluid mw-page--title text-center text-sm-left mt-3 mb-3">
    <h1><?php the_title(); ?></h1>
</div>
<!-- конец заголовка -->
<div class="container-fluid">
    <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-start">
        <?php

            $args = array(
                'post_type' => 'post' ,
                'post_status' => 'publish',
                'orderby' => 'date' ,
                'order' => 'DESC' ,
                'posts_per_page' => 20,
                'category_name' => 'projects',
                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
            );
            $q = new WP_Query($args);
            if ( $q->have_posts() ) {
                while ( $q->have_posts() ) {
                    $q->the_post();
                    get_template_part( 'content', 'aside');
                }
                wp_reset_postdata();
            }

        ?>
    </div>
</div>

<?php get_footer(); ?>