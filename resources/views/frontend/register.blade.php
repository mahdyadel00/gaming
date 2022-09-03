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
                            {{-- <div class="col-lg-6  col-md-12">
                                <label class="infoTitle">@lang('site.country')</label>
                                <div class="input-form input-form2">
                                    <select name="country_id" id="country_id">
                                        <option value="0">@lang('site.select_country')</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-6  col-md-12">
                                <label class="infoTitle">@lang('site.status')</label>
                                <div class="input-form input-form2">
                                    <input type="checkbox" value="1" name="status">
                                </div>
                            </div> --}}
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">@lang('site.first_name')</label>
                                <div class="input-form input-form2">
                                    <input type="text" name="first_name" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">@lang('site.last_name')</label>
                                <div class="input-form input-form2">
                                    <input type="text" name="last_name" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">@lang('site.email')</label>
                                <div class="input-form input-form2">
                                    <input type="email" name="email" placeholder="info.sai4ul@gmail.com" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">@lang('site.password')</label>
                                <div class="input-form">
                                    <input type="password" name="password" placeholder="Enter password" required>
                                    <div class="icon"><i class="las la-lock icon"></i></div>
                                    <p>@lang('site.password_must')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">@lang('site.phone')</label>
                                <div class="input-form">
                                    <input type="number" id="phone" name="phone" placeholder="Enter Your Phone"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label class="infoTitle">@lang('site.image')</label>
                                <div class="input-form infoSingle">
                                    <input type="file" class="form-control modal-title" name='image'
                                        accept="image/jpeg,image/jpg,image/png">
                                    <div class="icon"><i class="las la-lock icon"></i></div>
                                </div>
                            </div>
                            <div class="btn-wrapper text-center mt-50">
                                <button class="cmn-btn4 w-100 mb-60" type="submit">@lang('site.register')</button>
                                <a href="#" class="cmn-btn-outline0  mb-20 w-100"><img
                                        src="{{ asset('frontend') }}/assets/img/icon/googleIocn.svg" alt="images"
                                        class="icon"> @lang('site.register_with_google')
                                </a>
                                <a href="#" class="cmn-btn-outline0 mb-20  w-100"><img
                                        src="{{ asset('frontend') }}/assets/img/icon/fbIcon.svg" alt="images"
                                        class="icon">@lang('site.register_with_facebook')</a>
                                <p class="sinUp"><span>@lang('site.already_ihave_account') </span><a href="{{ route('login.show') }}"
                                        class="singApp">@lang('site.login')</a></p>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
