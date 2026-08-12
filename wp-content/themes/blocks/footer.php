
<?php
$our_office_title = get_field('our_office_title','option');
$our_office_address = get_field('our_office_address','option');
$our_office_phone = get_field('our_office_phone','option');
$our_office_emails = get_field('our_office_emails','option');



$section_title = get_field('section_title','option');
$day_name = get_field('day_name','option');
$day_time = get_field('day_time','option');
$saturday = get_field('saturday','option');


$saturday_time = get_field('saturday_time','option');
$sunday_day = get_field('sunday_day','option');
$day_closed = get_field('day_closed','option');


?>




<!-- Footer Start -->
    <div class="container-fluid bg-dark footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase text-light mb-4"><?php echo $our_office_title;?></h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i><?php echo $our_office_address;?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i><?php echo $our_office_phone;?></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i><?php echo $our_office_emails;?></p>
                    <div class="d-flex pt-3">

                        <?php if( have_rows('header_social_repeter','option') ): ?>
                            <?php while( have_rows('header_social_repeter','option') ): the_row(); 

                                $header_social_class = get_sub_field('header_social_class');
                                $header_social_links = get_sub_field('header_social_links');
                                ?>
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href="<?php echo $header_social_links;?>"><i
                                class="<?php echo $header_social_class;?>"></i></a>
                                <?php endwhile; ?>
    
                        <?php endif; ?>
                    </div>
                </div>
                        <div class="col-lg-3 col-md-6">
                                <h5 class="text-uppercase text-light mb-4">Quick Links</h5>

                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'quick_links_menu',
                                    'container'      => false,
                                    'menu_class'     => '',
                                    'fallback_cb'    => false,
                                    'items_wrap'     => '%3$s',
                                    'link_before'    => '<span class="btn btn-link">',
                                    'link_after'     => '</span>',
                                ));
                                ?>
                            </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase text-light mb-4"><?php echo $section_title;?></h5>
                    <p class="text-uppercase mb-0"><?php echo $day_name;?></p>
                    <p><?php echo $day_time;?></p>
                    <p class="text-uppercase mb-0"><?php echo $saturday;?></p>
                    <p><?php echo $saturday_time;?></p>
                    <p class="text-uppercase mb-0"><?php echo $sunday_day;?></p>
                    <p><?php echo $day_closed;?></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase text-light mb-4">Gallery</h5>

                    <div class="row g-1">

                        <?php
                        while (have_rows('gallery_repeter', 'option')) : the_row();

                            $images = get_sub_field('gallery_image');

                            foreach ($images as $image) :
                        ?>

                            <div class="col-4">
                                <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="">
                            </div>

                        <?php
                            endforeach;

                        endwhile;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    
                    <!--/*** The author’s attribution link must remain intact in the template. ***/-->
                    <!--/*** If you wish to remove this credit link, please purchase the Pro Version . ***/-->
                    Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/lib/wow/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
</body>

</html>