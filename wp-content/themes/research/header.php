<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bdrf
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>


    <style>
        .blog_single_item .post .dcBtn , .page-numbers.prev , .page-numbers, .nav-links a{
            color: black;
        }
        .MenuItems li{
            list-style: none !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>

<header class="Header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-0 Header__left ">
                <div class="col-md-2">
                    <div class="logo">
                        <?php if (has_custom_logo()) : ?>
                            <?= the_custom_logo() ?>
                        <?php else : ?>
                            <a href="/">
                                <img src="<?= get_template_directory_uri() . "/assets/images/static/bdrf_logo.png"; ?>" alt=""
                                     height="55 px" width="100%">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="menu-list">
                        <ul>
                            <li class="menu_items"><a href="https://bdrf.com.bd/">Home</a></li>
                            <li class="menu_items"><a href="javacsript:void(0)">About Us</a>
                                <ul class="">
                                    <li><a href="https://bdrf.com.bd/who-we-are">Who We Are</a></li>
                                    <li><a href="https://bdrf.com.bd/our-mission">Our Vision</a></li>
                                    <li><a href="https://bdrf.com.bd/our-commitment">Our Commitment</a></li>
                                    <li><a href="https://bdrf.com.bd/advisory-board">Advisory Board</a></li>
                                </ul>
                            </li>
                            <li class="menu_items">
                                <a href="javacsript:void(0)">Our People</a>
                                <ul>
                                    <li><a href="https://bdrf.com.bd/advisory-board">Advisors</a></li>
                                    <li><a href="javacsript:void(0)">Members</a></li>
                                    <li><a href="https://bdrf.com.bd/researchers">Researchers</a></li>
                                    <li><a href="javacsript:void(0)">Scientific Advisory Team</a></li>
                                </ul>
                            </li>
                            <li class="menu_items">
                                <a href="javacsript:void(0)">Research & Publication</a>
                                <ul>
                                    <li><a href="https://bdrf.com.bd/journals">Journals</a></li>
                                    <li><a href="https://bdrf.com.bd/ongoing-research-projects">Ongoing Research Projects</a></li>
                                    <li><a href="https://bdrf.com.bd/apply-for-research-fund">Apply For Research Fund</a></li>
                                </ul>
                            </li>
                            <li class="menu_items">
                                <a href="javacsript:void(0)">Membership</a>
                                <ul>
                                    <li><a href="https://bdrf.com.bd/membership#list">Members List</a></li>
                                    <li><a href="https://bdrf.com.bd/membership#benefit">Membership Benefits</a></li>
                                    <li><a href="https://bdrf.com.bd/membership#apply">Apply Membership</a></li>
                                </ul>
                            </li>
                            <li class="menu_items">
                                <a href="javacsript:void(0)">Events</a>
                                <ul>
                                    <li><a href="javacsript:void(0)">Upcoming Events</a></li>
                                    <li><a href="javacsript:void(0)">Upcoming Conference</a></li>
                                    <li><a href="javacsript:void(0)">Virtual Conference</a></li>
                                    <li><a href="javacsript:void(0)">Training Program</a></li>
                                </ul>
                            </li>
                            <li class="menu_items"><a href="https://bdrf.com.bd/donations">Donation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="Header__right ">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=61553089305659&mibextid=ZbWKwL">
                                    <svg width="7" height="17" viewBox="0 0 7 17" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M1.51273 3.30831C1.51273 3.72411 1.51273 5.58002 1.51273 5.58002H0V8.35789H1.51273V16.6127H4.62018V8.35812H6.70542C6.70542 8.35812 6.90071 7.02615 6.99538 5.56978C6.72397 5.56978 4.63192 5.56978 4.63192 5.56978C4.63192 5.56978 4.63192 3.95371 4.63192 3.67044C4.63192 3.38656 4.97073 3.00471 5.3056 3.00471C5.63984 3.00471 6.34528 3.00471 6.99866 3.00471C6.99866 2.6265 6.99866 1.3197 6.99866 0.112793C6.12641 0.112793 5.13409 0.112793 4.69668 0.112793C1.43591 0.112601 1.51273 2.89323 1.51273 3.30831Z" fill="currentColor"></path></svg>
                                </a>
                            </li>
                            <li><a href="https://instagram.com/bdrfofficial?igshid=MzMyNGUyNmU2YQ==">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path fill-rule="evenodd" clip-rule="evenodd" d="M9.91594 0.112793C10.9871 0.114176 11.4883 0.11959 11.9274 0.133236L12.0516 0.137363C12.2366 0.1439 12.4191 0.152022 12.6391 0.16206C13.517 0.202111 14.1166 0.341586 14.6413 0.545542C15.1837 0.756343 15.6437 1.03844 16.1023 1.49708C16.5608 1.95575 16.8429 2.41583 17.0537 2.95834C17.2576 3.48309 17.397 4.08282 17.4371 4.96093C17.4471 5.18092 17.4552 5.36346 17.4617 5.54855L17.4659 5.67276C17.4795 6.11188 17.4849 6.6132 17.4863 7.6846L17.4867 8.18016L17.4867 8.36239C17.4867 8.42463 17.4867 8.48536 17.4867 8.54462L17.4863 9.04017C17.4849 10.1116 17.4795 10.6129 17.4659 11.052L17.4617 11.1762C17.4552 11.3613 17.4471 11.5438 17.4371 11.7638C17.397 12.6419 17.2576 13.2417 17.0537 13.7664C16.8429 14.3089 16.5608 14.769 16.1023 15.2277C15.6437 15.6863 15.1837 15.9684 14.6413 16.1792C14.1166 16.3832 13.517 16.5226 12.6391 16.5627C12.4191 16.5727 12.2366 16.5809 12.0516 16.5874L11.9274 16.5915C11.4883 16.6052 10.9871 16.6106 9.91594 16.612L9.42049 16.6123L9.23829 16.6123C9.17606 16.6123 9.11534 16.6123 9.05608 16.6123L8.56063 16.612C7.48943 16.6106 6.98819 16.6052 6.54916 16.5915L6.42497 16.5874C6.23992 16.5809 6.0574 16.5727 5.83746 16.5627C4.95951 16.5226 4.35991 16.3832 3.83525 16.1792C3.29284 15.9684 2.83284 15.6863 2.37425 15.2277C1.9157 14.769 1.63366 14.3089 1.4229 13.7664C1.21898 13.2417 1.07953 12.6419 1.03949 11.7638C1.02945 11.5438 1.02133 11.3613 1.0148 11.1762L1.01068 11.052C0.997034 10.6129 0.991617 10.1116 0.990234 9.04017V7.6846C0.991617 6.6132 0.997034 6.11188 1.01068 5.67276L1.0148 5.54855C1.02133 5.36346 1.02945 5.18092 1.03949 4.96093C1.07953 4.08282 1.21898 3.48309 1.4229 2.95834C1.63366 2.41583 1.9157 1.95575 2.37425 1.49708C2.83284 1.03844 3.29284 0.756343 3.83525 0.545542C4.35991 0.341586 4.95951 0.202111 5.83746 0.16206C6.0574 0.152022 6.23992 0.1439 6.42497 0.137363L6.54916 0.133236C6.98819 0.11959 7.48943 0.114176 8.56063 0.112793H9.91594ZM9.23829 1.59889C9.17711 1.59889 9.11743 1.5989 9.05919 1.59891L8.57255 1.59923C6.97036 1.60115 6.67832 1.61172 5.9052 1.647C5.10099 1.68367 4.66424 1.81807 4.37359 1.93105C3.98857 2.08071 3.71381 2.25949 3.42518 2.5482C3.13653 2.83687 2.95779 3.1117 2.80815 3.49679C2.69519 3.78749 2.56082 4.22432 2.52415 5.02868C2.48888 5.80195 2.4783 6.09404 2.47639 7.69654L2.47607 8.18326L2.47605 8.36239C2.47605 8.42358 2.47606 8.48327 2.47607 8.54152L2.47639 9.02824C2.4783 10.6307 2.48888 10.9228 2.52415 11.6961C2.56082 12.5004 2.69519 12.9373 2.80815 13.228C2.95779 13.6131 3.13656 13.8879 3.42518 14.1766C3.71381 14.4653 3.98857 14.644 4.37359 14.7937C4.66424 14.9067 5.10099 15.0411 5.9052 15.0778C6.67823 15.113 6.97021 15.1236 8.5725 15.1255L9.05917 15.1258L9.23829 15.1259C9.29947 15.1259 9.35916 15.1259 9.4174 15.1258L9.90406 15.1255C11.5063 15.1236 11.7983 15.113 12.5713 15.0778C13.3756 15.0411 13.8123 14.9067 14.103 14.7937C14.488 14.644 14.7627 14.4653 15.0514 14.1766C15.34 13.8879 15.5188 13.6131 15.6684 13.228C15.7813 12.9373 15.9157 12.5004 15.9524 11.6961C15.9877 10.9228 15.9982 10.6307 16.0001 9.02824L16.0005 8.54152L16.0005 8.36239C16.0005 8.3012 16.0005 8.24151 16.0005 8.18326L16.0001 7.69654C15.9982 6.09404 15.9877 5.80195 15.9524 5.02868C15.9157 4.22432 15.7813 3.78749 15.6684 3.49679C15.5188 3.1117 15.34 2.83687 15.0514 2.5482C14.7627 2.25949 14.488 2.08071 14.103 1.93105C13.8123 1.81807 13.3756 1.68367 12.5713 1.647C11.7982 1.61172 11.5062 1.60115 9.90401 1.59923L9.41738 1.59891L9.23829 1.59889ZM9.23829 4.11239C11.585 4.11239 13.4875 6.01516 13.4875 8.36239C13.4875 10.7096 11.585 12.6124 9.23829 12.6124C6.89149 12.6124 4.98909 10.7096 4.98909 8.36239C4.98909 6.01516 6.89149 4.11239 9.23829 4.11239ZM9.23829 5.60361C7.71493 5.60361 6.48003 6.83875 6.48003 8.36239C6.48003 9.88601 7.71493 11.1211 9.23829 11.1211C10.7616 11.1211 11.9965 9.88601 11.9965 8.36239C11.9965 6.83875 10.7616 5.60361 9.23829 5.60361ZM13.4874 3.1124C14.0396 3.1124 14.4873 3.56012 14.4873 4.11241C14.4873 4.6647 14.0396 5.11239 13.4874 5.11239C12.9353 5.11239 12.4876 4.6647 12.4876 4.11241C12.4876 3.56012 12.9353 3.1124 13.4874 3.1124Z" fill="currentColor"></path></svg>
                                </a>
                            </li>
                            <li><a href="https://www.linkedin.com/company/bangladesh-dental-research-foundation/">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M18.8761 0.000135994H2.40401C2.21885 -0.00243607 2.03499 0.0314987 1.86294 0.100002C1.69089 0.168506 1.53402 0.270237 1.40129 0.399385C1.26855 0.528533 1.16255 0.682568 1.08934 0.852694C1.01613 1.02282 0.977146 1.2057 0.974609 1.3909V18.0606C0.977146 18.2458 1.01613 18.4287 1.08934 18.5988C1.16255 18.769 1.26855 18.923 1.40129 19.0521C1.53402 19.1813 1.69089 19.283 1.86294 19.3515C2.03499 19.42 2.21885 19.454 2.40401 19.4514H18.8761C19.0613 19.454 19.2451 19.42 19.4172 19.3515C19.5892 19.283 19.7461 19.1813 19.8789 19.0521C20.0116 18.923 20.1176 18.769 20.1908 18.5988C20.264 18.4287 20.303 18.2458 20.3055 18.0606V1.3909C20.303 1.2057 20.264 1.02282 20.1908 0.852694C20.1176 0.682568 20.0116 0.528533 19.8789 0.399385C19.7461 0.270237 19.5892 0.168506 19.4172 0.100002C19.2451 0.0314987 19.0613 -0.00243607 18.8761 0.000135994V0.000135994ZM6.83806 16.2808H3.92092V7.52777H6.83806V16.2808ZM5.37949 6.30234C4.97718 6.30234 4.59135 6.1425 4.30687 5.85797C4.0224 5.57344 3.86258 5.18753 3.86258 4.78515C3.86258 4.38276 4.0224 3.99685 4.30687 3.71232C4.59135 3.42779 4.97718 3.26795 5.37949 3.26795C5.59312 3.24372 5.80946 3.26489 6.01433 3.33008C6.21921 3.39527 6.40802 3.50301 6.56838 3.64624C6.72874 3.78947 6.85705 3.96496 6.9449 4.16123C7.03275 4.3575 7.07816 4.57011 7.07816 4.78515C7.07816 5.00018 7.03275 5.2128 6.9449 5.40906C6.85705 5.60533 6.72874 5.78082 6.56838 5.92405C6.40802 6.06729 6.21921 6.17502 6.01433 6.24021C5.80946 6.3054 5.59312 6.32657 5.37949 6.30234V6.30234ZM17.3592 16.2808H14.4421V11.5834C14.4421 10.4066 14.024 9.63823 12.9641 9.63823C12.636 9.64064 12.3166 9.74354 12.0489 9.93309C11.7811 10.1226 11.5779 10.3897 11.4666 10.6983C11.3905 10.9269 11.3575 11.1677 11.3694 11.4083V16.2711H8.45221C8.45221 16.2711 8.45221 8.31555 8.45221 7.51805H11.3694V8.7532C11.6344 8.29328 12.0198 7.91439 12.4841 7.65732C12.9485 7.40026 13.4741 7.27476 14.0045 7.29436C15.9493 7.29436 17.3592 8.54896 17.3592 11.243V16.2808Z" fill="currentColor"></path></svg>
                                </a>
                            </li>
                            <li><a href="https://x.com/bdrfinfo?t=mXM4tzxmNhL4lAzZTDiNnQ&s=09">
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path fill-rule="evenodd" clip-rule="evenodd" d="M5.80106 13.6128C12.2347 13.6128 15.7419 8.40876 15.7419 3.92327V3.48779C16.4347 3.00876 17.0153 2.39908 17.4844 1.72408C16.8589 1.98537 16.1887 2.18134 15.4739 2.26844C16.1887 1.85473 16.7472 1.17973 17.0153 0.374084C16.3451 0.76602 15.5856 1.04908 14.8037 1.2015C14.1559 0.526504 13.2623 0.112793 12.257 0.112793C10.3136 0.112793 8.74982 1.63699 8.74982 3.53134C8.74982 3.79263 8.77215 4.05392 8.83917 4.31521C5.9351 4.16279 3.36612 2.81279 1.62367 0.744244C1.33326 1.24505 1.15454 1.83295 1.15454 2.44263C1.15454 3.61844 1.78004 4.6636 2.71828 5.27328C2.13746 5.2515 1.60132 5.09908 1.1322 4.83779V4.88134C1.1322 6.53618 2.33852 7.90795 3.94693 8.21279C3.65652 8.29989 3.34377 8.34344 3.03102 8.34344C2.80763 8.34344 2.58424 8.32166 2.38319 8.27811C2.82997 9.62811 4.12563 10.608 5.64468 10.6515C4.43838 11.566 2.94166 12.1104 1.31091 12.1104C1.02051 12.1104 0.752443 12.0886 0.484375 12.0668C2.00343 13.0467 3.83522 13.6128 5.80106 13.6128Z" fill="currentColor"></path></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</header>


<!------------- Menu items start ------------->
<section class="MenuItems">
    <!--    menu item -->
    <div class="container">
        <div class="MenuItems__top">

            <!-- single-->
            <div class="MenuItems__top__single">
                <a href="https://bdrf.com.bd">Home</a>
            </div>
            <!-- single-->
            <div class="MenuItems__top__single">
                <a href="javacsript:void(0)">About Us</a>
                <ul class="">
                    <li><a href="https://bdrf.com.bd/who-we-are">Who-we-are</a></li>
                    <li><a href="https://bdrf.com.bd/our-mission">Our Mission</a></li>
                    <li><a href="https://bdrf.com.bd/our-commitment">Our Commitment</a></li>
                    <li><a href="https://bdrf.com.bd/advisory-board">Advisory Board</a></li>
                </ul>
            </div>
            <!-- single-->
            <div class="MenuItems__top__single">
                <a href="javacsript:void(0)">Our People</a>
                <ul>
                    <li><a href="https://bdrf.com.bd/advisors">Advisors</a></li>
                    <li><a href="javacsript:void(0)">Members</a></li>
                    <li><a href="https://bdrf.com.bd/researchers">Researchers</a></li>
                    <li><a href="javacsript:void(0)">Scientific Advisory Team</a></li>
                </ul>
            </div>

            <!-- single-->

            <div class="MenuItems__top__single">
                <a href="javacsript:void(0)">Research & Publication</a>
                <ul>
                    <li><a href="https://bdrf.com.bd/journals">Journals</a></li>
                    <li><a href="https://bdrf.com.bd/ongoing-research-projects">Ongoing Research Projects</a></li>
                    <li><a href="https://bdrf.com.bd/apply-for-research-fund">Apply For Research Fund</a></li>
                </ul>
            </div>

            <!-- single-->
            <div class="MenuItems__top__single">
                <a href="javacsript:void(0)">Membership</a>
                <ul>
                    <li><a href="https://bdrf.com.bd/membership#list">Members List</a></li>
                    <li><a href="https://bdrf.com.bd/membership#benefit">Membership Benefits</a></li>
                    <li><a href="https://bdrf.com.bd/membership#apply">Apply Membership</a></li>
                </ul>
            </div>
            <!-- single-->
            <div class="MenuItems__top__single">
                <a href="javacsript:void(0)">Events</a>
                <ul>
                    <li><a href="javacsript:void(0)">Upcoming Events</a></li>
                    <li><a href="javacsript:void(0)">Upcoming Conference</a></li>
                    <li><a href="javacsript:void(0)">Virtual Conference</a></li>
                    <li><a href="javacsript:void(0)">Training Program</a></li>
                </ul>
            </div>
            <div class="MenuItems__top__single">
                <a href="https://bdrf.com.bd/donations">Donation</a>
            </div>

        </div>


    </div>

</section>
<!------------- Menu items end ------------->
