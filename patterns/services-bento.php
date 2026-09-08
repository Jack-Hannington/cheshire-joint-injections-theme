<?php
/**
 * Title: Services bento grid
 * Slug: cji/services-bento
 * Categories: cji
 * Viewport Width: 1440
 * Description: Two rows of panel cards: a wide spotlight + a square card, then three equal cards. Each column is a Column block with a Panel style — change the colour from the Styles panel, and the last Image in each card sits on the card's foot.
 */
$img = get_template_directory_uri() . '/assets/img/';
?>
<!-- wp:group {"align":"full","className":"section","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section"><!-- wp:columns {"className":"bento bento--tall"} -->
<div class="wp-block-columns bento bento--tall"><!-- wp:column {"width":"66.66%","className":"is-style-panel-olive"} -->
<div class="wp-block-column is-style-panel-olive" style="flex-basis:66.66%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Assessment &amp; Ultrasound</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Expert diagnostic assessment and high-resolution ultrasound imaging to identify the exact cause of joint pain with real-time feedback.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-link-icon"} -->
<p class="is-style-link-icon"><a href="#">Learn about Assessment</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"className":"panel-visual"} -->
<figure class="wp-block-image panel-visual"><img src="<?php echo esc_url( $img . 'treatment.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"is-style-panel-dark"} -->
<div class="wp-block-column is-style-panel-dark" style="flex-basis:33.33%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Injection Treatments</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Precise, ultrasound-guided therapeutic injections including targeted corticosteroid, hyaluronic acid, and advanced PRP therapies.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-link-icon"} -->
<p class="is-style-link-icon"><a href="#">View Injection Options</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"className":"panel-visual"} -->
<figure class="wp-block-image panel-visual"><img src="<?php echo esc_url( $img . 'hero.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"bento"} -->
<div class="wp-block-columns bento"><!-- wp:column {"className":"is-style-panel"} -->
<div class="wp-block-column is-style-panel"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Shockwave Therapy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Radial shockwave therapy designed to stimulate healing in stubborn tendon and chronic soft tissue conditions.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-link-icon"} -->
<p class="is-style-link-icon"><a href="#">Learn more</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"className":"panel-visual"} -->
<figure class="wp-block-image panel-visual"><img src="<?php echo esc_url( $img . 'review-1.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-panel-neutral"} -->
<div class="wp-block-column is-style-panel-neutral"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hydrodilatation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ultrasound-guided stretching of the joint capsule. Highly effective for freezing phases of frozen shoulder.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-link-icon"} -->
<p class="is-style-link-icon"><a href="#">Learn more</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"className":"panel-visual"} -->
<figure class="wp-block-image panel-visual"><img src="<?php echo esc_url( $img . 'review-2.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-panel-olive-dark"} -->
<div class="wp-block-column is-style-panel-olive-dark"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Joint Aspiration</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Immediate removal of excess fluid from swollen, painful joints to relieve pressure and perform lab analysis.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-link-icon"} -->
<p class="is-style-link-icon"><a href="#">Learn more</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"className":"panel-visual"} -->
<figure class="wp-block-image panel-visual"><img src="<?php echo esc_url( $img . 'review-3.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
