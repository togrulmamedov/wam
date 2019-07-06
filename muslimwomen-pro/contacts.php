<?php
/*
    Template Name: Contacts template
 */
?>

<?php get_header(); ?>

<div class="container-fluid" style="margin-bottom: 10px">
    <?php echo do_shortcode('[put_wpgm id=1]'); ?>
</div>

<?php if (have_posts()) :while (have_posts()) : the_post(); ?>
    <div class="container-fluid">
        <h1 class="contacts-title"><?php pll_e('Контакты'); ?></h1>
        <div class="d-flex align-items-start flex-column contacts-content">
            <div class="d-flex align-items-center contacts-item"><i class="fas fa-map-marked fa-2x mr-4"></i><?php pll_e('04071, г. Киев, ул. Лукьяновская 46'); ?></div>
            <div class="d-flex align-items-center contacts-item"><i class="fas fa-phone fa-2x mr-4"></i> +38 (063) 597-72-03, +38 (095) 023-85-78</div>
            <div class="d-flex align-items-center contacts-item"><i class="far fa-envelope fa-2x mr-4"></i> muslimwomenua@gmail.com</div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>