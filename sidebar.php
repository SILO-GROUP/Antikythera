
<div class="site-sidebar">
    <div class="sidebar-switch clearfix" style="display:none">
        <a class="dark-btn active" data-toggle="toc">
            <span class="icon icon-list"></span>
            <span class="text">Index</span>
        </a>

        <a class="dark-btn" data-toggle="bio">
            <span class="icon icon-person"></span>
            <span class="text">Bio</span>
        </a>
    </div>

    <div class="site-toc" style="display:none">
        <div class="no-index">No Index</div>
    </div>

    <ul class="site-bio show" style="display:block">
        <div class="about-me clearfix">
            <div class="info"><span class="item desc"><h1><?php echo get_theme_mod( 'organization_name_textbox', 'Owned by Chris Punches'); ?></h1></span></div>
            <div class="info"><span class="item desc"><?php echo get_theme_mod( 'organization_summary', 'Makes all the things...'); ?></span></div>
            <div class="avatar"><img src="<?php echo get_theme_mod( 'bio_logo'); ?>"></div>
            <div class="info"><a class="name dark-btn" href="<?php echo get_theme_mod( 'nameplate_url'); ?>"><?php echo get_theme_mod( 'nameplate_text'); ?></a></div>
        </div>

        <div class="social clearfix">
            <a href="<?php echo get_theme_mod( 'news_feed'); ?>" class="feed" target="_blank" rel="external">
                <span class="icon icon-feed"></span>
            </a>
            <a href="<?php echo get_theme_mod( 'github_url'); ?>" class="github" target="_blank" rel="external">
                <span class="icon icon-github"></span>
            </a>
            <a href="<?php echo get_theme_mod( 'linkedin_url'); ?>" class="linkedin" target="_blank" rel="external">
                <span class="icon icon-linkedin"></span>
            </a>
            <a href="mailto:<?php echo get_theme_mod( 'email_address'); ?>" class="mail" target="_blank" rel="external">
                <span class="icon icon-mail"></span>
            </a>

        </div>

        <ul class="clearfix">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'    => 'header-menu',
                    'container'         => false,
                    'menu_class'        => 'clearfix my-menu-item',
                    'items_wrap' => '%3$s',

                )
            );
            ?>
        </ul>
        <div class="social clearfix"></div>
    </ul>

    <ul class="site-bio show" style="display:block">
        <div class="about-me clearfix">
            <div class="info"><span class="item desc"><h1>Taxonomy</h1></span></div>
                <?php

                    $tags = get_tags();
                    $html = '<div class="info">';
                    foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );

                        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='name dark-btn'>";
                        $html .= "{$tag->name}</a>";
                    }
                    $html .= '</div>';
                    echo $html;

                ?>
        </div>

    </ul>


</div>

