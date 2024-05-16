<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Services</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lightbox.css') }}">
</head>
<body>

    <!-- Inner Banner Starts Here -->
    <section class="dashboard position-relative">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-md-2">
                    <div class="sidebar-wrp">
                        <a href="/home" class="brand-logo">
                            <img src="{{ URL::asset('assets/images/AdminLTELogo.webp') }}" width="40" alt="">
                            <span>Letter</span>
                        </a>
                        <ul class="sidemenu">
                            <li>
                                <a class="nav-link active" href="{{url('dashboard')}}">
                                    <i class="fas fa-fw fa-tachometer-alt"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('booking')}}">
                                    <i class="fa-regular fa-credit-card"></i>
                                    <span class="nav-text">Bookings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('service')}}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Services
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="maincnt-wrp">
                        <div class="topheader dropdown mb-4 shadow">
                            <div class="profile d-flex justify-content-end">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }} <img src="{{ URl::asset('assets/images/man-user-circle-icon.svg') }}" alt="Icon">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a></li>
                                    <li><a href="{{url('Adminlogout')}}" class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cnt-sec p-4">
                            <h2 class="mb-4">Dashboard</h2>
                            <div class="row">
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 fs-1">{{$dashboard}}</div>
                                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Bookings</div>
                                                    {{-- <a href="#" class="site-btn">Make New <i class="fa-solid fa-arrow-right-long"></i></a> --}}
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon-box">
                                                        <i class="fa-solid fa-file-lines fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner Ends Here -->
@include('admin.footer')
</body>
</html>