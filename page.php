<?php

get_header();

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

        <article id="" class="article white-box article-type-post" itemscope itemprop="blogPost">

            <header class="article-header">
                <h1 class="article-title" itemprop="name"><?php the_title(); ?></h1>
                <div class="article-meta"><?php echo get_the_date('Y-m-d'); ?></div>
            </header>


            <?php
                $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'featuredImageFull');
            ?>

            <?php if (get_the_tags()) :?>
                <div class="article-tags">
                    <?php
                    $post_tags = get_the_tags();
                    if ($post_tags) {
                        foreach($post_tags as $tag) {
                            echo '<a href="'; echo bloginfo();
                            echo '/?tag=' . $tag->slug . '" class="tag-link">' . $tag->name . '</a>';
                        }
                    }
                    ?>
                </div>
            <?php endif; ?>

            <div class="featured-image">
                <p align="center"><img class="featured-image" src="<?php echo $featured_image; ?>"></p>
            </div>

            <div class="article-entry" itemprop="articleBody">
                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/post/content', get_post_format() );
                    the_content();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                endwhile; // End of the loop.
                ?>



            </div>

        </article>

        <script>
            document.getElementById("loading-bar").style.width = "60%"
        </script>


    </main>

<?php get_footer(); ?>

    <script>
        document.getElementById("loading-bar").style.width = "80%"
    </script>


    <div class="overlay"></div>
</div>

<?php
get_sidebar();
get_template_part( 'loader', get_post_format() );
?>




</body>

</html>

