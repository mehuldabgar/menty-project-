<div class="container-fluid p-0 mb-6 wow fadeIn" data-wow-delay="0.1s">

<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">


<!-- Carousel Indicators -->
<div class="carousel-indicators">

<?php
$count = 0;

if (have_rows('slides')) :
while (have_rows('slides')) : the_row();

$image = get_sub_field('slide_image');

if (is_array($image)) {
    $img_url = $image['url'];
} else {
    $img_url = wp_get_attachment_image_url($image, 'thumbnail'); 
    


}

?>

<button type="button"
    data-bs-target="#header-carousel"
    data-bs-slide-to="<?php echo $count; ?>"
    class="<?php echo ($count == 0) ? 'active' : ''; ?>"
    aria-label="Slide <?php echo $count + 1; ?>">

    <img src="<?php echo esc_url($img_url); ?>" 
         alt="slide"
         class="indicator-img">

</button>


<?php
$count++;
endwhile;
endif;
?>

</div>



<!-- Carousel Items -->
<div class="carousel-inner">

<?php
$count = 0;

if (have_rows('slides')) :
while (have_rows('slides')) : the_row();


$image       = get_sub_field('slide_image');
$heading     = get_sub_field('heading');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');


?>

<div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">


<?php

if(is_array($image)){
    echo '<img src="'.$image['url'].'" class="w-100">';
}
else{
    echo wp_get_attachment_image($image,'full',false,array(
        'class'=>'w-100'
    ));
}

?>


<div class="carousel-caption">

<h1 class="display-1 text-uppercase text-white mb-4">
<?php echo esc_html($heading); ?>
</h1>


<?php if($button_text && $button_link): ?>

<a href="<?php echo esc_url($button_link); ?>" 
class="btn btn-primary py-3 px-4">

<?php echo esc_html($button_text); ?>

</a>

<?php endif; ?>


</div>


</div>


<?php
$count++;
endwhile;
endif;
?>

</div>



<!-- Controls -->

<button class="carousel-control-prev" 
type="button"
data-bs-target="#header-carousel"
data-bs-slide="prev">

<span class="carousel-control-prev-icon"></span>

</button>


<button class="carousel-control-next"
type="button"
data-bs-target="#header-carousel"
data-bs-slide="next">

<span class="carousel-control-next-icon"></span>

</button>


</div>
</div>