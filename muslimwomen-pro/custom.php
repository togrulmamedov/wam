<?php get_header(); ?>
<!-- заголовок -->
<div class="container-fluid mw-page--title text-center text-sm-left mt-3 mb-3">
    <h1><?php the_title(); ?></h1>
</div>
<!-- конец заголовка -->

<?php
$categories = get_categories();
$currentName = 'none';

foreach($categories as $key => $value){
    if($categories[$key]->name == get_the_title()){
        $currentName = $categories[$key]->slug;
    }
}

if($currentName != 'none'){
    $args = array(
        'post_type' => 'post' ,
        'post_status' => 'publish',
        'orderby' => 'date' ,
        'order' => 'DESC' ,
        'posts_per_page' => 10,
        'category_name' => $currentName,
        'paged' => get_query_var('paged'),
        'post_parent' => $parent
    );
    $q = new WP_Query($args);
    if ( $q->have_posts() ) {
        while ( $q->have_posts() ) {
            $q->the_post();
            get_template_part( 'content', get_post_format());
        }
        wp_reset_postdata();
    }
}

?>


<?php get_footer(); ?>
