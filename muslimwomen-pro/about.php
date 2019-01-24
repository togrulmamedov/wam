<?php
/*
    Template Name: About Template
*/
?>

<?php get_header(); ?>

    <div class="container-fluid mw-page--title text-center text-sm-left mt-3 mb-3">
        <h1><?php the_title(); ?></h1>
    </div>

    <div class="container-fluid text-justify">
        <?php
            if (have_posts()){
                while (have_posts()){
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>

<?php get_footer(); ?>