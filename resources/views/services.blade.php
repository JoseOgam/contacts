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

@include('layouts.header')

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
    <!--cards-->

    <div class="services">

        <div class="container">
            <div class="row">
                <div class="card mb-3 col-sm-6">
                  <div>
                      <img class="card-img-top" src="{{('images/ogam8.jpg')}}" alt="Card image cap">
                  </div>
                </div>
                <div class="card col-sm-6">
                    <div class="card-body">
                        <h3 class="card-title">Web Design & Development</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-sm-6">
                    <div class="card-body">
                        <h3 class="card-title">Big data solutions</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card mb-3 col-sm-6">
                    <div>
                        <img class="card-img-top" src="{{('images/ogam8.jpg')}}" alt="Card image cap">
                    </div>
                </div>
            </div>
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="margin-space"></div>

    <div class="text-center">
        <h2>Our area of expertise</h2>
        <div class="row box-img">
            <div class="col-sm-4" style="margin-bottom:60px;">
                <div>
                    <img src="{{('images/ogam8.jpg')}}" style="width:85px;height:90px;margin:35px 43px;">
                </div>
                <p style="margin-top:10px">Online Entertainment Industry</p>
            </div>
            <div class="col-sm-4" style="margin-bottom:60px">
                <div>
                    <img src="{{('images/ogam8.jpg')}}" style="width:115px;height:90px;margin:35px;">
                </div>
                <p style="margin-top:10px">Finance Technology</p>
            </div>
            <div class="col-sm-4" style="margin-bottom:60px">
                <div>
                    <img src="{{('images/ogam8.jpg')}}" style="width:85px;height:90px;margin:35px;">
                </div>
                <p style="margin-top:10px">Corporate administration</p>
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
                    <h2 class="text-light">What inspires you?</h2>
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
                        legit ltd
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
