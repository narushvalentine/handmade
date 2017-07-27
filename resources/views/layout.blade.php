
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handmade</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chosen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}" />

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <body>
        <!-- HEADER -->
        <header class="header header-style1">
            <div class="section-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 left-topbar">
                        <!-- <div class="kt-language">
                            <a href="javascript:void(0)" class="toggle-dropdown">English<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Brazil</a></li>
                              <li><a href="#">Canada</a></li>
                              <li><a href="#">Chile</a></li>
                              <li><a href="#">English</a></li>
                            </ul>
                        </div> -->
                        <div class="kt-currency">
                            <a href="javascript:void(0)" class="toggle-dropdown">BYN<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">BYN</a></li>
                                <li><a href="#">RUB</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9 right-topbar text-right">
                        <ul class="kt-menutop">
                            <!-- <li><a href="#">Личный кабинет</a></li>
                            <li><a href="wishlist.html">Лист ожидания</a></li>
                            <li><a href="blog-grid.html">Blog</a></li>
                            <li><a href="login-register.html">Войти</a></li> -->
                        </ul>
                        <span class="kt-messega">Добро пожаловать в магазин</span>
                    </div>
                </div>  
            </div>
        </div>
        <div class="section-main-header">
            <div class="hm-content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 left-main">
                            <div class="logo">
                                <a class="" title="Handmade logo" href="#">
                                    <img alt="Logo" src="images/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <form action="#" class="hm-form-search">
                                <div class="form-search">
                                    <input type="text" value="" placeholder="Что вы хотите найти?">
                                    <span>
                                        <button class="button-search" name="submit_search" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <select class="select-cat" >
                                    <option value="All Categories">Categories</option>
                                    <option value="1">Category 1</option>
                                    <option value="1">Category 2</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-sm-4 right-main">
                            <div class="infosupport-shoppingcart">
                                <div class="text-contact"><i class="fa fa-phone"></i>  + (102) 3456 789</div>
                                <div class="kt-shopping-cart">
                                    <div class="icon-cart toggle-dropdown">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="number-pro">0</span>
                                    </div>
                                    <span class="price">0.00<span class="price-symbol">&nbsp;BYN</span></span>
                                    <div id="shopping-cart-head" class="shopping-cart-head">
                                        <div class="widget widget-shopping-cart">
                                            <ul class="kt-list-widget list-products">
                                                <li>
                                                    <div class="edit-remove-item">
                                                        <a title="Edit" class="edit" href=""><span class="pe-7s-config"></span></a>
                                                        <a title="Remove item" class="remove" href=""><span class="pe-7s-close-circle"></span></a>
                                                    </div>
                                                    <a title="" href="#" class="product-thumb">
                                                        <img alt="" src="images/product/1.jpg">     
                                                    </a>
                                                    <div class="widget-info-product">
                                                        <h3 class="title-product"><a title="" href="#">Geometric Pillow</a></h3>
                                                        <span class="price-product">$40.00</span>
                                                        <div class="star-rating">
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="edit-remove-item">
                                                        <a title="Edit" class="edit" href=""><span class="pe-7s-config"></span></a>
                                                        <a title="Remove item" class="remove" href=""><span class="pe-7s-close-circle"></span></a>
                                                    </div>
                                                    <a title="" href="#" class="product-thumb">
                                                        <img alt="" src="images/product/2.jpg">     
                                                    </a>
                                                    <div class="widget-info-product">
                                                        <h3 class="title-product"><a title="" href="#">Handmade Buttons</a></h3>
                                                        <span class="price-product">$40.00</span>
                                                        <div class="star-rating">
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="buttons">
                                                <a class="kt-button" href="">Корзина</a>
                                                <a class="kt-button light" href="">Оформить</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-mainmenu">
                <div class="container">
                    <div class="mainmenu-content">
                        <div class="left-mainmenu">
                            <span class="togole-menu-mobile"><i class="fa fa-bars"></i></span>
                            <nav class="navigation">
                                <ul class="main-menu">
                                    <li class="menu-item menu-parent">
                                        <a href="#" title="">Главная</a>
                                    </li>
                                    <li class="menu-item menu-parent">
                                        <a href="#" title="">Каталог <span class="caret"></span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about-me.html">About me</a></li>
                                            <li class="menu-item"><a href="about-team.html">About team</a></li>
                                            <li class="menu-item"><a href="about-us.html">About us</a></li>
                                            <li class="menu-item"><a href="services.html">Services</a></li>
                                            <li class="menu-item"><a href="404.html">404 Error</a></li>
                                            <li class="menu-item"><a href="faq.html">F.A.Q</a></li>
                                            <li class="menu-item"><a href="login-register.html">Login &amp; Register</a></li>
                                            <li class="menu-item"><a href="contact-1.html">Contact 1</a></li>
                                            <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-parent">
                                        <a href="#" title="">О магазине</a>
                                    </li>
                                    <li class="menu-item menu-parent">
                                        <a href="#" title="">Новости</a>
                                    </li>
                                    <li class="menu-item menu-parent megamenu">
                                        <a href="#" title="">Доставка и оплата</a>
                                    </li>
                                    <li class="menu-item menu-parent">
                                        <a href="#" title="">Акции</a>
                                    </li>
                                    <li class="menu-item menu-parent">
                                        <a href="#" title="">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="right-mainmenu">
                            <ul class="kt-social">
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                <li><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /HEADER -->

    @yield('content')

    <!-- FOOTER -->
    <footer>
        <div class="footer-top">
            <div class="link-footer">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-6 scroll-up">
                        <a href="javascript:void(0)" class="scroll-bt">
                            <i class="pe-7s pe-7s-up-arrow"></i>
                            <span>Вверх</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo-footer">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                            <div class="desc-footer">Letterpress, gold foil stamping, and more. Quality, sustainable materials like thick 100% PCW paper and veg-based inks.</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget widget-menu">
                            <h3 class="title-widget">Infomation</h3>
                            <ul class="menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget widget-menu">
                            <h3 class="title-widget">Extras</h3>
                            <ul class="menu">
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget widget-contactinfo">
                            <h3 class="title-widget">Contact Us</h3>
                            <div class="contact-info">
                                <div class="contact-text">
                                    <i class="fa fa-map-marker"></i>
                                    <span>14 Tottenham Court Road, London, England</span>
                                </div>
                                <div class="contact-text">
                                    <i class="fa fa-phone"></i>
                                    <span>(102) 3456 789</span>
                                </div>
                                <div class="contact-text">
                                    <i class="fa fa-envelope"></i>
                                    <a class="mail-contact" href="mailto:info@themesun.abc">info@themesun.abc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="coppyright col-sm-6">
                        <p>© Copyright 2017.</p>
                    </div>
                    <div class="card-support text-right col-sm-6">
                        <ul>
                            <li><a href="#"><img src="images/card1.png" alt=""></a></li>
                            <li><a href="#"><img src="images/card2.png" alt=""></a></li>
                            <li><a href="#"><img src="images/card3.png" alt=""></a></li>
                            <li><a href="#"><img src="images/card4.png" alt=""></a></li>
                            <li><a href="#"><img src="images/card5.png" alt=""></a></li>
                            <li><a href="#"><img src="images/card6.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.debouncedresize.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/masonry.pkgd.min') }}"></script>
    <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/chosen.jquery.min.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hm-masonry.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hm-map.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>

{{-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
        @endif
    </div>
    @endif
</div> --}}
