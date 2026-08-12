<?php
$team_title = get_field('team_title');
?>

<div class="container-fluid team pt-6 pb-6">
    <div class="container">

        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width:600px;">
            <h1 class="display-6 text-uppercase mb-5">
                <?php echo esc_html($team_title); ?>
            </h1>
        </div>

        <div class="row g-4">

            <?php
            $delay = 0.3;

            if (have_rows('team_members')) :
                while (have_rows('team_members')) : the_row();

                    $image       = get_sub_field('member_image');
                    $name        = get_sub_field('member_name');
                    $designation = get_sub_field('member_designation');

                    $facebook = get_sub_field('facebook_link');
                    $twitter  = get_sub_field('twitter_link');
                    $linkedin = get_sub_field('linkedin_link');
                    $youtube  = get_sub_field('youtube_link');
            ?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">

                    <div class="team-item">

                        <div class="position-relative overflow-hidden">

                            <?php if ($image) : ?>
                                <?php
                                echo wp_get_attachment_image(
                                    $image,
                                    'full',
                                    false,
                                    array(
                                        'class' => 'img-fluid w-100',
                                        'alt'   => esc_attr($name),
                                    )
                                );
                                ?>
                            <?php endif; ?>

                            <div class="team-social">

                                <?php if ($facebook) : ?>
                                    <a class="btn btn-square btn-dark mx-1" href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ($twitter) : ?>
                                    <a class="btn btn-square btn-dark mx-1" href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ($linkedin) : ?>
                                    <a class="btn btn-square btn-dark mx-1" href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ($youtube) : ?>
                                    <a class="btn btn-square btn-dark mx-1" href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                <?php endif; ?>

                            </div>

                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-1"><?php echo esc_html($name); ?></h5>
                            <span><?php echo esc_html($designation); ?></span>
                        </div>

                    </div>

                </div>

            <?php
                    $delay += 0.1;
                endwhile;
            endif;
            ?>

        </div>

    </div>
</div>