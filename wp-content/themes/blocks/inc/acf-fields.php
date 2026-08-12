<?php

add_action('acf/init', 'hospital_register_all_block_fields');

function hospital_register_all_block_fields() {

    if ( ! function_exists('acf_add_local_field_group') ) {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | Hero Slider Fields
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

        'key'   => 'group_hero_slider',
        'title' => 'Hero Slider',

        'fields' => array(

            array(
                'key'   => 'field_slides',
                'label' => 'Slides',
                'name'  => 'slides',
                'type'  => 'repeater',

                'sub_fields' => array(

                    array(
                        'key' => 'field_slide_image',
                        'label' => 'Slide Image',
                        'name' => 'slide_image',
                        'type' => 'image',
                        'return_format' => 'id',
                    ),

                    array(
                        'key' => 'field_slide_heading',
                        'label' => 'Heading',
                        'name' => 'heading',
                        'type' => 'text',
                    ),

                    array(
                        'key' => 'field_slide_button_text',
                        'label' => 'Button Text',
                        'name' => 'button_text',
                        'type' => 'text',
                    ),

                    array(
                        'key' => 'field_slide_button_link',
                        'label' => 'Button Link',
                        'name' => 'button_link',
                        'type' => 'url',
                    ),

                ),

            ),

        ),

        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/hero-slider',
                ),
            ),
        ),

    ));



    /*
    |--------------------------------------------------------------------------
    | About Section Fields
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

    'key' => 'group_about_section',
    'title' => 'About Section Fields',

    'fields' => array(

        array(
            'key' => 'field_about_image',
            'label' => 'About Image',
            'name' => 'about_image',
            'type' => 'image',
            'return_format' => 'id',
        ),

        array(
            'key' => 'field_about_title',
            'label' => 'Title',
            'name' => 'about_title',
            'type' => 'text',
        ),

        array(
            'key' => 'field_about_description',
            'label' => 'Description',
            'name' => 'about_description',
            'type' => 'textarea',
        ),

        array(
            'key' => 'field_feature_1_icon',
            'label' => 'Feature 1 Icon',
            'name' => 'feature_1_icon',
            'type' => 'text',
        ),

        array(
            'key' => 'field_feature_1_title',
            'label' => 'Feature 1 Title',
            'name' => 'feature_1_title',
            'type' => 'text',
        ),

        array(
            'key' => 'field_feature_2_icon',
            'label' => 'Feature 2 Icon',
            'name' => 'feature_2_icon',
            'type' => 'text',
        ),

        array(
            'key' => 'field_feature_2_title',
            'label' => 'Feature 2 Title',
            'name' => 'feature_2_title',
            'type' => 'text',
        ),

        array(
            'key' => 'field_list_item_1',
            'label' => 'List Item 1',
            'name' => 'list_item_1',
            'type' => 'text',
        ),

        array(
            'key' => 'field_list_item_2',
            'label' => 'List Item 2',
            'name' => 'list_item_2',
            'type' => 'text',
        ),

        array(
            'key' => 'field_list_item_3',
            'label' => 'List Item 3',
            'name' => 'list_item_3',
            'type' => 'text',
        ),

        array(
            'key' => 'field_bottom_title',
            'label' => 'Bottom Title',
            'name' => 'bottom_title',
            'type' => 'text',
        ),

        // Background Toggle
        array(
                'key' => 'field_white_bg',
                'label' => 'White Background',
                'name' => 'white_bg',
                'type' => 'true_false',
                'message' => 'Enable White Background',
                'default_value' => 0, // Default Black
                'ui' => 1,
            ),

        

    ),

    'location' => array(
        array(
            array(
                'param'    => 'block',
                'operator' => '==',
                'value'    => 'acf/about-section',
            ),
        ),
    ),

));



    /*
    |--------------------------------------------------------------------------
    | Service Section Fields
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

        'key'=>'group_service_section',
        'title'=>'Service Section',

        'fields'=>array(

            array(
                'key'=>'field_service_title',
                'label'=>'Section Title',
                'name'=>'service_title',
                'type'=>'text',
            ),


            array(
                'key'=>'field_services',
                'label'=>'Services',
                'name'=>'services',
                'type'=>'repeater',

                'sub_fields'=>array(

                    array(
                        'key'=>'field_service_image',
                        'label'=>'Image',
                        'name'=>'service_image',
                        'type'=>'image',
                        'return_format'=>'id',
                    ),

                    array(
                        'key'=>'field_service_name',
                        'label'=>'Title',
                        'name'=>'service_name',
                        'type'=>'text',
                    ),

                    array(
                        'key'=>'field_service_description',
                        'label'=>'Description',
                        'name'=>'service_description',
                        'type'=>'textarea',
                    ),

                ),

            ),

        ),


        'location'=>array(
            array(
                array(
                    'param'=>'block',
                    'operator'=>'==',
                    'value'=>'acf/service-section',
                ),
            ),
        ),

    ));



    /*
    |--------------------------------------------------------------------------
    | Team Section
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

    'key'   => 'group_team_section',
    'title' => 'Team Section',

    'fields' => array(

        array(
            'key'   => 'field_team_title',
            'label' => 'Section Title',
            'name'  => 'team_title',
            'type'  => 'text',
        ),

        array(
            'key'          => 'field_team_members',
            'label'        => 'Team Members',
            'name'         => 'team_members',
            'type'         => 'repeater',
            'button_label' => 'Add Team Member',

            'sub_fields' => array(

                array(
                    'key'            => 'field_member_image',
                    'label'          => 'Image',
                    'name'           => 'member_image',
                    'type'           => 'image',
                    'return_format'  => 'id',
                    'preview_size'   => 'medium',
                    'library'        => 'all',
                ),

                array(
                    'key'   => 'field_member_name',
                    'label' => 'Name',
                    'name'  => 'member_name',
                    'type'  => 'text',
                ),

                array(
                    'key'   => 'field_member_designation',
                    'label' => 'Designation',
                    'name'  => 'member_designation',
                    'type'  => 'text',
                ),

            ),

        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'block',
                'operator' => '==',
                'value'    => 'acf/team-section',
            ),
        ),
    ),

));



    /*
    |--------------------------------------------------------------------------
    | Testimonial Section
    |--------------------------------------------------------------------------
    */

   acf_add_local_field_group(array(

    'key'   => 'group_testimonial_section',
    'title' => 'Testimonial Section',

    'fields' => array(

        array(
            'key'   => 'field_testimonial_title',
            'label' => 'Section Title',
            'name'  => 'testimonial_title',
            'type'  => 'text',
        ),

        array(
            'key'          => 'field_testimonials',
            'label'        => 'Testimonials',
            'name'         => 'testimonials',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Testimonial',

            'sub_fields' => array(

                array(
                    'key'           => 'field_testimonial_image',
                    'label'         => 'Client Image',
                    'name'          => 'testimonial_image',
                    'type'          => 'image',
                    'return_format' => 'id',
                    'preview_size'  => 'medium',
                    'library'       => 'all',
                ),

                array(
                    'key'   => 'field_client_name',
                    'label' => 'Client Name',
                    'name'  => 'client_name',
                    'type'  => 'text',
                ),

                array(
                    'key'   => 'field_client_profession',
                    'label' => 'Profession',
                    'name'  => 'client_profession',
                    'type'  => 'text',
                ),

                array(
                    'key'   => 'field_client_review',
                    'label' => 'Review',
                    'name'  => 'client_review',
                    'type'  => 'textarea',
                ),

            ),

        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'block',
                'operator' => '==',
                'value'    => 'acf/testimonial-section',
            ),
        ),
    ),

));



    /*
    |--------------------------------------------------------------------------
    | Newsletter Section
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

        'key'=>'group_newsletter',
        'title'=>'Newsletter Section',

        'fields'=>array(

            array(
                'key'=>'field_newsletter_title',
                'label'=>'Title',
                'name'=>'newsletter_title',
                'type'=>'text',
            ),

            array(
                'key'=>'field_newsletter_description',
                'label'=>'Description',
                'name'=>'newsletter_description',
                'type'=>'textarea',
            ),

            array(
                'key'=>'field_button_text',
                'label'=>'Button Text',
                'name'=>'button_text',
                'type'=>'text',
            ),

        ),

        'location'=>array(
            array(
                array(
                    'param'=>'block',
                    'operator'=>'==',
                    'value'=>'acf/newsletter-section',
                ),
            ),
        ),

    ));


}