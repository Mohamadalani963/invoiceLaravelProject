@extends('layouts.master2')
@section('css')
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('title')
    تسجيل دخول
@stop
@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->

            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2>مرحباً بك</h2>
                                            <h5 class="font-weight-semibold mb-4">يرجى تسجيل الدخول بالمعلومات المزودة من قبل الشركة</h5>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label>البريد الالكتروني</label> <input class="form-control" placeholder="ادخل البريد الالكتروني" type="email" id="email" name="email" :value="old('email')" required autofocus>

                                                </div>
                                                <div class="form-group">
                                                    <label>كلمة المرور</label> <input class="form-control" placeholder="ادخل كلمة المرور" type="password" id="password" name="password">
                                                </div><button class="btn btn-main-primary btn-block">تسجيل الدخول</button>
{{--                                                <div class="row row-xs">--}}
{{--                                                    <div class="col-sm-6">--}}
{{--                                                        <button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-sm-6 mg-t-10 mg-sm-t-0">--}}
{{--                                                        <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </form>
{{--                                            <div class="main-signin-footer mt-5">--}}
{{--                                                <p><a href="">Forgot password?</a></p>--}}
{{--                                                <p>Don't have an account? <a href="{{ url('/' . $page='signup') }}">Create an Account</a></p>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="{{URL::asset('assets/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
