<?php
/**
 * Single post: featured image, title, author/date line, content in a
 * reading-width column.
 */
get_header();
?>

<main id="primary" class="page-body">
  <article class="article-container container">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="page-title" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>'); padding-bottom: 56.25%; background-size: cover; background-position: center;"></div>
    <?php endif; ?>
    <h1 class="article-title"><?php the_title(); ?></h1>
    <div class="article-meta-info">
      <span>Published by <?php the_author(); ?></span>
      <span><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
    </div>
    <?php the_content(); ?>
  </article>
</main>

<?php
get_footer();
