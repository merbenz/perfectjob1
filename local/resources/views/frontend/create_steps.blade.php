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
        height: 145px;
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
        background: #ffdbbd;
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

    .event-time {
        text-align: center;
        font-size: 11px;
    }

    .event-time img {
        width: 10px;
    }

    #calendar-wrap {
        width: 100%;
    }

    .event-desc img {
        width: 17px;
    }
    .table-responsive>.table>thead>tr>th,
    .table-responsive>.table>tbody>tr>th,
    .table-responsive>.table>tfoot>tr>th,
    .table-responsive>.table>thead>tr>td,
    .table-responsive>.table>tbody>tr>td,
    .table-responsive>.table>tfoot>tr>td {
        white-space: nowrap;
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
                        <h2>แก้ไขโปรไฟล์ภาพ</h2>
                    </div>
                </div>
            </div>
            <div class="filter_mobile" onclick="openNav()"> <i class="fa fa-filter" aria-hidden="true"></i> ฝากประวัติ </div>
            
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="filter_pc">
                    @include('frontend.inc_menu_profile')
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-9 pad_create_profile">
                    <div class="create_profile green">
                        <h4>ประวัติการสมัครงานล่าสุด</h4>
                        <div class="row bg_have_applied">
                            <div class="col-12 col-md-6">
                                <div class="have_applied">คุณสมัครงานไปแล้วทั้งหมด <span>2</span> ตำแหน่ง</div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-12 col-md-4">
                                <div class="dropdown open">
                                        <a class="dropdown-toggle btn-select-menu form-login pad" data-toggle="dropdown" href="#" aria-expanded="false">เรียงตามสถานะล่าสุด <b class="caret-menu"><i class="fa fa-angle-down" aria-hidden="true"></i></b>
                                            </a>
                                        <ul class="dropdown-menu dropdown-menu-form-menu" role="menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li><a href="">ล่าสุด</a></li>
                                            <li><a href="">1 วัน</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                        <div class="table_steps">
                            <div class="table-responsive table-striped">
                                <table class="table">
                                    <thead class="thead_table_steps">
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รายละเอียด</th>
                                            <th>ได้รับใบสมัคร</th>
                                            <th>อ่านใบสมัคร</th>
                                            <th>เชิญสัมภาษณ์</th>
                                            <th>ยืนยันวันนัดสัมภาษณ์</th>
                                            <th>ไปตามนัด</th>
                                            <th>สถานะการสัมภาษณ์</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="job_code">
                                                    <h6>รหัสงาน : 0021252</h6>
                                                    <p>ตำแหน่ง : Web designer</p>
                                                </div>
                                            </td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>08 Jul 2020</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>09 Jul 2020</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>20 Jul 2020<br>13:00 น. - 14.00 น. <br>(&nbsp;<img src="images/icon/icon_video_camera.png" class="img-fluid">&nbsp;)</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>13​ Jul 2020</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>20​ Jul 2020</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>25​ Jul 2020 <br>อนุมัติ</td>
                                            
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="job_code">
                                                    <h6>รหัสงาน : 0021252</h6>
                                                    <p>ตำแหน่ง : Web designer</p>
                                                </div>
                                            </td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>08 Jul 2020</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>09 Jul 2020</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>20 Jul 2020<br>13:00 น. - 14.00 น. <br>(&nbsp;<img src="images/icon/icon_video_company.png" class="img-fluid">&nbsp;)</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>13​ Jul 2020</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>20​ Jul 2020</td>
                                            <td class="td_table_steps"><i class="fa fa-check" aria-hidden="true"></i> <br>25​ Jul 2020 <br>อนุมัติ</td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
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
        @include('frontend.inc_menu_profile')
        </div>
    </div>
    @include('frontend.inc_footer')
    <script>
        $('.sidemenumem li:nth-child(15) ').addClass('active');
    </script>

</body>

</html>