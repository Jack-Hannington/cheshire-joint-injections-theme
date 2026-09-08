<?php
/**
 * Template Name: Page with no articles
 *
 * Kept for pages that were assigned it; identical to "Page" now that no
 * template shows the articles strip.
 */
get_header();
?>

<main id="primary" class="page-body">
  <div class="container">
    <div class="header">
      <h1><?php the_title(); ?></h1>
    </div>
    <?php the_content(); ?>
  </div>
</main>

<?php
get_footer();
