<?php
/**
 * Title: Treatment cards (3-up)
 * Slug: cji/treatment-cards
 * Categories: cji
 * Viewport Width: 1440
 * Description: A Columns block with the "Cards" style: image, title, short description and a full-width button in each. Add or remove columns freely — every column is a card.
 */
$img = get_template_directory_uri() . '/assets/img/treatment.jpg';
?>
<!-- wp:group {"align":"full","className":"section","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Targeted joint relief to restore your daily mobility</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our highly qualified clinical specialists deliver targeted joint treatments directly to the site of pain, ensuring rapid recovery and minimal down time.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"is-style-cards"} -->
<div class="wp-block-columns is-style-cards"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Osteoarthritis Management</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Targeted steroid joint injections administered under accurate ultrasound guidance to effectively reduce pain and inflammation in your knee or hip.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Book Consultation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hyaluronic Acid Injections</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Joint lubricant injections that cushion the joint and ease movement, ideal when steroid isn't the right fit.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Book Consultation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hydrodilatation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ultrasound-guided stretching of the joint capsule. Highly effective for the freezing phase of frozen shoulder.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Book Consultation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
