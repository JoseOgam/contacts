<!DOCTYPE html>
<html lang="en">
<head>
    <title>ogam software</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zeta Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('styles/responsive.css')}}">
    <link rel="icon" type="image/ico" href="{{('images/bitmap.png')}}"/>
</head>

<body>

<div class="super_container">

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
                <li><a href="#"><span>services</span></a></li>
                <li><a href="#"><span>elements</span></a></li>
                <li><a href="#"><span>blog</span></a></li>
                <li><a href="{{route('index.index')}}"><span>contact</span></a></li>
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
                <li><a href="#"><span><span>S</span>Services</span></a></li>
                <li><a href="#"><span><span>E</span>Elements</span></a></li>
                <li><a href="#"><span><span>B</span>Blog</span></a></li>
                <li><a href="#"><span><span>C</span>Contact</span></a></li>
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
    <!--content-->
    <main class="py-4">
        @yield('content')
    </main>
    <!--#content-->
    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row footer_content d-flex flex-sm-row flex-column align-items-center">
                <div class="col-sm-6 cr text-sm-left text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i>
                        by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
