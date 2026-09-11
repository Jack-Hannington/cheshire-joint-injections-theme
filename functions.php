<?php
require_once get_template_directory() . '/inc/blocks.php';

function altius_healthcare_enqueue_styles()
{
    // Add Bootstrap CSS
    wp_enqueue_style(
        "bootstrap-css",
        get_template_directory_uri() . "/assets/css/bootstrap.min.css",
        [],
        "5.0.0"
    );

    wp_enqueue_style(
        "altius_healthcare-style",
        get_stylesheet_uri(),
        ["bootstrap-css"],
        filemtime( get_stylesheet_directory() . '/style.css' ) // cache-busts on every save
    );
}
add_action("wp_enqueue_scripts", "altius_healthcare_enqueue_styles");


//Disable lazy loading for cover images
function disable_lazyload_for_cover_images( $default, $tag_name, $context ) {
    if ( $tag_name === 'img' && isset( $context['class'] ) && strpos( $context['class'], 'wp-block-cover__image-background' ) !== false ) {
        return false;
    }
    return $default;
}
add_filter( 'wp_lazy_loading_enabled', 'disable_lazyload_for_cover_images', 10, 3 );


function altius_healthcare_enqueue_scripts()
{
    // Add Bootstrap JS
    wp_enqueue_script(
        "bootstrap-js",
        get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js",
        [],
        "5.0.0",
        true
    );

    // wp_enqueue_script( 'altius_healthcare-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action("wp_enqueue_scripts", "altius_healthcare_enqueue_scripts");

function mytheme_register_block()
{
    wp_register_script(
        "mytheme/cover",
        get_template_directory_uri() . "/block.js",
        ["wp-blocks", "wp-element", "wp-editor"]
    );

    register_block_type("mytheme/cover", [
        "editor_script" => "mytheme/cover",
    ]);
}
add_action("init", "mytheme_register_block");

/**
 * Register Custom Navigation Walker
 */
function register_my_menus()
{
    register_nav_menus([
        "header-menu" => __("Header Menu"),
        "footer-menu" => __("Footer Menu (fallback)"),
        "services-menu" => __("Footer: Treatments"),
        "clinic-menu" => __("Footer: Conditions"),
        "company-menu" => __("Footer: Resources"),
    ]);
}
add_action("init", "register_my_menus");

add_theme_support( 'title-tag' );
function insert_meta_description() {
    if ( is_single() || is_page() ) {
        global $post;
        if( has_excerpt( $post->ID ) ) {
            echo '<meta name="description" content="' . esc_attr( strip_tags( get_the_excerpt() ) ) . '">';
        } else {
            // if there's no excerpt, you can choose to do nothing, or you can use post content as fallback
            $trimmed_content = wp_trim_words( $post->post_content );
            echo '<meta name="description" content="' . esc_attr( strip_tags( $trimmed_content ) ) . '">';
        }
    }
}
add_action('wp_head', 'insert_meta_description');



// Add custom logo support
function altius_healthcare_setup()
{
    add_theme_support("custom-logo", [
        "height" => 100,
        "width" => 200,
        "flex-height" => true,
        "flex-width" => true,
        "header-text" => ["site-title", "site-description"],
    ]);

    // Wide/Full alignment controls — without this the editor strips align attributes on save.
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', [ 'search-form', 'gallery', 'caption', 'style', 'script' ] );

    // Load the theme stylesheet inside the block editor so pages preview true to the front end.
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
}
add_action("after_setup_theme", "altius_healthcare_setup");

// Add base js
function altius_healthcare_scripts()
{
    wp_enqueue_script(
        "altius-healthcare",
        get_template_directory_uri() . "/assets/js/functions.js",
        ["jquery"],
        filemtime( get_template_directory() . '/assets/js/functions.js' ),
        true
    );

    wp_enqueue_script(
        "cji-main",
        get_template_directory_uri() . "/assets/js/main.js",
        [],
        filemtime( get_template_directory() . '/assets/js/main.js' ),
        true
    );
}
add_action("wp_enqueue_scripts", "altius_healthcare_scripts");

// Services toggle
function enqueue_services_script() {
    if ( is_page_template( 'services.php' ) ) {
        wp_enqueue_script( 'services', get_template_directory_uri() . '/assets/js/services.js', array( 'jquery' ), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_services_script' );


function altius_healthcare_customizer( $wp_customize ) {

    // Register the alert bar section
    $wp_customize->add_section(
        'altius_healthcare_alert_bar',
        array(
            'title' => __( 'Alert Bar', 'altius_healthcare' ),
            'priority' => 30,
        )
    );

    // Add settings and controls for the alert bar
    $wp_customize->add_setting(
        'altius_healthcare_alert_bar_text',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'altius_healthcare_alert_bar_text_control',
            array(
                'label' => __( 'Alert Bar Text', 'altius_healthcare' ),
                'section' => 'altius_healthcare_alert_bar',
                'settings' => 'altius_healthcare_alert_bar_text',
            )
        )
    );
// Add a new control for alert bar link
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'altius_healthcare_alert_bar_link_control',
        array(
            'label' => __( 'Alert Bar Link', 'altius_healthcare' ),
            'section' => 'altius_healthcare_alert_bar',
            'settings' => 'altius_healthcare_alert_bar_link',
            'type' => 'url',
        )
    )
);
    $wp_customize->add_setting(
        'altius_healthcare_alert_bar_visible',
        array(
            'default' => false,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'altius_healthcare_alert_bar_visible_control',
            array(
                'label' => __( 'Alert Bar Visible', 'altius_healthcare' ),
                'section' => 'altius_healthcare_alert_bar',
                'settings' => 'altius_healthcare_alert_bar_visible',
                'type' => 'checkbox',
            )
        )
    );
    // Add a new setting for alert bar link
$wp_customize->add_setting(
    'altius_healthcare_alert_bar_link',
    array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
    )
);

// Add a new control for alert bar link
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'altius_healthcare_alert_bar_link_control',
        array(
            'label' => __( 'Alert Bar Link', 'altius_healthcare' ),
            'section' => 'altius_healthcare_alert_bar',
            'settings' => 'altius_healthcare_alert_bar_link',
            'type' => 'url',
        )
    )
);


    // Footer tagline
    $wp_customize->add_section( 'altius_healthcare_footer', array( 'title' => __( 'Footer', 'altius_healthcare' ), 'priority' => 35 ) );
    $wp_customize->add_setting( 'altius_healthcare_footer_tagline', array(
        'default'           => 'Specialist non-surgical joint care and ultrasound-guided interventions delivered by senior clinical NHS consultants in Poynton, Cheshire.',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'altius_healthcare_footer_tagline', array(
        'label'   => __( 'Footer tagline', 'altius_healthcare' ),
        'section' => 'altius_healthcare_footer',
        'type'    => 'textarea',
    ) );

    // Register the social links section
    $wp_customize->add_section(
        'altius_healthcare_social_links',
        array(
            'title' => __( 'Social Links', 'altius_healthcare' ),
            'priority' => 40,
        )
    );

    // Add settings and controls for the social links
    $social_links = ['twitter', 'youtube', 'facebook', 'instagram', 'tiktok', 'email'];
    foreach ($social_links as $link) {
        $wp_customize->add_setting(
            'altius_healthcare_'.$link.'_link',
            array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'altius_healthcare_'.$link.'_link_control',
                array(
                    'label' => __( ucfirst($link) . ' Link', 'altius_healthcare' ),
                    'section' => 'altius_healthcare_social_links',
                    'settings' => 'altius_healthcare_'.$link.'_link',
                    'type' => 'url',
                )
            )
        );
    }
}

