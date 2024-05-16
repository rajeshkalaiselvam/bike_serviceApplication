@include('header')

<!-- Inner Banner Starts Here -->
<section class="inner-banner position-relative py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="inwrp">
                    <h1>Contact Us</h1>
                    <nav style="--vz-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-underline">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner Ends Here -->

<!-- Contact Section Ends Here -->
<section class="cnt-section py-100 bg-white">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-6 left">
                <div class="inwrp h-100 position-relative pt-5 pb-5 ps-5">
                    <img src="{{ URl::asset('assets/images/home-about-img.jpg') }}" alt="Image" class="img-fluid h-100 object-fit-cover">
                </div>
            </div>
            <div class="col-lg-6 align-self-center right">
                <div class="inwrp p-5">
                    <h2 class="mb-4 site-title text-white">Send us a message</h2>
                    <form action="" method="post">
                        <div class="form-group mb-3">
                            <label for="cntName" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="cntName" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="cntMail" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="cntMail" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="cntPhone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="cntPhone" name="cntPhone" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="cntTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="cntTitle" name="cntTitle">
                        </div>
                        <div class="form-group mb-3">
                            <label for="cntMsg" class="form-label">Message</label>
                            <textarea class="form-control" id="cntMsg" name="cntMsg"></textarea>
                        </div>
                        <button type="submit" class="btn site-btn mt-4">Send a message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section Ends Here -->

<!-- Map Starts Here -->
<section class="maps">
    <div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d31129.78090515911!2d-79.38982712474035!3d46.39894375234495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDbCsDIzJzMxLjUiTiA3OcKwMjInMjIuOCJX!5e0!3m2!1sen!2sus!4v1715594860637!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- Map Ends Here -->

@include('footer')