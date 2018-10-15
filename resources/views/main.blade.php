<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')

        @yield('custom_page_style')
    </head>
    
<body class="horizontal-icon-fixed">

    @include('partials._nav')

    <!-- Main-body start-->
    @include('partials._contentHeader')
        <!-- Main content -->
            @yield('content')
        <!-- Main-body end-->

    @include('partials._warnings')

    @include('partials._javascripts')

    @yield('custom_page_script')

</body>

</html>
