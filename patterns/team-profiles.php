<?php
/**
 * Title: Team profile cards
 * Slug: cji/team-profiles
 * Categories: cji
 * Viewport Width: 1440
 * Description: Section intro plus two profile cards (Media & Text with the "Profile card" style): portrait, name, role, hairline credentials and a "Read full profile" link.
 */
$img = get_template_directory_uri() . '/assets/img/';
?>
<!-- wp:group {"align":"full","backgroundColor":"warm-neutral","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-warm-neutral-background-color has-background"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Meet your clinical specialists</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Dedicated to restoring your joint health and mobility. With extensive expertise in diagnostic ultrasound and ultrasound-guided therapeutic injections.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:media-text {"mediaType":"image","mediaWidth":35,"verticalAlignment":"center","className":"is-style-profile-card"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center is-style-profile-card" style="grid-template-columns:35% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( $img . 'portrait-1.jpg' ); ?>" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Ben Harper</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Joint Injection &amp; Specialist MSK Physiotherapist</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-rows"} -->
<ul class="wp-block-list is-style-rows"><!-- wp:list-item -->
<li>Elite sport experience</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ultrasound &amp; injection specialist</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Advanced clinical training</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"is-style-link-icon has-arrow"} -->
<p class="is-style-link-icon has-arrow"><a href="#">Read full profile</a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:media-text {"mediaType":"image","mediaWidth":35,"verticalAlignment":"center","className":"is-style-profile-card"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center is-style-profile-card" style="grid-template-columns:35% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( $img . 'portrait-2.jpg' ); ?>" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Katie Davis</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Specialist MSK &amp; Pelvic Health Physiotherapist</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-rows"} -->
<ul class="wp-block-list is-style-rows"><!-- wp:list-item -->
<li>10+ years' experience</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rehabilitation specialist</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Clinical Pilates &amp; Yoga</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"is-style-link-icon has-arrow"} -->
<p class="is-style-link-icon has-arrow"><a href="#">Read full profile</a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
