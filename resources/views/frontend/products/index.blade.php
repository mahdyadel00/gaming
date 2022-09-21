@extends('frontend.layouts.master')

@section('content')
    <!-- Product Categories s t a r t -->
    <div class="section-padding2 plr">
        <div class="container-fluid">
            <div class="row">
                <!-- Left Content -->
                <div class="col-xxl-3  col-xl-3 col-lg-4 col-md-5">
                    <div class="cateSidebar">
                        <h5 class="catTittle2">@lang('site.all_category')</h5>
                        <!-- All Categories -->
                        <ul class="listing listScroll">
                            @foreach ($categories as $category)
                                <li class="listItem"><a href="{{ route('single_category', $category->id) }}" class="items">
                                        <img src="{{ asset($category->image) }}" class="icon" alt="images">
                                        <span>{{ $category->title_en }} <span
                                                class="itemNumber">{{ $category->products->count() }}</span></span>
                                    </a></li>
                            @endforeach

                        </ul>

                        <!-- Price -->
                        <div class="price mb-10">
                            <h5 class="catTittle">@lang('site.price')</h5>
                            <!-- Search Box -->
                            <form action="{{ route('search') }}" method="get" id="search" class="picPrice">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-form">
                                            <input type="number" placeholder="price_min" class="form-control">
                                            <!-- icon -->
                                            <div class="icon"><i class="las la-dollar-sign"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-form">
                                            <input type="number" name="price_max" placeholder="Max" class="form-control">
                                            <!-- icon -->
                                            <div class="icon"><i class="las la-dollar-sign"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Date Posted -->
                        <div class="dateTime mb-30">
                            <h5 class="catTittle">@lang('site.date_posted')</h5>
                            <!-- select in date -->
                            <div class="datePicker">
                                <input id="datepicker1" name="date" placeholder="10/04/2022" />
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <a href="#" type="submit" form="search" class="cmn-btn4 w-100"> @lang('site.reset_filter')</a>
                        </div>
                    </div>
                </div>
                <!-- Right Content -->
                <div class="col-xxl-9 col-xl-9  col-lg-8 col-md-7">
                    <div class="viewItems">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="select-itms">
                                    <select name="select" class="niceSelect">
                                        <option value="">New York, USA</option>
                                        <option value="">Location PK</option>
                                        <option value="">Location US</option>
                                        <option value="">Location UK</option>
                                    </select>
                                    <i class="las la-map-marker-alt  icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="SearchWrapper">
                                    <div class="searchBox-wrapper">
                                        <!-- Search Box -->
                                        <form action="#" class="search-box">
                                            <div class="input-form">
                                                <input type="text" class=" keyup-input" placeholder="Search">
                                                <!-- icon -->
                                                <div class="icon">
                                                    <i class="las la-search"></i>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- search-suggestions -->
                                        {{-- <div class="category-searchbar search-showHide">
                                            <!-- Closed Icon -->
                                            <span class="closed-icon"><i class="las la-times"></i></span>
                                            <div class="search-suggestions" id="search_suggestions_wrap">
                                                <div class="search-inner">
                                                    <div class="category-suggestion item-suggestions">
                                                        <h6 class="item-title">Category Suggestions</h6>
                                                        <ul class="category-suggestion-list" >
                                                            <li class="list"> <a href="#" class="item">Fruits &amp; Vegetables</a>
                                                            </li>
                                                            <li class="list"><a href="#" class="item">Cooking</a>
                                                            </li><li class="list"> <a href="#" class="item">Dairy</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-suggestion item-suggestions">
                                                        <h6 class="item-title">
                                                            <span>
                                                                Product Suggestions
                                                            </span>
                                                            <a href="#" target="_blank" id="search_result_all" class="showAll">Show all</a>
                                                        </h6>
                                                        <ul class="product-suggestion-list mt-4" id="search_result_products">
                                                            <li class="list">
                                                                <a href="#" class="item">
                                                                    <div class="product-image"><img src="{{ asset('frontend') }}/assets/img/gallery/wishlist1.jpg" alt="img"></div>
                                                                    <div class="product-info">
                                                                        <div class="product-info-top">
                                                                            <h6 class="product-name">Fresh Fruits</h6>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-update-through">
                                                                                <span class="flash-price fw-500">$200.00</span>
                                                                                <span class="flash-old-prices">$240</span>
                                                                            </div>
                                                                            <span class="stock-out">In Stock</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <!-- End suggestions -->
                                    </div>

                                    <!-- Custom Tab -->
                                    <div class="view">
                                        <button class="customTab active" data-toggle-target=".customTab-content-1"><i
                                                class="las la-th-large"></i></button>
                                        <button class="customTab" data-toggle-target=".customTab-content-2"><i
                                                class="las la-bars"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid View -->
                    <div class="gridView customTab-content customTab-content-1 active">
                        <div class="row ">
                            @foreach ($products as $product)
                                <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                    <div class="singleFeature mb-24">
                                        <div class="featureImg">
                                            <a href="{{ route('product.single', $product->id) }}"><img
                                                    src="{{ asset($product->image) }}" style="width:100%;height:55%"
                                                    alt="images"></a>
                                        </div>
                                        <div class="featureCaption">
                                            <h4><a href="{{ route('product.single', $product->id) }}"
                                                    class="featureTittle">{{ $product->title_en }}</a></h4>
                                            <p class="featureCap">Los Angels, CA · <strong
                                                    class="subCap">{{ date_format($product->created_at, 'D M Y') }}</strong>
                                            </p>
                                            <span class="featurePricing">${{ $product->price }}</span>
                                            <div class="btn-wrapper">
                                                @if ($product->condition == 0)
                                                    <span class="pro-btn1">@lang('site.america')</span>
                                                @endif
                                                @if ($product->condition == 1)
                                                    <span class="pro-btn1">@lang('site.asia')</span>
                                                @endif
                                                @if ($product->condition == 2)
                                                    <span class="pro-btn1">@lang('site.europ')</span>
                                                @endif
                                                @if ($product->nigotiable == 1)
                                                    <span class="pro-btn2">@lang('site.promoted')</span>
                                                @else
                                                    <span class="pro-btn2">@lang('site.un_promoted')</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $products->links() }}
                        </div>
                    </div>
                    <!-- Pagination -->
                    {{-- <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="pagination mt-60">
                                <ul class="pagination-list">
                                    <li class=" wow fadeInRight" data-wow-delay="0.0s"><a href="#"
                                            class="page-number"><i class="las la-angle-left"></i></a></li>
                                    <li><span class="page-number current">1</span></li>
                                    <li><a href="#" class="page-number">2</a></li>
                                    <li><a href="#" class="page-number">3</a></li>
                                    <li><a href="#" class="page-number">4</a></li>
                                    <li><a href="#" class="page-number">5</a></li>
                                    <li class=" wow fadeInLeft" data-wow-delay="0.0s"><a href="#"
                                            class="page-number"><i class="las la-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End-of Categories -->
@endsection
@push('js')
    <script>
        $('body').on('submit', '#search', function(e) {
            e.preventDefault();
            let form = $(this);
            let url = $(this).attr('action');
            let lang = $(this).data('langcode');
            $.ajax({
                url: url,
                method: "get",
                data: new FormData(this),
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 'success') {

                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            text: "{{ 'Saved Successfully' }}",
                            timeout: 2000,
                            killer: true
                        }).show();
                        CKEDITOR.instances.textarea1.setData('');
                        CKEDITOR.instances.textarea2.setData('');
                        form[0].reset();
                        $('#profile-tab-' + lang).trigger('click');
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    var errors = $.parseJSON(xhr.responseText);
                    $.each(errors.errors, function(key, val) {
                        new Noty({
                            type: 'error',
                            layout: 'topRight',
                            text: val,
                            timeout: 2000,
                            killer: true
                        }).show();
                    });
                }
            });

        });
    </script>
@endpush
