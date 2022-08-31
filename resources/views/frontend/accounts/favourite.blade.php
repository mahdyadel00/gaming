@extends('frontend.layouts.master')

@section('content')
    <!--My Account  S t a r t-->
    <div class="myAccout section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                    <!-- Account Sidebar    -->
                    <div class="accountSidebar">
                        <ul class="listing listScroll">
                            <li class="listItem">
                                <a href="{{ route('my_account') }}" class="items"> <i class="lar la-user-circle icon"></i>
                                    @lang('site.my_account')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('member_ship') }}" class="items"><i class="las la-address-card icon"></i>
                                    @lang('site.membership')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('promoted_add') }}" class="items"><i class="las la-ad icon"></i>
                                    @lang('site.promoted_ads')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('wish_list') }}" class="items"> <i class="lar la-heart icon"></i>
                                    @lang('site.wish_list')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('help') }}" class="items active"> <i
                                        class="lar la-question-circle icon"></i> @lang('site.help')</a>
                            </li>
                        </ul>
                        <div class="accessAccount">
                            <a href="{{ route('logout') }}" class="account-btn"><i class="las la-sign-out-alt icon"></i>
                                @lang('site.logout')</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                    <!-- Bread Crumb S t a r t -->
                    <div class="row mb-24">
                        <div class="col-sm-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('site.home')</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('wish_list') }}"> @lang('site.wish_list')</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /END-->
                    <!-- promoteAds -->
                    <div class="promoteAds">
                        <!-- Single -->
                        <div class="singlePromoteAds mb-24  wow fadeInUp social" data-wow-delay="0.0s">
                            <div class="adsCap">
                                <div class="adsImg">
                                    <img src="{{ asset('frontend') }}/assets/img/gallery/wishlist1.jpg" alt="images">
                                </div>
                                <div class="adsCaption">
                                    <h5><a href="add_details.html" class="adsTittle">A pair of sneakers for sell</a></h5>
                                    <p class="adsPera">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                    <span class="adsPricing">$330.80</span>
                                </div>
                            </div>
                            <div class="btn-wrapper mb-20">
                                <a href="wish_list.html" class="cmn-btn-outline5"><i
                                        class="las la-heart icon"></i>Favourite</a>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="singlePromoteAds mb-24  wow fadeInUp social" data-wow-delay="0.2s">
                            <div class="adsCap">
                                <div class="adsImg">
                                    <img src="{{ asset('frontend') }}/assets/img/gallery/wishlist2.jpg" alt="images">
                                </div>
                                <div class="adsCaption">
                                    <h5><a href="add_details.html" class="adsTittle">Luxury couple apartment</a></h5>
                                    <p class="adsPera">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                    <span class="adsPricing">$120.34</span>
                                </div>
                            </div>
                            <div class="btn-wrapper mb-20">
                                <a href="wish_list.html" class="cmn-btn-outline5"><i
                                        class="las la-heart icon"></i>@lang('site.favourite')</a>
                            </div>
                        </div>
                    </div>
                    <!-- END -->
                </div>
            </div>
        </div>
    </div>
    <!--End-of My Account-->
@endsection
