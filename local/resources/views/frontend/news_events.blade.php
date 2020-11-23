<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    
</style>
<body>
@include('frontend.inc_menu')

    <div class="container-fluid">
        <div class="row pad-banner">
            <div class="col-12 nopad banner wow fadeInDown">
                <div class="text_banner">
                    <h2>ข่าวสารและกิจกรรม</h2>
                </div>             
                <img src="../images/banner/1600161260.png" class="img-fluid" style="width: 100%;">
            </div>

        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                                <div class="taxt_new">
                                    <h1>ข่าวสาร</h1>
                                  
                                    <div class="img_taxt_new">
                                        <div class="hovereffect">
                                        <a href="../readmorenews/news/{{$img->id}}"><img src="../images/news/{{$img->img}}" class="img-fluid"></a>
                                        </div>
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

                                        <div class="date_1">
                                            {{-- <h5>20<br><span>April ,2020</span></h5> --}}
                                            <h5>{{DateThai($news[0]->updated_at)}}</span></h5>
                                        </div>
                                    </div>
                                    <h3>{{$news[0]->title_th}}</h3>
                                    <p>{!!strip_tags($news[0]->detail_th)!!}</p>
                                    <div class="button_new"><a href="../readmorenews/news/{{$img->id}}">อ่านต่อ</a></div>
                                </div>
                            </div>
                           
                            <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="events">
                                    <div class="topic_new">
                                        <h1>ตารางกิจกรรม</h1>
                                    </div>
                                    @foreach($activity as $k)
                                    <div class="row box_events">
                                        <div class="col-12 col-md-6 col-lg-5 col-xl-5">
                                            <div class="hovereffect">
                                                <a  href="../readmorenews/activity/{{$k->id}}">
                                                <img src="../images/activity/{{$k->img}}" class="img-fluid" style="width: 100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-7 col-xl-7">
                                            <a href="../readmorenews/activity/{{$k->id}}">
                                                <h6>{{$k->title_th}}</h6>
                                                <p><i class="fa fa-calendar" aria-hidden="true"></i>{{DateThai($k->updated_at)}}&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i> 15 ตุลาคม 2563   </p>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInDown">
                        <div class="row pad_homenew">

                        @foreach($news as $i)
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="">
                                    <div class="box-homenew">
                                        <div class="hovereffect">
                                            <a href="../readmorenews/news/{{$i->id}}">
                                            <img src="../images/news/{{$i->img}}" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="text-box-homenew">
                                            <a href="{{ url('readmorenews') }}">
                                                <h6>{{$i->title_th}}</h6>
                                                <p>{!!strip_tags($i->detail_th)!!}</p>
                                            </a><a href="../readmorenews/news/{{$i->id}}">อ่านต่อ <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        </div>
                        <div class="pad_pagination wow fadeInDown">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href=""><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="{{ url('page_2') }}">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.inc_footer')
</body>
</html>