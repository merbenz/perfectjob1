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
                        <div class="icon_service"><img src="images/services/icon_service_1.png" class="img-fluid"></div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>ระบบ Competency based candidate screening</h4>
                            <p>เลือกผู้สมัครบนพื้นฐาน Competency ของแต่ละตำแหน่ง เพื่อให้ได้สมรรถนะที่ตรงกับตำแหน่งและความต้องการจริงๆ สามารถรู้จัก และคัดเลือกผู้สมัครได้มากกว่า การดูจาก Resume เพียงอย่างเดียว</p>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>ระบบจัดตารางนัดสัมภาษณ์	</h4>
                            <p>สามารถจัดตารางนัดสัมภาษณ์ในระบบได้เลย ทำให้การนัดสัมภาษณ์มีประสิทธิภาพมากยิ่งขึ้น มีตารางนัดสองแบบ วีดีโอ และบริษัท</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/icon_service_2.png" class="img-fluid"></div>
                    </div>
                    
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/icon_service_3.png" class="img-fluid"></div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>ระบบสัมภาษณ์แบบ New normal	</h4>
                            <p>การคัดเลือก และสัมภาษณ์ผ่านวีดีโอ สะดวกและง่ายทั้งผู้สมัครและผู้สัมภาษณ์	คัดได้ถูกคน ก่อนสัมภาษณ์จริง ประหยัดทั้งเวลา และ งบประมาณ</p>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>ระบบติดตามสถานะการสัมภาษณ์			</h4>
                            <p>สามารถทราบสถานะการสัมภาษณ์ การอนุมมัติว่าถึงขั้นตอนไหน ทำให้ HR ทำงานง่ายและรวดเร็ว ผู้บริหารสามารถตรวจสอบได้ทันที </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/icon_service_4.png" class="img-fluid"></div>
                    </div>
                </div>
                
                
                <div class="platform"><h3>Candidate Profile		</h3></div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/icon_service_5.png" class="img-fluid"></div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>ข้อมูลของผู้สมัครแบบ Corporate friendly	ให้คุณได้มากกว่า Resume ด้วยดีไซน์ที่ทันสมัย อ่านง่าย และคุณได้รู้จักผู้สม้ครมากยิ่งขึ้น	</h4>
                        </div>
                    </div>
                    
                </div>
                
                <div class="platform"><h3>Corporate Profile		</h3></div>
                <div class="row">
                    
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>ข้อมูลขององค์กรของคุณที่นำเสนอให้ผู้สมัครได้เข้าใจในวัฒนธรรมองค์กร และเข้าถึงองค์กรของคุณได้มากขึ้น เพื่อหาคนที่ใช่สำหรับคุณ	</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/icon_service_6.png" class="img-fluid"></div>
                    </div>
                </div>
                
                <div class="platform"><h3>Corporate dashboard			</h3></div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="icon_service"><img src="images/services/icon_service_7.png" class="img-fluid"></div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="competency">
                            <h4>รวบรวมข้อมูลขององค์กรของคุณ ไม่ว่าจะเป็นผู้สมัครที่ท่านได้คัดเลือก ไปจนถึงสถานะการอนุมัติการสัมภาษณ์		</h4>
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