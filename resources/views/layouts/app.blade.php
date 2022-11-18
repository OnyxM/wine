<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Title -->
    <title>{{$title}}TCHOUPA CAVE WINE</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('index') }}" class="logo">
            <img src="{{ asset('assets/img/giano-logo.png') }}" alt="Giano Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav giano-nav-two">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/giano-logo.png') }}" alt="Giano Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('shop') }}" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cart') }}" class="nav-link">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                        @auth()
                            <li class="nav-item">
                                Bienvenue, {{ Auth::user()->name }}
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar Area -->

@yield('content')

<!-- Start Footer Top Area -->
<footer class="footer-top-area pt-100">
    <div class="container">
        <div class="row footer-wrapper">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-widget">
                    <a class="brand" href="#">
                        <img src="{{ asset('assets/img/footer-logo.png') }}" alt="footer-logo">
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  incididunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.Risus commodo dolor sit amet, consectetur.</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6">
                <div class="single-widget single-widgets">
                    <h3>My Accounts</h3>
                    <ul>
                        <li>
                            <a href="#">My account</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                        <li>
                            <a href="#">Log in</a>
                        </li>
                        <li>
                            <a href="#">My Order</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-widget single-widgetss">
                    <h3>Quick Link</h3>
                    <ul>
                        <li>
                            <a href="#">New User</a>
                        </li>
                        <li>
                            <a href="#">Help Center</a>
                        </li>
                        <li>
                            <a href="#">Report Spam</a>
                        </li>
                        <li>
                            <a href="#">Faq’s</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-widget">
                    <h3>Address</h3>
                    <ul>
                        <li class="address">
                            <i class="fa fa-map-marker"></i>
                            25 Street, west Cruch, <br> Newzeland
                        </li>
                        <li class="address">
                            <i class="fa fa-phone"></i>
                            <a href="tel:+125462755">+125462755</a>
                        </li>
                        <li class="address">
                            <i class="fa fa-envelope"></i>
                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#761e131a1a1936111f1718195815191b"><span class="__cf_email__" data-cfemail="167e737a7a7956717f7778793875797b">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-bottom">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div>
                    <p>
                        Copyright <i class="fa fa-copyright"></i>2021 Giano. Designed By
                        <a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="terms-conditions">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Top Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="fa fa-angle-double-up"></i>
    <i class="fa fa-angle-double-up"></i>
</div>
<!-- End Go Top Area -->


<!-- Jquery Min JS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Meanmenu Min JS -->
<script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
<!-- Nice Select Min JS -->
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<!-- Wow Min JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Magnific-Popup Min JS -->
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<!-- Form Validator Min JS -->
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- Contact JS -->
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>

@if(Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}");
</script>
@endif
@yield('js')
</body>
</html>
