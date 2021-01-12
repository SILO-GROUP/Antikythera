<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

add_image_size('featuredImageCropped', 255, 255, true);

$args = array(
	'default-color' => '000000',
	'default-image' => get_template_directory_uri() . '/images/background.jpg',
);
add_theme_support( 'custom-background', $args );


/**
 * Adds the Customize page to the WordPress admin area
 */
function example_customizer_menu() {
    add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' );
}
add_action( 'admin_menu', 'example_customizer_menu' );

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */


function copyright_notice( $wp_customize ) {
	$wp_customize->add_section(
        	'Intellectual Property',
        	array(
			'title' => 'Intellectual Property',
            		'description' => 'Steal stuff from Chris',
            		'priority' => 35,
        	)
	);

	$wp_customize->add_setting(
		'copyright_textbox',
		array(
    			'default' => '2018 SILO GROUP, LTD',
		)
	);

	$wp_customize->add_control(
		'copyright_textbox',
		array(
    			'label' => 'Copyright Notice',
    			'section' => 'Intellectual Property',
    			'type' => 'text',
		)
	);
}
add_action( 'customize_register', 'copyright_notice' );

function sidebar_setup( $wp_customize ) {
	$section_name = "Sidebar Setup";

    $wp_customize->add_section(
        $section_name,
        array(
            'title' => $section_name,
            'description' => 'Steal stuff from Chris',
            'priority' => 35,
        )
    );

    $wp_customize->add_setting( 'organization_name_textbox', array( 'default' => 'SILO GROUP, LTD' ) );
    $wp_customize->add_setting( 'organization_summary', array( 'default' => 'SILO GROUP, LTD' ) );
    $wp_customize->add_setting( 'nameplate_text', array( 'default' => 'Christopher M. Punches' ) );
    $wp_customize->add_setting( 'nameplate_url', array( 'default' => 'http://www.silogroup.org' ) );
    $wp_customize->add_setting( 'news_feed', array( 'default' => 'http://news.silogroup.org' ) );
    $wp_customize->add_setting( 'github_url', array( 'default' => 'https://github.com/cmpunches' ) );
    $wp_customize->add_setting( 'linkedin_url', array( 'default' => 'https://www.linkedin.com/in/cmpunches' ) );
    $wp_customize->add_setting( 'email_address', array( 'default' => 'chris.punches@silogroup.org' ) );
    $wp_customize->add_setting( 'bio_logo', array() );

    $wp_customize->add_control( 'organization_name_textbox', array('label' => 'Organization Name', 'section' => $section_name, 'type' => 'text' ));
    $wp_customize->add_control( 'organization_summary', array('label' => 'Organization Summary', 'section' => $section_name, 'type' => 'text' ));
    $wp_customize->add_control( 'nameplate_text', array('label' => 'Nameplate Text', 'section' => $section_name, 'type' => 'text' ));
    $wp_customize->add_control( 'nameplate_url', array('label' => 'Nameplate Link', 'section' => $section_name, 'type' => 'text' ));
    $wp_customize->add_control( 'github_url', array('label' => 'Github Profile', 'section' => $section_name, 'type' => 'text' ));
    $wp_customize->add_control( 'linkedin_url', array('label' => 'LinkedIn Profile', 'section' => $section_name, 'type' => 'text' ));
    $wp_customize->add_control( 'email_address', array('label' => 'Email Address', 'section' => $section_name, 'type' => 'text' ));
    $wp_customize->add_control( 'news_feed', array('label' => 'News Feed URL', 'section' => $section_name, 'type' => 'text' ));


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bio_logo',
            array(
                'label'      => __( 'Bio Logo', 'Antikythera' ),
                'section'    => $section_name,
                'settings'   => 'bio_logo'
            )
        )
    );

}
add_action( 'customize_register', 'sidebar_setup' );

function art_ops( $wp_customize ) {
    $section_name = 'Art Ops';

    $wp_customize->add_section(
            $section_name,
            array(
                    'title' => $section_name,
                    'description' => 'Article Options',
                    'priority' => 32
            )
    );

    $wp_customize->add_setting( 'article_shows_date', array() );

    $wp_customize->add_control( new WP_Customize_Theme_Control( $wp_customize,
            'Enable Date',
            array(
                'label'     => __('Show Article Date', 'enable_date'),
                'section'     => $section_name,
                'type'          => 'checkbox',
                'std'       => '1',
                'settings'  => 'article_shows_date'
            )
        )
    );
}
add_action( 'customize_register', 'art_ops');



