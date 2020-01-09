<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <?php
            $box_image = get_field('box_image', 'option');
            if( !empty( $box_image ) ): ?>
                <img class="img-fluid" src="<?php echo esc_url($box_image['url']); ?>" alt="<?php echo esc_attr($box_image['alt']); ?>" width="300" />
            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('learn_more_content', 'option'); ?>
                <p>
                    <a href=" <?php the_field('leran_more_link', 'option'); ?>" class="btn btn-red">
                        get to know me
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>