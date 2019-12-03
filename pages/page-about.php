<?php
/*
  Template Name: About Me Template
 */

get_header(); ?>



<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'about');

endwhile; // End of the loop.
?>



<?php
get_footer();