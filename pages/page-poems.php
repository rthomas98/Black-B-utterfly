<?php
/*
  Template Name: Poems Template
 */

get_header(); ?>



<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'poems');

endwhile; // End of the loop.
?>



<?php
get_footer();