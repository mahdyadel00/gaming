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
                    <form action="{{ route('login.do') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label class="infoTitle">Email</label>
                                <div class="input-form">
                                    <input type="text" name="email" placeholder="Enter your email">
                                    <div class="icon"><i class="lar la-envelope icon"></i></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="infoTitle">Password</label>
                                <div class="input-form">
                                    <input type="password" placeholder="Enter password">
                                    <div class="icon"><i class="las la-lock icon"></i></div>
                                    <p>Password must be minimum 8 characters</p>
                                </div>
                            </div>
                            <!--Forget passwords -->
                            <div class="col-sm-12">
                                <div class="passRemember mt-20">
                                    <label class="checkWrap2">Remember me
                                        <input class="effectBorder" type="checkbox" value="">
                                        <span class="checkmark"></span>
                                    </label>
                                    <!-- forgetPassword -->
                                    <div class="forgetPassword mb-25">
                                        <a href="#" class="forgetPass">Forget passwords?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="btn-wrapper text-center">
                                    <a href="#" class="cmn-btn4 w-100 mb-60">Login</a>
                                    <a href="#" class="cmn-btn-outline0  mb-20 w-100"><img
                                            src="{{ asset('frontend') }}/assets/img/icon/googleIocn.svg" alt="images"
                                            class="icon"> Log in With Google</a>
                                    <a href="#" class="cmn-btn-outline0 mb-20  w-100"><img
                                            src="{{ asset('frontend') }}/assets/img/icon/fbIcon.svg" alt="images"
                                            class="icon">Log in With Facebook</a>
                                    <p class="sinUp"><span>Don’t have an account? </span><a href="register.html"
                                            class="singApp">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('body').on('submit', '#add-form', function(e) {
            e.preventDefault();
            var url = $(this).attr('action');
            $.ajax({
                url: url,
                method: "post",
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
                            text: "{{ 'Saved successfully' }}",
                            timeout: 2000,
                            killer: true
                        }).show();
                    }
                },
            });
        });
    </script>
@endpush
