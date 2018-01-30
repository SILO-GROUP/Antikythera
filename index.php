<?php

get_header();
get_background_image();
?>

<body class="custom-background">
<div class="site-wrapper">

    <div id="loading-bar-wrapper">
        <div id="loading-bar"></div>
    </div>

    <script>
        document.getElementById("loading-bar").style.width = "20%"
    </script>


    <script>
        document.getElementById("loading-bar").style.width = "40%"
    </script>

    <main id="main" class="clearfix">

        <?php

        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile; endif;

        ?>

        <script>
            document.getElementById("loading-bar").style.width = "60%"
        </script>

    </main>

    <?php get_footer(); ?>

    <script>
        document.getElementById("loading-bar").style.width = "80%"
    </script>
<?php
    get_template_part( 'nav', get_post_format() );
?>
    <div class="overlay"></div>
</div>

<?php

get_sidebar();
get_template_part( 'loader', get_post_format() );

?>

</body>

</html>