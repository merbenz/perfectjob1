@extends('backend.layouts')

@section('content')
<section class="content">
	<div class="page-heading">
		<h1>Dashboard</h1>
		<ol class="breadcrumb hidden-xs hidden-sm">
			<li><a href="admin">Home</a></li>
			<li><a href="javascript:void(0);">Dashboard</a></li>
		</ol>
	</div>
	<div class="page-body">
		
		
		
		
		
	</div>
	<div style="display: none;"><button class="add-button">Add to home screen</button></div>

</section>
@endsection


@push('css')
	<link rel="manifest" href="themes/favicon/site.webmanifest">
@endpush
@push('scripts')
<script src="themes/favicon/a2hs.js" defer></script>
@endpush
