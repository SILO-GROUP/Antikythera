<?php

$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'featuredImageCropped');

?>

        <ul class="post-list">

            <li class="post-item grid-item" style="background-image: url(<?php echo $thumbnail; ?>);">
                <a class="post-link" href="<?php the_permalink(); ?>">
                    <h3 class="post-title"><?php the_title(); ?></h3>
                    <div class="post-meta"><?php echo get_the_date('Y-m-d'); ?></div>
                </a>
            </li>
        </ul>
