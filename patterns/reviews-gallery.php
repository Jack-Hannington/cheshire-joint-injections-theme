<?php
/**
 * Title: Reviews gallery
 * Slug: cji/reviews-gallery
 * Categories: cji
 * Viewport Width: 1440
 * Description: Soft band with an eyebrow, heading and a four-up carousel that mixes quote cards with decorative photos. Each card is a Column: a quote card is three paragraphs (quote, name, role); a photo card is a Column with the "Photo (fills card)" style holding one Image. Add or reorder columns freely.
 */
$img = get_template_directory_uri() . '/assets/img/';
?>
<!-- wp:group {"align":"full","backgroundColor":"warm-neutral","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-warm-neutral-background-color has-background"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Clinical trust</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Patient outcomes &amp; diagnostics</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Honest reflections from patients who restored their movement and quality of life through accurate, ultrasound-guided therapeutic joint injections.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"isStackedOnMobile":false,"className":"is-style-carousel reviews-gallery"} -->
<div class="wp-block-columns is-not-stacked-on-mobile is-style-carousel reviews-gallery"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"testimonial-quote"} -->
<p class="testimonial-quote">I've been working with Ben for the last 7 years, and I can honestly say he's been a huge part of my rehab and strength journey. Not only is he super knowledgeable and professional, but he's also just a really good guy.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-name"} -->
<p class="testimonial-name">Bianca Cook</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-role"} -->
<p class="testimonial-role">3 x World Champion, 2-time Olympian</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-photo"} -->
<div class="wp-block-column is-style-photo"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img . 'treatment.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"testimonial-quote"} -->
<p class="testimonial-quote">I was terrified of needle procedures, but the specialists made me feel so secure. The injection was virtually painless and I got my mobility back within forty-eight hours.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-name"} -->
<p class="testimonial-name">Eleanor Finch</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-role"} -->
<p class="testimonial-role">Keen gardener &amp; active grandmother</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-photo"} -->
<div class="wp-block-column is-style-photo"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img . 'team.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"testimonial-quote"} -->
<p class="testimonial-quote">Absolute precision. Guided diagnostic injections targeted the exact source of my shoulder inflammation. I am now back to serving at 100% capacity.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-name"} -->
<p class="testimonial-name">Sarah Jenkins</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-role"} -->
<p class="testimonial-role">Professional tennis player</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-photo"} -->
<div class="wp-block-column is-style-photo"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $img . 'review-1.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
