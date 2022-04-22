<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Ping || Organizations</title>
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
                            <img src="{{ asset('storage/images/'.$detail->photo)}}" class="thumb-md rounded-circle" alt="">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;margin-right:75px">
                                {{$detail->username}}
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
                                {{$detail->username}}
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
                                <h4 class="pull-left page-title">Organizations</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="dashboard">{{$detail->username}}</a></li>
                                    <li><a href="dashboard">Dashboard</a></li>
                                    <li class="active">Organizations</li>
                                </ol>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6" >
                                        <div class="m-b-30" >
                                            <a href="createorganization" id="addToTable" class="btn btn-success waves-effect waves-light">Create Organization <i class="mdi mdi-plus-circle-outline"></i></a>
                                            @if(Session::has('success'))
                <h4 style="color:green">{{Session::get('success')}}</h4>
                @endif
                @if(Session::has('fail'))
              <h4 style="color:red">{{Session::get('fail')}}</h4>
                @endif
                                        </div>
                                    </div>
                                </div>
    
                                <table class="table table-striped add-edit-table dt-responsive nowrap" id="datatable-editable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Phone Number</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($organisations as $organisation)
                                    <tr class="gradeX">
                                        <td>{{$organisation['name']}}</td>
                                        <td>{{$organisation['city']}}
                                        </td>
                                        <td>{{$organisation['phonenumber']}}</td>
                                        <td class="actions">
                                           &nbsp;&nbsp;&nbsp; <a href="{{ route('organisation.show',['id' => $organisation->id]) }}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                             
                                   
                                        {{$organisations->links()}}
                                    
                                
                                    

                                
</div>
 
                        
                            
                        
                            <!-- end card-body -->
                        </div>
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                      &copy; ping
                    </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            
            <!-- end Modal -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
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

	    <!-- Examples -->
	    <script src="../plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	    <script src="../plugins/datatables/jquery.dataTables.min.js"></script> 
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Responsive examples -->
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
	    <script src="assets/pages/datatables.editable.init.js"></script>
        
        <script src="assets/js/jquery.app.js"></script>

	</body>
</html>