<!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="#"><img src="{{ env('STORAGE_URL').'storage/app/admin/fav.png' }}" alt="Ovation"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{ env('APP_URL') }}">HOME</a>
                    </li>
                    <li>
                        <a href="{{ env('APP_URL').'#product' }}">PRODUCTS</a>
                    </li>
                    <li>
                        <a href="{{ env('APP_URL').'/about-us' }}">ABOUT US</a>
                    </li>
                    <li>
                        <a href="{{ env('APP_URL').'/contact-us' }}">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-wrap">
                <h6>{{ $settings['address'] }}</h6>
            </div>
            <div class="sidebar-wrap">
                <h6><a href="tel:{{ $settings['mobile'] }}">{{ $settings['mobile'] }}</a></h6>
                <h6><a href="mailto:{{ $settings['emailid'] }}">{{ $settings['emailid'] }}</a></h6>
            </div>
            <div class="social-btn style3">
                @if(isset($settings['facebook']) && !empty($settings['facebook']))
                <a href="https://www.facebook.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                    </span>
                </a>
                @endif
                
                @if(isset($settings['instagram']) && !empty($settings['instagram']))
                <a href="https://instagram.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                    </span>
                </a>
                @endif
                @if(isset($settings['twitter']) && !empty($settings['twitter']))
                <a href="https://twitter.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                    </span>
                </a>
                @endif
                @if(isset($settings['facebook']) && !empty($settings['facebook']))
                <a href="https://dribbble.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                    </span>
                </a>
                @endif
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout1">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ env('APP_URL') }}">
                                    <img src="{{ env('STORAGE_URL').$settings['logo'] }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{ env('APP_URL').'#products' }}">
                                            <span class="link-effect">
                                                <span class="effect-1">PRODUCTS</span>
                                                <span class="effect-1">PRODUCTS</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ env('APP_URL').'/about-us' }}">
                                            <span class="link-effect">
                                                <span class="effect-1">ABOUT</span>
                                                <span class="effect-1">ABOUT</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ env('APP_URL').'/contact-us' }}">
                                            <span class="link-effect">
                                                <span class="effect-1">CONTACT</span>
                                                <span class="effect-1">CONTACT</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>