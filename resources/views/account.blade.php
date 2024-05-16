@include('header')

<style>
    .tab-section .nav-pills {
        background: #2d2d38;
    }
    .tab-section .nav-pills .nav-link.active, .tab-section .nav-pills .nav-link:hover {
        background: #ffd583;
    }
    .tab-section .nav-pills .nav-link {
        color: #fff;
        border-radius: 0px;
        padding: 15px 15px;
        font-size: 18px;
        font-weight: 600;
    }
    .tab-section .brand-logo {
        border-bottom: 1px solid #666;
        margin-bottom: 25px;
    }
    .tab-section > div > .row {
        margin: 0;
        border: 1px solid #e3e3e3;
    }
</style>

<!-- Inner Banner Starts Here -->
<section class="inner-banner position-relative py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="inwrp">
                    <h1>Dashboard</h1>
                    <nav style="--vz-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-underline">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner Ends Here -->

<!-- Tab Section Ends Here -->
<section class="tab-section py-100 bg-white">
    <div class="container">
        <div class="row gx-0">
            <div class="col-md-3 left">
                <div class="inwrp h-100 position-relative">
                    <div class="nav h-100 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a href="/home" class="brand-logo py-4">
                            <img src="{{ URl::asset('assets/images/AdminLTELogo.webp') }}" width="40" alt="">
                            <span>Bike Service</span>
                        </a>
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Bookings</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" id="booking" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Previous Bookings</button>
                    </div>
                </div>
            </div>
            <div class="col-md-9 right">
                <div class="inwrp p-5">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 fs-1">{{$booking->count()}}</div>
                                                <div class="text-xs font-weight-bold text-uppercase mb-1">Bookings</div>                                                
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
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="javascript:void(0)" id="MyForm" onsubmit="ProfileUpdate()" method="post">
                                        <div class="form-group m-2">
                                            <label>Name</label>
                                            <input type="text" class="form-control w-100" value="{{$data->name}}" name="name"  id="">
                                        </div>
                                        <div class="form-group m-2">
                                            <label>Email</label>
                                            <input type="text" class="form-control w-100" value="{{$data->email}}" name="email"  id="">
                                        </div>
                                        <div class="form-group m-2">
                                            <label>Mobile</label>
                                            <input type="text" class="form-control w-100" value="{{$data->mobile}}" name="mobile"  id="">
                                        </div>
                                        @csrf
                                        <div class="form-group m-2">
                                            <label>Password</label>
                                            <input type="text" class="form-control w-100" name="password"  id="">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-secondary">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="javascript:void(0)" id="Booking" onsubmit="Booking()" method="post">
                                        <div class="form-group m-2">
                                            <label>Booking date</label>
                                            <input type="date" class="w-100" name="booking_date" id="datepicker" min="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                        <div class="form-group m-2">
                                            <label>Bike Regestration Number</label>
                                            <input type="text" class="w-100"  name="bike_reg_no"  id="">
                                        </div>
                                        <div class="form-group m-2">
                                            <label>Bike Model</label>
                                            <input type="text" class="w-100"  name="bike_model"  id="">
                                        </div>
                                        <div class="form-group m-2">
                                            <label>Service</label>
                                            <select class="w-100" name="service_id">
                                                @foreach ($service as $val)
                                                    <option value="{{$val->id}}">{{$val->title}}</option>
                                                @endforeach                                                
                                            </select>
                                        </div>
                                        @csrf                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-secondary">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover table-striped table-bordered align-middle">
                                        <thead>
                                          <tr>
                                            <th scope="col">S.no</th>
                                            <th scope="col">Booking Date</th>
                                            <th scope="col">Service Name</th>
                                            <th scope="col">Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($booking as $key=>$val)                                           
                                            <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                <td>{{$val->booking_date}}</td>
                                                <td>{{$val->service_name}}</td>
                                                <td>
                                                    @if($val->status == 0)
                                                        <button class="btn btn-primary rounded">Pending</button>
                                                    @elseif($val->status == 1)
                                                    <button class="btn btn-secondary rounded">Ready to deliver</button>
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
        </div>
    </div>
</section>
<!-- Tab Section Ends Here -->

@include('footer')

<script>
    function ProfileUpdate()
    {
        var FormData = $('#MyForm').serialize();
            // console.log(FormData);

            $.ajax({
                type: 'POST',
                url: "{{url('profile-Update')}}",
                data: FormData,
                dataType: "text",
                success: function(response) { 
                    console.log(response);
                    // alert(response);
                    if(response == "ok"){
                        toastr.success('Updated Succesfully');                        
                    }else{                        
                        toastr.error(response);                       
                    }
                }
            });
    }
    function Booking()
    {
        var FormData = $('#Booking').serialize();
            // console.log(FormData);

            $.ajax({
                type: 'POST',
                url: "{{url('booking')}}",
                data: FormData,
                dataType: "text",
                success: function(response) { 
                    console.log(response);
                    // alert(response);
                    if(response == "ok"){
                        toastr.success('Updated Succesfully'); 
                        location.reload();
                        $('#booking').addClass('active');                       
                    }else{                        
                        toastr.error(response);                       
                    }
                }
            });
    }
</script>