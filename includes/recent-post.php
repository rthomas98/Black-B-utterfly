<div class="container mb-5">
    <div class="row mb-4">
        <div class="col text-center">
            <h2>Checkout some of my recent post</h2>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                elit. Sed ut porttitor nisl, vitae tincidunt odio.
            </p>
        </div>
    </div>
    <article class="mb-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php $loop = new WP_Query( array( 'post_type' => 'post', 'offset'=> 0, 'orderby' => 'post_id', 'order' => 'DSC', 'posts_per_page'=>'3' ) ); ?>

        <div class="row">

            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-sm-12 col-md-12 col-lg-4 text-center">

                    <a href="<?php the_permalink() ?>">  <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'post', array( 'class'  => 'img-fluid mb-3' ) );
                        }
                        ?>
                    </a>

                    <h5><a href="<?php the_permalink() ?>">
                            <?php echo substr(the_title('', '', FALSE), 0, 24); ?>...</a></h5>
                    <p>
                        <?php echo substr(get_the_excerpt(), 0,170); ?>...</p>
                    <p><a href="<?php the_permalink() ?>" class="btn btn-dark">View Post</a></p>

                </div>

            <?php endwhile;
            wp_reset_query(); ?>

        </div><!-- end row -->

    </article><!-- #post-## -->
    <div class="row">
        <div class="col text-center">
            <p>
                <a href="<?php echo site_url('/blog'); ?>" class="btn btn-red">
                    view more posts
                </a>
            </p>
        </div>
    </div>
</div>