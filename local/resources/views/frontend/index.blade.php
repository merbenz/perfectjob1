<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    .table-responsive>.table>thead>tr>th, .table-responsive>.table>tbody>tr>th, .table-responsive>.table>tfoot>tr>th, .table-responsive>.table>thead>tr>td, .table-responsive>.table>tbody>tr>td, .table-responsive>.table>tfoot>tr>td {
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
    .owl-carousel.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{
        background: #fff;
    }
    .owl-carousel.owl-theme .owl-dots .owl-dot span{
        width: 9px;
        height: 9px;
        margin: 0px 4px;
        background: #ffffff87;
    }
    .owl-carousel.owl-theme .owl-nav.disabled+.owl-dots{
        position: absolute;
        top: 84%;
        left: 0;
        width: 100%;
        text-align: center;
        -ms-transform: translate( 0, -50%);
        -webkit-transform: translate( 0, -50%);
        transform: translate( 0, -50%);
        z-index: 1;
    }
    .owl-one {
        padding: 0 70px;
    }
    .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled {
        display: block;
    }
    .owl-one.owl-carousel .owl-nav button.owl-prev {
        position: absolute;
        background-repeat: no-repeat;
        background-size: cover;
        left: -5px;
        top: 32%;
        border-radius: 0;
        width: 34px;
        height: 34px;
        background-image: url(images/owl-prev.png);
    }
    .owl-one.owl-carousel .owl-nav button.owl-next {
        background-image: url(images/owl-next.png);
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        right: -5px;
        top: 32%;
        border-radius: 0;
        width: 34px;
        height: 34px;
    }
    .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled {
        display: none;
    }
    @media (max-width: 1199px){
        .table-responsive{
            padding: 30px 20px 0 30px !important;
        }
    }
    @media (max-width: 991px){
        .owl-carousel.owl-theme .owl-nav.disabled+.owl-dots{
            top: 76%;
            left: 10px;
        }
        .owl-two.owl-theme .owl-nav{
            display: none;
        }
        .owl-two.owl-theme .owl-dots .owl-dot span{
            width: 8px;
            height: 8px;
            margin: 2px 2px;
        }
        .table-responsive{
            padding: 10px 0 20px 10px !important;
        }
        .owl-one {
            padding: 0 50px;
        }
    }
    @media (max-width: 767px){
        .owl-one.owl-carousel .owl-nav button.owl-prev{
            width: 25px;
            height: 25px;
        }
        .owl-one.owl-carousel .owl-nav button.owl-next{
            width: 25px;
            height: 25px;
        }
    }
</style>

<body>
@include('frontend.inc_menu')
    <div class="container-fluid">
        <div class="row wow fadeInDown">
            <div class="col-12 nopad">
                <div class="pad_slide">
                <div class="owl-slide owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/img_slidehome_1.png" class="img-fluid" style="width: 100%;" />
                    </div>
                    <div class="item">
                        <img src="images/img_slidehome_2.png" class="img-fluid" style="width: 100%;" />
                    </div>
                    <div class="item">
                        <img src="images/img_slidehome_3.png" class="img-fluid" style="width: 100%;" />
                    </div>
                    
                </div>
                <div class="icon_button"><img src="images/icon/icon_button_bottom.png"></div>
                </div>
            </div>
            
        </div>
        <div class="row bg_good_life">
                <div class="container">
            <div class="row wow fadeInDown">
                <div class="col-12">
                    <div class="new_normal">
                        <h3>New normal recruitment</h3>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                            </div>
                            <div class="col-12 col-md-12 col-lg-8">
                                <div class="col-12 nopad">
                                    <div class="vdo_home">
                                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" data-fancybox="images">
                                            <img src="images/img_vdo_home.png" class="img-fluid" style="width: 100%; -webkit-box-shadow: 5px 5px 15px 5px rgba(50, 50, 50, .5); -moz-box-shadow: 5px 5px 15px 5px rgba(50, 50, 50, .5); box-shadow: 0px 0px 13px -2px rgba(48, 46, 50, 0.32);"/>
                                            <div class="vdo">
                                                <img src="images/icon_vdo.png">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInDown">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="img_create">
                        <img src="images/img_create.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="good_life">
                        <h2>ชีวิตดี๊ดี ! </h2>
                        <h4>สัมภาษณ์งานได้ทุกที่ทุกเวลา สัมภาษณ์แล้วรู้ผลรวดเร็ว จากหน้า โพรไฟล์ของท่าน </h4>
                        <h4>เราเป็นทั้งเพื่อนและโค้ช ช่วยคุณหางาน ที่ตรงกับความสามารถของคุณ</h4> 
                        <h4>ประหยัดค่าเดินทาง ประหยัดเวลา รู้ผลรวดเร็ว</h4> 
                            
                    </div>
                </div>
            </div>
        </div>
    
        </div>
        <div class="row bg_for_candidate">
            <div class="container">
                <div class="row wow fadeInDown">
                    <div class="col-12">
                        <div class="for_candidate">
                            <h3>For Candidate</h3>
                            <div class="row box_candidate">
                                <div class="col-3 col-md-2"><img src="images/icon_forcandidate_1.png" class="img-fluid"></div>
                                <div class="col-9 col-md-10">
                                    <div class="text_box_candidate">
                                        <h5>1. สร้างหน้าโพรไฟล์</h5>
                                        <h6>ให้สมบูรณ์ตามกำหนด</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row box_candidate">
                                <div class="col-3 col-md-2"><img src="images/icon_forcandidate_2.png" class="img-fluid"></div>
                                <div class="col-9 col-md-10">
                                    <div class="text_box_candidate">
                                        <h5>2. สร้างโพร์ไฟล์ครบ </h5>
                                        <h6>แล้วสามารถ เลือกสมัคร ตามตำแหน่งที่ต้องการ</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row box_candidate">
                                <div class="col-3 col-md-2"><img src="images/icon_forcandidate_3.png" class="img-fluid"></div>
                                <div class="col-9 col-md-10">
                                    <div class="text_box_candidate">
                                        <h5>3. Jobperfect นัดสัมภาษณ์  </h5>
                                        <h6>และสัมภาษณ์ผ่านระบบ สัมภาษณ์ที่ องค์กรหากมี การร้องขอ</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row box_candidate">
                                <div class="col-3 col-md-2"><img src="images/icon_forcandidate_4.png" class="img-fluid"></div>
                                <div class="col-9 col-md-10">
                                    <div class="text_box_candidate">
                                        <h5>4. สัมภาษณ์แล้ว  </h5>
                                        <h6>แจ้งผลผ่านระบบ</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow fadeInDown">
            <div class="container">
                <div class="row pad_free_resume">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="free_resume">
                            <h3>Free resume builder for <br>modern job seekers</h3>
                            <p>By employing the best practices and innovative <br>tech, Wozber boosts your chances of landing a <br>better job – completely for free.</p>
                            <div class="button_create"><a href="">Create resume <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="owl-three owl-carousel owl-theme">
                            
                            <div class="item">
                                <div class="scene">
                                    <div class="panel">
                                         <img src="images/resume.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="scene_1">
                                    <div class="panel">
                                         <img src="images/img_people.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="scene">
                                    <div class="panel">
                                         <img src="images/resume_1.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="scene_1">
                                    <div class="panel">
                                         <img src="images/img_people_1.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
                <div class="topic_job"><h3>Job <span>categories </span></h3></div>
                
               @include('frontend.inc_job')
                
                <div class="button_icon_job"><a href="">All Job Categories <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                
            </div>
        </div>
        <div class="row bg_urgent wow fadeInDown">
                <div class="container">
                    <div class="col-12">
                        <div class="urgent">
                            <h3><span>Urgent</span> Jobs</h3>
                        </div>
                        <div class="owl-one owl-carousel owl-theme">
                            <div class="item">
                                <div class="icon_urgent">
                                    <a href="">
                                        <img src="images/icon_urgent.png" class="img-fluid">
                                        <h4>ฟรีแลนซ์</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon_urgent">
                                    <a href="">
                                        <img src="images/icon_urgent.png" class="img-fluid">
                                        <h4>ล่าม</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon_urgent">
                                    <a href="">
                                        <img src="images/icon_urgent.png" class="img-fluid">
                                        <h4>เลขานุการ</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon_urgent">
                                    <a href="">
                                        <img src="images/icon_urgent.png" class="img-fluid">
                                        <h4>บุคคล / ธุรการ</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon_urgent">
                                    <a href="">
                                        <img src="images/icon_urgent.png" class="img-fluid">
                                        <h4>เอนจิเนียร์</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        <div class="row wow fadeInDown">
            <div class="container">
                <div class="col-12 news_home">
                    <div class="textnews_home"><h3>News &<span>Event </span> </h3></div>
                    <div class="news_home_pc">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box-homenew"><a href="">
                                        </a><div class="hovereffect"><a href="">
                                            </a><a href="{{ url('readmore_new') }}">
                                                <img src="images/img_news_home1.png" class="img-fluid">
                                            </a>
                                        </div>
                                    
                                        <div class="text-box-homenew">
                                            <a href="{{ url('readmore_new') }}">
                                                <h5>August 9, 2018</h5>
                                                <h6>Lorem Ipsum is simply</h6>
                                                <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                            </a><a href="{{ url('new_readmore') }}">Readmore <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box-homenew"><a href="">
                                        </a><div class="hovereffect"><a href="">
                                            </a><a href="{{ url('readmore_new') }}">
                                                <img src="images/img_news_home2.jpg" class="img-fluid">
                                            </a>
                                        </div>
                                    
                                        <div class="text-box-homenew">
                                            <a href="{{ url('readmore_new') }}">
                                                <h5>August 9, 2018</h5>
                                                <h6>Lorem Ipsum is simply</h6>
                                                <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                            </a><a href="{{ url('new_readmore') }}">Readmore <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box-homenew"><a href="">
                                        </a><div class="hovereffect"><a href="">
                                            </a><a href="{{ url('readmore_new') }}">
                                                <img src="images/img_news_home3.jpg" class="img-fluid">
                                            </a>
                                        </div>
                                    
                                        <div class="text-box-homenew">
                                            <a href="{{ url('readmore_new') }}">
                                                <h5>August 9, 2018</h5>
                                                <h6>Lorem Ipsum is simply</h6>
                                                <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                            </a><a href="{{ url('new_readmore') }}">Readmore <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    </div>
                    <div class="row news_home_mobile">
                        <div class="owl-two owl-carousel owl-theme">
                            <div class="item">
                                <div class="box-homenew"><a href="">
                                        </a><div class="hovereffect"><a href="">
                                            </a><a href="{{ url('readmore_new') }}">
                                                <img src="images/img_news_home3.jpg" class="img-fluid">
                                            </a>
                                        </div>
                                    
                                        <div class="text-box-homenew">
                                            <a href="{{ url('readmore_new') }}">
                                                <h5>August 9, 2018</h5>
                                                <h6>Lorem Ipsum is simply</h6>
                                                <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                            </a><a href="{{ url('new_readmore') }}">Readmore <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                <div class="box-homenew"><a href="">
                                        </a><div class="hovereffect"><a href="">
                                            </a><a href="{{ url('readmore_new') }}">
                                                <img src="images/img_news_home3.jpg" class="img-fluid">
                                            </a>
                                        </div>
                                    
                                        <div class="text-box-homenew">
                                            <a href="{{ url('readmore_new') }}">
                                                <h5>August 9, 2018</h5>
                                                <h6>Lorem Ipsum is simply</h6>
                                                <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                            </a><a href="{{ url('new_readmore') }}">Readmore <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                <div class="box-homenew"><a href="">
                                        </a><div class="hovereffect"><a href="">
                                            </a><a href="{{ url('readmore_new') }}">
                                                <img src="images/img_news_home3.jpg" class="img-fluid">
                                            </a>
                                        </div>
                                    
                                        <div class="text-box-homenew">
                                            <a href="{{ url('readmore_new') }}">
                                                <h5>August 9, 2018</h5>
                                                <h6>Lorem Ipsum is simply</h6>
                                                <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                            </a><a href="{{ url('new_readmore') }}">Readmore <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                <div class="box-homenew"><a href="">
                                        </a><div class="hovereffect"><a href="">
                                            </a><a href="{{ url('readmore_new') }}">
                                                <img src="images/img_news_home3.jpg" class="img-fluid">
                                            </a>
                                        </div>
                                    
                                        <div class="text-box-homenew">
                                            <a href="{{ url('readmore_new') }}">
                                                <h5>August 9, 2018</h5>
                                                <h6>Lorem Ipsum is simply</h6>
                                                <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                            </a><a href="{{ url('new_readmore') }}">Readmore <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg_services_home wow fadeInDown">
            <div class="container">
                <div class="col-12">
                    <div class="services_home"><h3>Services  For  Corporate</h3></div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row pad_servicehome wow fadeInDown">
                    <div class="col-12 col-md-12 col-lg-6">
                        <a href="images/final_jobperfect.mp4" data-fancybox="images">
                                            <img src="images/img_service_1.png" class="img-fluid" style="width: 100%; -webkit-box-shadow: 5px 5px 15px 5px rgba(50, 50, 50, .5); -moz-box-shadow: 5px 5px 15px 5px rgba(50, 50, 50, .5); box-shadow: 0px 0px 13px -2px rgba(48, 46, 50, 0.32);">
                                            <div class="vdo">
                                                <img src="images/icon_vdo.png">
                                            </div>
                                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="text_servicehome">
                            <h4>แอพพลิเคชั่นสำหรับการรับสมัครพนักงาน ยุคใหม่ ช่วยให้การสรรหาบุคคลากรราบรื่น ทุกคนที่ได้ลองใช้ พูด เป็นเสียงเดียวกันว่า... น่าจะมีมาตั้งนานแล้ว !</h4>
                            <ul class="ul_servicehome">
                                <li>พอกันที่กับปัญหา ! </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> ลงโฆษณาหาผู้สมัคร </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> เก็บประวัติ และคัดเลือกใบสมัคร </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> โทรนัดสัมภาษณ์ </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> ไหนจะนัดสัมภาษณ์แล้วไม่มา โอ้ย.. </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> การรวมผลการประเมินหลังสัมภาษณ์อีก เฮ้อ...</li>
                            </ul>
                            <p>จากนี้ไปปัญหาดังกล่าวข้างต้น จะหายไป ทีมงานทำงานสบาย ผู้บริหารโล่งใจ เพราะมี ข้อมูลพร้อมตลอดเวลา สามารถ เก็บใบสมัคร ดึงข้อมูลผู้สมัคร และ ค้นหาได้ในคลิ๊กเดียว</p>
                            <div class="button_servicehome"><a href="">ลงทะเบียน <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            <div class="row wow fadeInDown">
                <div class="col-12">
                    <div class="get_right"><h2>“Get the right person for the right position at your fingertips.”</h2></div>
                    <img src="images/img_recruitment.png" class="img-fluid">
                </div>
            </div>
            <div class="row pad_jobperfect wow fadeInDown">
                    
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="text_jobperfect">
                            <h4>Jobperfect Recruitment Soluiton</h4>
                            <p>เปลี่ยนงานสัมภาษณ์ให้ง่ายขึ้นทั้งฝ่ายรีครูท ผู้สมัครไป จนถึงท่านผู้บริหาร ควบคุมได้ง่าย ๆ จากในมือถือ หรือ PC ลดขั้นตอนการ ทำงาน แจ้งผลผ่านอีเมล ประหยัดเวลา เอกสารครบ รวดเร็ว ประมวลผลได้ทันที</p>
                            <div class="button_jobperfect"><a href="">ลงทะเบียนทดลองฟรี <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                <div class="col-12 col-md-12 col-lg-6">
                        <img src="images/img_jobperfect.png" class="img-fluid">
                    </div>
                </div>
            </div>
        <div class="row box_service_procedure wow fadeInDown">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-5">
                            <img src="images/img_service.png" class="img-fluid">
                                    
                            
                        </div>
                        <div class="col-12 col-md-12 col-lg-7">
                            <div class="service_procedure">
                                <h3>ขั้นตอนการบริการ</h3>
                                <ul class="ul_service_procedure">
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i>การลงทะเบียนตำแหน่งที่ต้องการในระบบ ระบบจะทำการส่ง Candidate Profile ตาม</li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i>ทำการเลือกผู้สมัครที่ต้องการสัมภาษณ์ พร้อมบันทึกวันที่ต้องการสัมภาษณ์ ผ่านระบบ Virtual </li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i>สามารถตรวจสอบสถานะของผู้สมัครได้ตลอดทุกขั้นตอน</li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i>สัมภาษณ์ผ่านแล้ว ส่งข้อมูลผู้สมัครให้กับผู้บริหารอนุมัติ โดยแจ้งผ่านอีเมล และลิงค์เข้าระบบ</li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i>ทำผ่านระบบทุกขั้นตอน ประหยัดเวลา ประหยัดงบ รวดเร็ว และได้คนตามที่ต้องการ</li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i>Risk free รับประกันการรับผู้สมัคร หากไม่ผ่านทดลองงาน</li>
                                </ul>
                                <div class="button_procedure"><a href="">ฝากใบสมัคร</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="container">
                <div class="row wow fadeInDown">
                   <div class="col-12">
                       <div class="service_package">
                           
                          @include('frontend.inc_services')
                           
                           <div class="button_services"><a href="services{{ url('aaaaa') }}">ลงทะเบียนทดลองฟรี <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <div class="social-fixed hidden-phone">
    <div class="item" id="fb">
      <a href="https://www.facebook.com/indigostyle.hu" target="_blank">
        <i class="fa fa-facebook fa-2x"></i>
      </a>
    </div>
    <div class="item" id="yt">
      <a href="https://www.youtube.com/channel/UCBBs1Uga2vI6Q1GM4iAFDqQ" target="_blank">
        <i class="fa fa-youtube fa-2x"></i>
      </a>
    </div>
    <div class="item" id="ig">
      <a href="https://instagram.com/indigofitnessstyle/" target="_blank">
        <i class="fa fa-instagram fa-2x"></i>
      </a>
    </div>
    
    </div>
    @include('frontend.inc_footer')
    
    <script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
    <script>
        $('[data-fancybox="images"]').fancybox({
            afterLoad: function(instance, current) {
                var pixelRatio = window.devicePixelRatio || 1;

                if (pixelRatio > 1.5) {
                    current.width = current.width / pixelRatio;
                    current.height = current.height / pixelRatio;
                }
            }
        });
    </script>
    
    <script src="Owlcarousel/dist/owl.carousel.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.owl-slide').owlCarousel({
                loop: true,
                autoplay: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: false,
                dots: true,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    640: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 60,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 2,
                        margin: 30,
                    },
                    640: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: true,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                        margin: 30,
                    },
                    640: {
                        items: 2
                    }
                }
            });
            $('.owl-three').owlCarousel({
                loop: true,
                autoplay: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: false,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    640: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        });
    </script>

</body>

</html>