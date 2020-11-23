<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @yield('css_top')
    <!-- Favicon -->
    <link type="image/ico" rel="shortcut icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('adminbsb/assets/plugins/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" />

    <!-- Animate.css Css -->
    <link href="{{ asset('adminbsb/assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Font Awesome Css -->
    <link href="{{ asset('adminbsb/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- iCheck Css -->
    <link href="{{ asset('adminbsb/assets/plugins/iCheck/skins/flat/_all.css') }}" rel="stylesheet" />

    <!-- Switchery Css -->
    <link href="{{ asset('adminbsb/assets/plugins/switchery/dist/switchery.css') }}" rel="stylesheet" />

    <!-- Metis Menu Css -->
    <link href="{{ asset('adminbsb/assets/plugins/metisMenu/dist/metisMenu.css') }}" rel="stylesheet" />

    <!-- Jquery Datatables Css -->
    <link href="{{ asset('adminbsb/assets/plugins/DataTables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet" />

    <!-- Pace Loader Css -->
    <link href="{{ asset('adminbsb/assets/plugins/pace/themes/white/pace-theme-flash.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('adminbsb/assets/css/style.css') }}" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('adminbsb/assets/css/themes/allthemes.css') }}" rel="stylesheet" />

    <!-- Demo Purpose Only -->
    <link href="{{ asset('adminbsb/assets/css/demo/setting-box.css') }}" rel="stylesheet" />
    @yield('css_bottom')
</head>

