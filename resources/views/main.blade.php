<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hexagon Door Security System</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href=" {{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon">
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
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/pages/dashboard/horizontal-timeline/css/style.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/pages/dashboard/amchart/css/amchart.css') }}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/pages/flag-icon/flag-icon.min.css') }}">
    <!-- Style.css -->
     <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/color/color-1.css" id="color') }}"/>
</head>

<body class="horizontal-fixed">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <!-- Menu header start -->
    <nav class="navbar header-navbar">
        <div class="navbar-wrapper">
            <!-- Logo -->
            <div class="navbar-logo">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="ti-menu"></i>
                </a>
                <a class="mobile-search morphsearch-search" href="#">
                    <i class="ti-search"></i>
                </a>
                <a href="index.html">
                    <img class="img-fluid" src=" {{ URL::asset('assets/images/system_logo.png')}}" alt="Theme-Logo" />
                </a>
                <a class="mobile-options">
                    <i class="ti-more"></i>
                </a>
            </div>
            <div class="navbar-container container-fluid">
                <div>
                    <!-- Header left -->
                    <ul class="nav-left">
                        <li>
                            <a id="collapse-menu" href="#">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <!-- themify icon -->
                                <i class="ti-search"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <li class="mega-menu-top">
                            <a href="#">
              Mega
              <i class="ti-angle-down"></i>
            </a>
                            <ul class="show-notification row">
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Popular Links</h6>
                                    <ul class="mega-menu-links">
                                        <li><a href="form-elements-component.html">Form Elements</a></li>
                                        <li><a href="button.html">Buttons</a></li>
                                        <li><a href="map-google.html">Maps</a></li>
                                        <li><a href="user-card.html">Contact Cards</a></li>
                                        <li><a href="user-profile.html">User Information</a></li>
                                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Mailbox</h6>
                                    <ul class="mega-mailbox">
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-folder"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Data Backup</h5>
                                                    <small class="text-muted">Store your data</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-headphone-alt"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Support</h5>
                                                    <small class="text-muted">24-hour support</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-dropbox"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Drop-box</h5>
                                                    <small class="text-muted">Store large amount of data in one-box only
                                                    </small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-location-pin"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Location</h5>
                                                    <small class="text-muted">Find Your Location with ease of use</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Gallery</h6>
                                    <div class="row m-b-20">
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/01.jpg" alt="Gallery-1">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/02.jpg" alt="Gallery-2">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/03.jpg" alt="Gallery-3">
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/04.jpg" alt="Gallery-4">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/05.jpg" alt="Gallery-5">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/06.jpg" alt="Gallery-6">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Contact Us</h6>
                                    <div class="mega-menu-contact">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                            <div class="col-9">
                                                <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                            <div class="col-9">
                                                <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                            <div class="col-9">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Header right -->
                    <ul class="nav-right">
                        <li class="header-notification">
                            <a href="#!">
                                <i class="ti-bell"></i>
                                <span class="badge">5</span>
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">John Doe</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Joseph William</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Sara Soudein</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile header-notification">
                            <a href="#!">
                                <img src="{{ URL::asset('assets/images/user.png') }}" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li>
                                    <a href="#!">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="email-inbox.html">
                                        <i class="ti-email"></i> My Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- search -->
                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">
                            <input class="morphsearch-input" type="search" placeholder="Search..." />
                            <button class="morphsearch-submit" type="submit">Search</button>
                        </form>
                        <div class="morphsearch-content">
                            <div class="dummy-column">
                                <h2>People</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                    <h3>Sara Soueidan</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                    <h3>Shaun Dona</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Popular</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                    <h3>Page Preloading Effect</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                    <h3>Draggable Dual-View Slideshow</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Recent</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                    <h3>Tooltip Styles Inspiration</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                                    <h3>Notification Styles Inspiration</h3>
                                </a>
                            </div>
                        </div>
                        <!-- /morphsearch-content -->
                        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                    </div>
                    <!-- search end -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Menu header end -->

    <!-- Menu aside start --> 
    <div class="main-menu" id="horizontal-fixed">
        <div class="main-menu-header">
            <img class="img-40" src="assets/images/user.png" alt="User-Profile-Image">
            <div class="user-details">
                <span>John Doe</span>
                <span id="more-details">UX Designer<i class="icon-arrow-down"></i></span>
            </div>
        </div>
        <div class="main-menu-content" style="width: auto;">
                <ul class="main-navigation">
                    <li class="nav-item has-class">
                        <a href="#!">
                            <i class="ti-home"></i>
                            <span>Monitoring</span>
                        </a>
                    <ul class="tree-1 open">
                        <li class="has-class"><a href="index.html">Gatekeeper</a></li>
                        <li><a href="widget.html">Statistics</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#!">
                        <i class="icofont icofont-ssl-security"></i>
                        <span>Security</span>
                    </a>
                    <ul class="tree-1">
                        <li class="nav-sub-item"><a href="#">User Access</a>
                            <ul class="tree-2">
                                <li><a href="user_registration_form.blade.php" target="_blank">User Registration</a></li>
                                <li><a href="../vertical-overlay/menu-header-fixed.html" target="_blank">User Role</a></li>
                                <li><a href="../vertical-compact/menu-compact.html" target="_blank">User Access Level</a></li>
                            </ul>
                        </li>
                        <li><a href="#">User Profile</a>
                        </li>
                        </li>
                    </ul>
                    </li>
                   
            </ul>
        </div>
    </div>
    <!-- Menu aside end -->

    <!-- Main-body start-->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Body header -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Dashboard</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pages</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Main body -->
            <div class="page-body">
                <!-- Cards -->
                @yield('content')
        </div>
    </div>
    <!-- Main-body end-->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

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
    <!-- Rickshow Chart js -->
    <script src="{{ asset('bower_components/d3/d3.js') }} "></script>
    <script src="{{ asset('bower_components/rickshaw/rickshaw.js') }} "></script>
    <!-- Morris Chart js -->
    <script src="{{ asset('bower_components/raphael/raphael.min.js') }} "></script>
    <script src="{{ asset('bower_components/morris.js/morris.js') }} "></script>
    <!-- Horizontal-Timeline js -->
    <script type="text/javascript" src="{{ URL::asset('assets/pages/dashboard/horizontal-timeline/js/main.js') }}"></script>
    <!-- amchart js -->
    <script type="text/javascript" src="{{ URL::asset('assets/pages/dashboard/amchart/js/amcharts.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/pages/dashboard/amchart/js/serial.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/pages/dashboard/amchart/js/light.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/pages/dashboard/amchart/js/custom-amchart.js') }}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ URL::asset('bower_components/i18next/i18next.min.js') }} "></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }} "></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }} "></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/jquery-i18next/jquery-i18next.min.js') }} "></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ URL::asset('assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>
</body>

</html>
