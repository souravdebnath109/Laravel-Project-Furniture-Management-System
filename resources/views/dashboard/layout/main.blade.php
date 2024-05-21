<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon icon -->
    {{-- <ul class="navbar-nav align-items-center right-nav-link">
        <li class="nav-item dropdown-lg">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" href="{{url('/index')}}">
                <i class="fa fa-home"></i></a>
        </li>
    </ul> --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{config('app.url')}}/Admin/images/favicon.png">
    <link rel="stylesheet" href="{{config('app.url')}}/Admin/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}/Admin/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{config('app.url')}}/Admin/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{config('app.url')}}/Admin/css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('dashboard.layout.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('dashboard.layout.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{config('app.url')}}/Admin/vendor/global/global.min.js"></script>
    <script src="{{config('app.url')}}/Admin/js/quixnav-init.js"></script>
    <script src="{{config('app.url')}}/Admin/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="{{config('app.url')}}/Admin/vendor/raphael/raphael.min.js"></script>
    <script src="{{config('app.url')}}/Admin/vendor/morris/morris.min.js"></script>


    <script src="{{config('app.url')}}/Admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{config('app.url')}}/Admin/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="{{config('app.url')}}/Admin/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="{{config('app.url')}}/Admin/vendor/flot/jquery.flot.js"></script>
    <script src="{{config('app.url')}}/Admin/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="{{config('app.url')}}/Admin/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="{{config('app.url')}}/Admin/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{config('app.url')}}/Admin/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{config('app.url')}}/Admin/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="{{config('app.url')}}/Admin/js/dashboard/dashboard-1.js"></script>

</body>

</html>