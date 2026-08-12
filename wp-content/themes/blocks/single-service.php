<?php
get_header();

while (have_posts()) :
    the_post();
?>

<div class="container py-5">

    <div class="row">

        <!-- Left Sidebar Category -->
        <div class="col-lg-3 mb-4">

            <div class="service-sidebar shadow-sm p-4 rounded">

                <h4 class="mb-3">Service Categories</h4>

                <ul class="list-unstyled">

                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'service_category',
                        'hide_empty' => true,
                    ));

                    if (!empty($categories) && !is_wp_error($categories)) :

                        foreach ($categories as $category) :
                    ?>

                        <li class="mb-2">
                            <a href="<?php echo get_term_link($category); ?>" 
                               class="text-decoration-none">

                                <?php echo $category->name; ?>

                            </a>
                        </li>

                    <?php
                        endforeach;

                    endif;
                    ?>

                </ul>

            </div>

        </div>


        <!-- Right Side Content -->
        <div class="col-lg-9">

            <h1 class="fw-bold mb-4">
                <?php the_title(); ?>
            </h1>


            <?php if (has_post_thumbnail()) : ?>

                <?php the_post_thumbnail('large', array(
                    'class' => 'img-fluid rounded mb-4'
                )); ?>

            <?php endif; ?>


            <div class="service-content">
                <?php the_content(); ?>
            </div>


            <!-- Current Post Category -->
            <div class="mt-4">
                <strong>Category:</strong>

                <?php
                $terms = get_the_terms(get_the_ID(), 'service_category');

                if ($terms && !is_wp_error($terms)) {

                    foreach ($terms as $term) {
                        echo '<span class="badge bg-primary ms-2">'
                            . $term->name .
                            '</span>';
                    }

                }
                ?>

            </div>

        </div>
        <a href="<?php echo get_post_type_archive_link('service'); ?>" 
   class="btn btn-primary mt-4">
    ← Back to Services
</a>

    </div>

</div>



<?php
endwhile;

get_footer();
?>