add_action( 'customize_register', 'altius_healthcare_customizer' );


// Make sure the alert bar is visible even if the nav is fixed and 60px tall
add_action( 'wp_footer', function() {
    if( get_theme_mod( 'altius_healthcare_alert_bar_visible' ) ) {
        $alert_bar_text = get_theme_mod( 'altius_healthcare_alert_bar_text' );
        $alert_bar_link = get_theme_mod( 'altius_healthcare_alert_bar_link' );
        echo '<div class="alert-bar">';
        echo '<a href="'.esc_url($alert_bar_link).'">'.esc_html($alert_bar_text).'</a>';
        echo '</div>';
    }
});


// Add aos 
function enqueue_aos_library() {
    wp_enqueue_script( 'aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), '', true );
    wp_enqueue_style( 'aos', 'https://unpkg.com/aos@next/dist/aos.css', array(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_aos_library' );


add_theme_support( 'author' );


//enable post template
add_theme_support( 'post-thumbnails' );
// add excerpts to pages
add_post_type_support( 'page', 'excerpt' );


// Custom query for offers
function create_offers_cpt() {
    $args = array(
        'public' => true,
        'label'  => 'Sidebar offers',
        'show_in_rest' => true, // Enable Gutenberg editor
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // Ensure 'custom-fields' is included

        // Define other necessary arguments like 'supports', 'labels', etc.
    );
    register_post_type('offer', $args);
}
add_action('init', 'create_offers_cpt');







/**
 * Transparent header over a hero.
 * When a page opens with a full-width Cover (photo or video, not the "light"
 * variant) or uses the featured-image hero template, <body> gets .has-hero:
 * the fixed nav starts clear over the hero and turns back into glass once
 * the page scrolls (main.js adds .scrolled). The first Cover gets
 * .is-under-nav so style.css can pad it by the nav height.
 */
function cji_page_has_hero() {
    static $has = null;
    if ( null !== $has ) {
        return $has;
    }
    $has = false;
    if ( ! is_singular() ) {
        return $has;
    }
    $post = get_queried_object();
    if ( ! $post instanceof WP_Post ) {
        return $has;
    }
    if ( 'full-width-hero.php' === get_page_template_slug( $post ) && has_post_thumbnail( $post ) ) {
        $has = true;
        return $has;
    }
    foreach ( parse_blocks( $post->post_content ) as $block ) {
        if ( empty( $block['blockName'] ) ) {
            if ( '' === trim( $block['innerHTML'] ) ) {
                continue; // whitespace between blocks
            }
            break;        // classic/freeform content first: no hero
        }
        $attrs = $block['attrs'];
        $has   = 'core/cover' === $block['blockName']
            && 'full' === ( $attrs['align'] ?? '' )
            && false !== ( $attrs['isDark'] ?? true );
        break;
    }
    return $has;
}

add_filter( 'body_class', function ( $classes ) {
    if ( cji_page_has_hero() ) {
        $classes[] = 'has-hero';
    }
    return $classes;
} );

add_filter( 'render_block_core/cover', function ( $html, $block ) {
    static $done = false;
    if ( $done || is_admin() || ! cji_page_has_hero() || 'full' !== ( $block['attrs']['align'] ?? '' ) ) {
        return $html;
    }
    $done = true;
    return preg_replace( '/\bclass="wp-block-cover\b/', 'class="wp-block-cover is-under-nav', $html, 1 );
}, 10, 2 );
