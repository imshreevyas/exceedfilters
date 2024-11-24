@extends('frontend.views.layout')

@section('content')

<!-- MAIN CONTENT -->
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
<!-- MAIN CONTENT -->


<!--==============================
Why Choose Us Area
==============================-->
<div class="why-area-1 space">
    <div class="why-img-1-1 shape-mockup wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
        <img src="assets/img/normal/why_3-1.jpg" alt="img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-area mb-45">
                    <h2 class="sec-title">Passionate About Creating Quality Design</h2>
                </div>
                <h4>We Love What We Do</h4>
                <p>We are a creative agency working with brands building insightful strategy, creating unique designs and crafting value</p>
                <h4 class="mt-35">Why Work With Us</h4>
                <p class="mb-n1">If you ask our clients what it’s like working with 36, they’ll talk about how much we care about their success. For us, real relationships fuel real success. We love building brands</p>
            </div>
        </div>

    </div>
</div>

@stop