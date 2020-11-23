<!DOCTYPE html>
<html lang="en">
<head>
@include('backend.layouts.Header')
@include('backend.layouts.Notifications')

</head>
<body class="">
    <div class="all-content-wrapper">
        <!-- Top Bar -->
		@include('backend.TopBar')
        <!-- #END# Top Bar -->
		
        <!-- Left Menu -->
		@include('backend.Sidebar')
        <!-- #END# Left Menu -->
       
        <!-- Section Content -->
		@yield('content')
        <!-- #END# Section Content -->
    </div>
	@include('backend.layouts.FooterJS')
	@stack('scripts')
    <footer style="position: fixed; bottom: 0;; width: 100%">
            <div class="container-fluid" >
                <div class="row clearfix">
                    <div class="col-sm-6">
                        Copyright &copy; 2020, <b>Vibhavadi Hospital </b>
                    </div>
                    <div class="col-sm-6 align-right">
                       
                    </div>
                </div>
            </div>
        </footer>
@yield('js_top')
</body>
</html>