<body>
    <div class="all-content-wrapper">
        <!-- Top Bar -->
        <header>
            <nav class="navbar navbar-default">
                <!-- Search Bar -->
                <div class="search-bar">
                    <div class="search-icon">
                        <i class="material-icons">search</i>
                    </div>
                    <input type="text" placeholder="Start typing...">
                    <div class="close-search js-close-search">
                        <i class="material-icons">close</i>
                    </div>
                </div>
                <!-- #END# Search Bar -->

                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="material-icons">swap_vert</i>
                        </button>
                        <a href="javascript:void(0);" class="left-toggle-left-sidebar js-left-toggle-left-sidebar">
                            <i class="material-icons">menu</i>
                        </a>
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html">
                            <span class="logo-minimized">AS</span>
                            <span class="logo">Admin - JobPerfect</span>
                        </a>
                        <!-- #END# Logo -->
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="javascript:void(0);" class="toggle-left-sidebar js-toggle-left-sidebar">
                                    <i class="material-icons">menu</i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Call Search  -->
                           <!-- <li>
                                <a href="javascript:void(0);" class="js-search" data-close="true">
                                    <i class="material-icons">search</i>
                                </a>
                            </li>  -->
                            <!-- #END# Call Search -->
                            <!-- Fullscreen Request -->
                            <!-- <li>
                                <a href="javascript:void(0);" class="fullscreen js-fullscreen">
                                    <i class="material-icons">fullscreen</i>
                                </a>
                            </li> -->
                            <!-- #END# Fullscreen Request -->
                            <!-- Email -->
                          <!-- <li class="dropdown email-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="material-icons">email</i>
                                    <span class="label-count">3</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">EMAILS</li>
                                    <li class="body">
                                        <ul class="menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="adminbsb/assets/images/avatars/face4.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>John Doe</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 14 mins ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="adminbsb/assets/images/avatars/face5.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Francisco Day</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 1 hour ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="adminbsb/assets/images/avatars/face6.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Maria Doe</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 1 hour ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="adminbsb/assets/images/avatars/face7.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Connie Craig</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 2 hours ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="adminbsb/assets/images/avatars/face8.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Agnes Howard</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 1 day ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="adminbsb/assets/images/avatars/face9.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Gina Fletcher</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 2 days ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="javascript:void(0);">View All Emails</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- #END# Email -->
                            <!-- Notifications -->
                            <!-- <li class="dropdown notification-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="label-count">7</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">NOTIFICATIONS</li>
                                    <li class="body">
                                        <ul class="menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-success">
                                                        <i class="material-icons">person_add</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>12 new members joined</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 14 mins ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-info">
                                                        <i class="material-icons">add_shopping_cart</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>4 sales made</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 22 mins ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-danger">
                                                        <i class="material-icons">delete_forever</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>Nancy Doe</b> deleted account</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 3 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-warning">
                                                        <i class="material-icons">mode_edit</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>Nancy</b> changed name</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 2 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-primary">
                                                        <i class="material-icons">comment</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>John</b> commented your post</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 4 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-success">
                                                        <i class="material-icons">cached</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>John</b> updated status</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 3 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-info">
                                                        <i class="material-icons">settings</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>Settings updated</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> Yesterday
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="javascript:void(0);">View All Notifications</a>
                                    </li>
                                </ul>
                            </li>-->
                            <!-- #END# Notifications -->
                            <!-- Tasks -->
                            <!-- <li class="dropdown tasks-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="material-icons">flag</i>
                                    <span class="label-count">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">TASKS</li>
                                    <li class="body">
                                        <ul class="menu tasks">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Footer display issue
                                                        <small>32%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 32%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Make new buttons
                                                        <small>45%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Create new dashboard
                                                        <small>54%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 54%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Solve transition issue
                                                        <small>65%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 65%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Answer GitHub questions
                                                        <small>92%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 92%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="javascript:void(0);">View All Tasks</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- #END# Tasks -->
                            <!-- User Menu -->
                            <li class="dropdown user-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../../adminbsb/assets/images/avatars/face2.jpg" alt="User Avatar" />
                                    <span class="hidden-xs">Brandon Sanchez</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        <img src="../../adminbsb/assets/images/avatars/face2.jpg" alt="User Avatar" />
                                        <div class="user">
                                            Brandon Sanchez
                                            <div class="title">Front-end Developer</div>
                                        </div>
                                    </li>
                                    <li class="body">
                                        <ul>
                                            <li>
                                                <a href="pages/miscellaneous/profile.html">
                                                    <i class="material-icons">account_circle</i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="material-icons">lock_open</i> Change Password
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <div class="row clearfix">
                                            <div class="col-xs-5">
                                                <a href="pages/examples/locked-screen.html" class="btn btn-default btn-sm btn-block">Log Off</a>
                                            </div>
                                            <div class="col-xs-2"></div>
                                            <div class="col-xs-5">
                                                <a href="javascript:void(0);" class="btn btn-default btn-sm btn-block">Log Out</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- #END# User Menu -->
                            <!-- <li class="pull-right">
                                <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                                    <i class="material-icons">more_vert</i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- #END# Top Bar -->
        <!-- Left Menu -->
        <aside class="sidebar">
            <nav class="sidebar-nav">
                <ul class="metismenu">
                    <li class="title">
                        MAIN NAVIGATION
                    </li>
                    <!-- <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">dashboard</i>
                            <span class="nav-label">บริการสำหรับบริษัท</span>
                        </a> -->
                        <!-- <ul>
                            <li class="active">
                                <a href="index.html">Dashboard v1</a>
                            </li>
                            <li>
                                <a href="pages/dashboard/dashboard-2.html">Dashboard v2</a>
                            </li>
                            <li>
                                <a href="pages/dashboard/dashboard-3.html">Dashboard v3</a>
                            </li>
                            <li>
                                <a href="pages/dashboard/dashboard-4.html">Dashboard v4</a>
                            </li>
                            <li>
                                <a href="pages/dashboard/dashboard-5.html">Dashboard v5</a>
                            </li>
                        </ul> -->
                    <!-- </li> -->
                    <li>
                        <a href="{{ url('manage/banner') }}">
                            <i class="fa fa-picture-o material-icons"></i>
                            <span class="nav-label">Upload banner</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fa fa-files-o material-icons"></i>
                            <span class="nav-label">แพคเกจบริการ</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">Freelance / Part time</a>
                            </li>
                            <li>
                                <a href="">Gold</a>
                            </li>
                            <li>
                                <a href="">Platinum</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fa fa-th-large material-icons"></i>
                            <span class="nav-label">บริการสำหรับบริษัท</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ url('manage/services') }}">ระบบ</a>
                            </li>
                            <li>
                                <a href="{{ url('manage/services-profile') }}">profile</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span class="nav-label">Helper Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span class="nav-label">Widgets</span>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-1.html">Infobox v1</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-2.html">Infobox v2</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-3.html">Infobox v3</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-4.html">Infobox v4</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-5.html">Infobox v5</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Panels</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="pages/widgets/panels/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/panels/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/panels/draggable.html">Draggable</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/panels/no-header.html">No Header</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/panels/panel-with-loading.html">Panel With Loading</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages/widgets/weather-station.html">Weather Station</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="{{ url('/manage/capacity') }}">
                            <i class="fa fa-puzzle-piece material-icons"></i>
                            <span class="nav-label">สมรรถนะ</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fa fa-building material-icons"></i>
                            <span class="nav-label">สำหรับบริษัท</span>
                        </a>
                        <ul>
                            <li>
                                <a href="">Upload Banner</a>
                            </li>
                            <li>
                                <a href="">โปร์ไฟล์ของบริษัท</a>
                            </li>
                            <li>
                                <a href="">ข้อมูลบริษัท</a>
                            </li>
                            <li>
                                <a href="">คำร้องรับสมัคร</a>
                            </li>
                            <li>
                                <a href="">คัดเลือกผู้สมัคร</a>
                            </li>
                            <li>
                                <a href="">ตารางนัดสัมภาษณ์</a>
                            </li>
                            <li>
                                <a href="">สถานะการคัดเลือก</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fa fa-newspaper-o material-icons"></i>
                            <span class="nav-label">ข่าวสารและกิจกรรม</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ url('manage/news') }}">ข่าวสาร</a>
                            </li>
                            <li>
                                <a href="{{ url('manage/activity') }}">กิจกรรม</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fa fa-group material-icons"></i>
                            <span class="nav-label">เกี่ยวกับเรา</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ url('manage/about') }}">เกี่ยวกับเรา</a>
                            </li>
                            <li>
                                <a href="{{ url('manage/mission') }}">Misson</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('manage/contact') }}">
                            <i class="fa fa-id-card-o material-icons"></i>
                            <span class="nav-label">ติดต่อเรา</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('manage/privacy')}}">
                            <i class="fa fa-list material-icons"></i>
                            <span class="nav-label">นโยบายความเป็นส่วนตัว</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('manage/companyinfomation') }}">
                            <i class="fa fa-rotate-right material-icons"></i>
                            <span class="nav-label">จัดการบริษัท</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('manage/services-package') }}">
                            <i class="fa fa-cubes material-icons"></i>
                            <span class="nav-label">Service Package</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/manage/requestquote') }}">
                            <i class="fa fa-envelope-open-o material-icons"></i>
                            <span class="nav-label">คำขอใบเสนอราคา</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span class="nav-label">นโยบายความเป็นส่วนตัว</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/ui/accordion.html">Accordion</a>
                            </li>
                            <li>
                                <a href="pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Badges</a>
                            </li>
                            <li>
                                <a href="pages/ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="pages/ui/colors.html">Colors</a>
                            </li> -->
                            <!-- <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Icons</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="pages/ui/icons/font-awesome.html">Font Awesome</a>
                                    </li>
                                    <li>
                                        <a href="pages/ui/icons/google-material-icons.html">Google Material Icons</a>
                                    </li>
                                    <li>
                                        <a href="pages/ui/icons/skycons.html">Skycons</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="pages/ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="pages/ui/pagination-pager.html">Pagination & Pager</a>
                            </li>
                            <li>
                                <a href="pages/ui/progress-bars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="pages/ui/video.html">Video</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span class="nav-label">Forms</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="pages/forms/editors.html">Editors</a>
                            </li>
                            <li>
                                <a href="pages/forms/autocomplete.html">Autocomplete</a>
                            </li>
                            <li>
                                <a href="pages/forms/markdown.html">Markdown</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Image Cropper</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="pages/forms/image-cropper/image-cropper-1.html">Image Cropper v1</a>
                                    </li>
                                    <li>
                                        <a href="pages/forms/image-cropper/image-cropper-2.html">Image Cropper v2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span class="nav-label">Tables</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatables.html">Jquery DataTables</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/footable.html">Footable</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span class="nav-label">Medias</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/medias/carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="pages/medias/content-slider.html">Content Slider</a>
                            </li>
                            <li>
                                <a href="pages/medias/grid-masonry.html">Grid Masonry</a>
                            </li>
                            <li>
                                <a href="pages/medias/image-comparison-slider.html">Image Comparison Slider</a>
                            </li>
                            <li>
                                <a href="pages/medias/lightbox-image-gallery.html">Lightbox Image Gallery</a>
                            </li>
                            <li>
                                <a href="pages/medias/owl-carousel.html">Owl Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span class="nav-label">Charts</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/peity.html">Peity</a>
                            </li>
                            <li>
                                <a href="pages/charts/rickshaw.html">Rickshaw</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                            <li>
                                <a href="pages/charts/c3.html">C3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span class="nav-label">Example Pages</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank-page.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="pages/examples/locked-screen.html">Locked Screen</a>
                            </li>
                            <li>
                                <a href="pages/examples/maintenance.html">Maintenance</a>
                            </li>
                            <li>
                                <a href="pages/examples/search-result.html">Search Result</a>
                            </li>
                            <li>
                                <a href="pages/examples/invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="pages/examples/timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="pages/examples/403.html">403 - Forbidden</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span class="nav-label">Maps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/maps/google-maps.html">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/yandex-maps.html">Yandex Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/vector-map.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">dvr</i>
                            <span class="nav-label">Miscellaneous</span>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Contacts</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="pages/miscellaneous/contacts/contact-detail.html">Contact Detail</a>
                                    </li>
                                    <li>
                                        <a href="pages/miscellaneous/contacts/contact-grid.html">Contact Grid</a>
                                    </li>
                                    <li>
                                        <a href="pages/miscellaneous/contacts/contact-list.html">Contact List</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/agile-board.html">Agile Board</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/bootstrap-tour.html">Bootstrap Tour</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/calendar.html">Calendar</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/chat-dashboard.html">Chat Dashboard</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/code-editor.html">Code Editor</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/favicon-bubble.html">Favicon Bubble</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/file-manager.html">File Manager</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/i18n.html">i18n Multi-language</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/idle-timer.html">Idle Timer</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/password-strength-meter.html">Password Strength Meter</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/text-diff.html">Text Diff</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/todo-list.html">ToDo List</a>
                            </li>
                            <li>
                                <a href="pages/miscellaneous/tree-view.html">Tree View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">rss_feed</i>
                            <span class="nav-label">Blog</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/blog/single-post.html">Single Post</a>
                            </li>
                            <li>
                                <a href="pages/blog/posts.html">Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">shopping_cart</i>
                            <span class="nav-label">E-Commerce</span>
                        </a>
                        <ul>
                            <li>
                                <a href="pages/ecommerce/cart.html">Cart</a>
                            </li>
                            <li>
                                <a href="pages/ecommerce/orders.html">Orders</a>
                            </li>
                            <li>
                                <a href="pages/ecommerce/payment.html">Payment</a>
                            </li>
                            <li>
                                <a href="pages/ecommerce/pricing-table.html">Pricing Table</a>
                            </li>
                            <li>
                                <a href="pages/ecommerce/product-detail.html">Product Detail</a>
                            </li>
                            <li>
                                <a href="pages/ecommerce/product-edit.html">Product Edit</a>
                            </li>
                            <li>
                                <a href="pages/ecommerce/product-grid.html">Product Grid</a>
                            </li>
                            <li>
                                <a href="pages/ecommerce/product-list.html">Product List</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span class="nav-label">Multi Level Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void(0);">Menu Item - 1</a></li>
                            <li><a href="javascript:void(0);">Menu Item - 2</a></li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul>
                                    <li><a href="javascript:void(0);">Menu Item - 1</a></li>
                                    <li><a href="javascript:void(0);">Menu Item - 2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);">Menu Item - 4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span class="nav-label">Changelogs</span>
                        </a>
                    </li>
                    <li>
                        <a href="documents/index.html">
                            <i class="material-icons">book</i>
                            <span class="nav-label">Documents</span>
                        </a>
                    </li>
                    <li class="title">
                        LABELS
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-danger">donut_large</i>
                            <span class="nav-label">Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-warning">donut_large</i>
                            <span class="nav-label">Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-info">donut_large</i>
                            <span class="nav-label">Information</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside> -->
        <!-- #END# Left Menu -->
        <!-- Right Sidebar -->
        <!-- <aside class="right-sidebar">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#tab_overview" data-toggle="tab">OVERVIEW</a></li>
                <li role="presentation"><a href="#tab_settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div class="right-sidebar-close">
                    <i class="fa fa-times"></i>
                </div>
                <div role="tabpanel" class="tab-pane fade in active" id="tab_overview">
                    <div class="tab-container">
                        <label>UPCOMING EVENTS</label>
                        <ul>
                            <li>
                                <b class="display-block">Business Meeting</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Dinner With John</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Deadline Project For E-Commerce</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Last Check For E-Comerce</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Ask For Vacation</b> Lorem ipsum dolor sit amet
                            </li>
                        </ul>

                        <label>TODO LIST</label>
                        <ul>
                            <li>
                                <b class="display-block">Get To Know More HTML5</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Get To Know More CSS3 - Transitions</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Learn AngularJS</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Learn AngularJS Routing</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Get To Know More jQuery v3</b> Lorem ipsum dolor sit amet
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_settings">
                    <div class="tab-container">
                        <label>GENERAL SETTINGS</label>
                        <ul>
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" />
                                </div>
                            </li>
                        </ul>

                        <label>SYSTEM SETTINGS</label>
                        <ul>
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                        </ul>

                        <label>ACCOUNT SETTINGS</label>
                        <ul>
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" />
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
        <section class="content dashboard">
           
        @yield('body') 
        </section>
        <!-- Footer -->
        <footer class="m-t-20">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-sm-6">
                        Copyright &copy; 2017, <b>AdminBSB - Sensitive</b>
                    </div>
                    <div class="col-sm-6 align-right">
                        Hand-crafted & Made with love :)
                    </div>
                </div>
            </div>
        </footer>
        <!-- #END# Footer -->
    </div>
    @yield('js_top')
    <!-- Jquery Core Js -->
    <script src="{{ asset('adminbsb/assets/plugins/jquery/dist/jquery.min.js') }}"></script>

    <!-- JQuery UI Js -->
    <script src="{{ asset('adminbsb/assets/plugins/jquery-ui/jquery-ui.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('adminbsb/assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Pace Loader Js -->
    <script src="{{ asset('adminbsb/assets/plugins/pace/pace.js') }}"></script>

    <!-- Screenfull Js -->
    <script src="{{ asset('adminbsb/assets/plugins/screenfull/src/screenfull.js') }}"></script>

    <!-- Metis Menu Js -->
    <script src="{{ asset('adminbsb/assets/plugins/metisMenu/dist/metisMenu.js') }}"></script>

    <!-- Jquery Slimscroll Js -->
    <script src="{{ asset('adminbsb/assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Switchery Js -->
    <script src="{{ asset('adminbsb/assets/plugins/switchery/dist/switchery.js') }}"></script>

    <!-- iCheck Js -->
    <script src="{{ asset('adminbsb/assets/plugins/iCheck/icheck.js') }}"></script>

    <!-- Jquery Sparkline Js -->
    <script src="{{ asset('adminbsb/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>

    <!-- Flot Chart Js -->
    <script src="{{ asset('adminbsb/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/flot-spline/js/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/flot/jquery.flot.time.js') }}"></script>

    <!-- JQuery Datatables Js -->
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/extensions/export/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/plugins/DataTables/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Peity Js -->
    <script src="{{ asset('adminbsb/assets/plugins/peity/jquery.peity.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('adminbsb/assets/js/admin.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/js/pages/dashboard/dashboard.js') }}"></script>

    <!-- Google Analytics Code -->
    <script src="{{ asset('adminbsb/assets/js/google-analytics.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Demo Purpose Only -->
    <script src="{{ asset('adminbsb/assets/js/demo.js') }}"></script>
    @yield('js_bottom') 
</body>

</html>