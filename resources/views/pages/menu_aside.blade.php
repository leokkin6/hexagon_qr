 @extends('main')
 @section('menu_aside')  
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
                            <span>Dashboard</span>
                        </a>
                    <ul class="tree-1 open">
                        <li class="has-class"><a href="index.html">Default </a></li>
                        <li><a href="widget.html">Widget</a></li>
                        <li><a href="dashboard-ecommerce.html">Ecommerce</a></li>
                        <li><a href="dashboard-crm.html">CRM</a></li>
                        <li><a href="dashboard-analytics.html">Analytics</a></li>
                        <li><a href="dashboard-project.html">Project</a></li>
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
                                <li><a href="../vertical-static/menu-static.html" target="_blank">User Profile</a></li>
                                <li><a href="../vertical-overlay/menu-header-fixed.html" target="_blank">User Role</a></li>
                                <li><a href="../vertical-compact/menu-compact.html" target="_blank">User Access Level</a></li>
                            </ul>
                        </li>
                        <li><a href="#">User List</a>
                        </li>
                        </li>
                    </ul>
                    </li>
                   
            </ul>
        </div>
    </div>
@endsection