<?php
$avatarSrc = '';
$pageTitle = explode("-", wp_title('-', false));

switch (trim($pageTitle[0])){
    case 'Готовим с Бисмилляh':
        $avatarSrc = get_template_directory_uri() . '/images/avatars/marem_kiev.jpg';
        break;
    default:
        break;
}

?>

<div class="card mb-3 blog-card">
    <div class="row no-gutters">
        <div class="blog-author">
            <img src="<?php echo $avatarSrc; ?>" class="blog-author--image" />
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title title--dark"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <p><a class="mw-color--link" href="<?php the_permalink(); ?>"><?php pll_e('Подробнее'); ?></a></p>
                <p class="card-text"><small class="text-muted"><?php the_date(); ?></small></p>
            </div>
        </div>
        <div class="col-md-4" style="overflow: hidden; position: relative;">
            <a href="<?php the_permalink(); ?>" <?php post_class('mw-blogpost--video'); ?>>
                <?php echo mw_get_embedded_media(array('video', 'iframe')); ?>
            </a>
        </div>
    </div>
</div>