@extends('backend.layouts')

@section('styles_link')
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
<section class="content">
<div class="panel-body ">
    <ol class="breadcrumb breadcrumb-col-warning" style="background-color: white; text-align: end; padding: 16px 15px; border-radius: 1px;">
        <li><a href="/manage/center"><i class="fa fa-home breadcrumb-col-warning"></i> Home</a></li>
        <li class="active"><i class="fa fa-download"></i> จัดการข้อมูล | ร่วมงานกับเรา</li>
    </ol>
</div>
<div class="page-body">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group m-b-0">
                <div style="float:right;">
                    <a href="/manage/career-banner">
                        <button type="button" class="m-w-150 btn btn-raised btn-default">จัดการรูปภาพส่วนปก</button>
                    </a>
                    <a href="/create/career">
                        <button type="button" class="m-w-150 btn btn-raised btn-warning">เพิ่มร่วมงานกับเรา</button>
                    </a>
                </div>
                <div class="col-xs-12" style="height: 10px;"></div>
                <div>
                    <table id="footer-select" class="table table-striped table-bordered nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center" ><h5><p class=" font-bold col-success">ชื่อตำแหน่ง<p><h5></th>
                                <th class="text-center" style="width: 350px;"><h5><p class=" font-bold col-success">วันที่ลงประกาศ<p><h5></th>
                                <th class="text-center" style="width: 200px;"><h5><p class=" font-bold col-success">#<p><h5></th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody class="tbody-light">
                            <?php 
                                $career = DB::table('tb_career')->orderBy('career_id','ASC')->get();
                                if(!empty($career)){
                                    foreach ($career as $key => $career_list) {
                                        echo '
                                        <tr>
                                            <td class="text-center"><h5><p class="font-italic">'.$career_list->career_title_th.'</p></h5></td>
                                            <td class="text-center"><h5><p class="font-italic">'.(!empty($career_list->career_created_at) ? date('d/m/Y' , strtotime($career_list->career_created_at)) : '').'</p></h5></td>
                                            <td class="text-center">
                                                <a href="'.url('/view/career').'/'.$career_list->career_id.'">
                                                    <button type="button" class="btn btn-circle btn-default">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a onclick="return confirm(\'คุณต้องการลบข้อมูลนี้หรือไม่ ?\')" href="'.url('/delete/career').'/'.$career_list->career_id.'">
                                                    <button type="button" class="btn btn-circle btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        ';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
