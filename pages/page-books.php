<?php
/*
  Template Name: Book Template
 */

get_header(); ?>



<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'books');

endwhile; // End of the loop.
?>



<?php
get_footer();