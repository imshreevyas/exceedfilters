@extends('frontend.views.layout')

@section('content')

<!-- MAIN CONTENT -->

<!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/frontend/img/bg/contactus.webp') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
            </div>
        </div>
    </div>

    <!--==============================
    Feature Area
    ==============================-->
    <div class="feature-area-1 space">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('assets/frontend/img/icon/location-pin-alt.svg') }}" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a >Headquarters</a>
                            </h4>
                            <p class="feature-card-text mb-0">{{ $settings['address'] }}</p>

                            <a href="https://maps.google.com/maps?q=7151%20Discovery%20Drive%20%231627%2C%20Chattanooga%2C%20TN%2037416&t=m&z=10&output=embed&iwloc=near" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Get direction</span>
                                    <span class="effect-1">Get direction</span>
                                </span>
                                <img src="{{ asset('assets/frontend/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('assets/frontend/img/icon/speech-bubble.svg') }}" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a >Email Address</a>
                            </h4>
                            <p class="feature-card-text mb-0">{{ $settings['emailid'] }}</p>
                            <a href="mailto:{{ $settings['emailid'] }}" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Send message</span>
                                    <span class="effect-1">Send message</span>
                                </span>
                                <img src="{{ asset('assets/frontend/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('assets/frontend/img/icon/phone.svg') }}" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a>Phone Number</a>
                            </h4>
                            <p class="feature-card-text mb-0">{{ $settings['mobile'] }}</p>

                            <a href="tel:{{ $settings['mobile'] }}" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Call anytime</span>
                                    <span class="effect-1">Call anytime</span>
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
    Contact Area
    ==============================-->
    <div class="contact-area-1 space bg-gradient">
        <div class="contact-map shape-mockup wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s" data-left="0" data-top="-100px" data-bottom="140px">
            <iframe src="https://maps.google.com/maps?q=7151%20Discovery%20Drive%20%231627%2C%20Chattanooga%2C%20TN%2037416&t=m&z=10&output=embed&iwloc=near" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <div class="title-area mb-30">
                            <h2 class="sec-title">Get in touch!</h2>
                            <p>Need additional information on filter sizes, specifications, availability, or pricing?</p>
                        </div>
                        <form id="sendEnquiry" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="client_name" id="client_name" placeholder="Full name (*Required)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="client_email" id="client_email" placeholder="Email address (*Required)">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select class="form-control style-border" name="product_uid">
                                            @if(count($products) > 0)
                                                <option value="0">Select Product</option>
                                                @foreach($products as $singleData)
                                                    @php 
                                                        $selected = $singleData['product_uid'] == $selected_uid ? 'selected' : '';
                                                    @endphp
                                                    <option value="{{ $singleData['product_uid'] }}" {{ $selected }}
                                                    >{{ $singleData['product_name'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="How Can We Help You (*Required)" id="message" class="form-control style-border"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="btn mt-20">
                                    <span class="link-effect">
                                        <span class="effect-1">SEND MESSAGE</span>
                                        <span class="effect-1">SEND MESSAGE</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<!-- MAIN CONTENT -->

@stop