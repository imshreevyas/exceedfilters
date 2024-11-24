@extends('frontend.views.layout')

    @section('content')
<!-- Main Body Content -->

<!--==============================
    Hero Area
    ==============================-->
    <div class="hero-wrapper hero-1" id="hero">
        <div class="container">
            <div class="hero-style1">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="hero-title wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.1s">Nanofiber Air-Filters</h2>

                        <h2 class="hero-title wow img-custom-anim-right" data-wow-duration="1.7s" data-wow-delay="0.1s">Work Smarter & Harder</h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="hero-text wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1s">Wherever you are, enjoy clean air with exceed nanofiber air filters.</p>
                        <div class="btn-group fade_right">
                            <a href="products" class="btn wow img-custom-anim-right" >
                                <span class="link-effect">
                                    <span class="effect-1">VIEW OUR PRODUCTS</span>
                                    <span class="effect-1">VIEW OUR PRODUCTS</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
    Value of PRoposition
    ==============================-->
    <div class="service-area-1 space bg-theme">
        <div class="service-img-1-1 shape-mockup wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s" data-left="0" data-top="-100px" data-bottom="140px">
            <img src="{{ asset('assets/frontend/img/hero/value-of-proposition.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="about-content-wrap">
                        <div class="title-area mb-0">
                            <h2 class="sec-title">Exceed Air Filters</h2>
                            <p class="sec-text mt-35 mb-40">Our nanofiber technology has been in use for over 20 years. A filter that won't slump and Microscopic nanofibers lets air flow freely, Exclusively made and assembled in Tennessee, creating local jobs and supporting our community.</p>
                            <div class="skill-feature">
                                <h3 class="skill-feature_title">Virtually Indestructible</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                    <div class="progress-value"><span class="counter-number">98</span>%</div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <h3 class="skill-feature_title">Technologically Advanced</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%;">
                                    </div>
                                    <div class="progress-value"><span class="counter-number">100</span>%</div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <h3 class="skill-feature_title">Longer Lasting</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                    </div>
                                    <div class="progress-value"><span class="counter-number">95</span>%</div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <h3 class="skill-feature_title">Made in USA</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%;">
                                    </div>
                                    <div class="progress-value"><span class="counter-number">100</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap mt-50">
                            <a href="cost-saving-calculator" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">COST SAVING CALCULATOR</span>
                                    <span class="effect-1">COST SAVING CALCULATOR</span>
                                </span>
                                <img src="{{ asset('assets/frontend/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    Our Products
    ==============================-->
    <div class="team-area-1 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Our Products</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/frontend/img/product/filter-img.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Premium MERV 8 Nanofiber Air Filter.</a></h3>
                            <span class="team-card_desig">from $20.49</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/frontend/img/team/team-1-1.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Premium MERV 11 Nanofiber Air Filter.</a></h3>
                            <span class="team-card_desig">from $20.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/frontend/img/team/team-1-1.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Premium MERV 13 Nanofiber Air Filter.</a></h3>
                            <span class="team-card_desig">from $21.49</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/frontend/img/team/team-1-1.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Premium Nanofiber Filter 2-Pack.</a></h3>
                            <span class="team-card_desig">from $34.83</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/frontend/img/team/team-1-1.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Premium Nanofiber Filter 4-Pack.</a></h3>
                            <span class="team-card_desig">from $61.47</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    About Area
    ==============================-->
    <div class="about-area-1 space bg-theme">
        <div class="about-img-1-1 shape-mockup img-custom-anim-left wow" data-left="0" data-top="-100px" data-bottom="140px" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <img src="{{ asset('assets/frontend/img/hero/homepage-about-banner.webp') }}" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="overflow-hidden">
                        <div class="about-content-wrap ">
                            <div class="title-area mb-0">
                                <h2 class="sec-title">We believe everyone deserves to breathe fresh.</h2>
                                <p class="sec-text mt-35">Exceed filters are manufactured and marketed by eSpin Technologies Incorporated, a nanotechnology firm established over 20 years ago in Chattanooga, TN.</p>
                                <p class="sec-text mt-30">Our mission was to develop the technology required to bring the benefits of nanofiber technology to day to day life. We knew our nanofiber technology could make the world a better place.</p>
                                <div class="btn-wrap mt-50">
                                    <a href="about" class="link-btn">
                                        <span class="link-effect">
                                            <span class="effect-1">ABOUT US</span>
                                            <span class="effect-1">ABOUT US</span>
                                        </span>
                                        <img src="{{ asset('assets/frontend/img/icon/arrow-left-top.svg') }}" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--==============================
    Testimonial Area
    ==============================-->
    <div class="testimonial-area-2 space bg-gray overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row global-carousel testi-slider2" data-slide-show="1" data-dots="false" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-center-padding="470px" data-xl-center-padding="380px" data-ml-center-padding="300px">
                <div class="col-lg-4">
                    <div class="testi-box style2">
                        <div class="quote-icon">
                            <img src="{{ asset('assets/frontend/img/icon/quote.svg') }}" alt="icon">
                        </div>
                        <p class="testi-box_text">“It’s a pleasure working with Bunker our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms”</p>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Daniyel Karlos</h4>
                            <span class="testi-box_desig">Senior Director of Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box style2">
                        <div class="quote-icon">
                            <img src="{{ asset('assets/frontend/img/icon/quote.svg') }}" alt="icon">
                        </div>
                        <p class="testi-box_text">“It’s a pleasure working with Bunker our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms”</p>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Daniyel Karlos</h4>
                            <span class="testi-box_desig">Senior Director of Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box style2">
                        <div class="quote-icon">
                            <img src="{{ asset('assets/frontend/img/icon/quote.svg') }}" alt="icon">
                        </div>
                        <p class="testi-box_text">“It’s a pleasure working with Bunker our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms”</p>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">Daniyel Karlos</h4>
                            <span class="testi-box_desig">Senior Director of Marketing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    Faq Area
    ==============================-->
    <div class="faq-area-1 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="title-area text-center ">
                        <h2 class="sec-title">What We Can Do for Our Clients</h2>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="accordion-area accordion" id="faqAccordion">

                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> <span class="faq-number">01</span> Branding Design</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><span class="faq-number">02</span> Illustration Modelling</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> <span class="faq-number">03</span> Website Development</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"> <span class="faq-number">04</span> Digital Marketing</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
<!-- Main Body Content -->

@stop