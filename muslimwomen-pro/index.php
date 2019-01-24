<?php
/**
 * Created by PhpStorm.
 * User: togrul.mamedov
 * Date: 22.08.2018
 * Time: 15:51
 */

?>
<?php get_header(); ?>

    <div class="container-fluid">
        <!-- основной контент -->
        <!-- HOMEPAGE MAIN CONTENT -->
        <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-between">
                <?php
                $args = array(
                    'post_type' => 'post' ,
                    'post_status' => 'publish',
                    'orderby' => 'date' ,
                    'order' => 'DESC' ,
                    'posts_per_page' => 20,
                    'paged' => get_query_var('paged'),
                    'post_parent' => $parent
                );
                $q = new WP_Query($args);
                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) {
                        $q->the_post();
                        get_template_part( 'index-content', get_post_format());
                    }
                    wp_reset_postdata();
                }
            ?>
        </div>
        <!-- /HOMEPAGE MAIN CONTENT -->
        <!-- конец основного контента -->
    </div>

<?php get_footer(); ?>