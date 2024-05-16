<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Services</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
    
<!-- Header Starts Here -->
<header class="position-relative bg-white">
    <div class="main-header d-flex align-items-center justify-content-center">
        <div class="inhead-wrp w-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col left">
                        <a href="{{url('')}}">Bike Services</a>
                    </div>
                    @php 
                    $id = Auth::id();
                    @endphp
                    <div class="col-auto middle">
                        <ul class="main-menu d-flex justify-content-between p-0">
                            <li class="active"><a href="{{url('')}}">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                            @if($id)
                            <li><a href="{{url('my-account')}}">Dashboard</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col right text-end">
                        @if($id)
                        <a href="{{url('logout')}}"  class="site-btn">Logout</a>
                        @else                                               
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal" class="site-btn">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Ends Here -->

<!-- Login Modal Starts Here -->
<div class="modal fade site-modal login-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex flex-column align-items-center px-1">
            <div class="row w-100 gx-5">
                <div class="col-lg-6 left">
                    <div class="inwrp h-100 position-relative">
                        <img src="{{ URL::asset('assets/images/Mobile-login.jpg') }}" alt="Image" class="img-fluid h-100 object-fit-cover rounded-3">
                        <!-- <h2 class="text-center">Login</h2> -->
                    </div>
                </div>
                <div class="col-lg-6 align-self-center right py-4">
                    <h2 class="text-center mb-4">Login to Your Account</h2>
                    <form action="javascript:void(0)" id="LogData" method="post" onsubmit="PostLogin()">
                        <div class="form-group mb-3">
                            <label for="loginMail" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="loginMail">
                        </div>
                        @csrf
                        <div class="form-group mb-3">
                            <label for="loginPassword" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" id="loginPassword" name="loginPassword">
                        </div>
                        <button type="submit" class="btn site-btn mx-auto d-block mt-4">Login</button>
                        <div class="form-group text-center mt-4">
                            <p class="mb-1">Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" class="reg-btn text-decoration-underline">Register here</a></p>
                            <p><a href="#" class="text-danger fs-15 text-decoration-none">Forget Password?</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Login Modal Ends Here -->

<!-- Register Modal Starts Here -->
<div class="modal fade site-modal login-modal" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex flex-column align-items-center px-1">
            <div class="row w-100 gx-5">
                <div class="col-lg-6 left">
                    <div class="inwrp h-100 position-relative">
                        <img src="{{ URL::asset('assets/images/Mobile-login.jpg') }}" alt="Image" class="img-fluid h-100 object-fit-cover rounded-3">
                        <!-- <h2 class="text-center">Login</h2> -->
                    </div>
                </div>
                <div class="col-lg-6 align-self-center right py-4">
                    <h2 class="text-center mb-4">Register Your Account</h2>
                    <form action="javascript:void(0)" id="RegiData" method="post" onsubmit="PostRegister()">
                        <div class="form-group mb-3">
                            <label for="regName" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="regName">
                        </div>
                        <div class="form-group mb-3">
                            <label for="regMail" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="regMail">
                        </div>
                        <div class="form-group mb-3">
                            <label for="regMobile" class="form-label">Mobile Number<span class="text-danger">*</span></label>
                            <input type="text" name="mobile" class="form-control" id="regMobile">
                        </div>
                        @csrf
                        <div class="form-group mb-3">
                            <label for="regPassword" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" id="regPassword" name="regPassword">
                        </div>
                        <div class="form-group mb-3">
                            <label for="regRePassword" class="form-label">Enter Password Again <span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" class="form-control" id="regRePassword" name="regRePassword">
                        </div>
                        <button type="submit" class="btn site-btn mx-auto d-block mt-4">Register</button>
                        <div class="form-group text-center mt-4">
                            <p class="mb-1">Already have an account? <a href="#" class="reg-btn text-decoration-underline">Signin</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Login Modal Ends Here -->