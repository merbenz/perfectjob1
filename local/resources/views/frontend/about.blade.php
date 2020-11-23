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
                    <h2>เกี่ยวกับเรา</h2>
                </div>
                <img src="images/banner/img_about.png" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="container">
            <div class="col-12 nopad_mobile">
                    
                <div class="row pad_mission wow fadeInDown">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="pad_history">
                            <div class="text_history"><h3>{{$about->title_th}}</h3></div>
                            <p>{!!($about->detail_th)!!}</p>
                            {{-- <h6>Create Best Recruitment Solution</h6> --}}
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class=""><img src="images/about/{{$about->img}}" class="img-fluid" style="width: 100%;"></div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="row bg_about wow fadeInDown">
            <div class="container">
             <div class="col-12">
                <div class="text_bg_about">
                    <h3>Mission</h3>
                    
                   
                <div class="row">
                    @foreach ($mission as $i)
                    <div class="col-12 col-md-2">
                        <div class="img_mission">
                        <img src="images/mission/{{$i->icon}}" class="img-fluid">
                        </div>
                    </div>
        
                    <div class="col-12 col-md-10">
                        <div class="text_mission">
                            <h4>{{$i->title_th}}</h4>
                            <h5>{!!$i->detail_th!!}</h5>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
             </div> 
            </div>
         </div>
     </div>
</div>
    @include('frontend.inc_footer')
</body>

</html>