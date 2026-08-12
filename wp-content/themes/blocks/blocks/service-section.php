<?php
$title = get_field('service_title');
?>


<div class="container-fluid service pt-6 pb-6">

<div class="container">


<div class="text-center mx-auto wow fadeInUp" 
data-wow-delay="0.1s" 
style="max-width:600px;">


<h1 class="display-6 text-uppercase mb-5">

<?php echo esc_html($title); ?>

</h1>


</div>



<div class="row g-4">


<?php

if(have_rows('services')):

$count = 1;

while(have_rows('services')): the_row();


$image       = get_sub_field('service_image');
$name        = get_sub_field('service_name');
$description = get_sub_field('service_description');
$link        = get_sub_field('service_link');

?>


<div class="col-lg-3 col-md-6 wow fadeInUp" 
data-wow-delay="0.<?php echo $count; ?>s">


<div class="service-item">


<div class="service-inner pb-5">


<?php

echo wp_get_attachment_image(
    $image,
    'full',
    false,
    array(
        'class'=>'img-fluid w-100'
    )
);

?>


<div class="service-text px-5 pt-4">


<h5 class="text-uppercase">

<?php echo esc_html($name); ?>

</h5>


<p>

<?php echo esc_html($description); ?>

</p>


</div>



<a class="btn btn-light px-3" 
href="<?php echo esc_url($link); ?>">

Read More

<i class="bi bi-chevron-double-right ms-1"></i>

</a>


</div>


</div>


</div>


<?php

$count++;

endwhile;

endif;

?>


</div>


</div>

</div>