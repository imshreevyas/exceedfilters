
    <!-- <div class="popup-search-box">
        <button class="searchClose"><img src="{{ asset('assets/frontend/img/icon/close.svg') }}" alt="img"></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><img src="assets/img/icon/search-white.svg" alt="img"></button>
        </form>
    </div> -->

    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><img src="{{ asset('assets/frontend/img/icon/close.svg') }}" alt="icon"></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ $settings['logo'] }}" alt="Logo"></a>
                    </div>
                    <p class="about-text">We are digital agency that helps businesses develop immersive and engaging</p>
                    <div class="sidebar-wrap">
                        <h6>{{ $settings['address'] }}</h6>
                    </div>
                    <div class="sidebar-wrap">
                        <h6><a href="tel:{{ $settings['mobile'] }}">{{ $settings['mobile'] }} </a></h6>
                        <h6><a href="mailto:{{ $settings['emailid'] }}">{{ $settings['emailid'] }}</a></h6>
                    </div>
                    <div class="social-btn style2">
                    @if(isset($settings['facebook']) && !empty($settings['facebook']))
                        <a href="{{ $settings['facebook'] }}">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                            </span>
                        </a>
                    @endif
                
                    @if(isset($settings['instagram']) && !empty($settings['instagram']))
                        <a href="{{ $settings['instagram'] }}">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                            </span>
                        </a>
                    @endif
                
                    @if(isset($settings['twitter']) && !empty($settings['twitter']))
                        <a href="{{ $settings['twitter'] }}">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                            </span>
                        </a>
                    @endif
                
                    @if(isset($settings['dribble']) && !empty($settings['dribble']))
                        <a href="{{ $settings['dribble'] }}">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                            </span>
                        </a>
                    @endif
                    </div>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-end">
                <a href="contact.html" class="chat-btn gsap-magnetic">Let’s Talk with us</a>
            </div> -->
        </div>
    </div>