<!doctype html>
<html lang="en-GB">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PG44RBFX');</script>
<!-- End Google Tag Manager -->


</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG44RBFX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="page" class="site">

    <header id="masthead" class="site-header">
<!-- Start of Navbar -->
<nav aria-label="Primary">
  <div class="navbar container">
    <div id="nav-logo" class="logo nav-item">
      <?php the_custom_logo(); ?>
    </div>

    <div id="nav-cta" class="nav-item menu-cta">
      <div class="wp-block-button">
        <a class="wp-block-button__link wp-element-button nav-cta-button" href="https://cheshire-physiotherapy-and-pilates-clinic.uk2.cliniko.com/bookings?#service">Book</a>
      </div>
    </div>

    <div id="nav-toggle" class="menu-toggle nav-item">
      <button id="showMenu" class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="site-menu">
        <span></span>
        <span></span>
      </button>
    </div>

    <div id="site-menu" class="nav-item menu-container">
      <div class="menu-header">
        <div class="nav-item logo mobile-menu-logo">
          <?php the_custom_logo(); ?>
        </div>
        <div class="nav-item close-menu">
          <button id="closeMenu" class="nav-toggle" type="button" aria-label="Close menu">
            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" aria-hidden="true"><path d="M5 5l10 10M15 5L5 15"/></svg>
          </button>
        </div>
      </div>
      <div class="menu-body">
        <?php wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'menu_class'     => 'menu',
          'container'      => false,
          'fallback_cb'    => false,
        ) ); ?>
      </div>
      <div class="menu-footer">
        <div class="wp-block-buttons menu-footer__buttons">
          <div class="wp-block-button">
            <a class="wp-block-button__link wp-element-button" href="https://cheshire-physiotherapy-and-pilates-clinic.uk2.cliniko.com/bookings?#service">Book appointment</a>
          </div>
          <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/consent-form/' ) ); ?>">Assessment form</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- End navbar -->

  </header><!-- #masthead -->
    <div id="content" class="site-content">