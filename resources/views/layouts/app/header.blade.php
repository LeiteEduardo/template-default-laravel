<!DOCTYPE html>
<html class="loading dark-layout" lang="pt-BR" data-layout="dark-layout" data-textdirection="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>Finance | @yield('titlepage')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/icon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- Imports -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/charts/apexcharts.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/themes/semi-dark-layout.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/plugins/charts/chart-apex.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/toastr.css') }}">

    @yield('headerpage')

</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <ul class="nav navbar-nav d-flex justify-content-between align-items-center w-100">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">
                                {{ Auth::user()->name }}
                            </span>
                            <!-- <span class="user-status">
                                Admin
                            </span> -->
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{ url('assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="page-profile.html">
                            <i class="me-50" data-feather="user"></i> 
                            Profile
                        </a>
                        <a class="dropdown-item" href="app-email.html">
                            <i class="me-50" data-feather="mail"></i> 
                            Inbox
                        </a>
                        <a class="dropdown-item" href="app-todo.html">
                            <i class="me-50" data-feather="check-square"></i> 
                            Task
                        </a>
                        <a class="dropdown-item" href="app-chat.html">
                            <i class="me-50" data-feather="message-square"></i> 
                            Chats
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="page-account-settings-account.html">
                            <i class="me-50" data-feather="settings"></i> 
                            Settings
                        </a>
                        <a class="dropdown-item" href="page-pricing.html">
                            <i class="me-50" data-feather="credit-card"></i> 
                            Pricing
                        </a>
                        <a class="dropdown-item" href="page-faq.html">
                            <i class="me-50" data-feather="help-circle"></i> 
                            FAQ
                        </a>
                        <a class="dropdown-item" href="auth-login-cover.html">
                            <i class="me-50" data-feather="power"></i> 
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->
