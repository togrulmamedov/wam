<?php
/*
    Template Name: Home template
*/
?>
<?php get_header(); ?>

    <div class="container-fluid">
        <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-between">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 20,
                    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                    'post_parent' => $parent
                );
                
                $q = new WP_Query($args);

                if ($q->have_posts()){
                    while ($q->have_posts()){
                        $q->the_post();
                        get_template_part('index-content', get_post_format());  // if the post format is video, then the template will be 'index-content-video'
                    }
            ?>

            <!-- pagination -->
            <div>
                <?php next_posts_link('< Older Posts', 2); ?>
                <?php previous_posts_link('Newer Posts >', 2); ?>
            </div>

            <?php
                }

                wp_reset_postdata();
            ?>
        </div>
    </div>

<?php get_footer(); ?>