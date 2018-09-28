<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    
<body class="horizontal-fixed">

    @include('partials._nav')

    <!-- Main-body start-->
    @include('partials._contentHeader')
        <!-- Main content -->
            @yield('content')
        <!-- Main-body end-->

    @include('partials._warnings')

    @include('partials._javascripts')

</body>

</html>
