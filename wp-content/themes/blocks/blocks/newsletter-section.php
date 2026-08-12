<?php

$title       = get_field('newsletter_title');
$description = get_field('newsletter_description');
$placeholder = get_field('email_placeholder');
$button      = get_field('button_text');

?>

<div class="container-fluid newsletter mt-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">

        <div class="bg-white p-5 mb-5">

            <div class="row g-5">

                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">

                    <h1 class="display-6 text-uppercase mb-4">
                        <?php echo esc_html($title); ?>
                    </h1>

                    <div class="d-flex">

                        <i class="far fa-envelope-open fa-3x text-primary me-4"></i>

                        <p class="fs-5 fst-italic mb-0">
                            <?php echo esc_html($description); ?>
                        </p>

                    </div>

                </div>


                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">

                    <div class="form-floating mb-3">

                        <input type="email"
                               class="form-control border-0 bg-light"
                               id="mail"
                               placeholder="<?php echo esc_attr($placeholder); ?>">

                        <label for="mail">
                            <?php echo esc_html($placeholder); ?>
                        </label>

                    </div>

                    <button class="btn btn-primary w-100 py-3" type="submit">
                        <?php echo esc_html($button); ?>
                    </button>

                </div>

            </div>

        </div>

    </div>
</div>