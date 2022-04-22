<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Ping || Dashboard</title>
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
                                    <li><a href="profile" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    
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
                                           <!-- <img src="assets/images/users/avatar-1.jpg" class="thumb-lg rounded-circle img-thumbnail" alt="profile-image">-->
                                            <h3 class="text-black"></h3>
                                        </div>
                                    </div>
                                    <!--/ meta -->
                                </div>
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