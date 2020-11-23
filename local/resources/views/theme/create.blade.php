@extends('backend.layouts')

@section('content')
<section class="content">
<form action="{{ (empty($tb_career) ? url('new/career') : url('update/career').'/'.$tb_career->career_id ) }}" method="POST" enctype="multipart/form-data" >
<!-- Alignments -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel-body">
		<ol class="breadcrumb breadcrumb-bg-warning align-right" style="padding: 16px 15px; border-radius: 1px;">
		<li><a href="/manage/center"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="/manage/career"><i class="fa fa-file-text-o"></i> Backend</a></li>
		<li class="active"><i class="fa fa-download"></i> จัดการข้อมูล |  ร่วมงานกับเรา</li>
		</ol>
	</div>
</div>
<!-- #END# Alignments -->
	<div class="page-body">
		<div class="row clearfix">
		
			<div class="col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">จัดการบทความหน้า : </div>
					<div class="panel-body">
						{{ csrf_field() }}
						<div class="col-xs-6"> 
                            <div class="form-group"><label>ข้อมูลฝั่งภาษาไทย</label></div><div class="form-group"><label></label></div>
							
							<div class="form-group">
								<label>ชื่อตำแหน่ง :</label>
								<input type="text" name="career_title_th" class="form-control" value="{{ isset($tb_career)?$tb_career->career_title_th:'' }}">
							</div>

							<div class="form-group">
								<label>รายละเอียด :</label>
								<textarea class="form-control summernote" name="career_detail_th">{{ isset($tb_career)?$tb_career->career_detail_th:'' }}</textarea>
							</div>
						</div>

						<div class="col-xs-6"> 
                            <div class="form-group"><label>ข้อมูลฝั่งภาษาอังกฤษ</label></div><div class="form-group"><label></label></div>
							
							<div class="form-group">
								<label>หัวข้อ :</label>
								<input type="text" name="career_title_en" class="form-control" value="{{ isset($tb_career)?$tb_career->career_title_en:'' }}">
							</div>

							<div class="form-group">
								<label>รายละเอียด :</label>
								<textarea class="form-control summernote" name="career_detail_en">{{ isset($tb_career)?$tb_career->career_detail_en:'' }}</textarea>
							</div>
						</div>

						<div class="col-xs-12" >
							<div class="form-group">
									<button type="submit" class="btn btn-success">บันทึก</button>
							</div>
						</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


@push('scripts')
<link href="assets/plugins/summernote/dist/summernote.css" rel="stylesheet">
<script src="assets/plugins/summernote/dist/summernote.js"></script>
<script>
	 $(document).ready(function() {
		$('#target').click(function(){
			// alert('1');
			var id = $(this).attr('ref');
			// $.get('{{ url("/delete_img/center") }}/'+id, function(data, status){
			// 	alert("Data: " + data + "\nStatus: " + status);
			// });
			// alert(id);
			var _token = $('input[name="_token"]').val();
			// alert(_token);
			$.ajax({
			url:'/delete_img/center/',
			data:{id:id,_token:_token},
			method:"get",
			success:function(data){
				
				// alert(data);
				location.reload();
			}
		});
	});

		$('.summernote').summernote({
			height: 300,
		});
   	});
</script>
@endpush