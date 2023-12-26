<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Advertisement extends Widget_Base
{

    public function get_name()
    {
        return 'advertisement';
    }

    public function get_title()
    {
        return 'Image Gallery (Light Gallery)';
    }

    public function get_icon()
    {
        return 'eicon-post-list';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Settings',
            ]
        );

        $this->add_control(
            'label_heading',
            [
                'label' => 'Label Heading',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Light Gallery'
            ]
        );

        $this->add_control(
            'content_heading',
            [
                'label' => 'Content Heading',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'My Other Example Heading'
            ]
        );


        $this->add_control(
            'gallery',
            [
                'label' => __('Add Images', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'default' => [],
            ]
        );
        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $this->add_inline_editing_attributes('label_heading', 'basic');
        $this->add_render_attribute(
            'label_heading',
            [
                'class' => ['advertisement__label-heading'],
            ]
        );
        $settings = $this->get_settings_for_display();

        ?>

        <section class="GalleryWithThumb ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="qodef-m-title text-center">
                            <?php echo $settings['label_heading'] ?>
                        </h2>

                    </div>
                    <div class="col-md-12 responsivewidth">
                        <div class="GalleryWithThumb__slide-wrap Light">
                            <!--big slider -->
                            <div class="GallerySlideInit">
                                <?php
                                foreach ($settings['gallery'] as $image) {


                                    ?>
                                    <div class="GalleryWithThumb__slide-wrap__item modify-bg"
                                         style="background: url('<?= $image['url'] ?>')"><a
                                                href="<?= $image['url'] ?>"></a></div> <!-- 1170x530 -->

                                    <?php
                                }
                                ?>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="GalleryWithThumb__nav-wrap">
                            <!--  slider thumb nav-->
                            <div class="GalleryNavInit">

                                <?php
                                foreach ($settings['gallery'] as $image) {

                                    ?>
                                    <div class="GalleryWithThumb__nav-wrap__item">
                                        <div class="GalleryWithThumb__nav-wrap__item__bg modify-bg"

                                             style="background: url('<?=$image['url']?>')"></div>

                                    </div>

                                    <?php

                                }
                                ?>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="navigation">
                            <a href="javascript:" class="slick_prev_custom"><img
                                        src="<?=get_template_directory_uri()?>/assets/img/iconleft.svg"
                                        alt=""></a>
                            <a href="javascript:" class="slick_next_custom"><img
                                        src="<?=get_template_directory_uri()?>/assets/img/icon_right.svg"
                                        alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }

    protected function _content_template()
    {
        ?>
        <#
        view.addInlineEditingAttributes( 'label_heading', 'basic' );
        view.addRenderAttribute(
        'label_heading',
        {
        'class': [ 'advertisement__label-heading' ],
        }
        );
        #>

        <# _.each( settings.gallery, function( image ) { #>
        <img class="" src="{{ image.url }}">
        <# }); #>

        <div class="advertisement">
            <div {{{ view.getRenderAttributeString(
            'label_heading' ) }}}>{{{ settings.label_heading }}}
        </div>
        <div class="advertisement__content">
            <div class="advertisement__content__heading">{{{ settings.content_heading }}}</div>
            <div class="advertisement__content__copy">
                {{{ settings.content }}}
            </div>
        </div>
        </div>


        <?php
    }
}
