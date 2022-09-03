<section class="featureListing section-padding plr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10">
                <div class="section-tittle mb-50">
                    <h2 class="tittle "><span class="shape"></span> @lang('site.featured_listings') </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="global-slick-init slider-inner-margin sliderArrow" data-infinite="true" data-arrows="true"
                    data-dots="false" data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="true"
                    data-autoplaySpeed="2500"
                    data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                    data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                    data-responsive='[{"breakpoint": 1800,"settings": {"slidesToShow": 4}},{"breakpoint": 1600,"settings": {"slidesToShow": 4}},{"breakpoint": 1400,"settings": {"slidesToShow": 3}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 991,"settings": {"slidesToShow": 2}},{"breakpoint": 768, "settings": {"slidesToShow": 2}},{"breakpoint": 576, "settings": {"slidesToShow": 1}}]'>
                    @foreach ($products as $product)
                        <div class="singleFeature pb-24">
                            <div class="featureImg">
                                <a href="{{ route('product.single' , $product->id) }}"><img src="{{ asset($product->image) }}"
                                        alt="images"></a>
                            </div>
                            <div class="featureCaption">
                                <h4><a href="{{ route('product.single' , $product->id) }}" class="featureTittle">{{ $product->title_en }}</a></h4>
                                <p class="featureCap">@lang('site.posted_on') <strong class="subCap">{{ date_format($product->created_at, 'D M Y') }}</strong></p>
                                <span class="featurePricing">${{ $product->price }}</span>
                                <div class="btn-wrapper">
                                    <span class="pro-btn1">NEW</span>
                                    <span class="pro-btn2">PROMTED</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Single -->
                    {{-- <div class="singleFeature pb-24">
                        <div class="featureImg">
                            <a href="add_details.html"> <img
                                    src="{{ asset('frontend') }}/assets/img/gallery/featuredImg2.jpg"
                                    alt="images"></a>
                        </div>
                        <div class="featureCaption">
                            <h4><a href="add_details.html" class="featureTittle">Samsung M32</a></h4>
                            <p class="featureCap">Los Angels, CA · <strong class="subCap">12hrs ago</strong></p>
                            <span class="featurePricing">$139.40</span>
                            <div class="btn-wrapper">
                                <span class="pro-btn1">NEW</span>
                                <span class="pro-btn2">PROMTED</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="singleFeature pb-24">
                        <div class="featureImg">
                            <a href="add_details.html"> <img
                                    src="{{ asset('frontend') }}/assets/img/gallery/featuredImg3.jpg"
                                    alt="images"></a>
                        </div>
                        <div class="featureCaption">
                            <h4><a href="add_details.html" class="featureTittle">Persian cat</a></h4>
                            <p class="featureCap">Los Angels, CA · <strong class="subCap">12hrs ago</strong></p>
                            <span class="featurePricing">$139.40</span>
                            <div class="btn-wrapper">
                                <span class="pro-btn1">NEW</span>
                                <span class="pro-btn2">PROMTED</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="singleFeature pb-24">
                        <div class="featureImg">
                            <a href="add_details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/gallery/featuredImg4.jpg"
                                    alt="images"></a>
                        </div>
                        <div class="featureCaption">
                            <h4><a href="add_details.html" class="featureTittle">Beats headphone</a></h4>
                            <p class="featureCap">Los Angels, CA · <strong class="subCap">12hrs ago</strong></p>
                            <span class="featurePricing">$139.40</span>
                            <div class="btn-wrapper">
                                <span class="pro-btn1">NEW</span>
                                <span class="pro-btn2">PROMTED</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="singleFeature pb-24">
                        <div class="featureImg">
                            <a href="add_details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/gallery/featuredImg5.jpg"
                                    alt="images"></a>
                        </div>
                        <div class="featureCaption">
                            <h4><a href="add_details.html" class="featureTittle">4 Bed 2 storey house</a></h4>
                            <p class="featureCap">Los Angels, CA · <strong class="subCap">12hrs ago</strong></p>
                            <span class="featurePricing">$139.40</span>
                            <div class="btn-wrapper">
                                <span class="pro-btn1">NEW</span>
                                <span class="pro-btn2">PROMTED</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="singleFeature pb-24">
                        <div class="featureImg">
                            <a href="add_details.html"> <img
                                    src="{{ asset('frontend') }}/assets/img/gallery/featuredImg1.jpg"
                                    alt="images"></a>
                        </div>
                        <div class="featureCaption">
                            <h4><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h4>
                            <p class="featureCap">Los Angels, CA · <strong class="subCap">12hrs ago</strong></p>
                            <span class="featurePricing">$139.40</span>
                            <div class="btn-wrapper">
                                <span class="pro-btn1">NEW</span>
                                <span class="pro-btn2">PROMTED</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
