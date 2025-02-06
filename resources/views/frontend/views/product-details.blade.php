@extends('frontend.views.layout')

@section('content')

<!-- MAIN CONTENT -->
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper style2 bg-smoke">
        <div class="container-fluid">
            <div class="breadcumb-content">
                <ul class="breadcumb-menu">
                    <li><a href="{{ env('APP_URL') }}">Home</a></li>
                    <li><a>{{ $product['category']['name'] ?: '' }}</a></li>
                    <li>{{ $product['product_name'] ?: '' }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- shop-details-area -->
    <section class="shop__area space-md">
        <div class="container">
            <div class="row gx-60 gy-60">
                <div class="col-xl-6">
                    <div class="product-big-img">
                        <div class="global-carousel product-thumb-slider" data-slide-show="1" data-asnavfor=".product-small-img" data-loop="true">
                            @if(isset($product['product_assets']) && !empty($product['product_assets']))
                                @php 
                                    $product_assets = json_decode($product['product_assets'], true);
                                @endphp
                                @if(count($product_assets) > 0)
                                    @foreach($product_assets as $single_assets)
                                    <div class="slide">
                                        <div class="img">
                                            <img src="{{ env('ASSET_URL').$single_assets['path'] }}" alt="Product Image">
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="row global-carousel product-small-img" data-slide-show="3" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="2" data-asnavfor=".product-thumb-slider" data-loop="true">
                        @if(isset($product['product_assets']) && !empty($product['product_assets']))
                            @php 
                                $product_assets = json_decode($product['product_assets'], true);
                            @endphp
                            @if(count($product_assets) > 0)
                                @foreach($product_assets as $single_assets)
                                <div class="col-lg-4 slide-thumb">
                                    <div class="img">
                                        <img src="{{ env('ASSET_URL').$single_assets['path'] }}" alt="Product Image">
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        @endif
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="product-about">
                        <h2 class="product-title">{{ $product['product_name'] ?: '---' }}</h2>
                        
                        <p class="text">
                            {!! $product['long_desc'] !!}
                        </p>
                        <div class="actions">
                            <a href="{{ env('APP_URL').'/contact-us/'.$product['product_uid'] }}" class="btn">
                                <span class="link-effect">
                                    <span class="effect-1">ENQUIRY</span>
                                    <span class="effect-1">ENQUIRY</span>
                                </span>
                            </a>
                        </div>
                        <div class="product_meta">
                            <span class="posted_in">Category: <a rel="tag">{{ $product['category']['name'] ?: '' }}</a></span>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($product['product_specification_assets']) && !empty($product['product_specification_assets']))
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="info-tab" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Specifications</a>
                </li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                    <table class="woocommerce-table">
                        <thead>
                            <th>Name</th>
                            <th>File</th>
                        </thead>
                        <tbody>
                            
                                @php 
                                    $product_specification_assets = json_decode($product['product_specification_assets'], true);
                                @endphp
                                @if(count($product_specification_assets) > 0)
                                    @foreach($product_specification_assets as $single_specification)
                                    <tr>
                                        <td>{{ $single_specification['original_filename'] }}</td>
                                        <td><a target="_blank" href="{{ env('ASSET_URL').$single_specification['path'] }}">Click Here!</a></td>
                                    </tr>
                                    @endforeach
                                @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>
            @endif

            @if(isset($related_products) && count($related_products) > 0)
                <!-- <div class="space-top">
                    <h3 class="fw-semibold mb-30 mt-n2">Related Products</h3>
                    <div class="row global-carousel" data-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2">
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_3.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Kinto Tumbler</a></h3>
                                    <span class="price">€38.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_6.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tag">SALE</div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Knit Beanie</a></h3>
                                    <span class="price"><del>€50.00</del> €30.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_8.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Pillars Tee</a></h3>
                                    <span class="price">€26.90</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_1.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tag">SALE</div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Printed T-Shirt</a></h3>
                                    <span class="price"><del>€29.50</del>€20.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_2.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Card Wallet</a></h3>
                                    <span class="price">€52.00</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_4.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Ripple Crewneck</a></h3>
                                    <span class="price">€160.90</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_5.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Herman Miller</a></h3>
                                    <span class="price">€44.50</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_7.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tag">SALE</div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Bifold Wallet</a></h3>
                                    <span class="price"><del>€110.80</del> €84.80</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div> -->
            @endif
        </div>
    </section>
    <!-- shop-details-area-end -->


<!-- MAIN CONTENT -->

@stop