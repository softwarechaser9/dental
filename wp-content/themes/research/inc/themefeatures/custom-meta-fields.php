<?php

add_action('cmb2_admin_init', 'cmb2_sample_metaboxes');



function cmb2_sample_metaboxes()
{

    $journal_details = new_cmb2_box(array(
        'id' => 'journal_details',
        'title' => 'Journal Details',
        'context' => 'normal',
        'object_types' => array('journal'), // Post type
//        'show_on' => array('key' => 'page-template', 'value' => 'template/template_project.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));


    $journal_details-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'journal_details_title'
    ));
    $journal_details-> add_field(array(
        'name' => 'ISSN Number',
        'type' => 'textarea_small',
        'id'   => 'issn_number'
    ));
    $journal_details-> add_field(array(
        'name' => 'Indexed In',
        'type' => 'textarea_small',
        'id'   => 'indexed_in'
    ));
    $journal_details-> add_field(array(
        'name' => 'Thumbnail Image',
        'type' => 'file',
        'id'   => 'journal_details_image'
    ));
    $journal_details-> add_field(array(
        'name' => 'File',
        'type' => 'file',
        'id'   => 'journal_file'
    ));



    //Home Page
    $home_slider = new_cmb2_box(array(
        'id' => 'home_slider',
        'title' => 'Banner Slider',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/home_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));
    $home_slider_group = $home_slider->add_field(array(
        'id' => 'home_slider_group',
        'type' => 'group',
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => __('Slide {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Slide', 'cmb2'),
            'remove_button' => __('Remove Slide', 'cmb2'),
            'sortable' => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    $home_slider->add_group_field($home_slider_group, array(
        'name' => 'Title',
        'id' => 'home_slider_title',
        'type' => 'textarea_small',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $home_slider->add_group_field($home_slider_group, array(
        'name' => 'Description',
        'id' => 'home_slider_desc',
        'type' => 'textarea',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $home_slider->add_group_field($home_slider_group, array(
        'name' => 'Button Link',
        'id' => 'home_slider_link',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $home_slider->add_group_field($home_slider_group, array(
        'name' => 'Image',
        'id' => 'home_slider_img',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));



    $home_about = new_cmb2_box(array(
        'id' => 'home_about',
        'title' => 'About Us',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/home_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $home_about-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'home_about_title'
    ));
    $home_about-> add_field(array(
        'name' => 'Subtitle',
        'type' => 'textarea_small',
        'id'   => 'home_about_subtitle'
    ));
    $home_about-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea',
        'id'   => 'home_about_desc'
    ));

    $home_mission = new_cmb2_box(array(
        'id' => 'home_mission',
        'title' => 'Mission',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/home_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $home_mission-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'home_mission_title'
    ));
    $home_mission-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea_small',
        'id'   => 'home_mission_desc'
    ));

    $home_vision = new_cmb2_box(array(
        'id' => 'home_vision',
        'title' => 'Vision',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/home_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $home_vision-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'home_vision_title'
    ));
    $home_vision-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea_small',
        'id'   => 'home_vision_desc'
    ));

    $home_value = new_cmb2_box(array(
        'id' => 'home_value',
        'title' => 'Value',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/home_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $home_value-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'home_value_title'
    ));
    $home_value-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea_small',
        'id'   => 'home_value_desc'
    ));

    //Home Key Person Start
    $home_key_person = new_cmb2_box(array(
        'id' => 'home_key_person',
        'title' => 'Key Persons',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/home_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => false,
    ));

    $home_key_person-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'home_key_person_title'
    ));

    $home_key_person_grp = $home_key_person->add_field(array(
        'id' => 'home_key_person_grp',
        'type' => 'group',
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => __('Key Person {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Key Person', 'cmb2'),
            'remove_button' => __('Remove Key Person', 'cmb2'),
            'sortable' => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    $home_key_person->add_group_field($home_key_person_grp, array(
        'name' => 'Name',
        'id' => 'home_key_person_grp_name',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $home_key_person->add_group_field($home_key_person_grp, array(
        'name' => 'Position',
        'id' => 'home_key_person_grp_position',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $home_key_person->add_group_field($home_key_person_grp, array(
        'name' => 'Institutions',
        'id' => 'home_key_person_grp_inst',
        'type' => 'textarea_small',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $home_key_person->add_group_field($home_key_person_grp, array(
        'name' => 'Image',
        'id' => 'home_key_person_grp_img',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));



    //Home Newsletter Start

    $home_newsletter = new_cmb2_box(array(
        'id' => 'home_newsletter',
        'title' => 'Newsletter',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/home_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => false,
    ));

    $home_newsletter-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'home_newsletter_title'
    ));

    //Home Page End

    //Who We Are Start
    $who_we_are_banner = new_cmb2_box(array(
        'id' => 'who_we_are_banner',
        'title' => 'Banner',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/who_we_are_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => false,
    ));

    $who_we_are_banner-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'who_we_are_banner_img'
    ));

    $who_we_are_about = new_cmb2_box(array(
        'id' => 'who_we_are_about',
        'title' => 'About Us',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/who_we_are_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => false,
    ));

    $who_we_are_about-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'who_we_are_about_title'
    ));
    $who_we_are_about-> add_field(array(
        'name' => 'Subtitle',
        'type' => 'text',
        'id'   => 'who_we_are_about_subtitle'
    ));
    $who_we_are_about-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea',
        'id'   => 'who_we_are_about_desc'
    ));

    $who_we_are_mission = new_cmb2_box(array(
        'id' => 'who_we_are_mission',
        'title' => 'Mission',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/who_we_are_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $who_we_are_mission-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'who_we_are_mission_title'
    ));
    $who_we_are_mission-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea_small',
        'id'   => 'who_we_are_mission_desc'
    ));
    $who_we_are_mission-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'who_we_are_mission_img'
    ));

    $who_we_are_vision = new_cmb2_box(array(
        'id' => 'who_we_are_vision',
        'title' => 'Vision / Goals',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/who_we_are_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $who_we_are_vision-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'who_we_are_vision_title'
    ));
    $who_we_are_vision-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea_small',
        'id'   => 'who_we_are_vision_desc'
    ));
    $who_we_are_vision-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'who_we_are_vision_img'
    ));

    $who_we_are_dedication = new_cmb2_box(array(
        'id' => 'who_we_are_dedication',
        'title' => 'Dedication',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/who_we_are_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $who_we_are_dedication-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'who_we_are_dedication_title'
    ));
    $who_we_are_dedication-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea_small',
        'id'   => 'who_we_are_dedication_desc'
    ));
    $who_we_are_dedication-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'who_we_are_dedication_img'
    ));

    //Who We Are Finish

    //Donation Start
    $donation_banner = new_cmb2_box(array(
        'id' => 'donation_banner',
        'title' => 'Banner',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/donation_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $donation_banner-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'donation_banner_img'
    ));

    $why_donate = new_cmb2_box(array(
        'id' => 'why_donate',
        'title' => 'Why Donate',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/donation_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $why_donate-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'why_donate_title'
    ));

    $why_donate_group = $why_donate->add_field(array(
        'id' => 'why_donate_group',
        'type' => 'group',
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => __('Reason {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Reason', 'cmb2'),
            'remove_button' => __('Remove Reason', 'cmb2'),
            'sortable' => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    $why_donate->add_group_field($why_donate_group, array(
        'name' => 'Title',
        'id' => 'why_donate_grp_title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $why_donate->add_group_field($why_donate_group, array(
        'name' => 'Description',
        'id' => 'why_donate_grp_desc',
        'type' => 'textarea',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));

    $donation_form = new_cmb2_box(array(
        'id' => 'donation_form',
        'title' => 'Donation Form',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/donation_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $donation_form-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'donation_form_title'
    ));
    $donation_form-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'donation_form_img'
    ));

    $donation_involve = new_cmb2_box(array(
        'id' => 'donation_involve',
        'title' => 'Get Involve',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/donation_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $donation_involve-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'donation_involve_title'
    ));

    $donation_involve_group = $donation_involve->add_field(array(
        'id' => 'donation_involve_group',
        'type' => 'group',
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => __('Item {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Item', 'cmb2'),
            'remove_button' => __('Remove Item', 'cmb2'),
            'sortable' => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    $donation_involve->add_group_field($donation_involve_group, array(
        'name' => 'Title',
        'id' => 'donation_involve_group_title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $donation_involve->add_group_field($donation_involve_group, array(
        'name' => 'Description',
        'id' => 'donation_involve_group_desc',
        'type' => 'textarea',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $donation_involve->add_group_field($donation_involve_group, array(
        'name' => 'Image',
        'id' => 'donation_involve_group_img',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));

//    Donation Page End

//    Membership Page Start

    $membership_banner = new_cmb2_box(array(
        'id' => 'membership_banner',
        'title' => 'Banner',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/membership_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $membership_banner-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'membership_banner_img'
    ));

    $membership_list = new_cmb2_box(array(
        'id' => 'membership_list',
        'title' => 'Members List',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/membership_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $membership_list-> add_field(array(
        'name' => 'Title',
        'type' => 'text',
        'id'   => 'membership_list_title'
    ));

    $member_detail = new_cmb2_box(array(
        'id' => 'member_detail',
        'title' => 'Member Information',
        'context' => 'normal',
        'object_types' => array('member'), // Post type
//        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/membership_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => false,
    ));
    $member_detail-> add_field(array(
        'name' => 'ID',
        'type' => 'text',
        'id'   => 'member_detail_id'
    ));

    $member_detail-> add_field(array(
        'name' => 'Position',
        'type' => 'text',
        'id'   => 'member_detail_position'
    ));
    $member_detail-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea',
        'id'   => 'member_detail_desc'
    ));



    $membership_benefit = new_cmb2_box(array(
        'id' => 'membership_benefit',
        'title' => 'Membership Benefit',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/membership_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $membership_benefit-> add_field(array(
        'name' => 'Title',
        'type' => 'text',
        'id'   => 'membership_benefit_title'
    ));

    $membership_benefit_group = $membership_benefit->add_field(array(
        'id' => 'membership_benefit_group',
        'type' => 'group',
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => __('Benefit {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Benefit', 'cmb2'),
            'remove_button' => __('Remove Benefit', 'cmb2'),
            'sortable' => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    $membership_benefit->add_group_field($membership_benefit_group, array(
        'name' => 'Title',
        'id' => 'membership_benefit_group_title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $membership_benefit->add_group_field($membership_benefit_group, array(
        'name' => 'Title',
        'id' => 'membership_benefit_group_desc',
        'type' => 'textarea',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));

    $membership_apply = new_cmb2_box(array(
        'id' => 'membership_apply',
        'title' => 'Membership Apply',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/membership_layout.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $membership_apply-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'membership_apply_title'
    ));
    $membership_apply-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'membership_apply_desc'
    ));

//    Membership Page End

//    Research Fund Page Start

    $research_fund_banner = new_cmb2_box(array(
        'id' => 'research_fund_banner',
        'title' => 'Banner',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/template_research_fund.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $research_fund_banner-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'research_fund_banner_img'
    ));

    //our Mission

    $our_mission = new_cmb2_box(array(
        'id' => 'our_mission',
        'title' => 'Mission',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/template_mission.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $our_mission-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'our_mission_title'
    ));
    $our_mission-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea',
        'id'   => 'our_mission_desc'
    ));
    $our_mission-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'our_mission_img'
    ));

    //Our Commitment

    $our_commitment = new_cmb2_box(array(
        'id' => 'our_commitment',
        'title' => 'Commitment',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/template_commitment.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $our_commitment-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'our_commitment_title'
    ));
    $our_commitment-> add_field(array(
        'name' => 'Description',
        'type' => 'textarea',
        'id'   => 'our_commitment_desc'
    ));
    $our_commitment-> add_field(array(
        'name' => 'Image',
        'type' => 'file',
        'id'   => 'our_commitment_img'
    ));

//Advisory Board

    $advisory_board = new_cmb2_box(array(
        'id' => 'advisory_board',
        'title' => 'Advisory Board List',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/template_advisory.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $advisory_board-> add_field(array(
        'name' => 'Title',
        'type' => 'text',
        'id'   => '$advisory_title'
    ));

    $advisory_board_grp = $advisory_board->add_field(array(
        'id' => 'advisory_board_grp',
        'type' => 'group',
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => __('Board Member {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Board Member', 'cmb2'),
            'remove_button' => __('Remove Board Member', 'cmb2'),
            'sortable' => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    $advisory_board->add_group_field($advisory_board_grp, array(
        'name' => 'Name',
        'id' => 'advisory_board_grp_name',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $advisory_board->add_group_field($advisory_board_grp, array(
        'name' => 'Position',
        'id' => 'advisory_board_grp_position',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $advisory_board->add_group_field($advisory_board_grp, array(
        'name' => 'Description',
        'id' => 'advisory_board_grp_desc',
        'type' => 'textarea',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $advisory_board->add_group_field($advisory_board_grp, array(
        'name' => 'Image',
        'id' => 'advisory_board_grp_img',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));

    //Member Page

    $research_list = new_cmb2_box(array(
        'id' => 'researcher_list',
        'title' => 'Researcher List',
        'context' => 'normal',
        'object_types' => array('page'), // Post type
        'show_on' => array('key' => 'page-template', 'value' => 'template-parts/template_researcher.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));

    $research_list-> add_field(array(
        'name' => 'Title',
        'type' => 'text',
        'id'   => 'researcher_list_title'
    ));

    $research_list_grp = $research_list->add_field(array(
        'id' => 'research_list_grp',
        'type' => 'group',
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => __('Researcher {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Researcher ', 'cmb2'),
            'remove_button' => __('Remove Researcher', 'cmb2'),
            'sortable' => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ));

    $research_list->add_group_field($research_list_grp, array(
        'name' => 'Name',
        'id' => 'researcher_grp_name',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $research_list->add_group_field($research_list_grp, array(
        'name' => 'Position',
        'id' => 'researcher_grp_position',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $research_list->add_group_field($research_list_grp, array(
        'name' => 'Description',
        'id' => 'researcher_grp_desc',
        'type' => 'textarea',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));
    $research_list->add_group_field($research_list_grp, array(
        'name' => 'Image',
        'id' => 'researcher_grp_img',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));

    //Ongoing Journal

    $ongoing_journal_details = new_cmb2_box(array(
        'id' => 'ongoing_journal_details',
        'title' => 'Ongoing Research Details',
        'context' => 'normal',
        'object_types' => array('ongoing-research'), // Post type
//        'show_on' => array('key' => 'page-template', 'value' => 'template/template_project.php'),
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'closed' => true,
    ));


    $ongoing_journal_details-> add_field(array(
        'name' => 'Title',
        'type' => 'textarea_small',
        'id'   => 'ongoing_journal_details_title'
    ));
    $ongoing_journal_details-> add_field(array(
        'name' => 'ISSN Number',
        'type' => 'textarea_small',
        'id'   => 'ongoing_issn_number'
    ));
    $ongoing_journal_details-> add_field(array(
        'name' => 'Indexed In',
        'type' => 'textarea_small',
        'id'   => 'ongoing_indexed_in'
    ));
    $ongoing_journal_details-> add_field(array(
        'name' => 'Thumbnail Image',
        'type' => 'file',
        'id'   => 'ongoing_journal_details_image'
    ));
    $ongoing_journal_details-> add_field(array(
        'name' => 'File',
        'type' => 'file',
        'id'   => 'ongoing_journal_file'
    ));




}