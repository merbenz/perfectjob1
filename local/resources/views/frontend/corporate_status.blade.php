<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    .apply_detail img{
        width: 13px;
    }
    .apply_detail{
        margin-bottom: 20px;
    }
    .apply_detail div{
        padding: 2px 7px;
        margin-right: 10px;
    }
    select.form-applied:not([size]):not([multiple]) {
        height: calc(2.25rem + 2px);
    }
    @media (max-width: 767px){
        .apply_detail {
            margin-bottom: 5px;
        }
        .apply_detail div{
            padding: 0;
            margin: 0;
        }
    }
</style>

<body>
@include('frontend.inc_menu')
    <div class="container-fluid">

        <div class="row pad-banner">
            <div class="col-12 nopad banner wow fadeInDown">
                <img src="i../images/banner/mg_my_company.png" class="img-fluid" style="width: 100%;">
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
                    <div class="create_profile orange">
                        <h4>สถานะการคัดเลือก</h4>
                        <div class="row applied">
                            <div class="col-12 col-md-8">
                                <div class="">
                                    <h6>คุณรับสมัครงานไปแล้วทั้งหมด <span>2</span> ตำแหน่ง</h6>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <select class="form-applied" id="exampleSelect1">
                                    <option>เรียงตามสถานะล่าสุด</option>
                                    <option>วัน</option>
                                    <option>เดือน</option>
                                 </select>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <p>ลำดับ</p>
                            </div>
                            <div class="col-6 col-md-9">
                                <p>1</p>
                            </div>
                            <div class="col-6 col-md-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <p>รายละเอียด</p>
                            </div>
                            <div class="col-6 col-md-10">
                                <p>สุดารัตน์ ยอดจันทร์</p>
                                <div class="apply_detail">
                                    <div class="apply_icon"><img src="../images/icon/icon_work.png" class="img-fluid"><p>Graphic Designer</p></div> <div class="apply_icon"><img src="../images/icon/icon_monny.png" class="img-fluid"><p>฿35000-฿38000</p></div> <div class="apply_icon"><img src="../images/icon/icon_experience.png" class="img-fluid"><p>ประสบการณ์ 3 ปี</p></div> <div class="apply_icon"><img src="../images/icon/icon_language.png" class="img-fluid"><p>ภาษาญี่ปุ่น N1</p></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-1 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-5 col-md-3">
                                <p>คัดเลือกผู้สมัคร </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>08 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-1 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-5 col-md-3">
                                <p>สัมภาษณ์ (Zoom)  </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>09 Jul 2020 <span>(13.00 น. - 14.00 น. บริษัท)</span></p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-1 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-5 col-md-3">
                                <p>คัดเลือกขั้นตอนสุดท้าย  </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>20 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-1 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-5 col-md-3">
                                <p>อนุมัติ (แผนกต้นทาง)    </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>22 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-1 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-5 col-md-3">
                                <p>อนุมัติ (HR)    </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>22 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-1 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-5 col-md-3">
                                <p>คอนเฟิร์มวันนัด (บริษัท)   </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>22 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-1 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-5 col-md-3">
                                <p>เซ็นสัญญา   </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>30 Jul 2020 (บริษัท) <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-1 col-md-2">
                                
                            </div>
                            <div class="col-5 col-md-10">
                               <a href="" data-toggle="modal" data-target="#m1">ประเมินผู้สมัคร</a>
                            </div>
                            
                            
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <p>ลำดับ</p>
                            </div>
                            <div class="col-6 col-md-9">
                                <p>2</p>
                            </div>
                            <div class="col-6 col-md-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <p>รายละเอียด</p>
                            </div>
                            <div class="col-12 col-md-10">
                                <p>สุดารัตน์ ยอดจันทร์</p>
                                <div class="apply_detail">
                                    <div class="apply_icon"><img src="../images/icon/icon_work.png" class="img-fluid"><p>Graphic Designer</p></div> <div class="apply_icon"><img src="../images/icon/icon_monny.png" class="img-fluid"><p>฿35000-฿38000</p></div> <div class="apply_icon"><img src="../images/icon/icon_experience.png" class="img-fluid"><p>ประสบการณ์ 3 ปี</p></div> <div class="apply_icon"><img src="../images/icon/icon_language.png" class="img-fluid"><p>ภาษาญี่ปุ่น N1</p></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <p>คัดเลือกผู้สมัคร </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>08 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <p>สัมภาษณ์ (Zoom)  </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>09 Jul 2020 <span>(13.00 น. - 14.00 น. บริษัท)</span></p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <p>คัดเลือกขั้นตอนสุดท้าย  </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>20 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <p>อนุมัติ (แผนกต้นทาง)    </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>22 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <p>อนุมัติ (HR)    </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>22 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <p>คอนเฟิร์มวันนัด (บริษัท)   </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>22 Jul 2020 <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-6 col-md-2">
                                <div class="button_confirm"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <p>เซ็นสัญญา   </p>
                            </div>
                            <div class="col-6 col-md-7">
                                <p>30 Jul 2020 (บริษัท) <span>( 13.00 น. )</span></p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-2">
                                
                            </div>
                            <div class="col-6 col-md-10">
                               <a href="" data-toggle="modal" data-target="#m1">ประเมินผู้สมัคร</a>
                            </div>
                            
                            
                        </div>
                        
                        
                        
                        
                        <hr>
                    
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
                <h5>ประเมินผู้สมัคร </h5>
                
                <div class="">
                    <fieldset class="form-group">
                      <legend>ให้คะแนน</legend>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          ดี <span><i class="fa fa-star" aria-hidden="true"></i></span> 
                        </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                          พอใช้ <span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
                        </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                          ปานกลาง <span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
                        </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                          ดี <span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
                        </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                          ดีมาก <span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
                        </label>
                      </div>
                    </fieldset>
                </div>


                <div class="pad-footer">
                    <button type="button" class="button_send_">ส่งข้อความ</button>
                    <button type="button" class="button_send_ cancel">ยกเลิก</button>
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
        $('.sidemenumem li:nth-child(7) ').addClass('active');
    </script>
    
</body>

</html>