<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

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
    .event-desc img{
        width: 17px;
    }
    .modal-dialog {
        max-width: 750px;
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
            
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="filter_pc">
                    @include('frontend.inc_menu_profile')
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-9 pad_create_profile">
                    <div class="create_profile green">
                        <h4>ตารางนัดสัมภาษณ์</h4>
                            <div id="calendar-wrap">
                                <div class="row topic_calendar">
                                    <div class="col-6">
                                        <h6>ปฎิทิน</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 style="text-align: right;">31 กรกฎาคม - 1 สิงหาคม 2020</h6>
                                    </div>
                                </div>
                                <div class="box_calendar">
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
                                            
                                                <a href="" data-toggle="modal" data-target="#m1">
                                                    <div class="event">
                                                        <div class="event-desc">
                                                            <h6>รหัสงาน : 002152</h6>
                                                            <p>13.00 - 14.00 น. (&nbsp;<img src="images/icon/icon_video_camera.png" class="img-fluid">&nbsp;)</p>
                                                        </div>
                                                        <div class="event-time">
                                                            <button type="button" class="event-time_a">ยืนยัน</button>
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
                                            <a href="" data-toggle="modal" data-target="#m1">
                                                    <div class="event">
                                                        <div class="event-desc">
                                                            <h6>รหัสงาน : 002152</h6>
                                                            <p>13.00 - 14.00 น. (&nbsp;<img src="images/icon/icon_video_camera.png" class="img-fluid">&nbsp;)</p>
                                                        </div>
                                                        <div class="event-time">
                                                            <button type="button" class="event-time_a">ยืนยัน</button>
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
                                            <a href="" data-toggle="modal" data-target="#m1">
                                                    <div class="event">
                                                        <div class="event-desc">
                                                            <h6>รหัสงาน : 002152</h6>
                                                            <p>13.00 - 14.00 น. (&nbsp;<img src="images/icon/icon_video_camera.png" class="img-fluid">&nbsp;)</p>
                                                        </div>
                                                        <div class="event-time">
                                                            <button type="button" class="event-time_a">ยืนยัน</button>
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
                                            <a href="" data-toggle="modal" data-target="#m1">
                                                    <div class="event">
                                                        <div class="event-desc">
                                                            <h6>รหัสงาน : 002152</h6>
                                                            <p>13.00 - 14.00 น. (&nbsp;<img src="images/icon/icon_video_camera.png" class="img-fluid">&nbsp;)</p>
                                                        </div>
                                                        <div class="event-time">
                                                            <button type="button" class="event-time_a">ยืนยัน</button>
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
                    
                    
                    
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="m1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <button type="button" class="close-m1" data-dismiss="modal">&times;</button>

        <div class="modal-content">
            <div class="modal-body">
                <div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-6" style="border-right: 1px solid #ddd;">
								<a href="#" class="active" id="login-form-link">สัมภาษณ์ทาง <img src="images/icon/icon_video_camera.png" class="img-fluid"></a>
							</div>
							<div class="col-6">
								<a href="#" id="register-form-link">สัมภาษณ์ทาง บริษัท <img src="images/icon/icon_video_company.png" class="img-fluid"></a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
									<div class="row text_create panel">
                                        <div class="col-3 col-md-3">
                                            <p>ชื่อบริษัท <span>*</span></p>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <input class="form-create">
                                        </div>
                                        
                                        <div class="col-3 col-md-3">
                                            <p>ตำแหน่งที่สัมภาษณ์ <span>*</span></p>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <input class="form-create">
                                        </div>
                                        
                                        <div class="col-3 col-md-3">
                                            <p>สถานที่ <span>*</span></p>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <input class="form-create">
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3">
                                                    <p>วันที่สัมภาษณ์ <span>*</span></p>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-control input-group input-append date" id="datePicker" >
                                                        <span class="input-group-addon add-on" style="border: none;"><span><i class="fa fa-calendar" aria-hidden="true"></i></span></span>
                                                        <input type="text" name="date" class="from-c" placeholder="เลือกวันที่สัมภาษณ์">
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <p>ถึง</p>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-control input-group input-append date" id="datePicker1" >
                                                        <span class="input-group-addon add-on" style="border: none;"><span><i class="fa fa-calendar" aria-hidden="true"></i></span></span>
                                                        <input type="text" name="date" class="from-c" placeholder="เลือกวันที่สัมภาษณ์">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3">
                                                    <p>เวลานัดสัมภาษณ์ <span>*</span></p>
                                                </div>
                                                <div class="col-4">
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>เลือก</option>
                                                        <option>07.00 น.</option>
                                                        <option>07.30 น.</option>
                                                        <option>08.00 น.</option>
                                                     </select>
                                                </div>
                                                <div class="col-1">
                                                    <p>ถึง</p>
                                                </div>
                                                <div class="col-4">
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>เลือก</option>
                                                        <option>11.00 น.</option>
                                                        <option>13.30 น.</option>
                                                        <option>15.00 น.</option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
								</form>
								<form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">
										<div class="row text_create panel">
                                        <div class="col-3 col-md-3">
                                            <p>ชื่อบริษัท <span>*</span></p>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <input class="form-create">
                                        </div>
                                        
                                        <div class="col-3 col-md-3">
                                            <p>ตำแหน่งที่สัมภาษณ์ <span>*</span></p>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <input class="form-create">
                                        </div>
                                        
                                        <div class="col-3 col-md-3">
                                            <p>สถานที่ <span>*</span></p>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <input class="form-create">
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3">
                                                    <p>วันที่สัมภาษณ์ <span>*</span></p>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-control input-group input-append date" id="datePicker" >
                                                        <span class="input-group-addon add-on" style="border: none;"><span><i class="fa fa-calendar" aria-hidden="true"></i></span></span>
                                                        <input type="text" name="date" class="from-c" placeholder="เลือกวันที่สัมภาษณ์">
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <p>ถึง</p>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-control input-group input-append date" id="datePicker1" >
                                                        <span class="input-group-addon add-on" style="border: none;"><span><i class="fa fa-calendar" aria-hidden="true"></i></span></span>
                                                        <input type="text" name="date" class="from-c" placeholder="เลือกวันที่สัมภาษณ์">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3">
                                                    <p>เวลานัดสัมภาษณ์ <span>*</span></p>
                                                </div>
                                                <div class="col-4">
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>เลือก</option>
                                                        <option>07.00 น.</option>
                                                        <option>07.30 น.</option>
                                                        <option>08.00 น.</option>
                                                     </select>
                                                </div>
                                                <div class="col-1">
                                                    <p>ถึง</p>
                                                </div>
                                                <div class="col-4">
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>เลือก</option>
                                                        <option>11.00 น.</option>
                                                        <option>13.30 น.</option>
                                                        <option>15.00 น.</option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
								
								</form>
							</div>
						</div>
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <button type="button" class="button_save">บันทึก <i class="fa fa-caret-right" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-4"></div>
                        </div>
					</div>
				</div>
                
            </div>
        </div>
        </div>
</div>
    
    <div id="myNav" class="overlay">
        <a href="javascript:void(2)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        @include('frontend.inc_menu_profile')
        </div>
    </div>
    @include('frontend.inc_footer')
    <script>
        $('.sidemenumem li:nth-child(13) ').addClass('active');
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
    <script>
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $('#datePicker')
                .datepicker({
                    format: 'mm/dd/yyyy'
                })
                .on('changeDate', function(e) {
                    // Revalidate the date field
                    $('#eventForm').formValidation('revalidateField', 'date');
                });
            $('#datePicker1')
                .datepicker({
                    format: 'mm/dd/yyyy'
                })
                .on('changeDate', function(e) {
                    // Revalidate the date field
                    $('#eventForm').formValidation('revalidateField', 'date');
                });
            $('#eventForm').formValidation({
                framework: 'bootstrap',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'The name is required'
                            }
                        }
                    },
                    date: {
                        validators: {
                            notEmpty: {
                                message: 'The date is required'
                            },
                            date: {
                                format: 'MM/DD/YYYY',
                                message: 'The date is not a valid'
                            }
                        }
                    }
                }
            });
        });
    </script>

</body>

</html>