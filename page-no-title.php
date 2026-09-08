<?php
/**
 * Template Name: Page with no title
 *
 * Content only, in the 1280px container — build the heading in the editor
 * (e.g. with the Hero pattern). Full-width blocks break out to the viewport edge.
 */
get_header();
?>

<main id="primary" class="page-body">
  <div class="container">
    <?php the_content(); ?>
  </div>
</main>

<?php
get_footer();
