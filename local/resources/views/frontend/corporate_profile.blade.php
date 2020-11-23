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
                    <div class="statistics">
                        <h4>รวบรวมสถิติผู้สมัครขององคก์ร </h4>
                    </div>
                    
                    <div class="row pad_pie">
                        <section>
                            <div class="pieID pie">

                            </div>
                            <ul class="pieID legend">
                                <li>
                                    <em>จำนวนผู้สมัครทั้งหมด </em>
                                    <span>50</span>
                                </li>
                                <li>
                                    <em>จำนวนที่ JB ส่งนำเสนอ</em>
                                    <span>40</span>
                                </li>
                                <li>
                                    <em>จำนวนที่บริษัทคัดแล้ว </em>
                                    <span>30</span>
                                </li>
                                <li>
                                    <em>จำนวนผู้สมัครที่ผ่านการสัมภาษณ์ </em>
                                    <span>30</span>
                                </li>
                                <li>
                                    <em>รออนุมัติ</em>
                                    <span>20</span>
                                </li>
                                <li>
                                    <em>อนุมัติแล้ว</em>
                                    <span>10</span>
                                </li>
                                <li>
                                    <em>จำนวนทำสัญญา </em>
                                    <span>10</span>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="information">
                        <h5>ข้อมูลบริษัท</h5>
                    </div>
                    <div class="text_infor">
                        <img src="../../images/banner/img_com.png" class="img-fluid">
                        <div class="text_infor_img">
                            <img src="../images/logo_footer.png" class="img-fluid">
                        </div>
                        <p>{!!$company_info->description_th!!}</p>
                        <ul class="ul_text_infor">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> ประเภทงาน : <span>{{$company_info->business_th}}</span></li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> เว็บไซต์ : <span>{{$company_info->nameweb}}</span></li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> ที่อยู่ : <span>{{$company_info->address_th}}</span></li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> แผนที่ : <a href="">ดูแผนที่</a></li>
                        </ul>
                        <div class="button_editprofile"><a href="{{ url('corporate/company') }}">แก้ไขโปรไฟล์</a></div>
                    </div>
                    <div class="information">
                        <h5>ตำแหน่งงานในบริษัท</h5>
                    </div>
                    <div class="information_job">
                        <div class="row">
                            <div class="col-12 col-md-6">

                            @foreach ($corporate_jobdescription as $cj)
                                <div class="row pad_information_job">
                                    <div class="col-4 col-md-3">
                                        <img src="../images/icon_job/icon_job_1.png" class="img-fluid">
                                    </div>
                                    <div class="col-8 col-md-9">
                                        <div class="">
                                            <h5>{{$cj->position_th}}</h5>
                                            <h6>{{$cj->rate}} ตำแหน่ง  เงินเดือน : ฿{{$cj->salary}} <br>ประเภท : </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </div>
                            {{-- <div class="col-12 col-md-6">
                                <div class="row pad_information_job">
                                    <div class="col-4 col-md-3">
                                        <img src="../images/icon_job/icon_job_12.png" class="img-fluid">
                                    </div>
                                    <div class="col-8 col-md-9">
                                        <div class="">
                                            <h5>ไอที</h5>
                                            <h6>ตำแหน่ง : 1  เงินเดือน : ฿20000 <br>ประเภท : ผนักงานประจำ</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row pad_information_job">
                                    <div class="col-4 col-md-3">
                                        <img src="../images/icon_job/icon_job_9.png" class="img-fluid">
                                    </div>
                                    <div class="col-8 col-md-9">
                                        <div class="">
                                            <h5>การผลิต</h5>
                                            <h6>ตำแหน่ง : 1  เงินเดือน : ฿20000 <br>ประเภท : ผนักงานประจำ</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-4 col-md-3">
                                        <img src="../images/icon_job/icon_job_6.png" class="img-fluid">
                                    </div>
                                    <div class="col-8 col-md-9">
                                        <div class="">
                                            <h5>การตลาด / การขาย</h5>
                                            <h6>ตำแหน่ง : 1  เงินเดือน : ฿20000 <br>ประเภท : ผนักงานประจำ</h6>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    
                    <div class="information">
                        <h5>คัดเลือกผู้สมัคร</h5>
                    </div>
                    
                    <div class="select_candidate">
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
                                    <div class="b_select_candidate"><a href="{{ url('create_my_profile') }}">ดูโปรไฟล์</a></div>
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
                                    <div class="b_select_candidate"><a href="{{ url('create_my_profile') }}">ดูโปรไฟล์</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="information">
                        <h5>ตารางนัดสัมภาษณ์</h5>
                    </div>
                    
                    <div class="">
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
                    
                    <div class="">
                    <h6>สถานะการสัมภาษณ์</h6>
                    <div class="interview_status">
                        
                        <h5>4 ตุลาคม (2 คน)</h5>
                        
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="box_people_create">
                                        <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
                                    <div class="people_create"><img src="../images/icon/img_people.png" class="img-fluid"></div>
                                    <h6>รายละเอียด</h6>
                                    
                                    <ul class="ul_people_create">
                                        <li>สุดารัตน์ ยอดจันทร์</li>
                                        <li>Graphic Designer</li> 
                                        <li> ฿35000-฿38000</li>
                                        <li>ประสบการณ์ 3 ปี</li>
                                        <li>ภาษาญี่ปุ่น N1</li>
                                    </ul>
                                <div class="button_status"><a href="">Status</a></div>
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Screening</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>รอพิจารณา </h6>
                                    </div>
                                </div>
                                        
                                
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Interview</h4>
                                    </div>
                                    <div class="col-6">
                                       <h6> <img src="../images/icon/icon_video_camera.png" class="img-fluid"><br>
                                           <span>05 Jul 2020 <br><i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                    <div class="col-6">
                                        <h6><img src="../images/icon/icon_video_company.png" class="img-fluid"><br>
                                            <span>05 Jul 2020 <br><i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                </div>
                                
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Approval</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>ต้นสังกัด<br>
                                        <span>20 Jul 2020 <i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                    <div class="col-6">
                                       <h6> HR<br>
                                        <span>22 Jul 2020 <i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                </div>
                                
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Contract</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>30 Jul 2020</h6>
                                    </div>
                                    
                                </div>
                            </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                    <div class="box_people_create">
                                        <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
                                    <div class="people_create"><img src="../images/icon/img_people.png" class="img-fluid"></div>
                                    <h6>รายละเอียด</h6>
                                    
                                    <ul class="ul_people_create">
                                        <li>สุดารัตน์ ยอดจันทร์</li>
                                        <li>Graphic Designer</li> 
                                        <li> ฿35000-฿38000</li>
                                        <li>ประสบการณ์ 3 ปี</li>
                                        <li>ภาษาญี่ปุ่น N1</li>
                                    </ul>
                                <div class="button_status"><a href="">Status</a></div>
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Screening</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>รอพิจารณา </h6>
                                    </div>
                                </div>
                                        
                                
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Interview</h4>
                                    </div>
                                    <div class="col-6">
                                       <h6> <img src="../images/icon/icon_video_camera.png" class="img-fluid"><br>
                                           <span>05 Jul 2020 <br><i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                    <div class="col-6">
                                        <h6><img src="../images/icon/icon_video_company.png" class="img-fluid"><br>
                                            <span>05 Jul 2020 <br><i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                </div>
                                
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Approval</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>ต้นสังกัด<br>
                                        <span>20 Jul 2020 <i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                    <div class="col-6">
                                       <h6> HR<br>
                                        <span>22 Jul 2020 <i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                </div>
                                
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Contract</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>30 Jul 2020</h6>
                                    </div>
                                    
                                </div>
                            </div>
                        
                            </div>
                            <div class="col-6 col-md-6 col-lg-4"></div>
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
        $('.sidemenumem li:nth-child(2) ').addClass('active');
    </script>
    <script>
        function sliceSize(dataNum, dataTotal) {
            return (dataNum / dataTotal) * 360;
        }

        function addSlice(sliceSize, pieElement, offset, sliceID, color) {
            $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
            var offset = offset - 1;
            var sizeRotation = -179 + sliceSize;
            $("." + sliceID).css({
                "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
            });
            $("." + sliceID + " span").css({
                "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
                "background-color": color
            });
        }

        function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
            var sliceID = "s" + dataCount + "-" + sliceCount;
            var maxSize = 179;
            if (sliceSize <= maxSize) {
                addSlice(sliceSize, pieElement, offset, sliceID, color);
            } else {
                addSlice(maxSize, pieElement, offset, sliceID, color);
                iterateSlices(sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
            }
        }

        function createPie(dataElement, pieElement) {
            var listData = [];
            $(dataElement + " span").each(function() {
                listData.push(Number($(this).html()));
            });
            var listTotal = 0;
            for (var i = 0; i < listData.length; i++) {
                listTotal += listData[i];
            }
            var offset = 0;
            var color = [
                "cornflowerblue",
                "olivedrab",
                "orange",
                "tomato",
                "crimson",
                "purple",
                "turquoise",
                "forestgreen",
                "navy",
                "gray"
            ];
            for (var i = 0; i < listData.length; i++) {
                var size = sliceSize(listData[i], listTotal);
                iterateSlices(size, pieElement, offset, i, 0, color[i]);
                $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
                offset += size;
            }
        }
        createPie(".pieID.legend", ".pieID.pie");
    </script>
</body>

</html>