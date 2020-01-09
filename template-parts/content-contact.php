<div class="container mb-5 banner">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <?php
            $contact_image = get_field('contact_image');
            if( !empty( $contact_image ) ): ?>
                <img class="img-fluid" src="<?php echo esc_url($contact_image['url']); ?>" alt="<?php echo esc_attr($contact_image['alt']); ?>" width="400" />
            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <p class="lead">
                    <?php the_field('contact_sub_title'); ?>
                </p>

                <div class="row p-0">
                    <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center p-0">
                        <div class="my-auto col">
                            <h3 class="txt-red">Call me directly</h3>
                            <p>
                                +216 (0)40 3629 4753
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
                        <div class="my-auto col">
                            <h3 class="txt-red">Call us directly</h3>
                            <p>
                                hello@blackbutterfly.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <?php the_field('contact_form'); ?>
        </div>
    </div>
</div>


<?php get_template_part('includes/recent-post'); ?>

<?php get_template_part('includes/newsletter'); ?>

<?php get_template_part('includes/recent-poem'); ?>