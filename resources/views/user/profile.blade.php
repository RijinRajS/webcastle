<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Ping || Profile</title>
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
                       <!-- <div class="user-info">
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

                        <div class="wraper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="bg-picture text-center" style="background-color:#fff">
                                        <div class=""></div>
                                        <div class="">
                                           <img src="{{ asset('storage/images/'.$data->photo)}}" class="thumb-lg rounded-circle img-thumbnail" alt="">
                                            <h3 class="text-black">{{$data->username}}</h3>
                                        </div>
                                    </div>
                                    <!--/ meta -->
                                </div>
                            </div>
                            <div class="row user-tabs">
                                <div class="col-md-9 col-xl-6">
                                    <ul class="nav nav-tabs tabs" role="tablist">
                                        <li class="nav-item tab">
                                            <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                                <span class="d-none d-sm-block">About Me</span>
                                            </a>
                                        </li>
                                      

                                        
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="tab-content profile-tab-content">
                                        <div class="tab-pane show active" id="about" role="tabpanel" aria-labelledby="about-tab">

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <!-- Personal-Information -->
                                                    <form action="" method="">
                                    <input type="hidden" name="id" value="{{$data->id}}"/>
                                                    <div class="card card-default card-fill">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Personal Information</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="about-info-p">
                                                                <strong>First Name</strong>
                                                                <br>
                                                                <p class="text-muted">{{$data->username}}</p>
                                                            </div>
                                                            <div class="about-info-p">
                                                                <strong>Last Name</strong>
                                                                <br>
                                                                <p class="text-muted">{{$data->lastname}}</p>
                                                            </div>
                                                            
                                                            <div class="about-info-p">
                                                                <strong>Email</strong>
                                                                <br>
                                                                <p class="text-muted">{{$data->email}}</p>
                                                            </div>
                                                            <div class="about-info-p">
                                                                <strong>Date Of Birth</strong>
                                                                <br>
                                                                <p class="text-muted">{{$data->dob}}</p>
                                                            </div>
                                                            <a href="{{ route('profile.edit',['id' => $data->id]) }}" class="btn btn-purple waves-effect waves-light">Edit</a>
                                            <a href="" class="btn btn-danger waves-effect waves-light" data-href="" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                                                          
                                                        </div>
                                                    </div>
                                                    <!-- Personal-Information -->

                                                    <!-- Languages -->
                                                  
                                                    <!-- Languages -->

                                                </div>

                                                
                                                    <!-- Personal-Information -->

                                                    

                                            <!-- Personal-Information -->
                                        </div>

                                       
                                            <!-- Personal-Information -->
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- container-fluid -->

                    </div>
                    <!-- content -->

                    <footer class="footer text-right">
                      &copy; ping
                    </footer>

                </div>
            </div>
                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->

                <!-- Right Sidebar -->
                <div class="side-bar right-bar nicescroll">
                    <h4 class="text-center">Chat</h4>
                    <div class="contact-list nicescroll">
                        <ul class="list-group contacts-list">
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                    </div>
                                    <span class="name">Chadengle</span>
                                    <i class="fa fa-circle online"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-2.jpg" alt="">
                                    </div>
                                    <span class="name">Tomaslau</span>
                                    <i class="fa fa-circle online"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-3.jpg" alt="">
                                    </div>
                                    <span class="name">Stillnotdavid</span>
                                    <i class="fa fa-circle online"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-4.jpg" alt="">
                                    </div>
                                    <span class="name">Kurafire</span>
                                    <i class="fa fa-circle online"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-5.jpg" alt="">
                                    </div>
                                    <span class="name">Shahedk</span>
                                    <i class="fa fa-circle away"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-6.jpg" alt="">
                                    </div>
                                    <span class="name">Adhamdannaway</span>
                                    <i class="fa fa-circle away"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-7.jpg" alt="">
                                    </div>
                                    <span class="name">Ok</span>
                                    <i class="fa fa-circle away"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-8.jpg" alt="">
                                    </div>
                                    <span class="name">Arashasghari</span>
                                    <i class="fa fa-circle offline"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-9.jpg" alt="">
                                    </div>
                                    <span class="name">Joshaustin</span>
                                    <i class="fa fa-circle offline"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="assets/images/users/avatar-10.jpg" alt="">
                                    </div>
                                    <span class="name">Sortino</span>
                                    <i class="fa fa-circle offline"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Right-bar -->
            </div>
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