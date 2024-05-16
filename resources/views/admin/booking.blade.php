<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Services</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lightbox.css') }}">
</head>
<style>
    .modal-backdrop.show {
    z-index: 1 !important;
}
</style>
<body>

    <!-- Inner Banner Starts Here -->
    <section class="dashboard position-relative">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-md-2">
                    <div class="sidebar-wrp">
                        <a href="/home" class="brand-logo">
                            <img src="{{ URL::asset('assets/images/AdminLTELogo.webp') }}" width="40" alt="">
                            <span>Bike</span>
                        </a>
                        <ul class="sidemenu">
                            <li>
                                <a class="nav-link" href="{{url('dashboard')}}">
                                    <i class="fas fa-fw fa-tachometer-alt"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('booking')}}" class="active">
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
                        <div class="topheader dropdown mb-5 shadow">
                            <div class="profile d-flex justify-content-end">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }} <img src="{{ URl::asset('assets/images/man-user-circle-icon.svg') }}" alt="Icon">
                                </button>
                                <ul class="dropdown-menu">
                                    {{-- <li><a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a></li> --}}
                                    <li><a href="{{url('Adminlogout')}}" class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="container">  
                            <div class="card p-4 shadow-lg">
                           <h2 class="mb-4">Bookings:</h2>
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
                                    {{-- <button type="button" class="close" data-dismiss="close">x</button> --}}
                                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                                </div>
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success alert-dismissible fade show m-4" role="alert">
                                    {{-- <button type="button" class="close" data-dismiss="alert">x</button> --}}
                                    {{ session('message') }}
                                </div>
                            @endif
                                <table class="table table-hover table-striped table-bordered align-middle" id="example">
                                    <thead>
                                        <tr>
                                        <th scope="col">S.no</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Booked Date</th>
                                        <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key=>$val)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$val->user_name}}</td>
                                            <td>{{$val->service_name}}</td>
                                            <td>{{$val->booking_date}}</td>
                                            <td>
                                                @if($val->status == 0)
                                                    <button data-id="{{$val->id}}" data-status="{{$val->status}}" data-bs-toggle="modal" data-bs-target="#statusModal" class="btn btn-primary rounded status">Pending</button>
                                                @elseif($val->status == 1)
                                                    <button data-id="{{$val->id}}" data-status="{{$val->status}}"  data-bs-toggle="modal" data-bs-target="#statusModal" class="btn btn-secondary rounded status">Ready to deliver</button>
                                                @else
                                                    <button class="btn btn-success rounded">Completed</button>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner Ends Here -->

    {{-- Modal starts here --}}
    <!-- Modal -->
        <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h2 class="modal-title fs-3" id="exampleModalLabel">Modal title</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">  
                    <form action="{{url('booking/updatestatus')}}" method="post">
                        <input type="hidden" id="id" name="id" value="">  
                        <label>Status</label> 
                        @csrf               
                        <select id="status" name="status" class="form-control w-100">
                            <option value="0">Pending</option>
                            <option value="1">Ready to deliver</option>
                            <option value="2">Deleivered</option>
                        </select>
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
                </div>
            </div>
            </div>
        </div>
    {{-- Modal ends here --}}
@include('admin.footer')
<script>
    $('.status').click(function(){
        var id = $(this).data('id');
        var status = $('.status').data('status');
        $('#id').val(id);
        $('#status').val(status);
    })
</script>
</body>
</html>