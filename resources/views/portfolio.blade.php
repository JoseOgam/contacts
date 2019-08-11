<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>our work</title>

    <!-- Custom fonts for this theme -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css">
    <link href="{{('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic')}}" rel="stylesheet" type="text/css">
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

<body id="page-top">

<!-- Navigation -->
<header class="header d-flex flex-row justify-content-end align-items-center">

    <!-- Logo -->
    <div class="logo_container mr-auto">
        <div class="logo">
            <a href="#">
                <img src="{{('images/ogam.png')}}", width="100px", height="50px">
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
<!-- Masthead -->

<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">

            <!-- Portfolio Item 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/cake.png" alt="">
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/circus.png" alt="">
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/game.png" alt="">
                </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/safe.png" alt="">
                </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
</section>

<!-- Footer -->


<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Your Website 2019</small>
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/cabin.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/cake.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/circus.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/game.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/safe.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/submarine.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row footer_content d-flex flex-sm-row flex-column align-items-center">
            <div class="col-sm-6 cr text-sm-left text-center">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
                    This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>
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
