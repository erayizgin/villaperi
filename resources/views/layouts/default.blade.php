<!-- Stored in resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">
        
        <!-- ======================== Navigation ======================== -->
        @include('includes.navigation')           

        @yield('content')

    </div> <!--/wrapper-->

    <!-- ================== Footer  ================== -->
    @include('includes.footer')
    <!--JS files-->
    @include('includes.jstemplate')
</body>

</html>