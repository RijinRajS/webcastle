<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Ping || Add Organization</title>
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

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><i class="md md-message"></i> <span>Ping </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <a href="#" class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            
                        </ul>

                        <div class="user-info">
                            <div class="dropdown">
                            <img src="{{ asset('storage/images/'.$data->photo)}}" class="thumb-md rounded-circle" alt="">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;margin-right:75px">
                                {{$data->username}}
                                    </a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    
                                    <li><a href="signout" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"></p>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <!--<img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">-->
                        </div>
                        <!--<div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$data->username}}
                                    </a>
                                <ul class="dropdown-menu">
                                    <li><a href="dashboard" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    
                                    <li><a href="signout" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"></p>
                        </div>-->
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="dashboard" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="organization" class="waves-effect"><i class="fa fa-building" aria-hidden="true"></i><span> Organizations </span></a>
                            </li>
                            <li>
                                <a href="contact" class="waves-effect"><i class="fa fa-users" aria-hidden="true"></i><span> Contacts </span></a>
                            </li>

                        <ul>

                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
    
            <!-- Left Sidebar End --> 

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Create Organization</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="dashboard">{{$data->username}}</a></li>
                                    <li><a href="organization">Organization</a></li>
                                    <li class="active">Create</li>
                                </ol>
                            </div>
                        </div>


                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="{{route('Add-organization')}}" method="POST">
                @csrf
                <table style="width:100%">
                                           <td> <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}" style="width:90%">
                                                <span style="color:red">@error('name'){{$message}} @enderror</span>
                                            </div></td>
                                           <td> <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{old('email')}}" style="width:90%">
                                                <span style="color:red">@error('email'){{$message}} @enderror</span>
                                            </div></td></tr>
                                          <tr>
                                               <td> <div class="form-group">
                                                <label for="exampleInputPassword1">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone number" value="{{old('phone')}}" style="width:90%">
                                                <span style="color:red">@error('phone'){{$message}} @enderror</span>
                                            </div></td>
                                            <td><div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{old('address')}}" style="width:90%">
                                                <span style="color:red">@error('address'){{$message}} @enderror</span>
                                            </div></td></tr>
                                            <tr>
                                                <td><div class="form-group">
                                                <label for="exampleInputPassword1">City</label>
                                                <input type="text" class="form-control" id="city" name="city" placeholder="city" value="{{old('city')}}" style="width:90%">
                                                <span style="color:red">@error('city'){{$message}} @enderror</span>
                                            </div></td>
                                           <td> <div class="form-group">
                                                <label for="exampleInputPassword1">Province/State</label>
                                                <input type="text" class="form-control" id="state" name="state" placeholder="state" value="{{old('state')}}" style="width:90%">
                                                <span style="color:red">@error('state'){{$message}} @enderror</span>
                                            </div></td></tr>
                                            <tr>

                                            <td><div class="form-group">
                                                <label for="exampleInputPassword1">Country</label>
                                                <input type="text" class="form-control" id="country" name="country" placeholder="country" value="{{old('country')}}" style="width:90%">
                                                <span style="color:red">@error('country'){{$message}} @enderror</span>
                                            </div></td>
                                           <td> <div class="form-group">
                                                <label for="exampleInputPassword1">Postal Code</label>
                                                <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="postal code" value="{{old('postalcode')}}" style="width:90%">
                                                <span style="color:red">@error('postalcode'){{$message}} @enderror</span>
                                            </div></td></tr></table>
                                            
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Create</button>
                                        </form>
                                    </div><!-- card-body -->
                                </div> <!-- card -->
                            </div> <!-- col-->
                            <footer class="footer text-right">
                      &copy; ping
                    </footer>
                            <!-- Horizontal form -->
                            
        <!-- END wrapper -->

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