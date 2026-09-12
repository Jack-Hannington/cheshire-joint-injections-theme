<?php
/**
 * Global contact section, printed by footer.php above the site footer on
 * every page (still inside #content.site-content so the full-width band
 * breaks out to the viewport edge).
 *
 * The markup is the "Contact section" pattern (patterns/contact.php), so
 * there is one copy to edit: change the copy, phone, email or hours there.
 *
 * It is skipped when the page already carries the contact section or a
 * Tally form (the design preview, the assessment form), and can be turned
 * off elsewhere with:  add_filter( 'cji_show_footer_contact', '__return_false' );
 */
$show = ! is_admin();
if ( $show && is_singular() ) {
	$post = get_queried_object();
	if ( $post instanceof WP_Post && ( false !== strpos( $post->post_content, 'contact-section' ) || false !== strpos( $post->post_content, 'tally.so' ) ) ) {
		$show = false;
	}
}
if ( ! apply_filters( 'cji_show_footer_contact', $show ) ) {
	return;
}

ob_start();
include get_theme_file_path( 'patterns/contact.php' );
$markup = ob_get_clean();
?>
<section class="footer-contact" aria-label="Contact us">
	<?php echo do_blocks( $markup ); // Pattern markup passed through the block renderer so layout classes apply. ?>
</section>
