<?php
/**
 * Title: Review cards (grid)
 * Slug: cji/review-cards
 * Categories: cji
 * Viewport Width: 1440
 * Description: Section intro and a "Cards" Columns block of full-length reviews. Each card opens with a Row ("reviewer"): a round Avatar image beside the name and role, then the review as ordinary paragraphs inside a Group with the "Read more" style, which clamps long reviews behind a fade and a toggle on the front end. Add rows of three by duplicating the Columns block.
 */
$img     = get_template_directory_uri() . '/assets/img/';
$reviews = array(
	array( 'review-1.jpg', 'Marcus Vance', 'Professional sprinter &amp; gold medallist', array(
		'The ultrasound-guided cortisone therapy got me back on the track in record time. The team\'s clinical accuracy and understanding of elite performance constraints is unmatched.',
	) ),
	array( 'review-2.jpg', 'Eleanor Finch', 'Retired headmistress &amp; keen gardener', array(
		'After years of chronic osteoarthritic knee pain, I can finally tend to my garden completely pain-free. The procedure was comfortable, reassuring and wonderfully quick.',
		'I was terrified of needle procedures, but the specialists made me feel so secure. The injection was virtually painless and I had my mobility back within forty-eight hours.',
	) ),
	array( 'review-3.jpg', 'Sarah Jenkins', 'Professional tennis player', array(
		'Absolute precision. Guided diagnostic injections targeted the exact source of my shoulder inflammation. I am now back to serving at 100% capacity.',
	) ),
);
?>
<!-- wp:group {"align":"full","className":"section","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">In their own words</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>From Olympic medallists to weekend walkers, what patients say about their care.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"is-style-cards"} -->
<div class="wp-block-columns is-style-cards"><?php foreach ( $reviews as $i => $review ) : list( $file, $name, $role, $paras ) = $review; $src = esc_url( $img . $file ); ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"reviewer","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group reviewer"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-avatar"} -->
<figure class="wp-block-image size-thumbnail is-style-avatar"><img src="<?php echo $src; ?>" alt="<?php echo $name; ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"testimonial-name"} -->
<p class="testimonial-name"><?php echo $name; ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"testimonial-role"} -->
<p class="testimonial-role"><?php echo $role; ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-read-more","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-read-more"><?php foreach ( $paras as $k => $text ) : ?><!-- wp:paragraph -->
<p><?php echo $text; ?></p>
<!-- /wp:paragraph --><?php echo $k < count( $paras ) - 1 ? "\n\n" : ''; endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --><?php echo $i < count( $reviews ) - 1 ? "\n\n" : ''; endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
