<!DOCTYPE html>
<html lang="en">
<head>
    <title>contact us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zeta Template Project - Contact">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('plugins/js-flickr-gallery-1.24/js-flickr-gallery.css')}}">
    <link href="{{('plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{('styles/contact_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('styles/contact_responsive.css')}}">
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
    <div class="fs_menu_container " style="background-color: #2fa360">
        <div class="fs_menu_shapes"><img src="{{('images/menu_shapes.png')}}" alt=""></div>
        <nav class="fs_menu_nav">
            <ul class="fs_menu_list">
                <li><a href="{{route('index.index')}}"><span><span>H</span>Home</span></a></li>
                <li><a href="{{route('services.index')}}"><span><span>S</span>Services</span></a></li>
                <li><a href="{{route('portfolio.index')}}"><span><span>P</span>Portfolio</span></a></li>
                <li><a href="{{route('contact.index')}}"><span><span>C</span>Contact</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- Contact Content -->

    <div class="contact_content">

        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="contact_main_content">

                        <div class="contact_subtitle">contact us</div>

                        <!-- Contact Us Form -->
                        <div class="contact_form_container">
                            <form id="reply_form" action="#">
                                <div>
                                    <label for="contact_form_name"></label><input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                    <label for="contact_form_email"></label><input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                    <label for="contact_form_subject"></label><input id="contact_form_subject" class="input_field contact_form_subject" type="text" placeholder="Subject" required="required" data-error="Subject is required.">
                                    <label for="contact_form_message"></label><textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" rows="4" required data-error="Please, write us a message."></textarea>
                                </div>
                                <div>
                                    <button id="contact_form_submit" type="submit" class="contact_submit_btn trans_300" value="Submit">
                                        send<img src="{{('images/arrow_right.svg')}}" alt="">
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="contact_sidebar">

                        <!-- Contact Info -->
                        <div class="sidebar_section">
                            <div class="sidebar_contact_info">
                                <div class="sidebar_title">contact info</div>
                                <ul>
                                    <li>Oginga Odinga street
                                        <br>
                                        Kisumu Town</li>
                                    <li>info@ogamhq.co.ke</li>
                                    <li>+254 700013671</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Google Map Container -->

            <div class="row">
                <div class="col">
                    <div id="google_map">
                        <div class="map_container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8120719025624!2d34.74949491414646!3d-0.10140209992600856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa4932cefa3a9%3A0x48160435bd45f910!2sOginga+Odinga+-+Obote+Roundabout!5e0!3m2!1sen!2ske!4v1565355660757!5m2!1sen!2ske" width="1000px" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
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

</div>

<script src="{{('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{('styles/bootstrap4/popper.js')}}"></script>
<script src="{{('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{('plugins/easing/easing.js')}}"></script>
<script src="{{('js/contact_custom.js')}}"></script>
</body>

</html>
