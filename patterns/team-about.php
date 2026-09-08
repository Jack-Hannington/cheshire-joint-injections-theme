<?php
/**
 * Title: Team about
 * Slug: cji/team-about
 * Categories: cji
 * Viewport Width: 1440
 * Description: Warm-neutral band with a large team photo beside a heading, two paragraphs and two buttons.
 */
$img = get_template_directory_uri() . '/assets/img/team.jpg';
?>
<!-- wp:group {"align":"full","backgroundColor":"warm-neutral","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-warm-neutral-background-color has-background"><!-- wp:media-text {"mediaType":"image","mediaWidth":48,"verticalAlignment":"center","className":"team-about"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center team-about" style="grid-template-columns:48% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( $img ); ?>" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Meet your clinical specialists</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Led by industry-leading clinical practitioners, Cheshire Joint Injections is dedicated to restoring physical health through ultrasound-guided precision. Our specialists bring decades of diagnostic experience to ensure your comfort, trust, and ultimate mobility.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>From initial assessment to modern therapeutic joint treatment, our focus is entirely on clinical excellence and a welcoming, supportive patient experience in our Cheshire suite.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Book a Consultation</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Meet the Team</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
