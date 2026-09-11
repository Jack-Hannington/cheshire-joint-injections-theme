<?php
/**
 * Title: Conditions we treat
 * Slug: cji/conditions-cards
 * Categories: cji
 * Viewport Width: 1440
 * Description: Centred section intro and a scrollable row of compact photo cards, one per condition, each linking to its page. Every card is a Column with the "Photo (fills card)" style holding a Cover (photo + bottom shade) and a "Link with arrow" paragraph. Swap the photo in the Cover toolbar; edit the label and link inline. Add or remove columns freely.
 */
$img   = get_template_directory_uri() . '/assets/img/conditions/';
$cards = array(
	array( 'knee',        'Knee pain',                        '/knee-pain-knee-osteoarthritis/' ),
	array( 'hip',         'Hip pain',                         '/hip-pain/' ),
	array( 'shoulder',    'Shoulder pain',                    '/joint-injections-for-shoulder-pain/' ),
	array( 'achilles',    'Achilles &amp; tendon pain',       '/joint-injections-for-achilles-and-tendon-pain/' ),
	array( 'swelling',    'Joint swelling / effusion',        '/joint-swelling-effusion/' ),
	array( 'knee-failed', 'Knee pain after failed treatment', '/knee-pain-after-failed-treatment/' ),
);
?>
<!-- wp:group {"align":"full","className":"section","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section"><!-- wp:group {"className":"section-header section-header--center","layout":{"type":"default"}} -->
<div class="wp-block-group section-header section-header--center"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Reduce your pain</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Conditions we can treat</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Explore some of the most common conditions we successfully treat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"isStackedOnMobile":false,"className":"is-style-carousel conditions"} -->
<div class="wp-block-columns is-not-stacked-on-mobile is-style-carousel conditions"><?php foreach ( $cards as $i => $card ) : list( $file, $label, $path ) = $card; $src = esc_url( $img . $file . '.jpg' ); $href = esc_url( home_url( $path ) ); ?><!-- wp:column {"className":"is-style-photo"} -->
<div class="wp-block-column is-style-photo"><!-- wp:cover {"url":"<?php echo $src; ?>","dimRatio":100,"gradient":"dark-shade-bottom","isUserOverlayColor":true} -->
<div class="wp-block-cover"><img class="wp-block-cover__image-background" alt="" src="<?php echo $src; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-shade-bottom-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"is-style-link-icon has-arrow"} -->
<p class="is-style-link-icon has-arrow"><a href="<?php echo $href; ?>"><?php echo $label; ?></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --><?php echo $i < count( $cards ) - 1 ? "\n\n" : ''; endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
