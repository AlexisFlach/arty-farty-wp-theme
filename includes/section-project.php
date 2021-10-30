<?php
   get_header();
?>
<div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; else: ?>
      <p>Sorry, no posts found.<p></p>
      <?php endif; ?>
   </div>

<?php
   get_footer();
?>