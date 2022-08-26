@extends('frontend.layouts.master')

@section('content')
    <!--Contact Area S t a r t-->
    <!--login Area s t a r t-->
    <div class="loginArea section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 p-0 loginLeft-img">
                    <div class="loginLeft-img">
                        <div class="login-cap">
                            <h3 class="tittle">Buy & sell anything</h3>
                            <p class="pera">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                        </div>
                        <div class="login-img">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/login.png" alt="img" class="loginImg">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 login-Wrapper">
                    <form action="{{ route('register.do') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6  col-md-12">
                                <label class="infoTitle">@lang('site.country')</label>
                                <div class="input-form input-form2">
                                    <select name="country_id" id="country_id">
                                        <option value="0">@lang('site.select_country')</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-12">
                                <label class="infoTitle">@lang('site.status')</label>
                                <div class="input-form input-form2">
                                    <input type="checkbox" value="1" name="status" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">First Name</label>
                                <div class="input-form input-form2">
                                    <input type="text" name="first_name" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">Last Name</label>
                                <div class="input-form input-form2">
                                    <input type="text" name="last_name" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">Email</label>
                                <div class="input-form input-form2">
                                    <input type="email" name="email" placeholder="info.sai4ul@gmail.com" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">Password</label>
                                <div class="input-form">
                                    <input type="password" name="password" placeholder="Enter password" required>
                                    <div class="icon"><i class="las la-lock icon"></i></div>
                                    <p>Password must be minimum 8 characters</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">@lang('site.phone')</label>
                                <div class="input-form">
                                    <input type="number" name="phone" placeholder="Enter Your Phone" required>
                                    <div class="icon"><i class="las la-lock icon"></i></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">@lang('site.image')</label>
                                <div class="input-form">
                                    <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                    <div class="icon"><i class="las la-lock icon"></i></div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-md-12">
                            <label class="infoTitle">Confirm Password</label>
                            <div class="input-form">
                                <input type="text"   placeholder="Enter password">
                                <div class="icon"><i class="las la-lock icon"></i></div>
                                <p>Password must be minimum 8 characters</p>
                            </div>
                        </div> --}}
                            <div class="col-sm-12">
                                <div class="btn-wrapper text-center mt-50">
                                    {{-- <a href="#" class="cmn-btn4 w-100 mb-60">Register</a> --}}
                                    <button class="cmn-btn4 w-100 mb-60" type="submit">Register</button>
                                    <a href="#" class="cmn-btn-outline0  mb-20 w-100"><img
                                            src="{{ asset('frontend') }}/assets/img/icon/googleIocn.svg" alt="images" class="icon"> Register
                                        With Google</a>
                                    <a href="#" class="cmn-btn-outline0 mb-20  w-100"><img
                                            src="{{ asset('frontend') }}/assets/img/icon/fbIcon.svg" alt="images" class="icon">Register With
                                        Facebook</a>
                                    <p class="sinUp"><span>Already have an account? </span><a href="{{ route('login') }}"
                                            class="singApp">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
