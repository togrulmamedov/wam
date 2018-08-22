<?php
/**
 * Created by PhpStorm.
 * User: togrul.mamedov
 * Date: 22.08.2018
 * Time: 17:21
 */
?>

<div class="card-container">
    <div class="card no-border">
        <a href="<?php the_permalink(); ?>">
<!--            <img class="card-img-top" src="images/test.jpg" width="260px" height="180px" alt="Card Image">-->
            <?php if (has_post_thumbnail()){
                the_post_thumbnail('custom-medium');
            } ?>
        </a>
        <div class="card-body">
            <h5 class="card-title title--dark"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <p class="card-text d-flex flex-row justify-content-between">
                <small class="text-muted"><?php the_date(); ?></small>
                <span class="badge badge-mw">Статьи</span>
            </p>
        </div>
    </div>
</div>
