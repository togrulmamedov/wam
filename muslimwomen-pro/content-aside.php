<?php?>

<div class="card-container">
    <div class="card no-border">
        <a href="<?php the_permalink(); ?>" <?php post_class('mw-post--aside'); ?>>
            <?php
                if (has_post_thumbnail()){
                    the_post_thumbnail('custom-medium');
                }
            ?>
        </a>
        <div class="card-body">
            <h5 class="card-title title--dark text-center"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
        </div>
    </div>
</div>