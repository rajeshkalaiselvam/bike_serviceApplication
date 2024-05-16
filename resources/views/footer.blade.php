
    <!-- Footer Starts Here -->
    <footer class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left empty-col"></div>
                <div class="col-md-6 right">
                    <h2 class="site-title">Get In Touch</h2>
                    <p>1234 N Spring St, Los Angeles, CA 90012 <br>+1 234 567 890</p>
                    <ul class="d-flex">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                    <p class="copyrights">Copyright © 2024 Bike Services</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends Here -->

    <script src="{{ URL::asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/slick.min.js') }}"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>
<script>
    $(document).ready(function() {

            toastr.options = {

            'closeButton': false,

            'debug': false,

            'newestOnTop': false,

            'progressBar': false,

            'positionClass': 'toast-top-right',

            'preventDuplicates': false,

            'showDuration': '1000',

            'hideDuration': '1000',

            'timeOut': '5000',

            'extendedTimeOut': '1000',

            'showEasing': 'swing',

            'hideEasing': 'linear',

            'showMethod': 'fadeIn',

            'hideMethod': 'fadeOut',

            }            

        });
        function PostRegister() {
            var FormData = $('#RegiData').serialize();
            console.log(FormData);

            $.ajax({
                type: 'POST',
                url: "{{url('postregister')}}",
                data: FormData,
                dataType: "json",
                success: function(response) { 
                    console.log(response);
                    // alert(response);
                    if(response == "ok"){
                        toastr.success("Registered Succesfully");
                        $('#registerModal').modal('hide');
                        $('#loginModal').modal('show');
                    }else{
                        Object.values(response).forEach(function(error) {
                            toastr.error(error);
                        });
                    }
                }
            });
        }
        function PostLogin() {
            var FormData = $('#LogData').serialize();
            console.log(FormData);

            $.ajax({
                type: 'POST',
                url: "{{url('postlogin')}}",
                data: FormData,
                dataType: "text",
                success: function(response) { 
                    console.log(response);
                    // alert(response);
                    if(response == "ok"){
                        toastr.success('loggedin Succesfully');
                        $('#loginModal').modal('hide');
                        location.reload();
                    }else{                        
                        toastr.error(response);                       
                    }
                }
            });
        }
</script>
</html>