<div class="container-fluid mb-5 banner">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center pt-5 pb-5">
            <?php
            $banner_image = get_field('banner_image');
            if( !empty( $banner_image ) ): ?>
                <img class="img-fluid" src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" width="500" />
            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-5">
            <div class="txt-overlay col">
                <?php
                $banner_right_image = get_field('banner_right_image');
                if( !empty( $banner_right_image ) ): ?>
                    <img class="img-fluid" src="<?php echo esc_url($banner_right_image['url']); ?>" alt="<?php echo esc_attr($banner_right_image['alt']); ?>" width="" />
                <?php endif; ?>
                <div class="centered  col text-center">
                    <?php the_field('banner_content'); ?>
                    <p>
                        <a href="<?php the_field('banner_link'); ?>" class="btn btn-red">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid birds-bg box-height">
    <div class="row h-100">
        <div class="col text-center d-flex justify-content-center">
                <div class="my-auto">
                    <h2>
                        <?php the_field('home_page_intro'); ?>
                    </h2>
                </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php
                $home_img_one = get_field('home_img_one');
                if( !empty( $home_img_one ) ): ?>
                    <img class="img-fluid" src="<?php echo esc_url($home_img_one['url']); ?>" alt="<?php echo esc_attr($home_img_one['alt']); ?>" width="500" />
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php
                $home_img_two = get_field('home_img_two');
                if( !empty( $home_img_two ) ): ?>
                    <img class="img-fluid" src="<?php echo esc_url($home_img_two['url']); ?>" alt="<?php echo esc_attr($home_img_two['alt']); ?>" width="500" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('includes/about'); ?>

<?php get_template_part('includes/newsletter'); ?>

<?php get_template_part('includes/recent-post'); ?>
