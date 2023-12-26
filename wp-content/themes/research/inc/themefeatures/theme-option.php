<?php

if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';

    //
    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'Theme Option',
        'menu_slug' => 'my-framework',
    ));

    //
    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'General Settings',
        'fields' => array(

            array(
                'id' => 'opt-upload-logo',
                'type' => 'upload',
                'title' => 'Background Header Image',
            ),

            array(
                'id' => 'opt-upload-logo-scroll',
                'type' => 'upload',
                'title' => 'Sticky Logo',
            ),

            //
            // A text field
            array(
                'id' => 'opt-theme-color',
                'type' => 'color',
                'title' => 'Theme Color',
            ),


            array(
                'id' => 'opt-repeater-social',
                'type' => 'repeater',
                'title' => 'Social Icon',
                'fields' => array(

                    array(
                        'id' => 'opt-icon',
                        'type' => 'icon',
                        'title' => 'Select Social Icon'
                    ),
                    array(
                        'id' => 'opt-link',
                        'type' => 'link',
                        'title' => 'link'
                    ),

                ),
            ),


            array(
                'id' => 'opt-fieldset-footer',
                'type' => 'fieldset',
                'title' => 'Copyright Text Footer',
                'fields' => array(
                    array(
                        'id' => 'opt-text',
                        'type' => 'text',
                        'title' => 'Footer Text Left',
                    ),
                    array(
                        'id' => 'opt-text2',
                        'type' => 'text',
                        'title' => 'Footer Text Right',
                    ),

                ),
            ),

        )
    ));

    CSF::createSection($prefix, array(
        'title' => 'Contact Details',
        'fields' => array(

            array(
                'id' => 'opt-contact-form',
                'type' => 'text',
                'title' => 'Contact Form',
            ),
            array(
                'id' => 'address',
                'type' => 'textarea',
                'title' => 'Address',
            ),

            array(
                'id' => 'address2',
                'type' => 'textarea',
                'title' => 'Address Menu',
            ),

            array(
                'id' => 'phone_number',
                'type' => 'text',
                'title' => 'Phone No',
            ),array(
                'id' => 'central_phone',
                'type' => 'text',
                'title' => 'Central Office No',
            ),array(
                'id' => 'reception',
                'type' => 'text',
                'title' => 'Reception No',
            ),array(
                'id' => 'sales',
                'type' => 'text',
                'title' => 'Sales No',
            ),

            array(
                'id' => 'email',
                'type' => 'text',
                'title' => 'Email',
            ),

            array(
                'id'     => 'opt-repeater-1',
                'type'   => 'repeater',
                'title'  => 'WORK SCHEDULE',
                'fields' => array(

                    array(
                        'id'          => 'opt-select-1',
                        'type'        => 'select',
                        'title'       => 'Day Start',
                        'placeholder' => 'Select an option',
                        'options'     => array(
                            'Saturday'  => 'Saturday',
                            'Sunday'  => 'Sunday',
                            'Monday'  => 'Monday',
                            'Tuesday'  => 'Tuesday',
                            'Wednesday'  => 'Wednesday',
                            'Thursday'  => 'Thursday',
                            'Friday'  => 'Friday',
                        ),
                        'default'     => 'Sunday'
                    ),
                    array(
                        'id' => 'start_time',
                        'type' => 'text',
                        'title' => 'Start Time ( 24hr)',
                    ),
                    array(
                        'id'          => 'opt-select-2',
                        'type'        => 'select',
                        'title'       => 'Day Start',
                        'placeholder' => 'Select an option',
                        'options'     => array(
                            'Saturday'  => 'Saturday',
                            'Sunday'  => 'Sunday',
                            'Monday'  => 'Monday',
                            'Tuesday'  => 'Tuesday',
                            'Wednesday'  => 'Wednesday',
                            'Thursday'  => 'Thursday',
                            'Friday'  => 'Friday',
                        ),
                        'default'     => 'Sunday'
                    ),
                    array(
                        'id' => 'end_time',
                        'type' => 'text',
                        'title' => 'End Time ( 24hr)',
                    ),
                ),
            ),

            array(
                'id'       => 'iframe',
                'type'     => 'code_editor',
                'title'    => 'Google iframe',
                'sanitize' => false,
            ),

            array(
                'id'       => 'latitude',
                'type'     => 'text',
                'title'    => 'Latitude',
                'sanitize' => false,
            ),
            array(
                'id'       => 'longtitude',
                'type'     => 'text',
                'title'    => 'Longtitude',
                'sanitize' => false,
            ),
            array(
                'id'       => 'mapimage',
                'type'     => 'upload',
                'title'    => 'Map Background',
                'sanitize' => false,
            ),
        )

    ));


    CSF::createSection($prefix, array(
        'title' => 'FAQ & Privacy Policy',
        'fields' => array(
            array(
                'id' => 'opt-repeater-faq',
                'type' => 'repeater',
                'title' => 'FAQ QUESTIONS/ANSWER',
                'fields' => array(

                    array(
                        'id' => 'opt-ques',
                        'type' => 'text',
                        'title' => 'Question'
                    ),
                    array(
                        'id' => 'opt-answ',
                        'type' => 'textarea',
                        'title' => 'Answer'
                    ),

                ),
            ),
            array(
                'id' => 'pravicy_page',
                'type' => 'link',
                'title' => 'Add Privacy Page Link',
            )
        )

    ));



}