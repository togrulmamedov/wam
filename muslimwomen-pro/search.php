<?php get_header(); ?>

    <div class="container-fluid">
        <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
        ?>
        <h3 class="title-dark text-center text-sm-left mb-3"><?php pll_e('Результаты поиска'); ?> (<?php pll_e('найдено'); echo $total_results; ?>):</h3>
        <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-start">
            <?php
                if (have_posts()){
                    while (have_posts()){
                        the_post();
                        get_template_part('content', 'search');  // the template will be 'content-search'
                    }
                    wp_reset_postdata();
                }
            ?>
        </div>
    </div>

<?php get_footer(); ?>