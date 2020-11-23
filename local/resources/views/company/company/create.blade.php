@extends('layouts.layout_company')
@section('title')
HOME:ADMIN| Jobperfect
@endsection
@section('css_top')

@endsection

@section('body')
<!-- <section class="content"> -->
<form action="{{ (empty($company_info) ? url('manage/companyprofile') : url('update/companyprofile').'/'.$company_info->id ) }}" method="POST" enctype="multipart/form-data" >
<!-- Alignments -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel-body">
		<ol class="breadcrumb breadcrumb-bg-warning align-right" style="padding: 16px 15px; border-radius: 1px;">
		<li><a href="/manage/center"><i class="fa fa-home"></i> Home</a></li>
		<!-- <li><a href="/manage/contact-us"><i class="fa fa-file-text-o"></i> Backend</a></li> -->
		<li class="active"><i class="fa fa-download"></i> จัดการข้อมูล | ข้อมูลบริษัท</li>
		</ol>
	</div>
</div>
<!-- #END# Alignments -->
{{-- <div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Icon</div>
			<div class="panel-body">
			{{ csrf_field() }}
				<div class="form-group">
					<label>รูปภาพไอคอน : </label>
					<input type="file" name="icon" class="form-control" value="{{ isset($company_info)?$company_info->icon:'' }}"><br>
					@if(!empty($company_info->icon))
						<div class="breadcrumb breadcrumb-bg-success" style="text-align: center;">
							<img src="{{ asset('images/companyprofile/').'/'.$company_info->icon }}" style="height:100px;"/>
						</div> 	 
					@endif
				</div>
			</div>
		</div>
	</div>
</div> --}}
<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">Thai Language</div>
			<div class="panel-body">
			{{ csrf_field() }}
				<div class="form-group">
					<label>ชื่อบริษัท :</label>
					<input type="text" name="name_th" class="form-control" value="{{ isset($company_info)?$company_info->name_th:'' }}">
				</div>

				<div class="form-group">
					<label>ประเภทงาน :</label>
					<input type="text" name="business_th" class="form-control" value="{{ isset($company_info)?$company_info->business_th:'' }}">
				</div>

				<div class="form-group">
                    <label>รายละเอียดบริษัท:</label>
                    <textarea class="form-control summernote" name="description_th">{{ isset($company_info)?$company_info->description_th:'' }}</textarea>
				</div>

				<div class="form-group">
					<label>ที่อยู่  :</label>
					<input type="text" name="address_th" class="form-control" value="{{ isset($company_info)?$company_info->address_th:'' }}">
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
				<label>ชื่อบริษัท :</label>
				<input type="text" name="name_en" class="form-control" value="{{ isset($company_info)?$company_info->name_en:'' }}">
			</div>
			<div class="form-group">
				<label>ประเภทงาน :</label>
				<input type="text" name="business_en" class="form-control" value="{{ isset($company_info)?$company_info->business_en:'' }}">
			</div>

			<div class="form-group">
				<label>รายละเอียดบริษัท:</label>
				<textarea class="form-control summernote" name="description_en">{{ isset($company_info)?$company_info->description_en:'' }}</textarea>
			</div>
		
			<div class="form-group">
				<label>ที่อยู่  :</label>
				<input type="text" name="address_en" class="form-control" value="{{ isset($company_info)?$company_info->address_en:'' }}">
			</div>
		</div>
	</div>		
</div>

<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
			<div class="form-group">
				<label>เว็บไซต์  :</label>
				<input type="text" name="nameweb" class="form-control" value="{{ isset($company_info)?$company_info->nameweb:'' }}">
			</div>
			</div>
		</div>
	</div>
</div>


<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">แผนที่</div>
			<div class="panel-body">
			{{ csrf_field() }}
				<div class="form-group">
					<label>รูปภาพแผนที่: </label>
					<input type="file" name="map" class="form-control" value="{{ isset($company_info)?$company_info->map:'' }}"><br>
					@if(!empty($company_info->map))
						<div class="breadcrumb breadcrumb-bg-success" style="text-align: center;">
							<img src="{{ asset('images/company/').'/'.$company_info->map }}" style="height:100px;"/>
						</div> 	 
					@endif
				</div>
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