function titles_setup( $wp_customize ) {
    $section_name = "Titles Theming";

    $wp_customize->add_section(
        $section_name,
        array(
            'title' => $section_name,
            'description' => 'Title, Subtitle and Footer Theming Options',
            'priority' => 36,
        )
    );

    $wp_customize->add_setting( 'Title Color', array() );
    $wp_customize->add_setting( 'Enable Title Shadow', array() );
    $wp_customize->add_setting( 'Title Shadow Color', array() );

    $wp_customize->add_setting( 'Subtitle Color', array() );
    $wp_customize->add_setting( 'Enable Subtitle Shadow', array() );
    $wp_customize->add_setting( 'Subtitle Shadow Color', array() );

    $wp_customize->add_setting( 'Footer Color', array() );
    $wp_customize->add_setting( 'Enable Footer Shadow', array() );
    $wp_customize->add_setting( 'Footer Shadow Color', array() );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'Title Color',
            array(
                'label'      => __('Title Color', 'title_color_s' ),
                'section'    => $section_name,
                'settings'   => 'Title Color',
            )		)    );

    $wp_customize->add_control( new WP_Customize_Theme_Control( $wp_customize,
            'Enable Title Shadow',
            array(
                'label'     => __('Enable Title Shadow', 'enable_title_shadow'),
                'section'     => $section_name,
                'type'          => 'checkbox',
                'std'       => '1'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
        'Title Shadow Color',
        array(
            'label'      => __('Title Shadow Color', 'title_shadow_color' ),
            'section'    => $section_name,
            'settings'   => 'Title Shadow Color',
        )		)    );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
        'Subtitle Color',
        array(
            'label'      => __('Subtitle Color', 'subtitle_color' ),
            'section'    => $section_name,
            'settings'   => 'Subtitle Color',
        )		)    );

    $wp_customize->add_control( new WP_Customize_Theme_Control( $wp_customize,
            'Enable Subtitle Shadow',
            array(
                'label'     => __('Enable Subtitle Shadow', 'enable_subtitle_shadow'),
                'section'     => $section_name,
                'type'          => 'checkbox',
                'std'       => '1'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
        'Subtitle Shadow Color',
        array(
            'label'      => __('Subtitle Shadow Color', 'subtitle_shadow_color' ),
            'section'    => $section_name,
            'settings'   => 'Subtitle Shadow Color',
        )		)    );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
        'Footer Color',
        array(
            'label'      => __('Footer Color', 'footer_color' ),
            'section'    => $section_name,
            'settings'   => 'Footer Color',
        )		)    );

    $wp_customize->add_control( new WP_Customize_Theme_Control( $wp_customize,
            'Enable Footer Shadow',
            array(
                'label'     => __('Enable Footer Shadow', 'enable_footer_shadow'),
                'section'     => $section_name,
                'type'          => 'checkbox',
                'std'       => '1'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
        'Footer Shadow Color',
        array(
            'label'      => __('Footer Shadow Color', 'footer_shadow_color' ),
            'section'    => $section_name,
            'settings'   => 'Footer Shadow Color',
        )		)    );
}
add_action( 'customize_register', 'titles_setup' );

function custom_titles() {
    $title_color = get_theme_mod( 'Title Color' );
    $title_shadow_color = get_theme_mod( 'Title Shadow Color' );
    $title_shadow_enabled = get_theme_mod( 'Enable Title Shadow' );

    $subtitle_color = get_theme_mod( 'Subtitle Color' );
    $subtitle_shadow_color = get_theme_mod( 'Subtitle Shadow Color' );
    $subtitle_shadow_enabled = get_theme_mod( 'Enable Subtitle Shadow' );

    $footer_color  = get_theme_mod( 'Footer Color' );
    $footer_shadow_color= get_theme_mod( 'Footer Shadow Color' );
    $footer_shadow_enabled = get_theme_mod( 'Enable Footer Shadow' );

	?>

	<style type="text/css">
		.header_title_logo {
			color: <?php echo $title_color ?>;
			<?php if ($title_shadow_enabled) { ?> text-shadow: 2px 2px 5px <?php echo $title_shadow_color ?>;<?php }?>
		}

		.header_subtitle_logo {
			color: <?php echo $subtitle_color; ?>;
        <?php if ($subtitle_shadow_enabled) { ?> text-shadow: 2px 2px 5px <?php echo $subtitle_shadow_color; ?>;<?php }?>
		}

		.legal {
			font-size: 24px;
			color: <?php echo $footer_color; ?>;
        <?php if ($subtitle_shadow_enabled) { ?> text-shadow: 2px 2px 5px <?php echo $footer_shadow_color; ?>;<?php }?>
		}
	</style>
    <?php

}
add_action( 'wp_head', 'custom_titles' );

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="dark-btn"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

function theme_prefix_setup() {

    add_theme_support( 'custom-logo', array(
        'height'      => 200,
        'width'       => 350,
        'flex-width' => true,
    ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
?>
