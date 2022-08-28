@extends('frontend.layouts.master')

@section('content')
    <!--Product Details  S t a r t-->
    <div class="proDetails section-padding2">
        <div class="container">
            <!-- Bread Crumb S t a r t -->
            <div class="row mb-40">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('site.home')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('site.category')</a></li>
                            <li class="breadcrumb-item"><a href="#">| Phones</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End-of Bread Crumb-->
            <div class="row">
                <div class="col-xl-7 col-lg-12">
                    <!-- Product Slider -->
                    <div class="product-view-wrap" id="myTabContent">
                        <div class="shop-details-gallery-slider global-slick-init slider-inner-margin sliderArrow"
                            data-asNavFor=".shop-details-gallery-nav" data-infinite="true" data-arrows="false"
                            data-dots="false" data-slidesToShow="1" data-swipeToSlide="true" data-fade="true"
                            data-autoplay="true" data-autoplaySpeed="2500"
                            data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                            data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                            data-responsive='[{"breakpoint": 1800,"settings": {"slidesToShow": 1}},{"breakpoint": 1600,"settings": {"slidesToShow": 1}},{"breakpoint": 1400,"settings": {"slidesToShow": 1}},{"breakpoint": 1200,"settings": {"slidesToShow": 1}},{"breakpoint": 991,"settings": {"slidesToShow": 1}},{"breakpoint": 768, "settings": {"slidesToShow": 1}},{"breakpoint": 576, "settings": {"slidesToShow": 1}}]'>


                            <div class="single-main-image">
                                <a href="#" class="long-img">
                                    <img src="{{ asset($product->image) }}" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                        <!-- Nav -->
                        <div class="thumb-wrap">
                            <div class="shop-details-gallery-nav global-slick-init slider-inner-margin sliderArrow"
                                data-asNavFor=".shop-details-gallery-slider" data-focusOnSelect="true" data-infinite="true"
                                data-arrows="false" data-dots="false" data-slidesToShow="6" data-swipeToSlide="true"
                                data-autoplay="true" data-autoplaySpeed="2500"
                                data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                                data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                                data-responsive='[{"breakpoint": 1800,"settings": {"slidesToShow": 6}},{"breakpoint": 1600,"settings": {"slidesToShow": 6}},{"breakpoint": 1400,"settings": {"slidesToShow": 6}},{"breakpoint": 1200,"settings": {"slidesToShow": 6}},{"breakpoint": 991,"settings": {"slidesToShow": 6}},{"breakpoint": 768, "settings": {"slidesToShow": 4}},{"breakpoint": 576, "settings": {"slidesToShow": 4}}]'>
                                <div class="single-thumb">
                                    <a class="thumb-link" data-toggle="tab" href="#image-01">
                                        <img src="{{ asset('frontend') }}/assets/img/gallery/proDetailsNav1.jpg"
                                            alt="thumb">
                                    </a>
                                </div>
                                <div class="single-thumb">
                                    <a class="thumb-link" data-toggle="tab" href="#image-02">
                                        <img src="{{ asset('frontend') }}/assets/img/gallery/proDetailsNav2.jpg"
                                            alt="thumb">
                                    </a>
                                </div>
                                <div class="single-thumb">
                                    <a class="thumb-link" data-toggle="tab" href="#image-03">
                                        <img src="{{ asset('frontend') }}/assets/img/gallery/proDetailsNav3.jpg"
                                            alt="thumb">
                                    </a>
                                </div>
                                <div class="single-thumb">
                                    <a class="thumb-link" data-toggle="tab" href="#image-04">
                                        <img src="{{ asset('frontend') }}/assets/img/gallery/proDetailsNav4.jpg"
                                            alt="thumb">
                                    </a>
                                </div>
                                <div class="single-thumb">
                                    <a class="thumb-link" data-toggle="tab" href="#image-05">
                                        <img src="{{ asset('frontend') }}/assets/img/gallery/proDetailsNav5.jpg"
                                            alt="thumb">
                                    </a>
                                </div>
                                <div class="single-thumb">
                                    <a class="thumb-link" data-toggle="tab" href="#image-06">
                                        <img src="{{ asset('frontend') }}/assets/img/gallery/proDetailsNav6.jpg"
                                            alt="thumb">
                                    </a>
                                </div>
                                <div class="single-thumb">
                                    <a class="thumb-link" data-toggle="tab" href="#image-01">
                                        <img src="{{ asset('frontend') }}/assets/img/gallery/proDetailsNav6.jpg"
                                            alt="thumb">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- proDescription -->
                    <div class="proDescription">
                        <!-- Top -->
                        <div class="descriptionTop">
                            <h4><a href="add_details.html" class="detailsTittle">{{ $product->title_en }} <i
                                        class="lar la-heart icon"></i></a></h4>
                            <p class="detailsCap">Posted on {{ date_format($product->created_at, 'D M Y') }}</p>
                            <span class="detailsPricing">${{ $product->price }}
                                <em style="float: right">
                                    <a href="#" class="btn btn-success">Check Out</a>
                                </em></span>
                            {{-- <div class="infoSingle">
                            <ul class="listing">
                                <li class="listItem"><i class="las la-bed icon"></i>2 Bed</li>
                                <li class="listItem"><i class="las la-bath icon"></i>2 Bath</li>
                                <li class="listItem"><i class="las la-map-marker-alt icon"></i>8502 Preston Rd. Inglewood, Maine</li>
                            </ul>
                        </div> --}}
                        </div>
                        <!-- Mid -->
                        <div class="descriptionMid">
                            <h4 class="priceTittle">@lang('site.description')</h4>
                            {{-- <ul class="listing">
                            <li class="listItem"><i class="las la-check icon"></i>All documents are ok</li>
                            <li class="listItem"><i class="las la-check icon"></i>Ready to move</li>
                            <li class="listItem"><i class="las la-check icon"></i>Riverview</li>
                            <li class="listItem"><i class="las la-check icon"></i>24/7 Water, Gas, Electricity</li>
                            <li class="listItem"><i class="las la-check icon"></i>Schools and Market in 2km</li>
                        </ul> --}}
                            <p class="pera">{{ $product->description_en }}</p>
                        </div>
                        <!-- Footer -->
                        <div class="descriptionFooter">
                            <div class="btn-wrapper">
                                <a href="#" class="cmn-btn-outline2"><i
                                        class="lab la-font-awesome-flag icon"></i>Report</a>
                            </div>
                            <div class="socialWrap">
                                <a href="#" class="social"><i class="lab la-facebook-square"></i></a>
                                <a href="#" class="social"><i class="lab la-twitter"></i></a>
                                <a href="#" class="social"><i class="lab la-linkedin"></i></a>
                                <a href="#" class="social"><i class="lar la-bell"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="sellerMessage mb-24">
                        <div class="singleFlexitem mb-24">
                            <div class="recentImg">
                                <img src="{{ asset($product->user[0]->image) }}" width="50px" height="50px"
                                    alt="images">
                            </div>
                            <div class="recentCaption">
                                <h5><a href="add_details.html" class="featureTittle">{{ $product->user[0]->first_name }}
                                        {{ $product->user[0]->last_name }}<img
                                            src="{{ asset('frontend') }}/assets/img/icon/checkMark.svg" class="icon"
                                            alt="images"></a></h5>
                                <p class="featureCap">@lang('site.member_since')
                                    {{ date_format($product->user[0]->created_at, 'D M Y') }}</p>
                            </div>
                        </div>
                        <form action="#" class="contactSeller">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="input-form">
                                        <input type="text" placeholder="(704) *** ***"
                                            value="{{ $product->user[0]->phone }}">
                                        <!-- icon -->
                                        <div class="icon"><i class="las la-phone"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="btn-wrapper mb-20">
                                        <a href="#" class="cmn-btn-outline3 w-100">Reveal Contact</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="btn-wrapper">
                            <a href="#" class="cmn-btn-outline2 w-100"><i class="las la-comments icon"></i>Message
                                seller</a>
                        </div>
                    </div>
                    <section class="recentListing">
                        <div class="borderStyle style1 wow fadeInLeft social" data-wow-delay="0.1s">
                            @foreach ($product_related as $related)

                            <div class="singleFlexitem mb-24">
                                <div class="recentImg">
                                    <img src="{{ asset($related->image) }}" width="150px" height="150px"
                                        alt="images">
                                </div>
                                <div class="recentCaption">
                                    <h5><a href="add_details.html" class="featureTittle">{{ $related->title_en }}</a></h5>
                                    <p class="featureCap">@lang('site.member_since')<strong class="subCap">{{ date_format($related->created_at, 'D M Y') }}</strong></p>
                                    <span class="featurePricing">${{ $related->price }}</span>
                                    <div class="btn-wrapper">
                                        <span class="pro-btn1">RENOVETED</span>
                                        <span class="pro-btn2">PROMOTED</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!--End-of product Details-->
@endsection
