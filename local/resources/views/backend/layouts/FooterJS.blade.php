	@if (session('alert'))
	<div id="toastr-alert" style="display:none;" rel="{{ strtolower(session('alert.status')) }}">{!! session('alert.msg') !!}</div>
	@endif
			
    <!-- Jquery Core Js -->
    
    <script src="{{ assets('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ assets('assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	
    <!-- JQuery Datatables Js -->
    <script src="{{ assets('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/media/js/dataTables.bootstrap.js') }}"></script>

    <!-- Pace Loader Js -->
    <script src="{{ assets('assets/plugins/pace/pace.js') }}"></script>

    <!-- Screenfull Js -->
    <script src="{{ assets('assets/plugins/screenfull/src/screenfull.js') }}"></script>

    <!-- Metis Menu Js -->
    <script src="{{ assets('assets/plugins/metisMenu/dist/metisMenu.js') }}"></script>

    <!-- Jquery Slimscroll Js -->
    <script src="{{ assets('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Switchery Js -->
    <script src="{{ assets('assets/plugins/switchery/dist/switchery.js') }}"></script>

	<!-- Masked Input Js -->
    <script src="{{ assets('assets/plugins/jquery.inputmask/dist/jquery.inputmask.bundle.js') }}"></script>

    <!-- Toastr Js -->
    <script src="{{ assets('assets/plugins/toastr/toastr.js') }}"></script>

    <!-- waitMe Js -->
    <script src="{{ assets('assets/plugins/wait-me/src/waitMe.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ assets('assets/js/script.js') }}"></script>

<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="{{asset('assets/vendors/sweetalert/css/sweetalert2.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">

            <!-- JQuery Datatables Js -->
    <script src="{{ assets('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/extensions/export/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ assets('assets/plugins/DataTables/extensions/export/buttons.print.min.js') }}"></script>
   
     <script type="text/javascript">

    $(document).ready(function() {
        $('#footer-select').DataTable();
} );
</script>
    <style>
body{
    font-family: 'Prompt', sans-serif;
}
</style>