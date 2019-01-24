<div class="card-container">
    <div class="card no-border">
        <a href="<?php the_permalink(); ?>">
            <?php 
                if (has_post_thumbnail()){
                    the_post_thumbnail('custom-medium');
                }
            ?>
        </a>
        <div class="card-body">
            <h5 class="card-title title--dark"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <p class="card-text d-flex flex-row justify-content-between">
                <small class="text-muted"><?php the_date(); ?></small>
                <?php $categoryName = get_the_category(); ?>
                <?php if (!empty($categoryName)): ?>
                    <span class="badge badge-mw"><?php echo $categoryName[0]->cat_name; ?></span>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>
