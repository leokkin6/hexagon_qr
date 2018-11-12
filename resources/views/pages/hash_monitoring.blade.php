<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <link rel="icon" href=" {{ URL::asset('assets/images/hgc.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/icon/themify-icons/themify-icons.css') }}"> 
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/icon/icofont/css/icofont.css') }}"> 
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/pages/flag-icon/flag-icon.min.css') }}"> 
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/pages/menu-search/css/component.css') }}"> 
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/color/color-1.css') }}" id="color"/>
</head>
<body class="horizontal-icon-fixed">
    <nav class="navbar header-navbar">
        <div class="navbar-wrapper">
            <!-- Logo -->
            <div class="navbar-logo">
                <a href="#">
                <img class="img-fluid" src=" {{ URL::asset('assets/images/eov_logo.png')}}" alt="Theme-Logo" />
                </a>
            </div>
        </div>
    </nav>
    <br>
    <div class="main-body">
        <div class="card">
            <div class="card-block">
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-xs-3 col-md-6">
                        <!-- Header RSection -->
                        <h4 class="sub-title"><i class="icofont icofont-id-card"></i> Identification Photo</h4>
                    <!-- Profile Card -->
                        <div class="col">
                            <div class="card rounded-card user-card">
                                <div class="card-block">
                                    <div class="img-hover">
                                        <img class="img-fluid img-circle" id="centerImage" alt="round-img" src="/uploads/{{$image}}">
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="col-xs-9 col-md-6">
                        <!-- Header LSection -->
                        <h4 class="sub-title"><i class="icofont icofont-ui-user"></i></i> Employee Information</h4>
                        <!-- Information Forms -->
                        <div class="row">
                            <div class="form-group col">
                                <label class="col-form-label">Unit:</label>
                            </div>
                            <div class="form-group col-sm-9">
                                <div class="form-control rowalert alert-secondary" role="alert" id="unit"> {{ $unit }} </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="col-form-label">ID Number:</label>
                            </div>
                            <div class="form-group col-sm-9">
                                <div class="form-control rowalert alert-secondary" role="alert" id="idnumber"> {{ $empID }}  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="col-form-label">Full Name:</label>
                            </div>
                            <div class="form-group col-sm-9">
                                <div class="form-control rowalert alert-secondary" role="alert" id="fullname"> {{ $fullName }}  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="col-form-label">Position:</label>
                            </div>
                            <div class="form-group col-sm-9">
                                <div class="form-control rowalert alert-secondary" role="alert" id="position"> {{ $position }} </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="col-form-label">Department:</label>
                            </div>
                            <div class="form-group col-sm-9">
                                <div class="form-control rowalert alert-secondary" role="alert" id="department"> {{ $department }}  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="col-form-label">Status:</label>
                            </div>
                            <div class="form-group col-sm-9">
                                <div class="form-control rowalert alert-success" role="alert" id="status"> {{ $status }}  </div>
                            </div>
                        </div>
                        <!-- End of Information Forms -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- General Scripts -->
    <!-- Required Jqurey -->
    <script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ URL::asset('bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ URL::asset('bower_components/modernizr/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>
    <!-- classie js -->
    <script type="text/javascript" src="{{ URL::asset('bower_components/classie/classie.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ URL::asset('assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>
    <!-- End of General Scripts -->

</body>
</html>
