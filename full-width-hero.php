<?php
/**
 * Template Name: Full-width featured image page
 *
 * Featured image as a full-bleed hero (title, excerpt, up to two buttons
 * from the header_button_* custom fields), then the content in the container.
 */
get_header();
?>

<?php if ( has_post_thumbnail() ) : ?>
  <?php $header_height = get_post_meta( get_the_ID(), 'header_height', true ); ?>
  <div class="page-title"<?php if ( ! empty( $header_height ) ) : ?> style="height: <?php echo esc_attr( $header_height ); ?>;"<?php endif; ?>>
    <img class="background-image" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="">
    <div class="page-header container">
      <h1><?php the_title(); ?></h1>
      <div class="max-750"><?php the_excerpt(); ?></div>
      <div class="hero-btn-container">
        <?php
        foreach ( array( '', '_two' ) as $suffix ) {
          $button_text = get_post_meta( get_the_ID(), 'header_button_text' . $suffix, true );
          $button_link = get_post_meta( get_the_ID(), 'header_button_link' . $suffix, true );
          if ( $button_text && $button_link ) {
            echo '<a class="btn" href="' . esc_url( $button_link ) . '">' . esc_html( $button_text ) . '</a>';
          }
        }
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<main id="primary" class="page-body">
  <div class="container">
    <?php the_content(); ?>
  </div>
</main>

<?php
get_footer();
