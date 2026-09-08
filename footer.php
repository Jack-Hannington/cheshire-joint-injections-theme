</div><!-- #content.site-content -->

<footer id="colophon" class="site-footer">
	<div class="container">

		<div class="footer-grid">
			<div class="footer-brand">
				<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
					<div class="footer-brand__logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<a class="footer-brand__name" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>
				<p class="footer-tagline"><?php echo esc_html( get_theme_mod( 'altius_healthcare_footer_tagline', 'Specialist non-surgical joint care and ultrasound-guided interventions delivered by senior clinical NHS consultants in Poynton, Cheshire.' ) ); ?></p>
			</div>

			<?php
			$footer_columns = array(
				'services-menu' => 'Treatments',
				'clinic-menu'   => 'Conditions We Treat',
				'company-menu'  => 'Resources',
			);
			$any_assigned = false;
			foreach ( $footer_columns as $location => $heading ) {
				if ( ! has_nav_menu( $location ) ) {
					continue;
				}
				$any_assigned = true;
				echo '<nav class="footer-col" aria-label="' . esc_attr( $heading ) . '">';
				echo '<h3 class="footer-heading">' . esc_html( $heading ) . '</h3>';
				wp_nav_menu( array(
					'theme_location' => $location,
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'depth'          => 1,
					'fallback_cb'    => false,
				) );
				echo '</nav>';
			}
			// Nothing assigned yet: fall back to the single Footer Menu so links never disappear.
			if ( ! $any_assigned && has_nav_menu( 'footer-menu' ) ) {
				echo '<nav class="footer-col footer-col--wide" aria-label="Footer">';
				echo '<h3 class="footer-heading">Quick links</h3>';
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_class'     => 'footer-menu footer-menu--columns',
					'container'      => false,
					'depth'          => 1,
					'fallback_cb'    => false,
				) );
				echo '</nav>';
			}
			?>
		</div>

		<div class="footer-standards">
			<div class="footer-standards__text">
				<p class="footer-standards__title">Regulated clinical standards</p>
				<p class="footer-standards__sub">Our practitioners are certified by the UK's leading healthcare governing bodies.</p>
			</div>
			<div class="footer-badges">
				<a class="footer-badge" href="https://www.hcpc-uk.org/check-the-register/" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg>
					<span><strong>hcpc registered</strong><small>Health &amp; Care Professions Council</small></span>
				</a>
				<a class="footer-badge" href="https://www.csp.org.uk/" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M9 9l6 6M15 9l-6 6"/></svg>
					<span><strong>The Chartered Society</strong><small>of Physiotherapy Member</small></span>
				</a>
			</div>
		</div>

		<div class="footer-bottom">
			<p>&copy; <?php echo date( 'Y' ); ?>. Trading as the Cheshire joint injection clinic LTD (13835955) previously trading as Perform Ready Physio LTD 13221673. All rights reserved.</p>
			<p class="footer-address">Our address: <a title="Cheshire Joint Injections address" href="https://maps.app.goo.gl/W6N9cSejWhPHPxvW9" target="_blank" rel="noopener">Cheshire Physiotherapy and Pilates Clinic, The Old Pumphouse, Middlewood Road, Poynton, Cheshire, SK12 1SH</a></p>
		</div>

	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
