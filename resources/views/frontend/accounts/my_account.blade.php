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
                            <a href="{{route('my_account')}}" class="items"> <i class="lar la-user-circle icon"></i> @lang('site.my_account')</a>
                        </li>
                        <li class="listItem">
                            <a href="memberShip.html" class="items"><i class="las la-address-card icon"></i> @lang('site.membership')</a>
                        </li>
                        <li class="listItem">
                            <a href="promoted_add_list.html" class="items"><i class="las la-ad icon"></i> @lang('site.promoted_ads')</a>
                        </li>
                        <li class="listItem">
                            <a href="route('wish_list')" class="items"> <i class="lar la-heart icon"></i> @lang('site.wish_list')</a>
                        </li>
                        <li class="listItem">
                            <a href="route('help')" class="items active"> <i class="lar la-question-circle icon"></i> @lang('site.help')</a>
                        </li>
                    </ul>
                    <div class="accessAccount">
                        <a href="{{ route('logout') }}" class="account-btn"><i class="las la-sign-out-alt icon"></i> @lang('site.logout')</a>
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
                                <li class="breadcrumb-item"><a href="{{ route('my_account') }}">@lang('site.my_account')</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- End-of Bread Crumb-->
                <!-- Account -->
                <div class="accountWrapper mb-24">
                    <!-- user -->
                    <div class="userProfile mb-24">
                        <div class="recentImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/myAccout.png" alt="images">
                        </div>
                        <div class="recentCaption">
                            <div class="cap">
                               <h5><a href="#" class="featureTittle">{{ $user->first_name }} {{ $user->last_name }}</a></h5>
                                <p class="featureCap">@lang('site.member_since') {{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d')}}</p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#" class="cmn-btn-outline2">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                    <!-- infoSingle -->
                    <div class="infoSingle">
                        <ul class="listing">
                            <li class="listItem"><i class="las la-map-marker-alt icon"></i>Ash Dr. San Jose, South Dakota</li>
                            <li class="listItem"><i class="lar la-envelope-open icon"></i>{{ $user->email }}</li>
                            <li class="listItem"><i class="las la-phone icon"></i>{{ $user->phone }}</li>
                        </ul>
                    </div>
                </div>
                <!-- My Listings -->
                <div class="myListing">
                    <!-- Single -->
                    <div class="singleFlexitem mb-24  wow fadeInUp social" data-wow-delay="0.0s">
                        <div class="listCap">
                            <div class="recentImg">
                                <img   src="{{ asset('frontend') }}/assets/img/gallery/myList1.jpg" alt="images">
                            </div>
                            <div class="recentCaption">
                               <h5><a href="add_details.html" class="featureTittle">Luxury couple apartment</a></h5>
                                <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                <span class="featurePricing">$124.80</span>
                                <div class="btn-wrapper">
                                    <span class="pro-btn1">RENOVETED</span>
                                   <span class="pro-btn2">PROMOTED</span>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper mb-20">
                            <a href="#" class="cmn-btn-outline4 mr-10"><i class="lar la-eye icon"></i>44k</a>
                            <a href="#" class="cmn-btn4">Edit Ad</a>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="singleFlexitem mb-24  wow fadeInUp social" data-wow-delay="0.1s">
                        <div class="listCap">
                            <div class="recentImg">
                                <img   src="{{ asset('frontend') }}/assets/img/gallery/myList2.jpg" alt="images">
                            </div>
                            <div class="recentCaption">
                               <h5><a href="add_details.html" class="featureTittle">Beats Studio 3 Wireless Over Ear</a></h5>
                                <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                <span class="featurePricing">$124.80</span>
                                <div class="btn-wrapper">
                                    <span class="pro-btn1">RENOVETED</span>
                                   <span class="pro-btn2">PROMOTED</span>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper mb-20">
                            <a href="#" class="cmn-btn-outline4 mr-10"><i class="lar la-eye icon"></i>44k</a>
                            <a href="#" class="cmn-btn4">Edit Ad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End-of My Account-->
@endsection
