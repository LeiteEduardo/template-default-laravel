<!DOCTYPE html>
<html class="loading dark-layout" lang="pt-BR" data-layout="dark-layout" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/icon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    
    <title>Finance | @yield('titlepage')</title>

    <!-- Imports -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/themes/semi-dark-layout.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/core/menu/menu-types/vertical-menu.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/toastr.css') }}">
</head>
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-2">
                        <!-- Brand logo--><a class="brand-logo" href="index.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" id="coin">
                                <g transform="translate(370 -322)">
                                    <circle cx="-340" cy="352" r="24" fill="#ecb751"></circle>
                                    <path fill="#fdefb4" d="m -340,328 a 23.999998,23.999998 0 0 0 -24,24 23.999998,23.999998 0 0 0 0.80859,6.125 l 29.30274,-29.30273 A 23.999998,23.999998 0 0 0 -340,328 Z m 8.22852,1.48633 -30.75,30.75 a 23.999998,23.999998 0 0 0 1.30273,2.94726 l 32.40234,-32.40234 a 23.999998,23.999998 0 0 0 -2.95507,-1.29492 z m 14.40234,14.60742 -30.53711,30.53711 a 23.999998,23.999998 0 0 0 2.61523,0.75781 l 28.67188,-28.67187 a 23.999998,23.999998 0 0 0 -0.75,-2.62305 z"></path>
                                    <circle cx="-340" cy="352" r="19" fill="#fad461"></circle>
                                    <path fill="#ecb751" d="m -332.74023,334.44922 a 19.000002,19.000002 0 0 1 7.93945,15.42969 19.000002,19.000002 0 0 1 -19,19 19.000002,19.000002 0 0 1 -7.25781,-1.44922 A 19.000002,19.000002 0 0 0 -340,371 a 19.000002,19.000002 0 0 0 19,-19 19.000002,19.000002 0 0 0 -11.74023,-17.55078 z"></path><path fill="#2d3a66" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="m -340,327 c -13.79527,0 -25,11.20473 -25,25 0,13.79527 11.20473,25 25,25 13.79527,0 25,-11.20473 25,-25 0,-13.79527 -11.20473,-25 -25,-25 z m 0,2 c 12.71439,0 23,10.28561 23,23 0,12.71439 -10.28561,23 -23,23 -12.71439,0 -23,-10.28561 -23,-23 0,-12.71439 10.28561,-23 23,-23 z m 0,3 c -11.03385,0 -20,8.96615 -20,20 0,4.47859 1.47574,8.62426 3.9668,11.95898 a 1.0005843,1.0005843 0 0 0 1.60351,-1.19726 C -356.67253,359.75928 -358,356.03987 -358,352 c 0,-9.95297 8.04703,-18 18,-18 9.95297,0 18,8.04703 18,18 0,9.95297 -8.04703,18 -18,18 -2.90317,0 -5.63881,-0.68455 -8.06445,-1.90234 a 1.0001196,1.0001196 0 1 0 -0.89844,1.78711 c 2.6962,1.35362 5.74444,2.11523 8.96289,2.11523 11.03385,0 20,-8.96615 20,-20 0,-11.03385 -8.96615,-20 -20,-20 z m -0.0156,8.00977 A 1.0001,1.0001 0 0 0 -341,341.02344 l 0,1.82812 c -0.129,0.0229 -0.25818,0.0326 -0.38672,0.0645 a 1.0000999,1.0000999 0 0 0 -0.002,0 c -2.34794,0.58291 -4.05078,2.59832 -4.05078,4.94336 0,2.33692 1.69345,4.34308 4.02929,4.93359 1.39014,0.42125 2.22115,0.24654 3.18946,0.64062 1.33427,0.73365 1.93635,2.11188 1.55273,3.4375 -0.38734,1.33832 -1.73256,2.32618 -3.32812,2.32618 -1.59557,0 -2.94273,-0.98786 -3.33008,-2.32618 a 1.0004338,1.0004338 0 1 0 -1.92188,0.55664 c 0.56125,1.93903 2.24731,3.32071 4.24805,3.67383 l 0,1.875 a 1.0001,1.0001 0 1 0 2,0 l 0,-1.87304 c 2.00384,-0.35084 3.69196,-1.73418 4.25391,-3.67579 0.65324,-2.25735 -0.43841,-4.65375 -2.5586,-5.78711 a 1.0000999,1.0000999 0 0 0 -0.0801,-0.0371 c -1.50119,-0.63822 -2.5095,-0.43015 -3.46679,-0.72657 a 1.0000999,1.0000999 0 0 0 -0.0547,-0.0156 c -1.53561,-0.38123 -2.53319,-1.62452 -2.5332,-3.00195 10e-6,-1.37791 0.99753,-2.62071 2.5332,-3.00196 1.5356,-0.38081 3.14672,0.25626 3.90625,1.47461 a 1.0001673,1.0001673 0 1 0 1.69727,-1.05859 c -0.82543,-1.32407 -2.19033,-2.1809 -3.69727,-2.44336 l 0,-1.80664 a 1.0001,1.0001 0 0 0 -1.01562,-1.01367 z m 14.89453,15.38671 a 0.50005,0.50005 0 0 0 -0.45508,0.38086 c -0.7302,2.78803 -2.25554,5.31184 -4.39453,7.25586 a 0.50005,0.50005 0 1 0 0.67187,0.74024 c 2.28269,-2.07462 3.91217,-4.76692 4.69141,-7.74219 a 0.50005,0.50005 0 0 0 -0.46289,-0.63477 0.50005,0.50005 0 0 0 -0.0508,0 z m -6.52149,9.04493 a 0.50005,0.50005 0 0 0 -0.26758,0.084 c -0.20732,0.13384 -0.41961,0.2625 -0.63476,0.38672 a 0.50050437,0.50050437 0 0 0 0.5,0.86719 c 0.22952,-0.13252 0.45458,-0.27127 0.67578,-0.41407 a 0.50005,0.50005 0 0 0 -0.27344,-0.92382 z m -20.83398,0.85937 a 1.0001,1.0001 0 0 0 -0.67969,1.76172 c 0.25692,0.22458 0.51884,0.4429 0.78711,0.6543 a 1.0001,1.0001 0 1 0 1.23828,-1.57032 c -0.24157,-0.19036 -0.47762,-0.3876 -0.70898,-0.58984 a 1.0001,1.0001 0 0 0 -0.63672,-0.25586 z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible"></path><ellipse cx="-129.048" cy="474.108" fill="#fdefb4" rx="5.314" ry="7.517" transform="rotate(30)"></ellipse><ellipse cx="-351.299" cy="357.187" fill="#fdefb4" rx="2.953" ry="2.228"></ellipse><path fill="#8d8d81" d="m -342.88867,343.54102 c -1.53578,0.91141 -2.55078,2.51306 -2.55078,4.31835 0,0.7137 0.17303,1.38868 0.45898,2.00977 a 5.3136654,7.5168929 30 0 0 0.76953,-1.14648 5.3136654,7.5168929 30 0 0 1.32227,-5.18164 z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"></path><path fill="#8d8d81" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="m -342.88867,343.54102 c -1.53578,0.91141 -2.55078,2.51306 -2.55078,4.31835 0,0.7137 0.17303,1.38868 0.45898,2.00977 a 5.3136654,7.5168929 30 0 0 0.76953,-1.14648 5.3136654,7.5168929 30 0 0 1.32227,-5.18164 z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible"></path>
                                </g>
                            </svg>
                            <h2 class="brand-text ms-1">Finance</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                                @if ( Route::current()->getName() == 'login' )
                                <img class="img-fluid" style="max-height: 550px;" src="{{url('assets/images/pages/login-v2-dark.svg')}}" alt="Login" />
                                @elseif ( Route::current()->getName() == 'register' )
                                <img class="img-fluid" style="max-height: 550px;" src="{{url('assets/images/pages/register-v2-dark.svg')}}" alt="Register" />
                                @elseif ( Route::current()->getName() == 'forgot' )
                                <img class="img-fluid" style="max-height: 550px;" src="{{url('assets/images/pages/forgot-password-v2-dark.svg')}}" alt="Forgot Password" />
                                @elseif ( Route::current()->getName() == 'reset' )
                                <img class="img-fluid" style="max-height: 550px;" src="{{url('assets/images/pages/reset-password-v2-dark.svg')}}" alt="Reset Password" />
                                @endif

                            </div>
                        </div>
                        <!-- /Left Text-->

                        @yield('contentpage')

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <script src="{{ url('assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>

    <script src="{{ url('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ url('assets/js/core/app.js') }}"></script>
</body>
</html>