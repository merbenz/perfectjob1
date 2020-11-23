@extends('layouts.layout_admin')
@section('title')
HOME:ADMIN| Jobperfect
@endsection
@section('css_top')

@endsection

@section('body')
<!-- <section class="content"> -->
<!-- Alignments -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel-body">
		<ol class="breadcrumb breadcrumb-bg-warning align-right" style="padding: 16px 15px; border-radius: 1px;">
		<li><a href="/manage/center"><i class="fa fa-home"></i> Home</a></li>
		<!-- <li><a href="/manage/contact-us"><i class="fa fa-file-text-o"></i> Backend</a></li> -->
		<li class="active"><i class="fa fa-download"></i> แสดงข้อมูล | คำขอใบเสนอราคา</li>
		</ol>
	</div>
</div>
<!-- #END# Alignments -->
@php

	function DateThai($strDate)
		{                    
			$strYear = date("Y",strtotime($strDate))+543;
			$strMonth= date("n",strtotime($strDate));
			$strDay = date("j",strtotime($strDate));
			$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
			$strMonthThai=$strMonthCut[$strMonth];
			$datethai = $strDay.' '
						.$strMonthThai.' '
						.$strYear;
			return $datethai;
		}
	@endphp


<div class="page-body">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group">
					<label>ชื่อบริษัท : {{$services_requestquote->namecompany}}</label>
				</div>
				<div class="form-group">
					<label>ชื่อผู้ติดต่อ : {{$services_requestquote->namecontact}}</label>
				</div>
				<div class="form-group">
					<label>ชื่อผู้ติดต่อ : {{$services_requestquote->extphone}}</label>
				</div>
				<div class="form-group">
					<label>โทรศัพท์ Ext. : {{$services_requestquote->mobilephone}}</label>
				</div>
				<div class="form-group">
					<label>มือถือ : {{$services_requestquote->email}}</label>
				</div>
				<div class="form-group">
					<label>อีเมล : {{$services_requestquote->message}}</label>
				</div>
				<div class="form-group">
					<label>ข้อความ : {{DateThai($services_requestquote->updated_at)}}</label>
				</div>
			</div>
		</div>
	</div>
</div>
        
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
