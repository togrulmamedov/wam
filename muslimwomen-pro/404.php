<?php
/*
    Template Name: 404 template
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>404 PAGE</title>

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/error.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/fontawesome/css/all.css">
</head>
<body>

<!-- 404 PAGE MAIN CONTENT -->
<section class="error_section">
    <p class="error_section_subtitle"><?php pll_e('Opps! Page is not available!'); ?></p>
    <h1 class="error_title">
        <p>404</p>
        404
    </h1>
    <a href="<?php echo get_home_url(); ?>" class="btn">
        <i class="fas fa-long-arrow-alt-left fa-2x"></i>
    </a>
</section>
<!-- / 404 PAGE MAIN CONTENT -->

<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
</body>
</html>
