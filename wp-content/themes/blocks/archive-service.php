<?php
/**
 * Archive Template for Services
 */

get_header();
?>

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Our Services</h1>
        <p class="text-muted">
            Explore our professional services and solutions.
        </p>
    </div>

    <div class="row g-4">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card service-card h-100 border-0 shadow-sm">

                        <?php if (has_post_thumbnail()) : ?>

                            <div class="service-image overflow-hidden">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', array(
                                        'class' => 'card-img-top img-fluid'
                                    )); ?>
                                </a>
                            </div>

                        <?php endif; ?>


                        <div class="card-body d-flex flex-column">

                            <h3 class="h5 fw-bold">
                                <a href="<?php the_permalink(); ?>" 
                                   class="text-dark text-decoration-none">
                                    <?php the_title(); ?>
                                </a>
                            </h3>


                            <div class="text-muted mb-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </div>


                            <a href="<?php the_permalink(); ?>" 
                               class="btn btn-primary mt-auto">
                                Read More →
                            </a>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        <?php else : ?>

            <div class="col-12 text-center">
                <h4>No Services Found.</h4>
            </div>

        <?php endif; ?>

    </div>

</div>


<?php
get_footer();
?>