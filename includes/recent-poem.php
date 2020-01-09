<div class="container mb-5">
    <article class="mb-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php $loop = new WP_Query( array( 'post_type' => 'poem', 'offset'=> 0, 'orderby' => 'post_id', 'order' => 'DSC', 'posts_per_page'=>'1' ) ); ?>

        <div class="row">

            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-sm-12 col-md-12 col-lg-6 text-center">

                    <?php
                    $recent_poem_image = get_field('recent_poem_image', 'option');
                    if( !empty( $recent_poem_image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($recent_poem_image['url']); ?>" alt="<?php echo esc_attr($recent_poem_image['alt']); ?>" width="400" />
                    <?php endif; ?>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
                    <div class="my-auto col">

                        <h2 class="mb-4">
                            <?php the_field('recent_poem_title', 'option'); ?>
                        </h2>

                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed ut porttitor nisl, vitae tincidunt odio.
                        </p>

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
                </div>

            <?php endwhile;
            wp_reset_query(); ?>

        </div><!-- end row -->

    </article><!-- #post-## -->
</div>