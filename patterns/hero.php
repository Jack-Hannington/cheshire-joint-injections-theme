<?php
/**
 * Title: Hero
 * Slug: cji/hero
 * Categories: cji
 * Viewport Width: 1440
 * Description: Full-width Cover with the "Hero" style: photo, dark shade from the left, Display heading, lead and two buttons. Swap the image in the block toolbar.
 */
$img = get_template_directory_uri() . '/assets/img/hero.jpg';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":100,"gradient":"hero-shade","isUserOverlayColor":true,"align":"full","className":"is-style-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-style-hero"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-hero-shade-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"fontSize":"display"} -->
<h1 class="wp-block-heading has-display-font-size">Expert Diagnosis. Precise Treatment.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Guided directly by expert <strong>ultrasound imaging</strong>, our clinical specialists assure precise treatments with rapid recovery.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Book Consultation</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-white"} -->
<div class="wp-block-button is-style-white"><a class="wp-block-button__link wp-element-button" href="#">View Treatments</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
