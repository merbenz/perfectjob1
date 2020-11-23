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
        <li><a href="/manage/career"><i class="fa fa-file-text-o"></i> ร่วมงานกับเรา</a></li>
        <li class="active"><i class="fa fa-download"></i> จัดการข้อมูล | แบนเนอร์ </li>
    </ol>
</div>
<div class="page-body">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group m-b-0">
                <div style="float:right;">
                    <!-- <a href="/create/career-banner">
                        <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-plus-circle"></i>&nbsp;เพิ่มข้อมูล</button>
                    </a> -->
                </div>
                <div class="col-xs-12" style="height: 10px;"></div>
                <div>
                    <table id="footer-select" class="table table-striped table-bordered nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center" ><h5><p class=" font-bold col-success">ภาพแบนเนอร์<p><h5></th>
                                <th class="text-center" style="width: 200px;"><h5><p class=" font-bold col-success">วันที่อัพเดท<p><h5></th>
                                <th class="text-center" style="width: 200px;"><h5><p class=" font-bold col-success">#<p><h5></th>
                            </tr>
                        </thead>
                        <tbody class="tbody-light">
                            <?php 
                                $banner = DB::table('tb_career_img')->orderBy('id','ASC')->get();
                                if(!empty($banner)){
                                    foreach ($banner as $key => $banner_list) {
                                        echo '
                                        <tr>
                                            <td class="text-center"><img src="'.asset('images/career').'/'.$banner_list->image.'" style="width:500px;" /></p></h5></td>
                                            <td class="text-center"><h5><p class="font-italic">'.(!empty($banner_list->updated_at) ? date('d/m/Y' , strtotime($banner_list->updated_at)) : '').'</p></h5></td>
                                            <td class="text-center">
                                                <a href="'.url('/view/career-banner').'/'.$banner_list->id.'">
                                                <button type="button" class="btn btn-circle btn-default">
                                                    <i class="fa fa-edit"></i>
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
@endsection
