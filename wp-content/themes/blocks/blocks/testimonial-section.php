<?php $testimonial_title = get_field('testimonial_title'); ?>

<div class="container-fluid pt-6 pb-6">
    <div class="container">

        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width:600px;">
            <h1 class="display-6 text-uppercase mb-5">
                <?php echo esc_html($testimonial_title); ?>
            </h1>
        </div>

        <div class="row g-5 align-items-center">

            <!-- Left Images -->
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">

                <div class="testimonial-img">

                    <?php if (have_rows('testimonials')) : ?>
                        <?php while (have_rows('testimonials')) : the_row();

                            $image = get_sub_field('testimonial_image');

                            if ($image) :
                        ?>

                            <div class="animated flip infinite">
                                <?php
                                echo wp_get_attachment_image(
                                    $image,
                                    'full',
                                    false,
                                    array(
                                        'class' => 'img-fluid'
                                    )
                                );
                                ?>
                            </div>

                        <?php
                            endif;

                        endwhile; ?>
                    <?php endif; ?>

                </div>

            </div>

            <!-- Right Slider -->
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">

                <div class="owl-carousel testimonial-carousel">

                    <?php if (have_rows('testimonials')) : ?>
                        <?php while (have_rows('testimonials')) : the_row();

                            $image       = get_sub_field('testimonial_image');
                            $name        = get_sub_field('client_name');
                            $profession  = get_sub_field('client_profession');
                            $review      = get_sub_field('client_review');
                        ?>

                        <div class="testimonial-item">

                            <div class="d-flex align-items-center mb-4">

                                <?php
                                if ($image) {
                                    echo wp_get_attachment_image(
                                        $image,
                                        'thumbnail',
                                        false,
                                        array(
                                            'class' => 'img-fluid'
                                        )
                                    );
                                }
                                ?>

                                <div class="ms-3">

                                    <div class="mb-2">
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                    </div>

                                    <h5 class="text-uppercase">
                                        <?php echo esc_html($name); ?>
                                    </h5>

                                    <span>
                                        <?php echo esc_html($profession); ?>
                                    </span>

                                </div>

                            </div>

                            <p class="fs-5">
                                <?php echo esc_html($review); ?>
                            </p>

                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
</div>