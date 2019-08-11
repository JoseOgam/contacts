<!DOCTYPE html>
<html lang="en">
<head>
    <title>web services kenya</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zeta Template Project - Services">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('styles/services_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('styles/services_responsive.css')}}">
    <link rel="icon" type="image/ico" href="{{('images/bitmap.png')}}" />

</head>

<body>

<div class="">

    <!-- Header -->

    <header class="header d-flex flex-row justify-content-end align-items-center">

        <!-- Logo -->
        <div class="logo_container mr-auto">
            <div class="logo">
                <a href="#">
                    <img src="{{('images/ogam.png')}}" width="100px" height="50px" alt="logo">
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
                <li><a href="{{route('portfolio.index')}}"><span><span>P</span>Portfolio</span></a></li>
                <li><a href="{{route('contact.index')}}"><span><span>C</span>Contact</span></a></li>
            </ul>
        </nav>
        <div class="fs_social_container d-flex flex-row justify-content-end align-items-center">
            <ul class="fs_social">
                <li><a href="#"><i class="fab fa-pinterest trans_300"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble trans_300"></i></a></li>
                <li><a href="#"><i class="fab fa-behance trans_300"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Page Top -->

    <div class="home prlx_parent">

        <!-- Parallax Background -->
        <!-- <div class="page_top_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/services_parallax.jpg"></div> -->
        <div class="home_background prlx" style="background-image:url({{url('images/ogam5.jpg')}})"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home_content">
                        <h2 class="xxxxl-font-size font-weight__700 text-black text-success" >
                           We Design and Develop Websites
                        </h2>
                        <!-- Empty Space -->
                        <div class="md-space"></div>
                        <div class="md-space"></div>
                        <!--/ End Empty Space -->
                        <p class="lead base-plus-font-size text-info">
                            for business agencies, startups,corporates and individual projects

                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Services -->

    <div class="services">

        <div class="container">
            <div class="row">

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="{{('images/icon_1.svg')}}" alt="">
                    </div>
                    <h3 class="text-dark">modern design</h3>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="{{('images/icon_2.svg')}}" alt="">
                    </div>
                    <h3>easy to use</h3>
                    <p>Dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="{{('images/icon_3.svg')}}" alt="">
                    </div>
                    <h3>well documented</h3>
                    <p>Adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="{{('images/icon_4.svg')}}" alt="">
                    </div>
                    <h3>smart structure</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="{{('images/icon_5.svg')}}" alt="">
                    </div>
                    <h3>elements</h3>
                    <p>Dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="{{('images/icon_6.svg')}}" alt="">
                    </div>
                    <h3>bold colors</h3>
                    <p>Adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
                </div>

            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="button services_button">
                        <a href="{{('services.html')}}" class="d-flex flex-row align-items-center justify-content-center">
                            discover<img src="{{('images/arrow_right.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact -->

    <div class="contact prlx_parent">
        <div class="contact_background prlx" style="background-image:url({{url('images/contact_background.jpg')}})"></div>
        <div class="contact_shapes"><img src="{{('images/contact_shape.png')}}" alt=""></div>
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center section_title contact_title">
                    <h2>let's work together<span>z</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center contact_text">
                    <p>Dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam.</p>
                    <div class="button contact_button">
                        <a href="" class="d-flex flex-row align-items-center justify-content-center">contact<img
                                src="{{('images/arrow_right.svg')}}" alt=""></a>
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-sm-6 text-sm-right text-center">
                    <div class="footer_social_container">
                        <ul class="footer_social">
                            <li><a href="#"><i class="fab fa-pinterest trans_300"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble trans_300"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance trans_300"></i></a></li>
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
<script src="{{('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{('plugins/parallax.js-1.5.0/parallax.min.js')}}"></script>
<script src="{{('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{('plugins/easing/easing.js')}}"></script>
<script src="{{('js/services_custom.js')}}"></script>
</body>

</html>
