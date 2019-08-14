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
            <!--<li><a href="{{route('portfolio.index')}}"><span>portfolio</span></a></li> -->
            <li class="active"><a href="{{route('contact.index')}}"><span>contact</span></a></li>
            <li><a href="{{route('about-us.index')}}"><span>About us</span></a></li>
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
   <!-- <div class="fs_menu_shapes"><img src="{{('images/menu_shapes.png')}}" alt=""></div> -->
    <nav class="fs_menu_nav">
        <ul class="fs_menu_list">
            <li><a href="{{route('index.index')}}"><span><span>H</span>Home</span></a></li>
            <li><a href="{{route('services.index')}}"><span><span>S</span>Services</span></a></li>
            <li><a href="{{route('portfolio.index')}}"><span><span>P</span>Portfolio</span></a></li>
            <li><a href="{{route('contact.index')}}"><span><span>C</span>Contact</span></a></li>
        </ul>
    </nav>
</div>
