<section class="blog-area space bg-smoke5" id="products">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-6 col-lg-8">
                <div class="title-area text-center">
                    <h2 class="sec-title text-title">OUR PRODUCTS</h2>
                </div>
            </div>
        </div>
        <div class="row gy-40 justify-content-center">
            
            @foreach($products as $singleData)
            @php 
                $single_image = json_decode($singleData['product_assets'],TRUE);
                if(count($single_image) > 0){
                    $single_image = $single_image[0]['path'];
                }
            @endphp
            <div class="col-lg-4 col-md-6">
                <div class="blog-card style3">
                    <div class="blog-img">
                        <a href="{{ env('APP_URL').'/product-details/'.$singleData['product_uid'] }}">
                            <img src="{{ env('ASSET_URL').$single_image }}" alt="{{ $singleData['product_name'] }}">
                        </a>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="{{ env('APP_URL').'/product-details/'.$singleData['product_uid'] }}">{{ $singleData['category']['name'] }}</a></h4>
                        <div class="post-meta-item blog-meta">
                            <a href="{{ env('APP_URL').'/product-details/'.$singleData['product_uid'] }}">{{ $singleData['product_name'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>