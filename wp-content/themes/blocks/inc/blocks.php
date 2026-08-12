<?php

add_action('acf/init', 'hospital_register_blocks');

function hospital_register_blocks() {

    if ( ! function_exists('acf_register_block_type') ) {
        return;
    }

    $blocks = array(

        array(
            'name'            => 'hero-slider',
            'title'           => __('Hero Slider', 'hospital'),
            'description'     => __('Hero Slider Block', 'hospital'),
            'render_template' => get_template_directory() . '/blocks/hero-slider.php',
            'category'        => 'layout',
            'icon'            => 'images-alt2',
            'keywords'        => array('hero', 'slider', 'banner'),
            'mode'            => 'preview',
        ),

        array(
            'name'            => 'about-section',
            'title'           => __('About Section'),
            'description'     => __('Dynamic About Section'),
            'render_template' => get_template_directory() . '/blocks/about-section.php',
            'category'        => 'custom-blocks',
            'icon'            => 'admin-users',
            'keywords'        => array('about', 'company', 'section'),
            'mode'            => 'edit',
            'supports'        => array(
                'align' => false,
            ),
        ),

        array(
            'name'            => 'service-section',
            'title'           => __('Service Section'),
            'description'     => __('Dynamic Service Section'),
            'render_template' => get_template_directory() . '/blocks/service-section.php',
            'category'        => 'custom-blocks',
            'icon'            => 'admin-tools',
            'keywords'        => array('service', 'section'),
        ),

        array(
            'name'            => 'team-section',
            'title'           => __('Team Section'),
            'description'     => __('Dynamic Team Section'),
            'render_template' => get_template_directory() . '/blocks/team-section.php',
            'category'        => 'custom-blocks',
            'icon'            => 'groups',
            'keywords'        => array('team', 'member', 'staff'),
            'mode'            => 'edit',
            'supports'        => array(
                'align' => false,
            ),
        ),

        array(
            'name'            => 'testimonial-section',
            'title'           => __('Testimonial Section'),
            'description'     => __('Dynamic Testimonial Section'),
            'render_template' => get_template_directory() . '/blocks/testimonial-section.php',
            'category'        => 'custom-blocks',
            'icon'            => 'testimonial',
            'keywords'        => array('testimonial', 'review', 'client'),
        ),

        array(
            'name'            => 'newsletter-section',
            'title'           => __('Newsletter Section'),
            'description'     => __('Dynamic Newsletter Section'),
            'render_template' => get_template_directory() . '/blocks/newsletter-section.php',
            'category'        => 'custom-blocks',
            'icon'            => 'email',
        ),

    );

    foreach ($blocks as $block) {
        acf_register_block_type($block);
    }
}