<?php
get_header();
?>

<div class="container py-5">

    <h1 class="mb-4">
        <?php single_term_title(); ?>
    </h1>


    <div class="row g-4">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card shadow-sm h-100">

                        <?php if (has_post_thumbnail()) : ?>

                            <?php the_post_thumbnail('medium', [
                                'class' => 'card-img-top'
                            ]); ?>

                        <?php endif; ?>


                        <div class="card-body">

                            <h3 class="h5">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>


                            <?php the_excerpt(); ?>


                            <a href="<?php the_permalink(); ?>" 
                               class="btn btn-primary">
                                Read More
                            </a>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        <?php else : ?>

            <p>No Services Found.</p>

        <?php endif; ?>

    </div>

</div>


<?php
get_footer();
?>