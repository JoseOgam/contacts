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
    @include('layouts.header')
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

    <!-- How we work -->

    <div class="about prlx_parent">
        <div class="about_background prlx" style="background-image:url({{url('images/about_background.jpg')}})"></div>
        <div class="about_shapes"><img src="{{('images/about_shapes.png')}}" alt=""></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center section_title">
                    <h2>How We Work<span>OgamSoftware</span></h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="about_text">
                        <p>
                            Great achievements happen through people and it is the people that make the business
                            successful. Our Developers showcase their skills, share their knowledge and learn from the
                            like-minded in an open office set up. Within an environment stimulating personal growth,
                            self- motivation and creativity, our experts can take ownership of the processes that make
                            both our business and our clients' businesses succeed.
                        </p>
                            <a href="{{route('portfolio.index')}}" class="button contact_button d-flex flex-row align-items-center justify-content-center">
                               <p class="text-light"> View our Work</p>
                                </a>
                    </div>
                </div>

                <!--<div class="col-lg-6">
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
                </div> -->

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
    @include('layouts.fuuter')

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
