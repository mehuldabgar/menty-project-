<?php
/**
 * About Section Block
 */

$about_image        = get_field('about_image');
$about_title        = get_field('about_title');
$about_description  = get_field('about_description');

$feature_1_icon     = get_field('feature_1_icon');
$feature_1_title    = get_field('feature_1_title');

$feature_2_icon     = get_field('feature_2_icon');
$feature_2_title    = get_field('feature_2_title');

$list_item_1        = get_field('list_item_1');
$list_item_2        = get_field('list_item_2');
$list_item_3        = get_field('list_item_3');

$bottom_title       = get_field('bottom_title');

// Default Background
$bg_class = 'black-bg';



// Checkbox checked = White Background
if ( get_field('white_bg') ) {
    $bg_class = 'white-bg';
}
?>

<div class="container-fluid pt-6 pb-6 <?php echo esc_attr($bg_class); ?>">

    <div class="container">

        <div class="row g-5">

            <!-- About Image -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">

                <div class="about-img">

                    <?php
                    if ($about_image) {
                        echo wp_get_attachment_image(
                            $about_image,
                            'full',
                            false,
                            array(
                                'class' => 'img-fluid w-100'
                            )
                        );
                    }
                    ?>

                </div>

            </div>

            <!-- About Content -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                <?php if ($about_title) : ?>
                    <h1 class="display-6 text-uppercase mb-4">
                        <?php echo esc_html($about_title); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($about_description) : ?>
                    <p class="mb-4">
                        <?php echo esc_html($about_description); ?>
                    </p>
                <?php endif; ?>

                <div class="row g-5 mb-4">

                    <?php if ($feature_1_title) : ?>
                        <div class="col-sm-6">

                            <div class="d-flex align-items-center">

                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="<?php echo esc_attr($feature_1_icon); ?> fa-2x text-primary"></i>
                                </div>

                                <h5 class="lh-base text-uppercase mb-0">
                                    <?php echo esc_html($feature_1_title); ?>
                                </h5>

                            </div>

                        </div>
                    <?php endif; ?>

                    <?php if ($feature_2_title) : ?>
                        <div class="col-sm-6">

                            <div class="d-flex align-items-center">

                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="<?php echo esc_attr($feature_2_icon); ?> fa-2x text-primary"></i>
                                </div>

                                <h5 class="lh-base text-uppercase mb-0">
                                    <?php echo esc_html($feature_2_title); ?>
                                </h5>

                            </div>

                        </div>
                    <?php endif; ?>

                </div>

                <?php if ($list_item_1) : ?>
                    <p>
                        <i class="fa fa-check-square text-primary me-3"></i>
                        <?php echo esc_html($list_item_1); ?>
                    </p>
                <?php endif; ?>

                <?php if ($list_item_2) : ?>
                    <p>
                        <i class="fa fa-check-square text-primary me-3"></i>
                        <?php echo esc_html($list_item_2); ?>
                    </p>
                <?php endif; ?>

                <?php if ($list_item_3) : ?>
                    <p>
                        <i class="fa fa-check-square text-primary me-3"></i>
                        <?php echo esc_html($list_item_3); ?>
                    </p>
                <?php endif; ?>

                <?php if ($bottom_title) : ?>
                    <div class="border border-5 border-primary p-4 text-center mt-4">
                        <h4 class="lh-base text-uppercase mb-0">
                            <?php echo esc_html($bottom_title); ?>
                        </h4>
                    </div>
                <?php endif; ?>

            </div>

        </div>

    </div>

</div>