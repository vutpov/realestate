<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/mdb.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('front/css/lightslider.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/css/front.css')}}">
    <!--Drop Zone-->
    <link rel="stylesheet" href="{{url('admin/css/dropzone.css')}}">


    {{-- <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script> --}}

    <!-- modal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ url('front/css/mdb.min.css') }}">

    <link rel="stylesheet" href="{{ url('admin/css/datatables.min.css') }}">


    <link rel="stylesheet" href="{{url('admin/css/animations-extended.min.css')}}">

    <!-- Additional style -->
    <link rel="stylesheet" href="{{url('admin/css/mdb-style.min.css')}}">
    <!-- Additional style -->
    <link rel="stylesheet" href="{{url('admin/css/style.css')}}">



    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->

<script src="https://kit.fontawesome.com/6051c9b353.js"></script>
<style>
    .top-nav-collapse {
        @yield('nav-collapse')
    }

    @media only screen and (max-width: 768px) {
        .navbar {
            @yield('screen-resize')
        }
    }
</style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg @yield('navbar') fixed-top">
            <a class="navbar-brand" href="/">
                @yield('logo')
                <p class="d-inline"></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-5" id="basicExampleNav">
                <div class="navbar-nav">
                    <a style="font-size:1.3rem; margin-left:3.5rem;" class="nav-item nav-link @yield('home')"
                        href="/">Home</a>
                    <a style="font-size:1.3rem; margin-left:3.5rem;@yield('about')" class="nav-item nav-link"
                        href="/about-us">About
                        Us</a>
                    <a style="font-size:1.3rem; margin-left:3.5rem;@yield('contact')" class="nav-item nav-link"
                        href="/contact-us">Contact Us</a>

                    <a style="font-size:1.3rem; margin-left:3.5rem;@yield('search')" class="nav-item nav-link"
                        href="/explores">Explore</a>

                </div>
            </div>

            <div class="menu-top">
                    <div class="container" >
                            <input type="hidden" value="{{$u->staffId}}" id="staffid" name="staffid">

                        {{-- <nav class="navbar navbar-expand-lg navbar-light"> --}}
                            {{-- <a class="navbar-brand" href="#"><img src="img/logo-white.png" alt="" width="50"></a> --}}
                            <ul class="nav ml-auto">
                                <li class="nav-item dropdown mr-3">
                                    <a href="#" id="userdropdown" role="button" data-toggle="dropdown"><i class="fas fa-user"
                                            style="font-size: 28px;margin-top: 7px"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right mt-4" >
                                        <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;&nbsp;Setting</a>
                                        <a href="/explores" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;LogOut</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="/createPropertyfront" class="nav-link btn btn-sm btn-warning">Post Free Ad</a>
                                </li>
                            </ul>
                        {{-- </nav> --}}
                    </div>
                </div>
        </nav>
                 {{-- <a style="font-size:1rem; float: left;" class="nav-item nav-link text-success"

                    href="/explore">Log In</a>

        <a style="font-size:1rem; float: left;" class="nav-item nav-link text-info"
        href="/register">Register</a> --}}
    </header>
    @yield('content')


    {{--  <footer class="page-footer text-center text-md-left pt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 offset-md-1">
                    <img src="{{url('front/img/logo-white.png')}}" width="100" alt="">
    <h5 class="d-inline font-weight-bold text-uppercase">Kool Property</h5>
    <p class="mt-4">Our Company can find you a great places such as offices, houses, apartments, land
        either for
        sale or rent.</p>
    </div>
    <hr class="clearfix w-100 d-md-none">
    <div class="col-md-2 offset-md-1">

    </div>
    <hr class="clearfix w-100 d-md-none">
    <div class="col-md-3">
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us on</h5>
        <a href="https:/www.facebook.com">
            <i style="font-size:2em" class="fab fa-facebook-square"></i>
        </a>
        <a href="https:/www.twitter.com" class="pl-2">
            <i style="font-size:2em" class="fab fa-twitter-square"></i>
        </a>
        <a href="https:/www.instagram.com" class="pl-2">
            <i style="font-size:2em" class="fab fa-instagram"></i>
        </a>
        <a href="https:/www.linkedin.com" class="pl-2">
            <i style="font-size:2em" class="fab fa-linkedin"></i>
        </a>
        <a href="https:/www.pinterest.com" class="pl-2">
            <i style="font-size:2em" class="fab fa-pinterest-square"></i>
        </a>
    </div>
    </div>
    </div>
    <div class="footer-copyright text-center">
        <div class="container-fluid py-3">
            © 2019 Copyright: <a href="#"> Group Project By SO1.7 </a>
        </div>
    </div>
    </footer> --}}

    <script src="{{url('front/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('front/js/mdb.min.js')}}"></script>
    <script src="{{url('front/js/popper.min.js')}}"></script>
    <script src="{{url('front/js/bootstrap.min.js')}}"></script>
    <script src="{{url('front/js/lightslider.min.js')}}"></script>
    <script src="{{url('front/js/script.js')}}"></script>
    <!-- JQuery -->
    {{-- <script type="text/javascript" src="{{url('front/js/jquery-3.4.1.min.js')}}"></script> --}}
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{url('front/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{url('front/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{url('front/js/mdb.min.js')}}"></script>

    <script type="text/javascript" src="{{url('admin/js/datatables.min.js')}}"></script>





    <!-- AdminLTE App -->
    <script src="{{url('admin/dist/js/adminlte.min.js')}}"></script>

    <!-- InputMask -->
    <script src="{{url('admin/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{url('admin/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{url('admin/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{url('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>


    <!-- SlimScroll -->
    <script src="{{url('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>


    <!-- Optionally, you can add Slimscroll and FastClick plugins.
       Both of these plugins are recommended to enhance the
       user experience. -->


    <!-- Font Awesome -->
    <script src="{{url('admin/js/all.min.js')}}"></script>

    <!-- Dropzone -->
    <script src="{{url('admin/js/dropzone.js')}}"></script>


    <!-- Select2 -->
    <script src="{{url('admin/js/select2.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

    <script src="{{url('admin/js/helper.js')}}"></script>
    <script src="{{url('admin/js/customDatatable.js')}}"></script>
    <script src="{{url('admin/js/script.js')}}"></script>



    @yield('script')

</body>

</html>
