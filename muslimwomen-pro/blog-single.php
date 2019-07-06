<?php
/*
    Template Name: Single blog template
*/
?>
<?php get_header(); ?>
<!-- заголовок -->
<div class="container-fluid mw-page--title text-center text-sm-left mt-3 mb-3">
    <h1><?php the_title(); ?></h1>
</div>
<!-- конец заголовка -->

<?php
$cardText = '';
$cardTextMuted = '';
$avatarSrc = '';

switch (get_the_title()){
    case 'Готовим с Бисмилляh':
        $cardText = 'Я Марьям (<a href="https://www.instagram.com/marem_kiev/" target="_blank">@marem_kiev</a>), мама 6 деток. Готовить любила всегда, сколько себя помню. В детстве, когда мама готовила, любила наблюдать за ней, старалась запомнить, особенно когда она готовила из теста.
                                    А когда я сама стала мамой, то ещё более внимательно начала относиться к еде, а в частности к тому, что едят мои дети, родные, те, для кого я готовлю. Всегда хочется приготовить что-нибудь вкусненькое для них, порадовать, удивить.
                                    А идея сделать страницу пришла спонтанно. Дело в том, что у моих подруг и знакомых стало уже сложившейся традицией спрашивать у меня рецепты.
                                    И тогда пришла мысль расширить аудиторию моих советов. Вместо того, чтобы каждой по отдельности обьяснять что и как я приготовила, я начала записывать видео и реценты, выставлять их в инстаграм для общего и для своего удобства. Я сделала площадку моих советов по еде и по рецептам)
                                    И это переросло в моё увлечение, хобби. Всё время стараюсь совершенствоваться в этой сфере, узнавать что-то новое. Ведь кулинария, как и все остальное в наше время, не стоит на месте)
                                    Теперь, благодаря Всеукраинской ассоциации мусульманок, я могу делиться рецептами вкусной и полезной еды еще с большим количеством женщин.
                                    Читайте мой блог «Готовим с Бисмилляh», готовьте дома и радуйте близких!';
        $cardTextMuted = 'Марьям <a href="https://www.instagram.com/marem_kiev/" target="_blank">@marem_kiev</a>';
        $avatarSrc = get_template_directory_uri() . '/images/avatars/marem_kiev.jpg';
        break;
    default:
        break;
}
?>

<div class="container-fluid">
    <section>
        <div class="container-fluid container-cards">
            <div class="card mb-3 blog-card about-card">
                <div class="row no-gutters">
                    <div class="blog-author blog-author--about">
                        <img src="<?php echo $avatarSrc; ?>" class="blog-author--image" />
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <p class="card-text"><?php echo $cardText; ?></p>
                            <p class="card-text"><small class="text-muted"><?php echo $cardTextMuted; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
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
        'posts_per_page' => 20,
        'category_name' => $currentName,
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    );
    $q = new WP_Query($args);
    if ( $q->have_posts() ) {
        while ( $q->have_posts() ) {
            $q->the_post();
            get_template_part( 'blog-content', get_post_format());
        }
        wp_reset_postdata();
    }
}

?>
        </div>
    </section>
</div>


<?php get_footer(); ?>