<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Ping || View Organization</title>
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
<style>
    p{
        color:black;
    }
    </style>
    </head>

    <body class="fixed-left">
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                    <p>You are about to delete one organization, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>

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
                       <!-- <div class="user-info">
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
                                <h4 class="pull-left page-title">View Organization</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="dashboard">{{$detail->username}}</a></li>
                                    <li><a href="organization">Organization</a></li>
                                    <li class="active">View</li>
                                </ol>
                            </div>
                        </div>


                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="" method="">
                                   
                                    <input type="hidden" name="id" value="{{$orgid->id}}"/>
                                    <table style="width:100%">
                @csrf
                                       <tr>
                                           <td>     <div class="form-group">
                                                <label for="exampleInputEmail1">Name : </label> <p>{{$orgid->name}}</p>
                                                
                                                <span style="color:red">@error('name'){{$message}} @enderror</span>
                                            </div></td>
                                           <td> <div class="form-group">
                                                <label for="exampleInputPassword1">Email :</label><p>{{$orgid->email}}</p>
                                                <span style="color:red">@error('email'){{$message}} @enderror</span>
                                            </div></td></tr>
                                            <tr>
                                            <td><div class="form-group">
                                                <label for="exampleInputPassword1">Phone :</label><p>{{$orgid->phonenumber}}</p>
                                                <span style="color:red">@error('phone'){{$message}} @enderror</span>
                                            </div></td>
                                            <td><div class="form-group">
                                                <label for="exampleInputPassword1">Address :</label> <p>{{$orgid->address}}</p>
                                                <span style="color:red">@error('address'){{$message}} @enderror</span>
                                            </div></td></tr>
                                            <tr>
                                            <td><div class="form-group">
                                                <label for="exampleInputPassword1">City :</label> <p>{{$orgid->city}}</p>
                                                <span style="color:red">@error('city'){{$message}} @enderror</span>
                                            </div></td>
                                            <td><div class="form-group">
                                                <label for="exampleInputPassword1">Province/State :</label><p>{{$orgid->state}}</p>
                                                <span style="color:red">@error('state'){{$message}} @enderror</span>
                                            </div></td></tr>
                                            <tr>
                                            <td><div class="form-group">
                                                <label for="exampleInputPassword1">Country :</label> <p>{{$orgid->country}}</p>
                                                <span style="color:red">@error('country'){{$message}} @enderror</span>
                                            </div></td>
                                            <td><div class="form-group">
                                                <label for="exampleInputPassword1">Postal Code :</label> <p>{{$orgid->postalcode}}</p>
                                                <span style="color:red">@error('postalcode'){{$message}} @enderror</span>
                                            </div></td></tr></table>
                                            
                                            <a href="{{ route('organisation.edit',['id' => $orgid->id]) }}" class="btn btn-purple waves-effect waves-light">Edit</a>
                                            <a href="{{ route('organisation.delete',['id' => $orgid->id]) }}" class="btn btn-danger waves-effect waves-light" data-href="{{ route('organisation.delete',['id' => $orgid->id]) }}" data-toggle="modal" data-target="#confirm-delete">Delete</a>

                                        </form>
                                    </div><!-- card-body -->
                                </div> <!-- card -->
                                <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6" >
                                        <div class="m-b-30" >
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
                                    @foreach($data as $record)
                                    <tr class="gradeX">
                                        <td>{{$record->firstname}}</td>
                                        <td>{{$record->city}}
                                        </td>
                                        <td>{{$record->phone}}</td>
                                        <td class="actions">
                                           <a href="{{ route('contact.show',['id' => $record->id]) }}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show"><i class="fa fa-eye"></i></a>
                                           <a href="{{ route('contact.edit',['id' => $record->id]) }}"  class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                           <a href="{{ route('contact.delete',['id' => $record->id]) }}" class="on-default edit-row" data-href="{{ route('contact.delete',['id' => $record->id]) }}" data-toggle="modal" data-target="#confirm-delete"title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>


                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                    
                                    </tbody>
                                </table>
                             
                                   
                                       
                                    
                                
                                    

                                
</div>
 
                        
                            
                        
                            <!-- end card-body -->
                        </div>
                        
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
	<script> 
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>
	</body>
</html>