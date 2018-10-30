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
            <a href="index.html">
            <img class="img-fluid" src=" {{ URL::asset('assets/images/eov_logo.png')}}" alt="Theme-Logo" />
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <div>
                <!-- Header right -->
                <ul class="nav-right">
                    <li class="user-profile header-notification">
                        <a href="#!">
                        <img src="{{ URL::asset('assets/images/user.png') }}" alt="User-Profile-Image">
                        <span>{{ Auth::user()->first_name}}</span>
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
                                <a href="{{ url('/main/logout') }}">
                                <i class="ti-layout-sidebar-left"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="ti-fullscreen"></i>
                        </a>
                    </li>
                </ul>
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
            <li class="nav-item {{ (current_page("monitoring")) ? 'has-class' : '' }} ">
            <a href="/monitoring/gatekeeper">
            <i class="ti-home"></i>
            <span>Monitoring</span>
            </a>
            <ul class="tree-1 open">
                <li class="{{ (current_page("monitoring/gatekeeper")) ? 'has-class' : '' }}"><a href="/monitoring/gatekeeper">Gatekeeper</a></li>
                <li class="{{ (current_page("monitoring/statistics")) ? 'has-class' : '' }} disabled"><a href="#" class="nav-link disabled">Statistics</a></li>
            </ul>
            </li>
            <li class="nav-item {{ (current_page("employees")) ? 'has-class' : '' }} ">
            <a href="#!">
            <i class="icofont icofont-ssl-security"></i>
            <span>Security</span>
            </a>
            <ul class="tree-1">
                <li class="nav-sub-item {{ (current_page("employees/create")) ? 'has-class' : '' }}"><a href="#">User Access</a>
                <ul class="tree-2">
                    <li class="{{ (current_page("employees/create")) ? 'has-class' : '' }}"><a href="/employees/create">User Registration</a></li>
                    <li class="{{ (current_page("security/user_role")) ? 'has-class' : '' }}"><a href="#" class="nav-link disabled">User Role</a></li>
                    <li class="{{ (current_page("security/user_accesslevel")) ? 'has-class' : '' }}"><a href="#" class="nav-link disabled">User Access Level</a></li>
                </ul>
                </li>
                <li class="{{ (current_page("employees/profile")) ? 'has-class' : '' }}">
                    <a href="/employees/profile">User Profile</a>
                </li>
            </ul>
            </li>
            <li class="nav-item {{ (current_page("qr")) ? 'has-class' : '' }} ">
            <a href="#!">
            <i class="icofont icofont-qr-code"></i>
            <span>QR System</span>
            </a>
            <ul class="tree-1">
                <li class="{{ (current_page("qr/scanner")) ? 'has-class' : '' }}"><a href="/qr/scanner">QR Scanner</a>
                <li class="{{ (current_page("qr/generator")) ? 'has-class' : '' }}">     <a href="/qr/generator">QR Generator</a>
                </li>
            </ul>
            </li>        
        </ul>
    </div>
</div>
<!-- Menu aside end -->