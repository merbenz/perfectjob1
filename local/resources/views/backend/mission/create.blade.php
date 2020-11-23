@extends('layouts.layout_admin')
@section('title')
HOME:ADMIN| Jobperfect
@endsection
@section('css_top')

@endsection

@section('body')
<!-- <section class="content"> -->
<form action="{{ (empty($about_mission) ? url('manage/mission') : url('update/mission').'/'.$about_mission->id ) }}" method="POST" enctype="multipart/form-data" >
<!-- Alignments -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel-body">
		<ol class="breadcrumb breadcrumb-bg-warning align-right" style="padding: 16px 15px; border-radius: 1px;">
		<li><a href="/manage/center"><i class="fa fa-home"></i> Home</a></li>
		<!-- <li><a href="/manage/contact-us"><i class="fa fa-file-text-o"></i> Backend</a></li> -->
		<li class="active"><i class="fa fa-download"></i> จัดการข้อมูล | เกี่ยวกับเรา-Mission</li>
		</ol>
	</div>
</div>
<!-- #END# Alignments -->
<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Icon</div>
			<div class="panel-body">
			{{ csrf_field() }}
				<div class="form-group">
					<label>รูปภาพไอคอน : </label>
					<input type="file" name="icon" class="form-control" value="{{ isset($about_mission)?$about_mission->icon:'' }}"><br>
					@if(!empty($about_mission->icon))
						<div class="breadcrumb breadcrumb-bg-success" style="text-align: center;">
							<img src="{{ asset('images/mission/').'/'.$about_mission->icon }}" style="height:100px;"/>
						</div> 	 
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">Thai Language</div>
			<div class="panel-body">
			{{ csrf_field() }}
				<div class="form-group">
					<label>ชื่อหัวข้อ :</label>
					<input type="text" name="title_th" class="form-control" value="{{ isset($about_mission)?$about_mission->title_th:'' }}">
				</div>
				<div class="form-group">
                    <label>รายละเอียดเนื้อหา:</label>
                    <textarea class="form-control summernote" name="detail_th">{{ isset($about_mission)?$about_mission->detail_th:'' }}</textarea>
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
					<label>ชื่อหัวข้อ :</label>
					<input type="text" name="title_en" class="form-control" value="{{ isset($about_mission)?$about_mission->title_en:'' }}">
				</div>
				<div class="form-group">
                    <label>รายละเอียดเนื้อหา:</label>
                    <textarea class="form-control summernote" name="detail_en">{{ isset($about_mission)?$about_mission->detail_en:'' }}</textarea>
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
