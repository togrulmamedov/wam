<?php
/*
    Template Name: Blogs template
*/

?>
<?php get_header(); ?>
<!-- заголовок -->
<div class="container-fluid mw-page--title text-center text-sm-left mt-3 mb-3">
    <h1><?php the_title(); ?></h1>
</div>
<!-- конец заголовка -->


<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card profile-card">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog_cards_backgrounds/gotovim.jpg" alt="profile-sample1" class="background"/>
                    <img src="<?php bloginfo('template_directory'); ?>/images/avatars/marem_kiev.jpg" alt="profile-image" class="profile" width="100px" height="100px"/>
                    <div class="card-content">
                    <h6 class="title--light"><a href="https://muslimwomen.com.ua/interesting/blogs/готовим-с-бисмилляh/">Готовим с Бисмилляh</a><small>marem_kiev</small></h6>
                    <div class="icon-block"><a href="https://www.instagram.com/marem_kiev/" target="_blank"><i class="fab fa-instagram"></i></a><a href="#"></a></div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>

<?php get_footer(); ?>