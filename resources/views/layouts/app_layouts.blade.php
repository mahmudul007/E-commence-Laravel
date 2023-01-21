{{-- @if (!Auth::check())  @else
<div class="btn btn-primary py-4 px-lg-5  nav-item dropdown">
    <a href="#" style="color: white" class="nav-link dropdown-toggle"
        data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
    <div class="dropdown-menu fade-down m-0">
        <a href="{{ route('admission.coupon.list.get') }}" class="dropdown-item">Coupons</a>

        @if (Auth::user()->type == 'admin')
            <a href="{{ route('admin.analytics.visitors') }}" class="dropdown-item">Admin Panel</a>
        @elseif (Auth::user()->type == 'manager')
            <a href="{{ route('university.dashboard') }}" class="dropdown-item">University Panel</a>
        @endif
        <a href="" class="dropdown-item"
            onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">Logout</a>
    </div>
</div> --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}



    <!-- Stylesheets
 ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:300,400,500,600,700|Merriweather:300,400,300i,400i&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css" />

    <!-- shop Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('demos/shop/shop.cs') }}s" type="text/css" />
    <link rel="stylesheet" href="{{ asset('demos/shop/css/fonts.css') }}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{ asset('css/colors.php?color=000000') }}" type="text/css" />
    @yield('css')
    <!-- Document Title
 ============================================= -->
 <title> @yield('title')|Home </title>  


</head>



