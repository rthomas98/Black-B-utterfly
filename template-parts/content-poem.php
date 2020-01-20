<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Black_Butterfly
 */

?>

<?php get_template_part('includes/nav'); ?>


<div class=" birds-bg h-50 banner">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col d-flex justify-content-center">
                <div class="my-auto text-center">
                    <h1>
                        Poems
                    </h1>
                    <p class="lead">
                        Anything is possible said the butterfly
                        As she wrapped her self up in the chrysalis
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5">
    <div class="row mb-5">
        <div class="col">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h2>
                    <?php the_title(); ?>
                </h2>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blackbutterfly' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
    </div>
</div>


<?php get_template_part('includes/newsletter'); ?>

<?php get_template_part('includes/about'); ?>


<?php get_template_part('includes/footer'); ?>


