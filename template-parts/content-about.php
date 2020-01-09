<div class=" birds-bg h-50 banner">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col d-flex justify-content-center">
                <div class="my-auto text-center">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <p class="lead">
                        <?php the_field('about_sub_header'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-4 text-center">
            <?php
            $about_image = get_field('about_image');
            if( !empty( $about_image ) ): ?>
                <img class="img-fluid" src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>" width="400" />
            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('bio_content_one'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php the_field('bio_content_two'); ?>
        </div>
    </div>
</div>

<?php get_template_part('includes/recent-post'); ?>

<?php get_template_part('includes/newsletter'); ?>

<?php get_template_part('includes/recent-poem'); ?>

