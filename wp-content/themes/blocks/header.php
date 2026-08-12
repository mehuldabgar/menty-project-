
<?php
$header_logo_title = get_field('header_logo_title','option');
$header_address = get_field('header_address','option');
$header_emails = get_field('header_emails','option');
$header_phone = get_field('header_phone','option');


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WELDORK - Welding Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo get_template_directory_uri();?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">

    <?php wp_head();?>
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0"><?php echo $header_logo_title;?></h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i><?php echo $header_address;?></small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i><?php echo $header_emails;?></small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i><?php echo $header_phone;?></small>
                    <div class="ms-3 d-flex">
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
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="navbar-nav">

<?php

wp_nav_menu(array(

    'theme_location' => 'menu-1',

    'container' => false,

    'menu_class' => '',

    'fallback_cb' => false,

    'walker' => new Bootstrap_Navwalker(),

));

?>

</div>
    <!-- Navbar End -->