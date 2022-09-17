<section class="recentListing section-padding plr">
    <div class="container-fluid ">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10">
                <div class="section-tittle mb-50">
                    <h2 class="tittle "><span class="shape"></span> @lang('site.recent_listings') </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-xl-4 col-lg-6">
                    <div class="borderStyle style1 wow fadeInLeft social" data-wow-delay="0.0s">
                        <div class="singleFlexitem mb-24">
                            <div class="recentImg">
                                <a href="{{ route('product.single' , $product->id) }}"><img style="width: 100px;height:80px" src="{{ asset($product->image) }}" alt="images"></a>
                            </div>
                            <div class="recentCaption">
                                <h5><a href="{{ route('product.single' , $product->id) }}" class="featureTittle">{{ $product->title_en }}</a></h5>
                                <p class="featureCap">{{ $product->user ? $product->user->first()->country  : '' }} <strong
                                        class="subCap">{{ date_format($product->created_at, 'D M Y') }}</strong></p>
                                <span class="featurePricing">${{ $product->price }}</span>
                                {{-- <div class="btn-wrapper">
                                    <span class="pro-btn1">RENOVETED</span>
                                    <span class="pro-btn2">PROMOTED</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
