<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    #calendar {
        width: 100%;
    }

    #calendar a {
        color: #8e352e;
        text-decoration: none;
    }

    #calendar ul {
        list-style: none;
        padding: 0;
        margin: 0;
        width: 100%;
    }

    #calendar li {
        display: block;
        float: left;
        width: 14.390%;
        padding: 5px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        margin-right: -1px;
        margin-bottom: -1px;
        background-color: #fff;
    }

    #calendar ul.weekdays {
        height: 40px;
        background: #ebebeb;
        border: 1px solid #ccc;
    }

    #calendar ul.weekdays li {
        text-align: center;
        font-family: 'supermarketregular';
        font-size: 18px;
        text-transform: uppercase;
        line-height: 20px;
        border: none !important;
        background-color: #ebebeb;
        padding: 10px 6px;
        color: #000;
    }

    #calendar .days li {
        height: 100px;
    }

    #calendar .days li:hover {
        background: #d3d3d34a;
    }

    #calendar .date {
        text-align: center;
        margin-bottom: 5px;
        padding: 4px;
        color: #000;
        font-size: 16px;
        height: 25px;
        border-radius: 50%;
        float: right;
    }

    #calendar .event {
        clear: both;
        display: block;
        font-size: 13px;
        border-radius: 4px;
        padding: 5px;
        line-height: 14px;
        background: #e4f2f2;
        border: 1px solid #b5dbdc;
        color: #009aaf;
        text-decoration: none;
    }

    #calendar .event-desc {
        color: #666;
        margin: 3px 0 4px 0;
        text-decoration: none;
        text-align: center;
    }

    #calendar .other-month {
        background: #fff;
        color: #666;
    }
    .event-time{
        text-align: center;
        font-size: 11px;
    }
    .event-time img {
        width: 10px;
    }

    #calendar-wrap {
        width: 100%;
    }

    @media(max-width: 768px) {

        #calendar .weekdays,
        #calendar .other-month {
            display: none;
        }

        #calendar li {
            height: auto !important;
            border: 1px solid #ededed;
            width: 100%;
            padding: 10px;
            margin-bottom: -1px;
        }

        #calendar .date {
            float: none;
        }
    }
</style>

