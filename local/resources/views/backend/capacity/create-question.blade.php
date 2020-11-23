@extends('layouts.layout_admin')
@section('title')
HOME:ADMIN| Jobperfect
@endsection
@section('css_top')

@endsection

@section('body')
<!-- <section class="content"> -->
<form action="{{ (empty($corporate_jobdescription) ? url('managejob/companyinfomation') : url('updatejob/companyinfomation/{idCompany}').'/'.$corporate_jobdescription->idJob) }}" method="POST" enctype="multipart/form-data" >
<!-- Alignments -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel-body">
		<ol class="breadcrumb breadcrumb-bg-warning align-right" style="padding: 16px 15px; border-radius: 1px;">
		<li><a href="/manage/center"><i class="fa fa-home"></i> Home</a></li>
		<!-- <li><a href="/manage/contact-us"><i class="fa fa-file-text-o"></i> Backend</a></li> -->
		<li class="active"><i class="fa fa-download"></i> จัดการข้อมูล | ข้อมูลตำแหน่งงานในบริษัท</li>
		</ol>
	</div>
</div>
<!-- #END# Alignments -->

<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">รับสมัครตำแหน่งงาน</div>
			<div class="panel-body">
			{{ csrf_field() }}

				<div class="form-group">
					<label>เงินเดือน:</label>
					<input type="text" name="salary" class="form-control" value="{{ isset($corporate_jobdescription)?$corporate_jobdescription->salary:'' }}">
				</div>

				<div class="form-group">
					<label>อัตรา  :</label>
					<input type="text" name="rate" class="form-control" value="{{ isset($corporate_jobdescription)?$corporate_jobdescription->rate:'' }}">
				</div> 

				<div class="form-group">
					<label>ภาษาญี่ปุ่น  :</label>
					<input type="text" name="Japanese" class="form-control" value="{{ isset($corporate_jobdescription)?$corporate_jobdescription->Japanese:'' }}">
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
					<label>ตำแหน่งงาน :</label>
					<input type="text" name="position_th" class="form-control" value="{{ isset($corporate_jobdescription)?$corporate_jobdescription->position_th:'' }}">
				</div>

				<div class="form-group">
					<label>รายละเอียดงาน  :</label>
					<textarea class="form-control summernote" name="detail_th">{{ isset($corporate_jobdescription)?$corporate_jobdescription->detail_th:'' }}</textarea>
				</div> 

				<div class="form-group">
					<label>คุณสมบัติ  :</label>
					<textarea class="form-control summernote" name="property_th">{{ isset($corporate_jobdescription)?$corporate_jobdescription->property_th:'' }}</textarea>
				</div> 

				<div class="form-group">
					<label>สวัสดิการ  :</label>
					<textarea class="form-control summernote" name="welfare_th">{{ isset($corporate_jobdescription)?$corporate_jobdescription->welfare_th:'' }}</textarea>
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
				<label>ตำแหน่งงาน :</label>
				<input type="text" name="position_en" class="form-control" value="{{ isset($corporate_jobdescription)?$corporate_jobdescription->position_en:'' }}">
			</div>

			<div class="form-group">
				<label>รายละเอียดงาน  :</label>
				<textarea class="form-control summernote" name="detail_en">{{ isset($corporate_jobdescription)?$corporate_jobdescription->detail_en:'' }}</textarea>
			</div> 

			<div class="form-group">
				<label>คุณสมบัติ  :</label>
				<textarea class="form-control summernote" name="property_en">{{ isset($corporate_jobdescription)?$corporate_jobdescription->property_en:'' }}</textarea>
			</div> 

			<div class="form-group">
				<label>สวัสดิการ  :</label>
				<textarea class="form-control summernote" name="welfare_en">{{ isset($corporate_jobdescription)?$corporate_jobdescription->welfare_en:'' }}</textarea>
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
