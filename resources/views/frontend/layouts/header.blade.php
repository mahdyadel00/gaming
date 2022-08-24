<header class="header-style-01">
    <nav class="navbar navbar-area headerBg1 navbar-expand-lg  plr">
        <div class="container-fluid container-two nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('frontend') }}/assets/img/logo/logo1.png" alt="images">
                    </a>
                </div>
                <!-- Click Menu Mobile right menu -->
                <a href="#0" class="click_show_icon"><i class="las la-ellipsis-v"></i> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="NavWrapper">
                <div class="sibeBar-Wrapper">
                    <!-- sideBar -->
                    <div class="sideBar">
                        <!-- sidebar Btn -->
                        <a href="#" class="sidebarBtn">
                            <i class="las la-bars iconLeft"></i> <span class="allCat">@lang('site.all_categories')</span><i
                                class="las la-angle-down iconRight"></i>
                        </a>
                        <!-- Show Menu list -->
                        <div class="showSidebar">
                            <ul>
                                {{-- <li class="singleList">
                                    <a href="ad_lists_category.html" class="tittle"><i
                                            class="las la-phone-volume icon"></i> Phone and Electronics</a>
                                </li>
                                <li class="singleList">
                                    <a href="ad_lists_category.html" class="tittle"><i
                                            class="las la-phone-volume icon"></i> Phone and Electronics</a>
                                </li> --}}
                                {{-- <li class="singleList menu-item-has-children current-menu-item">
                                    <a href="ad_lists_category.html" class="tittle"><i
                                            class="las la-sort-amount-up icon"></i>Best Seller</a>
                                    <div class="megamenuWrapper">
                                        <div class="singleMegamenu">
                                            <h5 class="submenu-title">Tittle One</h5>
                                            <div class="megamenu-product">
                                                <ul class="product-items">
                                                    <li><a href="ad_lists_category.html" class="list">Listing One</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Two</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            Three</a></li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Four</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Five</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <h5 class="submenu-title">Tittle Two</h5>
                                            <div class="megamenu-product">
                                                <ul class="product-items">
                                                    <li><a href="ad_lists_category.html" class="list">Listing One</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Two</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            Three</a></li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Four</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Five</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <h5 class="submenu-title">Tittle Three</h5>
                                            <div class="megamenu-product">
                                                <ul class="product-items">
                                                    <li><a href="ad_lists_category.html" class="list">Listing One</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Two</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            Three</a></li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Four</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Five</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <h5 class="submenu-title">Tittle Four</h5>
                                            <div class="megamenu-product">
                                                <ul class="product-items">
                                                    <li><a href="ad_lists_category.html" class="list">Listing One</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Two</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            Three</a></li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Four</a>
                                                    </li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing Five</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <h5 class="submenu-title">Tittle Five</h5>
                                            <div class="megamenu-product">
                                                <ul class="product-items">
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            One</a></li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            Two</a></li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            Three</a></li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            Four</a></li>
                                                    <li><a href="ad_lists_category.html" class="list">Listing
                                                            Five</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                @foreach ($categories as $category)
                                <li class="singleList menu-item-has-children current-menu-item">
                                    <a href="{{ route('single_category' , $category->id) }}" class="tittle"> <i
                                            class="las la-headphones icon"></i> {{$category->title_en}} </a>
                                    <div class="megamenuWrapper">
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems1.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems2.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems3.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems4.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems5.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems6.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems7.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat1.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems9.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems4.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                {{-- <li class="singleList menu-item-has-children current-menu-item">
                                    <a href="ad_lists_category.html" class="tittle"><i class="las la-tv icon"></i> TV
                                        &amp; Audio </a>
                                    <div class="megamenuWrapper">
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat1.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat2.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat3.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat4.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat5.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat6.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat7.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat8.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat9.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/phoneCat5.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="singleList menu-item-has-children current-menu-item">
                                    <a href="ad_lists_category.html" class="tittle"><i
                                            class="las la-keyboard icon"></i> Key Board</a>
                                    <div class="megamenuWrapper">
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/recentListings1.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/recentListings2.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/recentListings3.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/recentListings4.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems5.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/recentListings6.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems9.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems1.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/catitems2.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="singleMegamenu">
                                            <div class="megamenu-product">
                                                <div class="product-img">
                                                    <a href="ad_lists_category.html"> <img
                                                            src="{{ asset('frontend') }}/assets/img/gallery/recentListings6.jpg"
                                                            alt="images"> </a>
                                                </div>
                                                <div class="megamenu-contents">
                                                    <h4> <a href="ad_lists_category.html" class="megamenu-title">
                                                            items Tittle </a> </h4>
                                                    <div class="price">
                                                        <h5 class="newPrice"> $33.00 </h5>
                                                        <span class="prevPrice"> $50.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="singleList">
                                    <a href="ad_lists_category.html" class="tittle"><i class="las la-mouse icon"></i>
                                        Mouse Electronics </a>
                                </li>
                                <li class="singleList">
                                    <a href="ad_lists_category.html" class="tittle"><i
                                            class="las la-laptop icon"></i>Jewelry Watches </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <!-- End Sidebar -->
                </div>
                <!-- Main Menu -->
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                        <li><a href="ad_Lists.html">@lang('site.all_ads')</a></li>
                        <li><a href="about.html">@lang('site.about_us')</a></li>
                        <li class="menu-item-has-children">
                            <a href="#" class="menuArrow">@lang('site.pages')</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('home') }}">@lang('site.home') </a></li>
                                <li><a href="ad_Lists.html">@lang('site.ad_list')</a></li>
                                <li><a href="add_details.html">@lang('site.add_details')</a></li>
                                <li><a href="ad_lists_category.html">@lang('site.add_lists_category')</a></li>
                                <li><a href="add_listing_Details.html">Add listing Details</a></li>
                                <li><a href="add_setting.html">Add Setting</a></li>
                                <li><a href="my_account.html">My Account</a></li>
                                <li><a href="memberShip.html">Member Ship</a></li>
                                <li><a href="wish_list.html">Wish list</a></li>
                                <li><a href="promoted_add_list.html">Promoted add_list</a></li>
                                <li><a href="image_uploded.html">Image Uploded</a></li>
                                <li><a href="payment.html">Payment</a></li>
                                <li><a href="{{ route('login.show') }}">@lang('site.login')</a></li>
                                <li><a href="messages.html">@lang('site.message_all')</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('conacts') }}">@lang('site.contacts')</a></li>
                    </ul>
                </div>
            </div>
            <!-- Menu Right -->
            <div class="nav-right-content">
                <!-- new -->
                <ul class="header-cart">
                    <li class="single chatBar">
                        <button class="chat"><i class="lab la-rocketchat icon"></i><span
                                class="text">@lang('site.chat')</span></button>
                        <!-- Chat List Wrapper -->
                        <div class="chatList-wrapper">
                            <h6 class="chat-title">@lang('site.all_message') </h6>
                            <ul class="chat-list">
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html"> Rupak </a>
                                            <span class="list-sub"> 4 hours ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html">Md. Shahin </a>
                                            <span class="list-sub"> 8 hours ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html"> Shariful Rahman </a>
                                            <span class="list-sub"> 1 day ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html"> Suzon islam </a>
                                            <span class="list-sub"> 3 day ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html"> Md Zahid </a>
                                            <span class="list-sub"> 7 day ago </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="messages.html" class="all-chat"> See All Messages </a>
                        </div>
                        <!-- end Chat List -->
                    </li>
                    <li class="single"><a href="wish_list.html" class="heart"><i class="lar la-heart icon"></i></a>
                    </li>
                    <li class="single userAccount">
                        <button class="user"><img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                alt="images"></button>
                        <!-- <button class="user"><i class="las la-user-alt"></i></button> -->

                        <!--
                            After Logged in
                            User AC Wrapper
                        -->
                        @auth
                        <div class="userAccount-wrapper">
                            <h6 class="ac-title">@lang('site.user_account')</h6>
                            <ul class="ac-list">
                                <li class="list">
                                    <a class="list-title" href="my_account.html"> <i
                                            class="lar la-user-circle icon"></i> @lang('site.my_account') </a>
                                </li>
                                <li class="list">
                                    <a class="list-title" href="memberShip.html"> <i
                                            class="las la-address-card icon"></i> @lang('site.membership') </a>
                                </li>
                                <li class="list">
                                    <a class="list-title" href="promoted_add_list.html"><i
                                            class="las la-ad icon"></i> @lang('site.promoted_ads') </a>
                                </li>
                                <li class="list">
                                    <a class="list-title" href="wish_list.html"><i class="lar la-heart icon"></i>
                                        @lang('site.wish_list') </a>
                                </li>
                                <li class="list">
                                    <a class="list-title" href="help.html"> <i
                                            class="lar la-question-circle icon"></i> @lang('site.help')</a>
                                </li>
                                <li class="list">
                                    <a class="list-title" href="login.html"> <i class="las la-sign-out-alt icon"></i>
                                        @lang('site.logout')</a>
                                </li>
                            </ul>
                        </div>
                        @endauth

                        <!--
                            Before Logged in
                            User AC Wrapper
                        -->
                        <!-- <div class="userAccount-wrapper">
                            <h6 class="ac-title">User Account</h6>
                            <ul class="ac-list">
                                <li class="list">
                                    <a class="list-title" href="#"> <i class="las la-lock icon"></i> Login / Sin-Up</a>
                                </li>
                            </ul>
                        </div> -->

                        <!-- End User AC -->
                    </li>
                    <li class="single">
                        <div class="btn-wrapper">
                            <a href="#" class="cmn-btn1 popup-modal">
                                <i class="las la-plus-square"></i><span class="text">@lang('site.post_your_ad')</span>
                            </a>
                        </div>
                    </li>
                    <li class="single">
                        <!-- Select Language -->
                        <div class="select-itms">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <select name="select" class="niceSelect">

                                    <option value=""> <a rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a></option>
                                </select>
                            @endforeach
                            {{-- <select name="select" class="niceSelect">
                                <option value="">English</option>
                                <option value="">Arabic</option>
                            </select> --}}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
