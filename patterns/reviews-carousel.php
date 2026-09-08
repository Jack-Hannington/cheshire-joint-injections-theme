<?php
/**
 * Title: Reviews carousel
 * Slug: cji/reviews-carousel
 * Categories: cji
 * Viewport Width: 1440
 * Description: Dark band with a heading and a row of testimonial cards that scroll sideways with arrows and dots. It is a normal Columns block — add or remove columns to add or remove reviews.
 */
$img = get_template_directory_uri() . '/assets/img/';
?>
<!-- wp:group {"align":"full","className":"is-style-panel-dark","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-panel-dark"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Focused on every patient</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"isStackedOnMobile":false,"className":"is-style-carousel"} -->
<div class="wp-block-columns is-not-stacked-on-mobile is-style-carousel"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img . 'review-1.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"testimonial-name"} -->
<p class="testimonial-name">Marcus Vance</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-role"} -->
<p class="testimonial-role">Professional Sprinter &amp; Gold Medalist</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The ultrasound-guided cortisone therapy got me back on the track in record time. The team's clinical accuracy and understanding of elite performance constraints is unmatched.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img . 'review-2.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"testimonial-name"} -->
<p class="testimonial-name">Eleanor Finch</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-role"} -->
<p class="testimonial-role">Retired School Headmistress &amp; Keen Gardener</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>After years of chronic osteoarthritic knee pain, I can finally tend to my garden completely pain-free. The procedure was comfortable, reassuring, and wonderfully quick.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img . 'review-3.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"testimonial-name"} -->
<p class="testimonial-name">Sarah Jenkins</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-role"} -->
<p class="testimonial-role">Professional Tennis Player</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Absolute precision. Guided diagnostic injections targeted the exact source of my shoulder inflammation. I am now back to serving at 100% capacity.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img . 'review-1.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"testimonial-name"} -->
<p class="testimonial-name">Patient name</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-role"} -->
<p class="testimonial-role">A line of context about them</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Their words, in their own voice. Two or three sentences reads best in the card.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
