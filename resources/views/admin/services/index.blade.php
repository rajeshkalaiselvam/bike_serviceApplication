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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
                                <a class="nav-link" href="{{url('dashboard')}}">
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
                                <a href="{{url('service')}}" class="active">
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
                            <div class="add-button">                         
                                <a href="{{url('service/create')}}"><button class="btn btn-primary btn-lg float-end">Add Service</button></a>  
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
                                    <button type="button" class="close" data-dismiss="close">x</button>
                                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                                </div>
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success alert-dismissible fade show m-4" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    {{ session('message') }}
                                </div>
                            @endif
                                <table class="table table-hover table-striped table-bordered align-middle" id="example">
                                    <thead>
                                        <tr>
                                        <th scope="col">S.no</th>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key=>$val)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$val->title}}</td>
                                            <td>{{$val->created_at}}</td>
                                            <td>
                                                <a href="{{url('service/edit/'.$val->id)}}"><i class="fa fa-pencil mr-2" style="color:white; font-size:20px;" aria-hidden="true"></a></i>
                                                <a href="{{url('service/destroy/'.$val->id)}}"><i class="fa fa-trash" style="color:white; font-size:20px;" aria-hidden="true"></i>
                                                </a>
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
@include('admin.footer')
<script>
    $(document).ready(function() {
  
 
  
  var table = $('#example').DataTable({ 
        select: false,
        "columnDefs": [{
            "visible": false,
            "searchable":true
        }]
    });//End of create main table
});
</script>
</body>
</html>