<?php
/*
    Template Name: News template
*/
?>
<?php get_header(); ?>
<!-- заголовок -->
<div class="container-fluid mw-page--title text-center text-sm-left mt-3 mb-3">
    <h1><?php the_title(); ?></h1>
</div>
<!-- конец заголовка -->

<?php

    $args = array(
        'post_type' => 'post' ,
        'post_status' => 'publish',
        'orderby' => 'date' ,
        'order' => 'DESC' ,
        'posts_per_page' => 40,
        'category_name' => 'novosti',
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    );
    $q = new WP_Query($args);
    if ( $q->have_posts() ) {
        while ( $q->have_posts() ) {
            $q->the_post();
            get_template_part( 'content', get_post_format());
        }
        wp_reset_postdata();
    }

?>


<?php get_footer(); ?>