<div class="sliderArea plr ">
    <div class="slider-active">
        <div class="single-slider heroPadding d-flex align-items-center">
            <div class="container-fluid ">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-7 ">
                        <div class="heroCaption">

                            <h1 class="tittle" data-animation="fadeInUp" data-delay="0.1s"><span class="tittleBg"></span><span class="lineBrack">{{ $slider->title_em }}</span></h1>
                            <p class="pera" data-animation="fadeInUp" data-delay="0.3s">{{ $slider->description_en }}</p>
                        </div>
                        <!-- form -->
                        <form action="#" class="search-box">
                            <div class="select-form" data-animation="fadeInLeft" data-delay="0.4s">
                                <div class="select-itms">
                                    <select name="select"  class="niceSelect">
                                        <option value="">New York, USA</option>
                                        <option value="">Location PK</option>
                                        <option value="">Location US</option>
                                        <option value="">Location UK</option>
                                        <option value="">Location UK</option>
                                        <option value="">Location UK</option>
                                        <option value="">Location UK</option>
                                    </select>
                                    <i class="las la-map-marker-alt  icon"></i>
                                </div>
                            </div>
                            <!-- Show  -->
                            <div class="searchBox-wrapper">
                                <div class="input-form" data-animation="fadeInRight" data-delay="0.4s">
                                    <input type="text" class="input keyup-input" placeholder="Search...">
                                </div>
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
                                                            <div class="product-image"><img src="{{ asset('frontend') }}/assets/img/gallery/phoneCat1.jpg" alt="img"></div>
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

                            <div class="search-form" data-animation="bounceIn" data-delay="0.4s">
                                <button class="search-Btn"><i class="las la-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="hero-man d-none d-lg-block f-right" >
                            <img src="{{ asset($slider->image) }}" alt="images" class="tilt-effect  " data-animation="fadeInRight" data-delay="0.2s">
                            <!-- Shape 01-->

                            <div class=" shapeHero shapeHero1" data-animation="fadeInLeft" data-delay="0.8s">
                                <img src="{{ asset($slider_left->image) }} " style =" max-width: 20%;height: auto;" alt="images" class="bouncingAnimation">
                            </div>
                            <!-- Shape 02-->
                            <div class=" shapeHero shapeHero2" data-animation="fadeInDown" data-delay="0.6s">
                                <img src="{{ asset($slider_top->image) }} " style="width: 220px" alt="images" class="routedOne">
                            </div>
                            <!-- Shape 03-->
                            <div class=" shapeHero shapeHero3" data-animation="fadeInRight" data-delay="0.5s">
                                <img src="{{ asset($slider_right->image) }} " style="width:120px" alt="images" class="bounce-animate">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->
            </div>
        </div>
    </div>
</div>
