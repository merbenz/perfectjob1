@extends('backend.layouts')

@section('content')
<section class="content">
<form action="{{ (empty($tb_career_img) ? url('/new/career-banner') : url('/update/career-banner').'/'.$tb_career_img->id ) }}" method="POST" enctype="multipart/form-data" >
<!-- Alignments -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel-body">
		<ol class="breadcrumb breadcrumb-bg-warning align-right" style="padding: 16px 15px; border-radius: 1px;">
		<li><a href="/manage/center"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="/manage/vision-mission"><i class="fa fa-file-text-o"></i> Backend</a></li>
		<li><a href="/manage/vision-mission"><i class="fa fa-file-text-o"></i> ร่วมงานกับเรา</a></li>
		<li class="active"><i class="fa fa-download"></i> จัดการข้อมูล |  แบนเนอร์</li>
		</ol>
	</div>
</div>
<!-- #END# Alignments -->
<div class="page-body">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Banner</div>
			<div class="panel-body">
				{{ csrf_field() }}
				<div class="form-group">
					<label>รูปภาพปก : <font color="red">*อัพรูปภาพหน้าปกขนาด 1554px x 871px</font></label>
					<input type="file" name="image" class="form-control" value="{{ isset($tb_career_img)?$tb_career_img->image:'' }}"><br>
					@if(!empty($tb_career_img->image))
						<div style="text-align: center;">
							<img src="{{ asset('images/career/').'/'.$tb_career_img->image }}" style="height:500px;" />
						</div> 	 
					@endif
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
</section>
@endsection