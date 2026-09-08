<?php
/**
 * Template Name: Page
 *
 * Page title above the content, in the 1280px container.
 * Full-width blocks in the content break out to the viewport edge.
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
