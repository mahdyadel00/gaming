@extends('frontend.layouts.master')

@section('content')

    <!-- phoneCat Listings  S t a r t -->
    <div class="featureListing section-padding2">
        <div class="container">
            <!-- Bread Crumb S t a r t -->
            <div class="row  mb-40">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">@lang('site.home')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('site.category')</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $category->title_en }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End-of Bread Crumb-->
            <div class="row">
                @foreach ($products as $product)

                <div class="col-xl-3 col-lg-4 col-sm-6">
                     <div class="singleFeature mb-24">
                        <div class="featureImg">
                            <a href="#"><img  src="{{ asset($product->image) }}" alt="images"></a>
                        </div>
                        <div class="featureCaption">
                           <h4><a href="{{ route('product.single' , $product->id) }}" class="featureTittle">{{ $product->title_en }}</a></h4>
                            <p class="featureCap">Los Angels, CA · <strong class="subCap">{{ date_format($product->created_at,'D M Y')}}</strong></p>
                            <span class="featurePricing">${{ $product->price }}</span>
                            <div class="btn-wrapper">
                               <span class="pro-btn1">NEW</span>
                               <span class="pro-btn2">PROMTED</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- pagination S t a r t -->
            <div class="row justify-content-center mt-40">
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul class="pagination-list">
                            <li class="wow fadeInRight" data-wow-delay="0.0s"><a href="#" class="page-number"><i class="las la-angle-left"></i></a></li>
                            <li><span class="page-number current">1</span></li>
                            <li><a href="#" class="page-number">2</a></li>
                            <li><a href="#" class="page-number">3</a></li>
                            <li><a href="#" class="page-number">4</a></li>
                            <li><a href="#" class="page-number">5</a></li>
                            <li class=" wow fadeInLeft" data-wow-delay="0.0s"><a href="#" class="page-number"><i class="las la-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End-of pagination -->
        </div>
    </div>
    <!-- End-of phoneCat  -->
@endsection


