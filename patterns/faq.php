<?php
/**
 * Title: FAQ accordion
 * Slug: cji/faq
 * Categories: cji
 * Viewport Width: 1440
 * Description: Olive-tint band, two columns. Left: heading, intro, a jump list of topics and a Contact button (sticks on desktop). Right: a Heading (H3, with an HTML anchor matching the jump link) followed by an Accordion for each topic. Select an accordion and press + to add questions.
 */
?>
<!-- wp:group {"align":"full","className":"is-style-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-panel"><!-- wp:columns {"className":"faq-layout"} -->
<div class="wp-block-columns faq-layout"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Common questions</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Everything you need to know before your first appointment, grouped by topic. Can't find an answer? Get in touch and a chartered physiotherapist will reply directly.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-rows"} -->
<ul class="wp-block-list is-style-rows"><!-- wp:list-item -->
<li><a href="#before-your-appointment">Before your appointment</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#after-your-injection">After your injection</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Contact us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"level":3,"anchor":"before-your-appointment"} -->
<h3 class="wp-block-heading" id="before-your-appointment">Before your appointment</h3>
<!-- /wp:heading -->

<!-- wp:accordion -->
<div class="wp-block-accordion" role="group"><!-- wp:accordion-item -->
<div class="wp-block-accordion-item"><!-- wp:accordion-heading {"level":4} -->
<h4 class="wp-block-accordion-heading has-icon has-icon-right"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">Do I need a GP referral?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h4>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div class="wp-block-accordion-panel" role="region"><!-- wp:paragraph -->
<p>No. You can self-refer and book directly with us. If we think you would benefit from seeing your GP or a consultant, we will let you know.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item -->
<div class="wp-block-accordion-item"><!-- wp:accordion-heading {"level":4} -->
<h4 class="wp-block-accordion-heading has-icon has-icon-right"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">What happens at my first appointment?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h4>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div class="wp-block-accordion-panel" role="region"><!-- wp:paragraph -->
<p>We talk through your history, carry out a clinical assessment and ultrasound scan, and agree a plan together. Nothing happens without your consent.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item --></div>
<!-- /wp:accordion -->

<!-- wp:heading {"level":3,"anchor":"after-your-injection"} -->
<h3 class="wp-block-heading" id="after-your-injection">After your injection</h3>
<!-- /wp:heading -->

<!-- wp:accordion -->
<div class="wp-block-accordion" role="group"><!-- wp:accordion-item -->
<div class="wp-block-accordion-item"><!-- wp:accordion-heading {"level":4} -->
<h4 class="wp-block-accordion-heading has-icon has-icon-right"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">How quickly will I feel the benefit?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h4>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div class="wp-block-accordion-panel" role="region"><!-- wp:paragraph -->
<p>Most patients notice an improvement within a few days, with the full effect building over two to three weeks. We will explain what to expect for your specific treatment.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item -->
<div class="wp-block-accordion-item"><!-- wp:accordion-heading {"level":4} -->
<h4 class="wp-block-accordion-heading has-icon has-icon-right"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">Can I drive home afterwards?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h4>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div class="wp-block-accordion-panel" role="region"><!-- wp:paragraph -->
<p>Most people can, but we recommend arranging a lift or using public transport where possible, in case the joint is sore.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item --></div>
<!-- /wp:accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
