@extends('frontend.views.layout')

@section('content')

<!-- MAIN CONTENT -->

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/frontend/img/bg/header_img_about_1440x704_crop_center.webp') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
            </div>
        </div>
    </div>

    <!--==============================
    Counter Area 02
    ==============================-->
    <div class="counter-area-1 space overflow-hidden">
        <div class="container">
            <div class="row gy-40 align-items-center justify-content-lg-between justify-content-center">
                <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                    <div class="counter-card">
                        <h3 class="counter-card_number">
                            <span class="counter-number">26</span>+
                        </h3>
                        <h4 class="counter-card_title">Years of Experience</h4>
                        <p class="counter-card_text">At eSpin, we believe everyone deserves to breathe fresh.</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                    <div class="counter-card">
                        <h3 class="counter-card_number">
                            <span class="counter-number">347</span>+
                        </h3>
                        <h4 class="counter-card_title">Successful Projects</h4>
                        <p class="counter-card_text">At eSpin, we believe everyone deserves to breathe fresh.</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                    <div class="counter-card">
                        <h3 class="counter-card_number">
                            <span class="counter-number">139</span>+
                        </h3>
                        <h4 class="counter-card_title">Satisfied Customers</h4>
                        <p class="counter-card_text">At eSpin, we believe everyone deserves to breathe fresh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Why Choose Us Area
    ==============================-->
    <div class="why-area-1 space">
        <div class="why-img-1-1 shape-mockup wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
            <img src="{{ asset('assets/frontend/img/bg/about-us1.webp') }}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-area mb-45">
                        <h2 class="sec-title">How we started</h2>
                    </div>
                    <p class="mb-n1">exceed filters are manufactured and marketed by eSpin Technologies Incorporated, a nanotechnology firm established over 20 years ago in Chattanooga, TN. Our mission was to develop the technology required to bring the benefits of nanofiber technology to day to day life.
                    We knew our nanofiber technology could make the world a better place.</p>
                </div>
            </div>

        </div>
    </div>
<!-- MAIN CONTENT -->


<!--==============================
Why Choose Us Area
==============================-->
<div class="why-area-1 space bg-gradient">
    <div class="why-img-1-1 shape-mockup wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
        <img src="{{ asset('assets/frontend/img/bg/about-us2.webp') }}" alt="img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-area mb-45">
                    <h2 class="sec-title">How it's going</h2>
                </div>
                <p class="mb-n1">Today, eSpin Technologies has emerged as a global leader in nanofiber technology. Technology which has allowed us to produce high-quality nanofiber based products. 
                    Such as our exceed line of residential air filters.</p>
            </div>
        </div>

    </div>
</div>


<!--==============================
Why Choose Us Area
==============================-->
<div class="why-area-1 space">
    <div class="why-img-1-1 shape-mockup wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
        <img src="{{ asset('assets/frontend/img/bg/about-us3.webp') }}" alt="img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-area mb-45">
                    <h2 class="sec-title">Culture of Collaboration</h2>
                </div>
                <p class="mb-n1">eSpin started as a self-funded advanced research facility, 
                    but our collaborations have enabled some truly incredible discoveries and professional relationships.</p>
                <p class="mb-n1">We've teamed up with several federal agencies and industrial partners to develop and scale novel solutions for filtration, 
                    environmental remediation, and other technologies for numerous applications.</p>
            </div>
        </div>

    </div>
</div>

<!--==============================
    Marquee Area
    ==============================-->
    <div class="container-fluid p-0 overflow-hidden">
        <div class="slider__marquee clearfix marquee-wrap">
            <div class="marquee_mode marquee__group">
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Everyone Deserves to Breathe Fresh</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Everyone Deserves to Breathe Fresh</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Everyone Deserves to Breathe Fresh</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Everyone Deserves to Breathe Fresh</a></h6>
            </div>
        </div>
    </div>

@stop