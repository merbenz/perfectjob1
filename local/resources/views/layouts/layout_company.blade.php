<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @yield('css_top')
    <!-- Favicon -->
    <link type="ico" rel="shortcut icon" href="favicon.ico">

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
                   
                    <li>
                        <a href="{{ url('manage/companyprofile') }}">
                            <i class="fa fa-info-circle material-icons"></i>
                            <span class="nav-label">ข้อมูลบริษัท</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('jobdescription') }}">
                            <i class="fa fa-users material-icons"></i>
                            <span class="nav-label">คำร้องรับสมัคร</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('jobdescription') }}">
                            <i class="fa fa-user-plus material-icons"></i>
                            <span class="nav-label">คัดเลือกผู้สมัคร</span>
                        </a>
                    </li>
                    
                  
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fa fa-building material-icons"></i>
                            <span class="nav-label">สำหรับบริษัท</span>
                        </a>
                        <ul>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Peity Js -->
    <script src="{{ asset('adminbsb/assets/plugins/peity/jquery.peity.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('adminbsb/assets/js/admin.js') }}"></script>
    <script src="{{ asset('adminbsb/assets/js/pages/dashboard/dashboard.js') }}"></script>

    <!-- Google Analytics Code -->
    <script src="{{ asset('adminbsb/assets/js/google-analytics.js') }}"></script>

    <!-- Demo Purpose Only -->
    <script src="{{ asset('adminbsb/assets/js/demo.js') }}"></script>
    @yield('js_bottom') 
</body>

</html>