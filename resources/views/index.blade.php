<!DOCTYPE html>
<html lang="en">
<head>
    <title>ogam software</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zeta Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom fonts for this theme -->
    <link rel="stylesheet" type="text/css" href="{{('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('styles/responsive.css')}}">
    <link rel="icon" type="image/ico" href="{{('images/bitmap.png')}}" />
    <!-- Theme CSS -->
</head>

<body>

<div class="">

    <!-- Header -->

    <header class="header d-flex flex-row justify-content-end align-items-center">

        <!-- Logo -->
        <div class="logo_container mr-auto">
            <div class="logo">
                <a href="#">
                    <img src="{{('images/ogam.png')}}" width="100px" height="50px" alt="">
                </a>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main_nav justify-self-end">
            <ul class="nav_items">
                <li><a href="{{route('index.index')}}"><span>home</span></a></li>
                <li><a href="{{route('services.index')}}"><span>services</span></a></li>
                <li><a href="{{route('portfolio.index')}}"><span>portfolio</span></a></li>
                <li><a href="{{route('contact.index')}}"><span>contact</span></a></li>
            </ul>
        </nav>

        <!-- Hamburger -->
        <div class="hamburger_container">
            <span class="hamburger_text">Menu</span>
            <span class="hamburger_icon"></span>
        </div>

    </header>

    <!-- Menu -->

    <div class="fs_menu_overlay"></div>
    <div class="fs_menu_container">
        <div class="fs_menu_shapes"><img src="{{('images/menu_shapes.png')}}" alt=""></div>
        <nav class="fs_menu_nav">
            <ul class="fs_menu_list">
                <li><a href="{{route('index.index')}}"><span><span>H</span>Home</span></a></li>
                <li><a href="{{route('services.index')}}"><span><span>S</span>Services</span></a></li>
                <li><a href="{{route('portfolio.index')}}"><span><span>B</span>portfolio</span></a></li>
                <li><a href="{{route('contact.index')}}"><span><span>C</span>Contact</span></a></li>
            </ul>
        </nav>
    </div>

    <!-- Hero Slider -->

    <div class="home">
        <div class="hero_slider_container slider_prlx">
            <div class="owl-carousel owl-theme hero_slider">

                <!-- Slider Item -->
                <div class="owl-item main_slider_item">
                    <div class="main_slider_item_bg" style="background-image:url({{url('images/ogam6.jpg')}})"></div>
                    <div class="main_slider_shapes" ><img src="{{('images/main_slider_shapes.png')}}" alt="" style="width: 100% !important;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col slider_content_col">
                                <div class="main_slider_content">
                                    <h1>Do you need</h1>
                                    <h1>a <span>modern</span> website?</h1>
                                    <div class="button discover_button">
                                        <a href="{{route('contact.index')}}" class="d-flex flex-row align-items-center justify-content-center">
                                            contact us<img src="{{('images/arrow_right.svg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item main_slider_item">
                    <div class="main_slider_item_bg" style="background-image:url({{url('images/ogam7.jpg')}})"></div>
                    <div class="main_slider_shapes"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col slider_content_col">
                                <div class="main_slider_content">
                                    <h1>Do you need</h1>
                                    <h1>a <span>modern</span> website?</h1>
                                    <div class="button discover_button">
                                        <a href="{{route('contact.index')}}" class="d-flex flex-row align-items-center justify-content-center">
                                            contact us<img src="{{('images/arrow_right.svg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item main_slider_item">
                    <div class="main_slider_item_bg" style="background-image:url({{url('images/ogam8.jpg')}})"></div>
                    <div class="main_slider_shapes"><img src="{{('images/main_slider_shapes.png')}}" alt="" style="width: 100% !important;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col slider_content_col">
                                <div class="main_slider_content">
                                    <h1>Do you need</h1>
                                    <h1>a <span>modern</span> website?</h1>
                                    <div class="button discover_button">
                                        <a href="{{route('contact.index')}}" class="d-flex flex-row align-items-center justify-content-center">
                                            contact us<img src="{{('images/arrow_right.svg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Dots

            <div class="main_slider_dots">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul id="main_slider_custom_dots" class="main_slider_custom_dots">
                                <li class="main_slider_custom_dot active">01.</li>
                                <li class="main_slider_custom_dot">02.</li>
                                <li class="main_slider_custom_dot">03.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            Slider Dots -->

            <div class="main_slider_nav_left main_slider_nav">
                <i class="fas fa-chevron-left trans_300"></i>
            </div>

            <div class="main_slider_nav_right main_slider_nav">
                <i class="fas fa-chevron-right trans_300"></i>
            </div>

        </div>
    </div>

    <!-- About -->

    <div class="about prlx_parent">
        <div class="about_background prlx" style="background-image:url({{url('images/about_background.jpg')}})"></div>
        <div class="about_shapes"><img src="{{('images/about_shapes.png')}}" alt=""></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center section_title">
                    <h2>about our project<span>OgamSoftware</span></h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="about_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidun
                            t venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam f
                            eugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum
                            mauris, sit amet egestas metus.</p>
                            <a href="{{route('portfolio.index')}}" class="button contact_button d-flex flex-row align-items-center justify-content-center">
                               <p class="text-light"> View our Work</p>
                                </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skills_container">
                        <ul class="progress_bar_container col_12 clearfix">
                            <li class="pb_item">
                                <div id="skill_1_pbar" class="skill_bars" data-perc="0.85" data-name="skill_1_pbar"></div>
                                <h5>management</h5>
                            </li>
                            <li class="pb_item">
                                <div id="skill_2_pbar" class="skill_bars" data-perc="1" data-name="skill_2_pbar"></div>
                                <h5>design</h5>
                            </li>
                            <li class="pb_item">
                                <div id="skill_3_pbar" class="skill_bars" data-perc="0.75" data-name="skill_3_pbar"></div>
                                <h5>projects</h5>
                            </li>
                            <li class="pb_item">
                                <div id="skill_4_pbar" class="skill_bars" data-perc="0.95" data-name="skill_4_pbar"></div>
                                <h5>inspiration</h5>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Services -->

   <!--
    <div class="clients">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
                    <h2>our clients<span>z</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, est libero olor sit amet, consectetur adipiscing eli mattis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis quam tincidun ante, ac consectetur diam neque eget quam. </p>
                </div>
                <div class="col-lg-6">
                    <p>Amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, quam tincidunest libero olor sit amet, consectetur adipiscing eli mattis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis quam tincidun ante, ac cquam tincidunonsectetur diam neque eget quam.</p>
                </div>
            </div>

            <div class="row">
                <div class="col">


                    <div class="clients_slider_container">
                        <div class="owl-carousel owl-theme clients_slider">


                            <div class="owl-item clients_item">
                                <img src="images/client_1.png" alt="">
                            </div>


                            <div class="owl-item clients_item">
                                <img src="images/client_2.png" alt="">
                            </div>


                            <div class="owl-item clients_item">
                                <img src="images/client_3.png" alt="">
                            </div>


                            <div class="owl-item clients_item">
                                <img src="images/client_4.png" alt="">
                            </div>


                            <div class="owl-item clients_item">
                                <img src="images/client_5.png" alt="">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    -->
    <!-- Contact -->

    <div class="contact prlx_parent">
        <!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
        <div class="contact_background prlx" style="background-image: url({{url('images/contact_background.jpg')}});"></div>
        <div class="contact_shapes"><img src="{{('images/contact_shape.png')}}" alt=""></div>
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center section_title contact_title">
                    <h2>let's work together<span>OgamSoftware</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center contact_text">
                    <p>We are ready for your project, lets get in touch.</p>
                    <div class="button contact_button">
                        <a href="{{route('contact.index')}}" class="d-flex flex-row align-items-center justify-content-center">
                            contact us
                            <img src="{{('images/arrow_right.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row footer_content d-flex flex-sm-row flex-column align-items-center">
                <div class="col-sm-6 cr text-sm-left text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
                        Ogam Software
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-sm-6 text-sm-right text-center">
                    <div class="footer_social_container">
                        <ul class="footer_social">
                            <li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram trans_300"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="{{('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{('styles/bootstrap4/popper.js')}}"></script>
<script src="{{('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{('plugins/easing/easing.js')}}"></script>
<script src="{{('js/custom.js')}}"></script>
</body>

</html>
