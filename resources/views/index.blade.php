@include('header')

<!-- Banner Starts Here -->
<section class="banner position-relative">
    <div class="container-fluid p-0">
        <div class="row align-items-center gx-0">
            <div class="col-md-6 left">
                <div class="inwrp"> 
                    <h1>Ride Confidently With Our  Expert Maintenance.</h1>
                    <a href="#" class="site-btn">Book Service</a>
                </div>
            </div>
            <div class="col-md-6 right">
                <img src="{{ URL::asset('assets/images/home-hero-img-1024x767.jpg') }}" alt="Image" class="w-100 img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Banner Ends Here -->


<!-- Help Teams Starts Here -->
<section class="help-teams py-100 position-relative">
    <div class="container">
        <div class="row title-wrp">
            <div class="col-md-12">
                <h2 class="site-title text-white">We help teams build a business of <br>their dreams with our services.</h2>
            </div>
        </div>
        <div class="row cnt-wrp">
            @foreach ($service as $val)              
           
            <div class="col-md-4">
                <h4>{{$val->title}}</h4>
                <p>{{$val->description}}</p>
            </div>
            @endforeach           
        </div>
        <div class="row btn-wrp">
            <div class="col-md-12">
                <a href="#" class="site-btn">View All Services</a>
            </div>
        </div>
    </div>
</section>
<!-- Help Teams Ends Here -->

<!-- Trust Us Starts Here -->
<section class="trust-us py-100 bg-white position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 left">
                <img src="{{ URL::asset('assets/images/home-about-img.jpg') }}" alt="Image" class="w-100 img-fluid">
            </div>
            <div class="col-md-6 right">
                <div class="inwrp">
                    <h4>Trust Us</h4>
                    <h2 class="site-title">We Are Here to Help!</h2>
                    <p>We're here to make sure your bike runs smoothly. Our skilled team offers everything from tune-ups to repairs, so you can enjoy worry-free rides. Trust us to keep your bike in top shape for your cycling adventures.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trust Us Ends Here -->

<!-- Why Choose Starts Here -->
<section class="why-choose py-100 pt-0 bg-white position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 left">
                <div class="inwrp">
                    <h2 class="site-title">Why Choose Us?</h2>
                    <p>We are well-experienced business professionals<br> with younger minds.</p>
                    <h5>Expert Care</h5>
                    <h5>Quality Assurance</h5>
                    <h5>Dedicated Team</h5>
                    <h5>Customer Satisfaction</h5>
                </div>
            </div>
            <div class="col-md-6 right">
                <img src="{{ URL::asset('assets/images/why-choose-us.jpg') }}" alt="Image" class="w-100 img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Ends Here -->

<!-- Leaders Starts Here -->
<section class="leaders py-100 position-relative"></section>
<!-- Leaders Ends Here -->

<!-- Call To Action Starts Here -->
<section class="callto-action py-100 position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-12">
                <div class="inwrp">
                    <h2 class="site-title text-white">Don't let mechanical issues derail your cycling adventures.<br>Our service keeps you rolling.</h2>
                    <a href="#" class="site-btn">Book Service</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Ends Here -->

@include('footer')