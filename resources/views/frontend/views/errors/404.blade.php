@include('frontend.include.head')

<!-- Main Content -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Property List</h1>
            <ul class="breadcrumbs">
                <li><a href="{{ env('APP_URL') }}">Home</a></li>
                <li class="active">{{ $url_name }}</li>
            </ul>
        </div>
    </div>
</div>

<!-- Pages 404 start -->
<div class="pages-404">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pages-404-inner">
                    <h1>Oops... Inavlid Property!</h1>
                    <p class="lead">Contact us now! for more other properties.</p>
                    <a href="tel:{{ isset($settings['mobile']) ? $settings['mobile'] : '' }}" class="btn border-thn">Call Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pages 404 2 end -->


<!-- Main Content -->

@include('frontend.include.footer')