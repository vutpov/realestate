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
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css"> --}}
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
        <!-- Menu -->
        @yield('manu')

    </nav>

    @yield('content')

    <footer class="page-footer text-center text-md-left pt-4">
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
    </footer>

    <script src="{{url('front/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('front/js/mdb.min.js')}}"></script>
    <script src="{{url('front/js/popper.min.js')}}"></script>
    <script src="{{url('front/js/bootstrap.min.js')}}"></script>
    <script src="{{url('front/js/lightslider.min.js')}}"></script>
    <script src="{{url('front/js/script.js')}}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> --}}


</body>

</html>
