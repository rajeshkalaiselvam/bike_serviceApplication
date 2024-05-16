<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap1.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
</head>
<style>
    
</style>
<body>
    <div class="login-dark">        
        <form action="{{url('adminLogin')}}" method="post">

            <h2 class="sr-only">Login Form</h2>            
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="close">×</button>
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('message') }}
                </div>
            @endif
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            @csrf
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
        </div>
    <script src="{{ URL::asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap1.bundle.min.js') }}"></script>
</body>

</html>