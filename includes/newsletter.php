<div class="bg-black p-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 text-center">
                <?php
                $newsletter_image = get_field('newsletter_image', 'option');
                if( !empty( $newsletter_image ) ): ?>
                    <img class="img-fluid" src="<?php echo esc_url($newsletter_image['url']); ?>" alt="<?php echo esc_attr($newsletter_image['alt']); ?>" width="" />
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 d-flex justify-content-center">
                <div class="my-auto">
                    <?php the_field('newsletter_content', 'option'); ?>
                </div>
            </div>
        </div>
    </div>
</div>