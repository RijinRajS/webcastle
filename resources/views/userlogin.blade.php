<!DOCTYPE html>
<html lang="en" style="background-color:#007bff">
    <head>
        <meta charset="utf-8" />
        <title>Ping ||User Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

        
    </head>
    <body style="background-color:#007bff">


        <div class="wrapper-page">
            <div class="card card-pages">
                <div class="card-header bg-img"> 
                    <div class="bg-overlay" style="background-color:#007bff"></div>
                    <h3 class="text-center m-t-10 text-white"><i class="md md-message"></i><strong>Ping</strong> </h3>
                </div> 


                <div class="card-body">
                <form class="form-horizontal m-t-20" action="{{route('login-user')}}" method="POST">
                    @csrf
                    <h3 class="text-center m-t-10 text-black"><strong>Login</strong> </h3>
                    <br>
                    <div class="form-group">
                        <div class="col-12">
                            <input class="form-control input-lg" type="text" name="email"  placeholder="Email" value="{{old('email')}}">
                            <span style="color:red">@error('email'){{$message}} @enderror</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <input class="form-control input-lg" type="password" name="password" placeholder="Password" value="{{old('password')}}">
                            <span style="color:red">@error('password'){{$message}} @enderror</span>
                        </div>
                    </div>
                    @if(Session::has('success'))
                <h4 style="color:green">{{Session::get('success')}}</h4>
                @endif
                @if(Session::has('fail'))
              <h4 style="color:red">{{Session::get('fail')}}</h4>
                @endif

                    
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group row m-t-30">
                        <div class="col-sm-7">
                            <a href="userregister"><i class="fa fa-user m-r-5"></i> New user? Register here</a>
                        </div>
                        
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>