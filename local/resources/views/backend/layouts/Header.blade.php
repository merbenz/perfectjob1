
	<title>Vibhavadi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<base href="{{ asset('') }}">
	
    <!-- Favicon -->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/plugins/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-ui/themes/base/jquery-ui.min.css') }}" rel="stylesheet" />

    <!-- DataTables Css -->
    <link href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
	
    <!-- Animate.css Css -->
    <link href="{{ asset('assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Font Awesome Css -->
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- iCheck Css -->
    <link href="{{ asset('assets/plugins/iCheck/skins/flat/_all.css') }}" rel="stylesheet" />

    <!-- Switchery Css -->
    <link href="{{ asset('assets/plugins/switchery/dist/switchery.css') }}" rel="stylesheet" />

    <!-- Toastr Css -->
    <link href="{{ asset('assets/plugins/toastr/toastr.css') }}" rel="stylesheet" />

    <!-- WaitMe Css -->
    <link href="{{ asset('assets/plugins/wait-me/src/waitMe.css') }}" rel="stylesheet" />

    <!-- Metis Menu Css -->
    <link href="{{ asset('assets/plugins/metisMenu/dist/metisMenu.css') }}" rel="stylesheet" />

    <!-- Pace Loader Css -->
    <link href="{{ asset('assets/plugins/pace/themes/white/pace-theme-flash.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('assets/css/themes/allthemes.css') }}" rel="stylesheet" />

    <!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="themes/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="themes/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="themes/favicon/favicon-16x16.png">
	<!--<link rel="manifest" href="themes/favicon/site.webmanifest">-->
	<link rel="mask-icon" href="themes/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="themes/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#009688">
	<meta name="msapplication-config" content="themes/favicon/browserconfig.xml">
	<meta name="theme-color" content="#009688">
		
@stack('css')