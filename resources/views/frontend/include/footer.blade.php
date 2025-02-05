<!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout1 overflow-hidden bg-smoke">
        <div class="container">
            <div class="footer-top space">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <h2 class="footer-top-title">
                            Let’s Work Together
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-top-wrap">
                            <p class="mb-30">Need additional information on filter sizes, specifications, availability, or pricing?</p>
                            <a href="contact-us" class="btn">
                                <span class="link-effect">
                                    <span class="effect-1">GET IN TOUCH</span>
                                    <span class="effect-1">GET IN TOUCH</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-menu-area">
                <div class="row gy-3 justify-content-between">
                    <div class="col-xxl-6 col-lg-7">
                        <ul class="footer-menu-list">
                            <li>
                                <a href="#">
                                    <span class="link-effect">
                                        <span class="effect-1">ABOUT COMPANY</span>
                                        <span class="effect-1">ABOUT COMPANY</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="link-effect">
                                        <span class="effect-1">OUR PRODUCTS</span>
                                        <span class="effect-1">OUR PRODUCTS</span>
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
                    </div>
                    <!-- <div class="col-xxl-6 col-lg-5 text-lg-end">
                        <ul class="footer-menu-list">
                            <li>
                                <a href="about.html">
                                    <span class="link-effect">
                                        <span class="effect-1">PRIVACY POLICY</span>
                                        <span class="effect-1">PRIVACY POLICY</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="project.html">
                                    <span class="link-effect">
                                        <span class="effect-1">TERMS & CONDITIONS</span>
                                        <span class="effect-1">TERMS & CONDITIONS</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-3 justify-content-between align-items-center">
                    <div class="col-md-6 align-self-center text-lg-start">
                        <p class="copyright-text">Copyright © {{ date('Y') }}
                            <a href="#">{{ $settings['company_name'] }}</a>
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center text-lg-end">
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
                        
                            @if(isset($settings['dribbble']) && !empty($settings['dribbble']))
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
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>


    <!-- Jquery -->
    <script src="{{ asset('assets/frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gsap.min.js') }}"></script>
    
    <script src="{{ asset('assets/frontend/js/twinmax.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imageRevealHover.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
        function show_Toaster(message, type) {
            var success = "#00b09b, #96c93d";
            var error = "#a7202d, #ff4044";
            var ColorCode = type == "success" ? success : error;

            return Toastify({
                text: message,
                duration: 3000,
                close: true,
                gravity: "bottom", // top or bottom
                position: "center", // left, center or right
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: `linear-gradient(to right, ${ColorCode})`,
                },
            }).showToast();
        }

    $('#sendEnquiry').on('submit', function(e) {
        e.preventDefault();
        axios.post(`{{ env('APP_URL') }}/product-enquiry`, new FormData(this)).then(function(response) {
            // handle success
            show_Toaster(response.data.message, response.data.type)
            if (response.data.type === 'success') {
                setTimeout(() => {
                    window.location.href = `{{ env('APP_URL') }}/contact-us`;
                }, 500);
            }
        }).catch(function(err) {
            show_Toaster(err.response.data.message, 'error')
        })
    });
    </script>
</body>

</html>