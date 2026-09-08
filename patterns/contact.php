<?php
/**
 * Title: Contact section
 * Slug: cji/contact
 * Categories: cji
 * Viewport Width: 1440
 * Description: Enquiry form card (Tally embed in a Custom HTML block) beside the clinic details: heading, intro, icon rows, and opening hours.
 */
$icons = get_template_directory_uri() . '/assets/img/icons/';
?>
<!-- wp:group {"align":"full","backgroundColor":"warm-neutral","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-warm-neutral-background-color has-background"><!-- wp:columns {"className":"contact-section"} -->
<div class="wp-block-columns contact-section"><!-- wp:column {"className":"is-style-card"} -->
<div class="wp-block-column is-style-card"><!-- wp:heading -->
<h2 class="wp-block-heading">Send an Enquiry</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our medical coordinators will respond to your request within 24 business hours.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<iframe data-tally-src="https://tally.so/embed/w4KDZk?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="420" frameborder="0" marginheight="0" marginwidth="0" title="Cheshire Joint Injections contact form"></iframe>
<script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script>
<!-- /wp:html -->

<!-- wp:paragraph {"align":"center","className":"is-style-caption"} -->
<p class="has-text-align-center is-style-caption">*All clinical enquiries are processed with strict medical confidentiality.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Get in touch with our specialists</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We welcome self-referrals and clinician recommendations to our Cheshire joint injection suite. Visit us or reach out directly to schedule your diagnosis.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"contact-detail","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group contact-detail"><!-- wp:image {"className":"is-style-icon-badge"} -->
<figure class="wp-block-image is-style-icon-badge"><img src="<?php echo esc_url( $icons . 'map-pin.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Our Location</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Cheshire Physiotherapy and Pilates Clinic, The Old Pumphouse, Middlewood Road, Poynton, SK12 1SH</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contact-detail","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group contact-detail"><!-- wp:image {"className":"is-style-icon-badge"} -->
<figure class="wp-block-image is-style-icon-badge"><img src="<?php echo esc_url( $icons . 'phone.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Direct Clinic Line</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:07376576158">07376 576158</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contact-detail","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group contact-detail"><!-- wp:image {"className":"is-style-icon-badge"} -->
<figure class="wp-block-image is-style-icon-badge"><img src="<?php echo esc_url( $icons . 'mail.svg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Email Appointments</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:info@cheshirejointinjections.com">info@cheshirejointinjections.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Opening Hours</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-rows"} -->
<ul class="wp-block-list is-style-rows"><!-- wp:list-item -->
<li>Monday – Friday <strong>07:00 – 19:00</strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Saturday appointments <strong>On request</strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sunday <strong>Closed</strong></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
