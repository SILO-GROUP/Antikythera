<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SILO GROUP</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="description" content="SILO GROUP">
    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.png">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/typescript.js"></script>
    <script>
        try {
            Typekit.load({
                async: !1
            })
        } catch (a) {}
    </script>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
</head>



<header id="header" class="site-header logo clearfix">

    <div class="container">
        <div class="item">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                <img class="logoGlow" src="<?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo $image[0];

                ?>" class="item clearfix">
            </a>
                <h1 class="header_title_logo"><?php echo get_bloginfo( 'name' ); ?></h1>
                <h2 class="header_subtitle_logo"><?php echo get_bloginfo( 'description' ); ?></h2>
        </div>

    </div>


    <a class="me square site-nav-switch clearfix">
            <span class="b">
                <span class="icon icon-menu"></span>
            </span>
    </a>
</header>
<?php wp_head(); ?>
