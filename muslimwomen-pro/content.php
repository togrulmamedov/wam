<div class="container-fluid d-flex flex-column">
    <!-- основной контент -->
    <div class="mw-article d-flex flex-row flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-start text-center text-sm-left">
        <a href="<?php the_permalink(); ?>">
<!--            <img src="images/test.jpg" width="260px" height="180px" alt="Article image">-->
            <?php if (has_post_thumbnail()){
                the_post_thumbnail('custom-medium');
            } ?>
        </a>
        <div class="mw-article--info d-flex flex-column flex-shrink-1">
            <h3 class="title--dark"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <p><a class="mw-color--link" href="<?php the_permalink(); ?>"><?php pll_e('Подробнее'); ?></a></p>
            <p class="mw-article--date"><?php the_date(); ?></p>
        </div>
    </div>
    <!-- конец основного контента -->
</div>