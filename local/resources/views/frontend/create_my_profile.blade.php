<!DOCTYPE html>
<html lang="en">

<head> 
@include('frontend.inc_header')
</head>
<style>
    .table-responsive>.table>thead>tr>th, .table-responsive>.table>tbody>tr>th, .table-responsive>.table>tfoot>tr>th, .table-responsive>.table>thead>tr>td, .table-responsive>.table>tbody>tr>td, .table-responsive>.table>tfoot>tr>td {
        white-space: nowrap;
    }
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
        font-size: 10px;
    }

    #calendar .other-month {
        background: #fff;
        color: #666;
    }
    .event-time{
        text-align: center;
        font-size: 9px;
    }
    .event-time img {
        width: 9px;
    }

    #calendar-wrap {
        width: 100%;
    }
    @media(max-width: 1199px){
        #calendar .days li {
            height: 123px;
        }
    }
    @media(max-width: 991px){
        .modal-content {
            border-radius: 0;
            border: none;
        }

        .modal-header {
            border: none;
            background: none;
            color: #000;
            padding: 7px 28px 7px;
            border-radius: 0px;
            background-color: #f2f3f5;
        }

        .modal-title {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1em;
            padding-top: 2px;
            font-weight: 600;
        }
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
                <img src="images/banner/img_my_profile.png" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="container nopad_mobile">
            <div class="row">
                <div class="col-12">
                    <div class="boxtext_help">
                        <h2>แก้ไขโปรไฟล์</h2>
                    </div>
                </div>
                
            </div>
            <div class="filter_mobile" onclick="openNav()"> <i class="fa fa-filter" aria-hidden="true"></i> ฝากประวัติ </div>
            
            
            <div class="row wow fadeInDown">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="filter_pc">
                    @include('frontend.inc_menu_profile')
                    </div> 
                </div>
                <div class="col-12 col-md-12 col-lg-9 pad_myprofile">
                    <div class="row bgcreatimg_people">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="creatimg_people"><img src="images/icon/img_people.png" class="img-fluid"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row bg_creat_profile">
                        <div class="col-12 col-md-6 pad_bg_text pad_bg_text_mo">
                            <div class="bg_text">
                                <h4>ข้อมูลส่วนตัว</h4>
                                <img src="images/bg_text.png" class="img-fluid">
                            </div>
                            <div class="box_bg_text">
                                <h6>Sudarat  Yodjan  <span>(สุดารัตน์ ยอดจันทร์)</span></h6>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <ul class="ul_box_bg_tex">
                                            <li>เพศ <span>หญิง</span></li>
                                            <li>โทรศัพท์ <span>0990516006</span></li>
                                            <li>วันเกิด <span>27 10 2537</span></li>
                                            <li>ID line <span>sudarat</span></li>
                                            <li>ที่อยู่  <span>95 หมู่ 13 ต.ท่าม่วง อ.เทพา จ.สงขลา 10955</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <ul class="ul_box_bg_tex">
                                            <li>เมล <span>sudarat@gmail.com	</span></li>
                                            <li>สถานะสมรส <span>โสด</span></li>
                                            <li>สัญญาติ <span>ไทย</span></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-12">
                                        <h5>ทักษะภาษาอังกฤษ</h5>
                                        
                                            <div class="col-12">
                                            <p>Toefl Score  <span>50 คะแนน</span></p>
                                            <p>Ielts Score   <span>50 คะแนน</span></p>
                                            <p>Toeic Score   <span>50 คะแนน</span></p>
                                            <p>ระดับภาษาอังกฤษของคุณ <span>พอใช้</span></p>
                                            </div>
                                        
                                        
                                        
                                        <h5>ทักษะภาษาญี่ปุ่น</h5>
                                        <div class="row">
                                            <div class="col-12">
                                               <p>เคยเรียนภาษาญี่ปุ่น  <span>ไม่ใช่</span></p>
                                               <p>JLPT   <span>N2</span></p>
                                               <p>เคยอาศัยอยู่ที่ญี่ปุ่น   <span>ไม่ใช่</span></p>
                                            </div>
                                        </div>
                                        
                                        
                                        <h5>สถานที่ทำงาน</h5>
                                        <div class="row">
                                            <div class="col-12">
                                               <p>ภาค   <span> ใต้</span></p>
                                               <p>จังหวัด   <span>สงขลา</span></p>
                                               <p>เขต / อำเภอ  <span>เมือง</span></p>
                                            </div>
                                        </div>
                                        
                                        <h5>ประเภทงาน / เงินเดือน</h5>
                                        <div class="row pad_salary">
                                            <div class="col-12">
                                               <p>ประเภทงาน  <span> Web Designer</span></p>
                                               <p>ตำแหน่ง   <span>Web Designer</span></p>
                                               <p>เงินเดือน  <span>30,000</span></p>
                                               <p>ประเภทการจ้างงาน  <span>งานประจำ</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="bg_text_education">
                                <h4>การศึกษา</h4>
                                <img src="images/bg_text.png" class="img-fluid">
                            </div>
                             <ul class="timeline">

                            <li>
                                <div class="direction-r">
                                    <div class="flag-wrapper">
                                        <div class="row">
                                            <div class="col-2">
                                                <span class="flag">2017<br>2015</span>
                                            </div>
                                            <div class="col-10">
                                                <ul class="ul_box_bg_tex">
                                                    <li>มหาวิทยาลัย <span>Orange Technology Solution</span></li>
                                                    <li>คณะ <span> สถาปัตตยกรรม</span>	</li>
                                                    <li>สาขา   <span>ออกแบบนิเทศ</span></li>
                                                    <li>ปีจบการศึกษา  <span>2556</span></li>
                                                    <li>เกรดเฉลี่ย <span>3.50</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        </div>
                        <div class="col-12 col-md-6 pad_bg_text">
                            <div class="bg_text_experience">
                                <h4>ประสบการณ์ทำงาน</h4>
                                <img src="images/bg_text.png" class="img-fluid">
                            </div>
                            <ul class="timeline">

                            <li>
                                <div class="direction-r">
                                    <div class="flag-wrapper">
                                        <div class="row">
                                            <div class="col-2">
                                                <span class="flag">2017<br>2015</span>
                                            </div>
                                            <div class="col-10">
                                                <ul class="ul_box_bg_tex">
                                                    <li>ชื่อบริษัท <span>Orange Technology Solution</span></li>
                                                    <li>อุตสาหกรรม<span> Web Designer</span>	</li>
                                                    <li>วันที่เริ่มทำงาน 2020 เมษายน   <br><span>วันที่ลาออก 2020 เมษายน</span></li>
                                                    <li>ประเภทการว่าจ้าง  <span>พนักงานประจำ</span></li>
                                                    <li>ประเภทงาน <span>Web Designer</span></li>
                                                    <li>ตำแหน่ง <span>Web Designer</span></li>
                                                    <li>รายละเอียด <span>-</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="direction-r">
                                    <div class="flag-wrapper">
                                        <div class="row">
                                            <div class="col-2">
                                                <span class="flag">2017<br>2015</span>
                                            </div>
                                            <div class="col-10">
                                                <ul class="ul_box_bg_tex">
                                                    <li>ชื่อบริษัท <span>Orange Technology Solution</span></li>
                                                    <li>อุตสาหกรรม<span> Web Designer</span>	</li>
                                                    <li>วันที่เริ่มทำงาน 2020 เมษายน   <br><span>วันที่ลาออก 2020 เมษายน</span></li>
                                                    <li>ประเภทการว่าจ้าง  <span>พนักงานประจำ</span></li>
                                                    <li>ประเภทงาน <span>Web Designer</span></li>
                                                    <li>ตำแหน่ง <span>Web Designer</span></li>
                                                    <li>รายละเอียด <span>-</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>    
                               
                            <li>
                                <div class="direction-r">
                                    <div class="flag-wrapper">
                                        <div class="row">
                                            <div class="col-2">
                                                <span class="flag">2017<br>2015</span>
                                            </div>
                                            <div class="col-10">
                                                <ul class="ul_box_bg_tex">
                                                    <li>ชื่อบริษัท <span>Orange Technology Solution</span></li>
                                                    <li>อุตสาหกรรม<span> Web Designer</span>	</li>
                                                    <li>วันที่เริ่มทำงาน 2020 เมษายน   <br><span>วันที่ลาออก 2020 เมษายน</span></li>
                                                    <li>ประเภทการว่าจ้าง  <span>พนักงานประจำ</span></li>
                                                    <li>ประเภทงาน <span>Web Designer</span></li>
                                                    <li>ตำแหน่ง <span>Web Designer</span></li>
                                                    <li>รายละเอียด <span>-</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                            <div class="bg_text_experience">
                                <h4>ทักษะอื่นๆ</h4>
                                <img src="images/bg_text.png" class="img-fluid">
                            </div>
                            <ul class="ul_box_bg_tex">
                                <li>ใบขับขี่ <span>รถยนต์ / จักรยานยนต์</span></li>
                                <li>ยานพาหนะส่วนตัว<span> รถยนต์</span>	</li>
                                <li>ประสบการฝึกอบรม   <span>-</span></li>
                                <li>ทักษะอื่นๆ  <span>-</span></li>
                                <li>บันทึก <span>-</span></li>
                                
                            </ul>
                        </div>
                        <div class="bg_profile_"><img src="images/bg_profile.png"></div>
                        
                    </div>
                    
                    <div class="information">
                        <h5>วิดีโอคลิป</h5>
                    </div>
                    
                    <div class="row pad_video_clip">
                        <div class="col-12 col-md-4">
                            <iframe class="embed-responsive-item" style="border: none; width: 100%;" height="234" src="https://www.youtube.com/embed/BJKiMiI2zpQ" allowfullscreen></iframe>
                            <script src="https://platform.vine.co/static/scripts/embed.js"></script>
                        </div>
                        <div class="col-12 col-md-4">
                            <iframe class="embed-responsive-item" style="border: none; width: 100%;" height="234" src="https://www.youtube.com/embed/ZBKSYsV_Mck" allowfullscreen></iframe>
                            <script src="https://platform.vine.co/static/scripts/embed.js"></script>
                        </div>
                        <div class="col-12 col-md-4">
                            <iframe class="embed-responsive-item" style="border: none; width: 100%;" height="234" src="https://www.youtube.com/embed/e9bVu1AwT2E" allowfullscreen></iframe>
                            <script src="https://platform.vine.co/static/scripts/embed.js"></script>
                        </div>
                    </div>
                    
                    
                    <div class="information">
                        <h5>ยืนยันนัดสัมภาษณ์</h5>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive table-striped">
                              <table class="table create">
                                <thead class="bg_topcreate">
                                    <tr>
                                      <th></th>
                                      <th>วันที่</th>
                                      <th>เวลา</th>
                                      <th>รูปแบบการสัมภาษณ์</th>
                                      <th>รหัสงาน</th>
                                      <th>ตำแหน่ง</th>
                                      <th>เงินเดือน</th>
                                      <th>ประเภทการจ้าง</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                         <label class="form-check-label">
                                            <input class="" type="checkbox" value="" disabled="">
                                         </label>
                                      </td>
                                      <td>4 10 2563</td>
                                      <td>13.00 น.</td>
                                        <td>สัมภาษณ์ทาง Zoom</td>
                                      <td class="a_topcreate"><a data-toggle="modal" data-target="#myModal">21252233</a> </td>
                                      <td>Web Designer</td>
                                      <td>฿35000-฿38000</td>
                                      <td>พนักงานประจำ</td>
                                      <td><button type="button" class="button_confirmcd">ยืนยัน</button></td>
                                    </tr>
                                      <tr>
                                      <td>
                                         <label class="form-check-label">
                                            <input class="" type="checkbox" value="" disabled="">
                                         </label>
                                      </td>
                                      <td>4 10 2563</td>
                                          <td>13.00 น.</td>
                                        <td>สัมภาษณ์ทาง Zoom</td>
                                      <td class="a_topcreate"><a data-toggle="modal" data-target="#myModal">21252233</a> </td>
                                      <td>Web Designer</td>
                                      <td>฿35000-฿38000</td>
                                      <td>พนักงานประจำ</td>
                                      <td><button type="button" class="button_confirmcd">ยืนยัน</button></td>
                                    </tr>
                                      <tr>
                                      <td>
                                         <label class="form-check-label">
                                            <input class="" type="checkbox" value="" disabled="">
                                         </label>
                                      </td>
                                      <td>4 10 2563</td>
                                          <td>13.00 น.</td>
                                        <td>สัมภาษณ์ทาง Zoom</td>
                                      <td class="a_topcreate"><a data-toggle="modal" data-target="#myModal">21252233</a> </td>
                                      <td>Web Designer</td>
                                      <td>฿35000-฿38000</td>
                                      <td>พนักงานประจำ</td>
                                      <td><button type="button" class="button_confirmcd">ยืนยัน</button></td>
                                    </tr>
                                      <tr>
                                      <td>
                                         <label class="form-check-label">
                                            <input class="" type="checkbox" value="" disabled="">
                                         </label>
                                      </td>
                                      <td>4 10 2563</td>
                                          <td>13.00 น.</td>
                                        <td>สัมภาษณ์กับบริษัท</td>
                                      <td class="a_topcreate"><a data-toggle="modal" data-target="#myModal">21252233</a> </td>
                                      <td>Web Designer</td>
                                      <td>฿35000-฿38000</td>
                                      <td>พนักงานประจำ</td>
                                      <td><button type="button" class="button_confirmcd">ยืนยัน</button></td>
                                    </tr>
                                  </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="information">
                        <h5>ตารางนัดสัมภาษณ์</h5>
                    </div>
                    <div class="row">
                        <div class="col-12 pad_calendar">
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
                                                            รหัสงาน : 21252233
                                                        </div>
                                                        <div class="event-time">
                                                            (&nbsp;<img src="images/icon/icon_video_camera.png" class="img-fluid"> 13:00 - 14:30&nbsp;)
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
                                                        รหัสงาน : 21252233
                                                    </div>
                                                    <div class="event-time">
                                                        (&nbsp;<img src="images/icon/icon_video_company.png" class="img-fluid"> 13:00 - 14:30&nbsp;)
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
                                                            รหัสงาน : 21252233
                                                        </div>
                                                    <div class="event-time">
                                                            (&nbsp;<img src="images/icon/icon_video_camera.png" class="img-fluid"> 13:00 - 14:30&nbsp;)
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
                                                            รหัสงาน : 21252233
                                                        </div>
                                                    <div class="event-time">
                                                            (&nbsp;<img src="images/icon/icon_video_camera.png" class="img-fluid"> 13:00 - 14:30&nbsp;)
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
                    
                    
                    <div class="information">
                        <h5>สถานะการสัมภาษณ์</h5>
                    </div>
                    <div class="row bg_box_people_create">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="box_people_create">
                                    <div class="people_create"><img src="images/icon/img_people.png" class="img-fluid"></div>
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
                                        <h4>Resume</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>Received <br> <span>05 Jul 2020 <i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                    <div class="col-6">
                                        <h6>Read <br> <span>05 Jul 2020 <i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                </div>
                                <div class="row resume_status">
                                    <div class="col-12">
                                        <h4>Interview</h4>
                                    </div>
                                    <div class="col-6">
                                       <h6> <img src="images/icon/icon_video_camera.png" class="img-fluid"><br>
                                           <span>05 Jul 2020 <br><i class="fa fa-check" aria-hidden="true"></i></span></h6>
                                    </div>
                                    <div class="col-6">
                                        <h6><img src="images/icon/icon_video_company.png" class="img-fluid"><br>
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
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="modal_job">
            <h5>รหัสงาน : <span>21252233</span></h5>
             <h5>ตำแหน่ง : <span>Web Designer</span></h5>
             <h5>รายละเอียดงาน :</h5>
             <p>ให้บริการด้านเวชภัณฑ์สำหรับธุรกิจปศุสัตว์ โดยมีวัตถุประสงค์เพื่อนำสินค้า บริการ และ เทคโนโลยี ที่เป็นนวัตกรรม ตอบสนองต่อความต้องการของลูกค้า เสริมสร้างประสิทธิภาพ การผลิตให้แกเกษตรกร ผู้เลี้ยง รวมทั้งยึดมั่นการทำธุรกิจอย่างมีธรรมาภิบาล เพื่อเติบโต อย่างมั่นคงไปพร้อมกับพันธมิตร ทางการค้าทุกภาคส่วน</p>
          </div>
      </div>

      
    </div>
  </div>
        
</div>
    
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        @include('frontend.inc_menu_profile')
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