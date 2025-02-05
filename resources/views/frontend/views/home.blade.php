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
                        <h1 class="hero-title wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.1s">Drive Cost Savings and Deliver Clean Air with exceed™ Air Filters</h1>
                    </div>
                    <div class="col-lg-6">
                        <p class="hero-text wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1s">Nanofiber Technology for Superior Sub-Micron Capture, Extended Filter Life, and Reduced Energy Costs</p>
                        <div class="btn-group fade_right">
                            <a href="#products" class="btn wow img-custom-anim-right" >
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PRODUCTS</span>
                                    <span class="effect-1">VIEW PRODUCTS</span>
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
    <div class="service-area-1 space bg-gradient">
        <div class="service-img-1-1 shape-mockup wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s" data-left="0" data-top="-100px" data-bottom="140px">
            <img src="{{ asset('assets/frontend/img/hero/value-of-proposition.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="about-content-wrap">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-white ">Benefits</h2>
                            <p class="sec-text mt-15 mb-40 text-white ">Transform Your Operations with Our Cutting-Edge Filter Technology</p>
                            <div class="skill-feature">
                                
                                <h3 class="about-feature-wrap skill-feature_title text-white ">High Efficiency <img src="{{ asset('assets/frontend/img/icon/high-efficency.png') }}"></h3>
                                <p class="mb-n1 text-white ">exceed™ Air Filters utilize advanced nanofiber technology to capture sub-micron particles ensuring cleaner air and improved air quality for your business operations.</p>
                            </div>
                            <div class="skill-feature">
                                <h3 class="about-feature-wrap skill-feature_title text-white ">Reduced Life Cycle Costs <img src="{{ asset('assets/frontend/img/icon/life-cycle-cost.png') }}"></h3>
                                <p class="mb-n1 text-white ">Our filters are designed to lower overall maintenance, energy, and labor costs.</p>
                            </div>
                            <div class="skill-feature">
                                <h3 class="about-feature-wrap skill-feature_title text-white ">Premium Quality <img src="{{ asset('assets/frontend/img/icon/premium-quality.png') }}"></h3>
                                <p class="mb-n1 text-white ">exceed™ Air Filters are manufactured in the USA to the highest quality standards using the most premium materials, ensuring reliable performance and exceptional durability.</p>
                            </div>
                            <div class="skill-feature">
                                <h3 class="about-feature-wrap skill-feature_title text-white ">Longer Lasting <img src="{{ asset('assets/frontend/img/icon/long-lasting.png') }}"></h3>
                                <p class="mb-n1 text-white ">The superior construction of exceed Air Filters means extended operational life, reducing downtime and the need for replacements.</p>
                            </div>
                        </div>
                        <div class="btn-wrap mt-50">
                            <a href="#" class="btn link-btn">
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
    Products Area
    ==============================-->
    @if(count($products) > 0)
        @include('frontend.views.products')
    @endif

    

    
    <!--==============================
    Testimonial Area
    ==============================-->
    <!-- <div class="testimonial-area-2 space bg-gray overflow-hidden">

        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-6 col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="sec-title text-smoke">TESTIMONIALS</h2>
                    </div>
                </div>
            </div>
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
    </div> -->

    <!--==============================
    About Area
    ==============================-->
    <div class="about-area-1 space bg-gradient">
        <div class="about-img-1-1 shape-mockup img-custom-anim-left wow" data-left="0" data-top="-100px" data-bottom="140px" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <img src="{{ asset('assets/frontend/img/hero/homepage-about-banner.webp') }}" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="overflow-hidden">
                        <div class="about-content-wrap ">
                            <div class="title-area mb-0">
                                <h2 class="sec-title text-white">We believe everyone deserves to breathe fresh.</h2>
                                <p class="sec-text mt-35 text-white">Exceed Air Filters are engineered and supplied by eSpin Technologies Inc. , a leader in nanotechnology with over 20 years of experience in delivering high-performance solutions. Located in Chattanooga, TN, eSpin specializes in the development of advanced nanofiber technologies, providing industries such as automotive, government, and industrial sectors with superior air filtration products.</p>
                                <p class="sec-text mt-30 text-white">Our filters are designed to meet the rigorous demands of your applications, ensuring reliability, efficiency, and exceptional performance in the most challenging environments.</p>
                                <div class="btn-wrap mt-50">
                                    <a href="#" class="btn link-btn">
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
    Faq Area
    ==============================-->
    <!-- <div class="faq-area-1 space overflow-hidden">
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
    </div> -->

    
<!-- Main Body Content -->

@stop