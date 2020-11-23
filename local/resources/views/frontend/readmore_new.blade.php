<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    .flex-direction-nav .flex-next {
        background-image: url(images/icon_buttom_r.png);
        right: 40px;
        opacity: 1;
        line-height: 1;
        text-indent: -999px;
        text-align: left;
        width: 30px;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .flex-direction-nav .flex-prev {
        background-image: url(images/icon_buttom_l.png);
        left: 40px;
        opacity: 1;
        line-height: 1;
        text-indent: -999px;
        text-align: left;
        width: 30px;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .flexslider:hover .flex-direction-nav .flex-next {
        right: 40px;
    }

    .flexslider:hover .flex-direction-nav .flex-prev {
        left: 40px;
    }

    .flexslider {
        margin: 0 0 5px;
        border: 0px solid #fff;
    }

    @media (max-width: 767px) {
        .flex-direction-nav .flex-next {
            right: 20px;
            width: 20px;
            top: 60%;
        }
        .flex-direction-nav .flex-prev {
            left: 20px;
            width: 20px;
            top: 60%;
        }
    }
</style>

<body>
@include('frontend.inc_menu')
    <div class="container-fluid">

        <div class="row">
            <div class="container">
                <div class="row">


                    <div class="col-12 pad_slidenew wow fadeInDown">
                        <!-- Place somewhere in the <body> of your page -->
                        <div class="back"><a href="{{ url('news_promotions') }}">Back</a></div>
                        <div id="slider" class="flexslider">
                            @php
                               if($act == 'news') {
                                   $urlimg = 'news';
                               }elseif ($act == 'activity') {
                                $urlimg = 'activity';
                               }
                            @endphp
                            <ul class="slides">
                                <li>
                                    <img src="../../images/{{$urlimg}}/{{$news->img}}" />
                                </li>
                                <li>
                                    <img src="../../images/img_news1.png" />
                                </li>
                                <li>
                                    <img src="../../images/img_news1.png" />
                                </li>
                                <li>
                                    <img src="../../images/img_news1.png" />
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="../../images/img_news1.png" />
                                </li>
                                <li>
                                    <img src="../../images/img_news1.png" />
                                </li>
                                <li>
                                    <img src="../../images/img_news1.png" />
                                </li>
                                <li>
                                    <img src="../../images/img_news1.png" />
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>

                        @php

                        function DateThai($strDate)
                            {                    
                                $strYear = date("Y",strtotime($strDate))+543;
                                $strMonth= date("n",strtotime($strDate));
                                $strDay = date("j",strtotime($strDate));
                                $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
                                $strMonthThai=$strMonthCut[$strMonth];
                                $datethai = $strDay.' '.$strMonthThai.' '.$strYear;
                                return $datethai;
                            }
                        @endphp

                        <div class="text_readmorenew">
                            <h6><i class="fa fa-calendar" aria-hidden="true">{{DateThai($news->updated_at)}}</i></h6>
                            {{-- </i> April 20,2019</h6> --}}
                            <h4>{{$news->title_th}}</h4>
                            <p>{!!$news->detail_th!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.inc_footer')

    </div>
    <script>
        $(window).on("load", function() {
            // The slider being synced must be initialized first
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 120,
                itemMargin: 5,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
            });
        });
    </script>
</body>

</html>