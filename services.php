<?php
/**
 * Template Name: Services page
 *
 * Content beside a sticky sidebar built from the "Sidebar offers" posts
 * (Sidebar offers in the admin menu). Each offer is a card; a card that is
 * just a heading and a list of links renders as hairline rows with chevrons.
 */
get_header();
?>

<main id="primary" class="page-body services-page">
  <div class="container services-layout">

    <div class="services-content">
      <?php the_content(); ?>
    </div>

    <aside class="sidebar-offers" aria-label="Related treatments">
      <?php
      $offers_query = new WP_Query( array(
        'post_type'      => 'offer',
        'posts_per_page' => -1,
      ) );

      while ( $offers_query->have_posts() ) :
        $offers_query->the_post();

        $content = apply_filters( 'the_content', get_the_content() );
        $content = str_replace( ']]>', ']]&gt;', $content );
        // Typed "->" arrows at the end of links: the CSS draws the chevron instead.
        $content = preg_replace( '/\s*(?:-&gt;|->|→)\s*(<\/a>)/u', '$1', $content );

        $offer_color = get_post_meta( get_the_ID(), 'offer_color', true );
        $style       = $offer_color ? ' style="color: ' . esc_attr( $offer_color ) . ';"' : '';

        echo '<div class="offer"' . $style . '>' . $content . '</div>';
      endwhile;
      wp_reset_postdata();
      ?>
    </aside>

  </div>
</main>

<?php
get_footer();
