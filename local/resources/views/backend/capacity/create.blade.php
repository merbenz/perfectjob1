@extends('layouts.layout_admin')
@section('title')
HOME:ADMIN| Jobperfect
@endsection
@section('css_top')

@endsection

@section('body')
<!-- <section class="content"> -->
<form action="{{ (empty($capacity) ? url('manage/capacity') : url('update/capacity').'/'.$capacity->idCapacity ) }}" method="POST" enctype="multipart/form-data" >
<!-- Alignments -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel-body">
		<ol class="breadcrumb breadcrumb-bg-warning align-right" style="padding: 16px 15px; border-radius: 1px;">
		<li><a href="/manage/center"><i class="fa fa-home"></i> Home</a></li>
		<!-- <li><a href="/manage/contact-us"><i class="fa fa-file-text-o"></i> Backend</a></li> -->
		<li class="active"><i class="fa fa-download"></i> จัดการข้อมูล | สมรรถนะ</li>
		</ol>
	</div>
</div>
<!-- #END# Alignments -->

<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">Thai Language</div>
			<div class="panel-body">
			{{ csrf_field() }}
				<div class="form-group">
					<label>สมรรถนะ :</label>
					<input type="text" name="name_th" class="form-control" value="{{ isset($capacity)?$capacity->name_th:'' }}">
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">English Language</div>
			<div class="panel-body">
			{{ csrf_field() }}
            <div class="form-group">
				<label>สมรรถนะ :</label>
				<input type="text" name="name_en" class="form-control" value="{{ isset($capacity)?$capacity->name_en:'' }}">
			</div>
		</div>
	</div>		
</div>

</div>
<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel-default align-right">
			<button type="submit" class="btn btn-success "style="padding: 6px 105px;">บันทึก</button>
			<div class="panel-body"></div>
		</div><br><br>
	</div>
</div>
</form>

@endsection

@section('js_bottom')
<link href="{{ asset('assets/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">
<script src="{{ asset('assets/plugins/summernote/dist/summernote.js') }}"></script>
<script>

$(function() {
    $(document).ready(function() {
		$('.summernote').summernote({
			height: 300,
		});
   });
});
</script>
@endsection