<body>
@include('frontend.inc_menu')
    <div class="container-fluid">

        <div class="row pad-banner">
            <div class="col-12 nopad banner wow fadeInDown">
                <img src="../images/banner/img_my_company.png" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="container nopad_mobile">
            <div class="row">
                <div class="col-12">
                    <div class="boxtext_help">
                        <h2>สำหรับบริษัท</h2>
                    </div>
                </div>
            </div>
            <div class="filter_mobile" onclick="openNav()"> <i class="fa fa-filter" aria-hidden="true"></i> ฝากประวัติ </div>
            
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="filter_pc">
                        
        @include('frontend.inc_menu_corporate')
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-9 pad_create_profile">
                    <div class="create_profile">
                        <h4>คัดเลือกผู้สมัคร</h4>
                        <div class="row text_create">

                            <div id="calendar-wrap">
                                <div class="row topic_calendar">
                                    <div class="col-6">
                                        <h6>ปฎิทิน</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 style="text-align: right;">31 กรกฎาคม - 1 สิงหาคม 2020</h6>
                                    </div>
                                </div>
                                <div id="calendar">
                                    <ul class="weekdays">
                                        <li>อาทิตย์</li>
                                        <li>จันทร์</li>
                                        <li>อังคาร</li>
                                        <li>พุธ</li>
                                        <li>พฤหัสบดี</li>
                                        <li>ศุกร์</li>
                                        <li>เสาร์</li>
                                    </ul>

                                    <!-- Days from previous month -->

                                    <ul class="days">
                                        <li class="day other-month">
                                            <div class="date">27</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">28</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">29</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">30</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">31</div>
                                        </li>

                                        <!-- Days in current month -->

                                        <li class="day">
                                            <div class="date">1</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">2</div>
                                            
                                                <a href="">
                                                    <div class="event">
                                                        <div class="event-desc">
                                                            ดูเพิ่มเติม
                                                        </div>
                                                        <div class="event-time">
                                                            (&nbsp;<img src="../images/icon/icon_video_camera.png" class="img-fluid"> 2&nbsp;)(&nbsp;<img src="../images/icon/icon_video_company.png" class="img-fluid"> 2&nbsp;)
                                                        </div>
                                                    </div>
                                                </a>
                                            
                                        </li>
                                    </ul>

                                    <!-- Row #2 -->

                                    <ul class="days">
                                        <li class="day">
                                            <div class="date">3</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">4</div>
                                            <a href="">
                                                <div class="event">
                                                    <div class="event-desc">
                                                        ดูเพิ่มเติม
                                                    </div>
                                                    <div class="event-time">
                                                        (&nbsp;<img src="../images/icon/icon_video_camera.png" class="img-fluid"> 4&nbsp;)(&nbsp;<img src="../images/icon/icon_video_company.png" class="img-fluid"> 4&nbsp;)
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="day">
                                            <div class="date">5</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">6</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">7</div>
                                            <a href="">
                                                <div class="event">
                                                    <div class="event-desc">
                                                        ดูเพิ่มเติม
                                                    </div>
                                                    <div class="event-time">
                                                        (&nbsp;<img src="../images/icon/icon_video_camera.png" class="img-fluid"> 4&nbsp;)(&nbsp;<img src="../images/icon/icon_video_company.png" class="img-fluid"> 4&nbsp;)
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="day">
                                            <div class="date">8</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">9</div>
                                        </li>
                                    </ul>

                                    <!-- Row #3 -->

                                    <ul class="days">
                                        <li class="day">
                                            <div class="date">10</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">11</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">12</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">13</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">14</div>
                                            <a href="">
                                                <div class="event">
                                                    <div class="event-desc">
                                                        ดูเพิ่มเติม
                                                    </div>
                                                    <div class="event-time">
                                                        (&nbsp;<img src="../images/icon/icon_video_camera.png" class="img-fluid"> 4&nbsp;)(&nbsp;<img src="../images/icon/icon_video_company.png" class="img-fluid"> 4&nbsp;)
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="day">
                                            <div class="date">15</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">16</div>
                                        </li>
                                    </ul>

                                    <!-- Row #4 -->

                                    <ul class="days">
                                        <li class="day">
                                            <div class="date">17</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">18</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">19</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">20</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">21</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">22</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">23</div>
                                        </li>
                                    </ul>

                                    <!-- Row #5 -->

                                    <ul class="days">
                                        <li class="day">
                                            <div class="date">24</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">25</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">26</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">27</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">28</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">29</div>
                                        </li>
                                        <li class="day">
                                            <div class="date">30</div>
                                        </li>
                                    </ul>

                                    <!-- Row #6 -->

                                    <ul class="days">
                                        <li class="day">
                                            <div class="date">31</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">1</div>
                                            <!-- Next Month -->
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">2</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">3</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">4</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">5</div>
                                        </li>
                                        <li class="day other-month">
                                            <div class="date">6</div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- /. calendar -->
                            </div>
                            


                        </div>
                        
                    </div>
                    
                    
                    <div class="box_people">
                        <div class="people">
                            <h5>2 ตุลาคม ( 4 คน )</h5>
                            
                        </div>
                        <div class="text_people">
                            <h6>สัมภาษณ์แล้ว <br><img src="../../images/icon/icon_video_camera.png" class="img-fluid"> Zoom</h6>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="box_confirm">
                                    <img src="../images/icon/img_people.png" class="img-fluid">
                                    <h6>สุดารัตน์ ยอดจันทร์</h6>
                                    <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
                                    <ul class="ul_box_confirm">
                                        <li><img src="../images/icon/work.svg" class="img-fluid svg"> Graphic Designer</li> 
                                        <li><img src="../images/icon/wallet.svg" class="img-fluid svg"> ฿35000-฿38000</li>
                                        <li><img src="../images/icon/reward_1.svg" class="img-fluid svg"> ประสบการณ์ 3 ปี</li>
                                        <li><img src="../images/icon/www.svg" class="img-fluid svg"> ภาษาญี่ปุ่น N1</li>
                                    </ul>
                                     <button type="button" class="buttonbox_confirm">เลือก</button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="box_confirm">
                                    <img src="../images/icon/img_people.png" class="img-fluid">
                                    <h6>สุดารัตน์ ยอดจันทร์</h6>
                                    <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
                                    <ul class="ul_box_confirm">
                                        <li><img src="../images/icon/work.svg" class="img-fluid svg"> Graphic Designer</li> 
                                        <li><img src="../images/icon/wallet.svg" class="img-fluid svg"> ฿35000-฿38000</li>
                                        <li><img src="../images/icon/reward_1.svg" class="img-fluid svg"> ประสบการณ์ 3 ปี</li>
                                        <li><img src="../images/icon/www.svg" class="img-fluid svg"> ภาษาญี่ปุ่น N1</li>
                                    </ul>
                                     <button type="button" class="buttonbox_confirm blub">เลือก</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text_people">
                            <h6>สัมภาษณ์แล้ว <br><img src="../images/icon/icon_video_company.png" class="img-fluid"> บริษัท</h6>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="box_confirm">
                                    <img src="../images/icon/img_people.png" class="img-fluid">
                                    <h6>สุดารัตน์ ยอดจันทร์</h6>
                                    <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
                                    <ul class="ul_box_confirm">
                                        <li><img src="../images/icon/work.svg" class="img-fluid svg"> Graphic Designer</li> 
                                        <li><img src="../images/icon/wallet.svg" class="img-fluid svg"> ฿35000-฿38000</li>
                                        <li><img src="../images/icon/reward_1.svg" class="img-fluid svg"> ประสบการณ์ 3 ปี</li>
                                        <li><img src="../images/icon/www.svg" class="img-fluid svg"> ภาษาญี่ปุ่น N1</li>
                                    </ul>
                                     <button type="button" class="buttonbox_confirm">เลือก</button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="box_confirm">
                                    <img src="../images/icon/img_people.png" class="img-fluid">
                                    <h6>สุดารัตน์ ยอดจันทร์</h6>
                                    <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
                                    <ul class="ul_box_confirm">
                                        <li><img src="../images/icon/work.svg" class="img-fluid svg"> Graphic Designer</li> 
                                        <li><img src="../images/icon/wallet.svg" class="img-fluid svg"> ฿35000-฿38000</li>
                                        <li><img src="../images/icon/reward_1.svg" class="img-fluid svg"> ประสบการณ์ 3 ปี</li>
                                        <li><img src="../images/icon/www.svg" class="img-fluid svg"> ภาษาญี่ปุ่น N1</li>
                                    </ul>
                                     <button type="button" class="buttonbox_confirm blub">เลือก</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text_people">
                            <h6>อนุมัติ <br><img src="../images/icon/icon_tick.png" class="img-fluid"></h6>
                        </div>
                        
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="box_confirm">
                                    <img src="../images/icon/img_people.png" class="img-fluid">
                                    <h6>สุดารัตน์ ยอดจันทร์</h6>
                                    <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
                                    <ul class="ul_box_confirm">
                                        <li><img src="../images/icon/work.svg" class="img-fluid svg"> Graphic Designer</li> 
                                        <li><img src="../images/icon/wallet.svg" class="img-fluid svg"> ฿35000-฿38000</li>
                                        <li><img src="../images/icon/reward_1.svg" class="img-fluid svg"> ประสบการณ์ 3 ปี</li>
                                        <li><img src="../images/icon/www.svg" class="img-fluid svg"> ภาษาญี่ปุ่น N1</li>
                                    </ul>
                                    <p style="text-align: left; margin: 0 0 5px;">ต้นสังกัด</p>
                                        
                                    <div class="row pad_button_confirm">
                                        <div class="col-12 col-md-6"><button type="button" class="buttonbox_confirm">อนุมัติ</button></div>
                                        <div class="col-12 col-md-6"><button type="button" class="buttonbox_confirm red">ไม่อนุมัติ</button></div>
                                    </div>
                                    
                                    <p style="text-align: left; margin: 0 0 5px;">HR</p>
                                        
                                    <div class="row">
                                        <div class="col-12 col-md-6"><button type="button" class="buttonbox_confirm">อนุมัติ</button></div>
                                        <div class="col-12 col-md-6"><button type="button" class="buttonbox_confirm red">ไม่อนุมัติ</button></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                   


                </div>
            </div>
        </div>

    </div>
    
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">      
    @include('frontend.inc_menu_corporate')
        </div>
    </div>
    @include('frontend.inc_footer')
    <script>
        $('.sidemenumem li:nth-child(5) ').addClass('active');
    </script>

</body>

</html>