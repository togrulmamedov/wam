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
                    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
                );

                $q = new WP_Query($args);

                if ($q->have_posts()){
                    while ($q->have_posts()){
                        $q->the_post();
                        get_template_part('index-content', get_post_format());  // if the post format is video, then the template will be 'index-content-video'
                    }
                }

                wp_reset_postdata();
            ?>
        </div>
    </div>

    <!-- pagination -->
    <nav aria-label="MW pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <?php next_posts_link('< Предыдущая'); ?>
            </li>
            <li class="page-item">
                <?php previous_posts_link('Следующая >'); ?>
            </li>
        </ul>
    </nav>

<?php get_footer(); ?>