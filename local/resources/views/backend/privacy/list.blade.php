@extends('layouts.layout_admin')
@section('title')
HOME:ADMIN| Jobperfect
@endsection
@section('css_top')

@endsection

@section('body')
<div class="page-heading">
		<h1>นโยบายความเป็นส่วนตัว</h1>
		<ol class="breadcrumb">
            
			<li>Home</li>
			<li><a href="/manage/center">Backend</a></li>
			<li class="active">จัดการข้อมูล | นโยบายความเป็นส่วนตัว</li>
		</ol>
	</div>
	<div class="page-body">

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group m-b-0">
					<div style="float:right;">
                        <a href="/create/privacy">
                            <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-plus-circle"></i>&nbsp;เพิ่มข้อมูล</button>
                        </a>
                    </div>
                    <div class="col-xs-12" style="height: 10px;"></div>
                    <div>
                        <table id="footer-select" class="table table-striped table-bordered nowrap">
                            <thead class="thead-dark">
                                <tr>
                                <th class="text-center" style="width: 200px;">ลำดับ</th>
                                    <th class="text-center" >ชื่อเรื่อง</th>
                                    <th class="text-center" style="width: 200px;">วันที่อัพเดทข้อมูล</th>
                                    <th class="text-center" style="width: 200px;">#</th>
                                </tr>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection

@section('js_bottom')

<script>
    var oTable;
    $(document).ready(function() {
        var i = 0;
        oTable = $('#footer-select').DataTable({
            processing: true,
            serverSide: true,
            searching: true,
            lengthChange: true,
            ajax: {
                url: "{{url('privacy/datatables')}}",
            },
            columns: [ 
                   { data: 'id'}, 
                   { data: 'title_th'}, 
                   { data: 'updated_at'},
                   { data: 'updated_at'},
            ],
            "order": [[ 0, "ASC" ]],
            rowCallback: function (row, data, index) {
                    //  console.log(data);
                    i++;
                    var button =  '<center><a href="../view/privacy/'+data.id+'">'+
                                    '<button type="submit" class="btn btn-circle btn-default">'+
                                    '<i class="fa fa-edit"></i>'+
                                    '</button>'+
                                    '</a>'
                                    
                    button +=  '<a onclick="chk('+data.id+')">'+
                                    '<button type="submit" class="btn btn-circle btn-danger">'+
                                    '<i class="fa fa-trash"></i>'+
                                    '</button>'+
                                    '</a></center>';
                    $('td:eq(3)', row).html(button);
                    $('td:eq(0)', row).html(i);

            }

        });


    });
 
    function chkedit(id) {
        // alert(id)
        Swal.fire({
            title: 'แก้ไขข้อมูล ?',
            text: "คุณต้องการแก้ไขข้อมูลใช่หรือไม่ !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'แก้ไข !'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'get',
                    url: "{{ url('/update/privacy/')}}",
                    data: {
                        'id': id
                    },
                    success: function (data) {
                        if(data.chkedit == 2)
                        {
                        Swal.fire(
                            'Update!',
                            'success'
                        )
                        oTable.ajax.reload();
                        
                        }
                    }
                });

            }
        })
    }
    function chk(id) {
      //  alert(id)
        Swal.fire({
            title: 'ลบข้อมูล ?',
            text: "คุณต้องการลบข้อมูลใช่หรือไม่ !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'get',
                    url: "{{ url('/delete/privacy')}}",
                    data: {
                        'id': id
                    },
                    success: function (data) {
                        if(data.chk == 1)
                        {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'

                        )
                        oTable.ajax.reload();
                        
                        }
                    }
                });

            }
        })
    }
</script>

@endsection