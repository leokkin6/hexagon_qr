<div class="main-body">
    <div class="page-wrapper">
        <!-- Body header -->
        <div class="page-header">
            <div class="page-header-title">
                <h4>@yield('content_header')</h4>
                <span>@yield('content_subheader')</span>
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
                    <li class="breadcrumb-item"><a href="#!">@yield('breadcrumb')</a>
                    </li>
                </ul>
            </div>
        </div>