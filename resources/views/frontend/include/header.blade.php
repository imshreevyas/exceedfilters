<!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="#"><img src="storage/app/admin/fav.png" alt="Ovation"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        <a href="#">PRODUCTS</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
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
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="/">
                                    <img src="{{ $settings['logo'] }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PRODUCTS</span>
                                                <span class="effect-1">PRODUCTS</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">ABOUT</span>
                                                <span class="effect-1">ABOUT</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
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
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <!-- <button type="button" class="search-btn searchBoxToggler"><img src="{{ asset('assets/frontend/img/icon/search.svg') }}" alt="icon">
                                    <span class="link-effect">
                                        <span class="effect-1">SEARCH</span>
                                        <span class="effect-1">SEARCH</span>
                                    </span>
                                </button> -->
                                <!-- <button type="button" class="sidebar-btn sideMenuToggler">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>