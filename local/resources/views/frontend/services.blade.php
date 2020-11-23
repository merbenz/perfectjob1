<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    .table-responsive>.table>thead>tr>th,
    .table-responsive>.table>tbody>tr>th,
    .table-responsive>.table>tfoot>tr>th,
    .table-responsive>.table>thead>tr>td,
    .table-responsive>.table>tbody>tr>td,
    .table-responsive>.table>tfoot>tr>td {
        white-space: nowrap;
        border: none;
    }

    .table thead th.description {
        padding: 0;
    }

    .table-responsive {
        position: relative;
        padding: 30px 20px 0 20px !important;
    }
    
</style>

<body>
@include('frontend.inc_menu')
    <div class="container-fluid">
        <div class="row pad-banner">
            <div class="col-12 nopad banner wow fadeInDown">
                <div class="text_banner">
                    <h2>บริการ</h2>
                </div>
                <img src="images/banner/img_services.png" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="container nopad_mobile">
            <div class="col-12 wow fadeInDown">
                <div class="platform"><h3>ทุกเรื่องบริหารจัดการได้ใน <span>Platform </span>เดียว	</h3></div>
                    
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/{{$services1->icon}}" class="img-fluid"></div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>{{$services1->title_th}}</h4>
                            <p>{!!$services1->detail_th!!}</p>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>{{$services2->title_th}}</h4>
                            <p>{!!$services2->detail_th!!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/{{$services2->icon}}" class="img-fluid"></div>
                    </div>
                    
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/{{$services3->icon}}" class="img-fluid"></div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>{{$services3->title_th}}</h4>
                            <p>{!!$services3->detail_th!!}</p>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>{{$services4->title_th}}</h4>
                            <p>{!!$services4->detail_th!!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/{{$services4->icon}}" class="img-fluid"></div>
                    </div>
                </div>
                 
                <div class="platform"><h3>{{$serviceprofile1->title_th}}</h3></div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services-profile/{{$serviceprofile1->icon}}" class="img-fluid"></div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>{!!$serviceprofile1->detail_th!!}</h4>
                        </div>
                    </div>
                    
                </div>
                
                <div class="platform"><h3>{{$serviceprofile2->title_th}}</h3></div>
                <div class="row">
                    
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>{!!$serviceprofile2->detail_th!!}</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services-profile/{{$serviceprofile2->icon}}" class="img-fluid"></div>
                    </div>
                </div>
                
                <div class="platform"><h3>{{$serviceprofile3->title_th}}</h3></div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services-profile/{{$serviceprofile3->icon}}" class="img-fluid"></div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>{!!$serviceprofile3->detail_th!!}</h4>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="cl-12 wow fadeInDown">
                <div id="getaquote">
                @include('frontend.inc_services')
                </div>
            </div>
        </div>

    </div>
      
    <script>
                        $('a').click(function () {
                            $('html, body').animate({
                                scrollTop: $($(this).attr('href')).offset().top - 140
                            }, 500);
                            return false;
                        });
                    </script>
     @include('frontend.inc_footer')
</body>

</html>