<body class="stretched">

    <!-- Document Wrapper
        ============================================= -->
    <div id="wrapper" class="clearfix">

       
        <!-- Login Modal -->
        <div class="modal1 mfp-hide" id="modal-register">
            <div class="card mx-auto" style="max-width: 540px;">
                <div class="card-header py-3 bg-transparent center">
                    <h3 class="mb-0 fw-normal">Hello, Welcome Back</h3>
                </div>
                <div class="card-body mx-auto py-5" style="max-width: 70%;">

                    <a href="#"
                        class="button button-large w-100 si-colored si-facebook nott fw-normal ls0 center m-0"><i
                            class="icon-facebook-sign"></i> Log in with Facebook</a>

                    <div class="divider divider-center"><span class="position-relative" style="top: -2px">OR</span>
                    </div>

                    <form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

                        <div class="col-12">
                            <input type="text" id="login-form-username" name="login-form-username" value=""
                                class="form-control not-dark" placeholder="Username" />
                        </div>

                        <div class="col-12 mt-4">
                            <input type="password" id="login-form-password" name="login-form-password"
                                value="" class="form-control not-dark" placeholder="Password" />
                        </div>

                        <div class="col-12">
                            <a href="#" class="float-end text-dark fw-light mt-2">Forgot Password?</a>
                        </div>

                        <div class="col-12 mt-4">
                            <button class="button w-100 m-0" id="login-form-submit" name="login-form-submit"
                                value="login">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-4 center">
                    <p class="mb-0">Don't have an account? <a href="{{route('register')}}"><u>Sign up</u></a></p>
                </div>
            </div>
        </div>

        <!-- Top Bar
            ============================================= -->
        <div id="top-bar" class="dark" style="background-color: #a3a5a7;">
            <div class="container">

                <div class="row justify-content-between align-items-center">

                    <div class="col-12 col-lg-auto">
                        <p class="mb-0 d-flex justify-content-center justify-content-lg-start py-3 py-lg-0">
                            <strong>Free U.S. Shipping on Order above $99. Easy Returns.</strong></p>
                    </div>

                    <div class="col-12 col-lg-auto d-none d-lg-flex">

                        <!-- Top Links
                            ============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#">About</a></li>
                                <li class="top-links-item"><a href="#">FAQS</a></li>
                                <li class="top-links-item"><a href="#">Blogs</a></li>
                                <li class="top-links-item"><a href="#">EN</a>
                                    <ul class="top-links-sub-menu">
                                        <li class="top-links-item"><a href="#"><img
                                                    src="images/icons/flags/french.png" alt="French"> FR</a></li>
                                        <li class="top-links-item"><a href="#"><img
                                                    src="images/icons/flags/italian.png" alt="Italian"> IT</a></li>
                                        <li class="top-links-item"><a href="#"><img
                                                    src="images/icons/flags/german.png" alt="German"> DE</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- .top-links end -->

                        <!-- Top Social
                            ============================================= -->
                        <ul id="top-social">
                            <li><a href="#" class="si-facebook"><span class="ts-icon"><i
                                            class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                            </li>
                            <li><a href="#" class="si-instagram"><span class="ts-icon"><i
                                            class="icon-instagram2"></i></span><span
                                        class="ts-text">Instagram</span></a></li>
                            <li><a href="tel:+1.11.85412542" class="si-call"><span class="ts-icon"><i
                                            class="icon-call"></i></span><span
                                        class="ts-text">+1.11.85412542</span></a></li>
                            <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i
                                            class="icon-envelope-alt"></i></span><span
                                        class="ts-text">info@canvas.com</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>
                </div>

            </div>
        </div>

        <!-- Header
            ============================================= -->
        <header id="header" class="full-header header-size-md">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row justify-content-lg-between">

                        <!-- Logo
                            ============================================= -->
                        <div id="logo" class="me-lg-4">
                            <a href="demo-shop.html" class="standard-logo"><img src="demos/shop/images/logo.png"
                                    alt="Canvas Logo"></a>
                            <a href="demo-shop.html" class="retina-logo"><img src="demos/shop/images/logo@2x.png"
                                    alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            <!-- Top Search
                                ============================================= -->
                            <div id="top-account">
                                @if (!Auth::check())
                                <a href="#modal-register" data-lightbox="inline"><i
                                        class="icon-line2-user me-1 position-relative" style="top: 1px;"></i><span
                                        class="d-none d-sm-inline-block font-primary fw-medium">Login</span></a>

                                        @else

                                        <div class="btn btn-primary py-4 px-lg-5  nav-item dropdown">
                                            <a href="#" style="color: white" class="nav-link dropdown-toggle"
                                                data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                            <div class="dropdown-menu fade-down m-0">
                                                <a href="#" class="dropdown-item">Orders</a>
                        
                                                @if (Auth::user()->type == 'admin')
                                                    <a href="#" class="dropdown-item">Admin Panel</a>
                                                @elseif (Auth::user()->type == 'manager')
                                                    <a href="#" class="dropdown-item">University Panel</a>
                                                @endif
                                                <a href="" class="dropdown-item"
                                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                            </div>
                                        </div>
                                        @endif
                                      
                                      


                            </div><!-- #top-search end -->

                            <!-- Top Cart
                                ============================================= -->
                            <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                                <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                        class="top-cart-number">5</span></a>
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="images/shop/small/1.jpg"
                                                        alt="Blue Round-Neck Tshirt" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                                    <span class="top-cart-item-price d-block">$19.99</span>
                                                </div>
                                                <div class="top-cart-item-quantity">x 2</div>
                                            </div>
                                        </div>
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="images/shop/small/6.jpg"
                                                        alt="Light Blue Denim Dress" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#">Light Blue Denim Dress</a>
                                                    <span class="top-cart-item-price d-block">$24.99</span>
                                                </div>
                                                <div class="top-cart-item-quantity">x 3</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action">
                                        <span class="top-checkout-price">$114.95</span>
                                        <a href="#" class="button button-3d button-small m-0">View Cart</a>
                                    </div>
                                </div>
                            </div><!-- #top-cart end -->

                            <!-- Top Search
                                ============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                            </div><!-- #top-search end -->

                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
                            ============================================= -->
                        <nav class="primary-menu with-arrows me-lg-auto">

                            <ul class="menu-container">
                                <li class="menu-item current"><a class="menu-link" href="/">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item mega-menu"><a class="menu-link" href="#">
                                        <div>Men</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                <ul
                                                    class="sub-menu-container mega-menu-column border-start-0 col-lg-3">
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Footwear</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Casual Shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Formal Shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sports shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Flip Flops</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Slippers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sandals</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Show all <i class="icon-angle-right"></i>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Clothing</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Casual Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>T-Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Collared Tees</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Pants / Trousers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Show all <i class="icon-angle-right"></i>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul
                                                    class="sub-menu-container mega-menu-column border-start-0 col-lg-3">
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Sportswear</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sports Casual Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sports T-Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sports Collared Tees</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sports Shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Jackets</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Swimwears</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Show all <i class="icon-angle-right"></i>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Innerwears</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Boxers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Vests</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sleepwears</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Show all <i class="icon-angle-right"></i>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul
                                                    class="sub-menu-container mega-menu-column border-start-0 col-lg-3">
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Innerwears</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Boxers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Vests</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sleepwears</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Show all <i class="icon-angle-right"></i>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Sunglasses</div>
                                                        </a>
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Watches</div>
                                                        </a>
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Bags</div>
                                                        </a>
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Headphones</div>
                                                        </a>
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Accessories</div>
                                                        </a>
                                                </ul>
                                                <ul
                                                    class="sub-menu-container mega-menu-column col-lg-3 border-start-0">
                                                    <li class="card p-0 bg-transparent border-0">
                                                        <img class="card-img-top"
                                                            src="demos/shop/images/menu-image.jpg" alt="image cap">
                                                        <a href="#"
                                                            class="btn btn-link text-start fw-medium ps-0 bg-transparent"><u>Editor's
                                                                Pick</u></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item mega-menu mega-menu-small"><a class="menu-link" href="#">
                                        <div>Women</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="sub-menu-container mega-menu-column col-lg-6">
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Footwear</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Casual Shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Formal Shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sports shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Flip Flops</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Slippers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Sandals</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Party Shoes</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-6">
                                                    <li class="menu-item mega-menu-title"><a class="menu-link"
                                                            href="#">
                                                            <div>Clothing</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Casual Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>T-Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Collared Tees</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Pants / Trousers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Ethnic Wear</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Jeans</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="#">
                                                                    <div>Swimwear</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Accessories</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Blog</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Sales</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->






        @yield('content')









        <!-- Footer
  ============================================= -->
        <footer id="footer" class="bg-transparent border-0">

            <div class="container clearfix">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap pb-3 border-bottom clearfix">

                    <div class="row">

                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget clearfix">

                                <h4 class="ls0 mb-3 nott">Features</h4>

                                <ul class="list-unstyled iconlist ms-0">
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Paid with Moblie</a></li>
                                    <li><a href="#">Status</a></li>
                                    <li><a href="#">Changelog</a></li>
                                    <li><a href="#">Contact Support</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget clearfix">

                                <h4 class="ls0 mb-3 nott">Support</h4>

                                <ul class="list-unstyled iconlist ms-0">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget clearfix">

                                <h4 class="ls0 mb-3 nott">Trending</h4>

                                <ul class="list-unstyled iconlist ms-0">
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Forums</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget clearfix">

                                <h4 class="ls0 mb-3 nott">Get to Know us</h4>

                                <ul class="list-unstyled iconlist ms-0">
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Agency</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Personal</a></li>
                                    <li><a href="#">OnePage</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <div class="widget clearfix">

                                <h4 class="ls0 mb-3 nott">Subscribe Now</h4>
                                <div class="widget subscribe-widget mt-2 clearfix">
                                    <p class="mb-4"><strong>Subscribe</strong> to Our Newsletter to get Important
                                        News, Amazing Offers &amp; Inside Scoops:</p>
                                    <div class="widget-subscribe-form-result"></div>
                                    <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                        class="mt-1 mb-0 d-flex">
                                        <input type="email" id="widget-subscribe-form-email"
                                            name="widget-subscribe-form-email"
                                            class="form-control sm-form-control required email"
                                            placeholder="Enter your Email Address">

                                        <button class="button nott fw-normal ms-1 my-0" type="submit">Subscribe
                                            Now</button>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
   ============================================= -->
            <div id="copyrights" class="bg-transparent">

                <div class="container clearfix">

                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            Copyrights &copy; {{Carbon\Carbon::now()->format('Y')}} All Rights Reserved by Mahmudul*<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a
                                    href="#">Privacy Policy</a></div>
                        </div>

                        <div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
                            <div class="copyrights-menu copyright-links clearfix">
                                <a href="#">About</a>/<a href="#">Features</a>/<a
                                    href="#">FAQs</a>/<a href="#">Contact</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->



    </div><!-- #wrapper end -->

















    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="icon-line-arrow-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.min.js') }}"></script>

    <!-- Footer Scripts
 ============================================= -->
    <script src="{{ asset('js/functions.js') }}"></script>

    <!-- ADD-ONS JS FILES -->
    @yield('script');



</body>

</html>
