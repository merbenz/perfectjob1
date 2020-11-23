<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>

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
                        <h4>ข้อมูลส่วนตัว</h4>
                        <div class="row text_create">
                            <div class="col-12 col-md-4">
                                <p>ชื่อ-นามสกุล (ภาษาอังกฤษ) <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>ชื่อ-นามสกุล (ภาษาไทย / ญี่ปุ่น) <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>เพศ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row pad_check">
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                          หญิง
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                          ชาย
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>อีเมล <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8 pad_create">
                                <input class="form-create">
                                <div>* อีเมลที่ใช้เข้าสู่ระบบจะถูกเปลี่ยน หากคุณแก้ไขที่อยู่อีเมลในระบบ</div>
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>เบอร์โทร  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>สถานภาพการสมรส <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row pad_check">
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" checked="">
                                          สมรส
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios4" value="option4" checked="">
                                          โสด
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios5" value="option5" checked="">
                                          อื่นๆ
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>วันเกิด <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row">
                                    <div class="col-4">
                                        <select class="form-control" id="exampleSelect1">
                                            <option>ปี</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control" id="exampleSelect1">
                                            <option>เดือน</option>
                                            <option>มกราคม</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control" id="exampleSelect1">
                                            <option>วัน</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-12 col-md-4">
                                <p>สัญชาติ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>ไทย</option>
                                 </select>
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>Line ID</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>ที่อยู่ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>จังหวัด <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>กรุงเทพมหานคร</option>
                                 </select>
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>เขต/อำเภอ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>ดุสิต</option>
                                 </select>
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>ที่อยู่อื่นๆ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            
                            
                            
                            <div class="col-12 col-md-4">
                                <p>รหัสไปรษณีย์ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                    <div class="create_profile">
                        <h4>ทักษะภาษาอังกฤษ</h4>
                        <div class="row text_create">
                            <div class="col-12 col-md-4">
                                <p>TOEFL Score</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>IELTS Score</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>TOEIC Score</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>ระดับภาษาอังกฤษของคุณ</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row pad_check">
                                    <div class="col-4 col-md-3">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios6" value="option6">
                                          อ่อน
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios7" value="option7">
                                          ปานกลาง
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios8" value="option8">
                                          ดี
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios9" value="option9">
                                          ดีมาก
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="create_profile">
                        <h4>ทักษะภาษาญี่ปุ่น</h4>
                        <div class="row text_create">
                            <div class="col-12 col-md-4">
                                <p>เคยเรียนภาษาญี่ปุ่น</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row pad_check">
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios6" value="option6">
                                          ใช่
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios7" value="option7">
                                          ไม่ใช่
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>JLPT</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>เคยอาศัยอยู่ที่ญี่ปุ่น</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row pad_check">
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios6" value="option6">
                                          ใช่
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios6" value="option6">
                                          ไม่ใช่
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="create_profile">
                        <h4>ทักษะภาษาอื่น</h4>
                        <div class="row text_create">
                            
                            <div class="col-12 col-md-4">
                                <p>ภาษา</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>จีน</option>
                                    <option>เกาหลี</option>
                                    <option>พม่า</option>
                                 </select>
                            </div>
                            
                            
                        </div>
                        
                        <div class="row text_create">
                            <div class="col-12 col-md-4">
                                <p>ระดับภาษาอังกฤษของคุณ</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row pad_check">
                                    <div class="col-4 col-md-3">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios6" value="option6">
                                          อ่อน
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios7" value="option7">
                                          ปานกลาง
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios8" value="option8">
                                          ดี
                                        </label>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios9" value="option9">
                                          ดีมาก
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="create_profile">
                        <h4>กำหนดสถานที่ทำงาน</h4>
                        <div class="row text_create">
                            <div class="col-12 col-md-4">
                                <p>ภาค</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>กลาง</option>
                                    <option>ใต้</option>
                                    <option>อีสาน</option>
                                    <option>เหนือ</option>
                                 </select>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>จังหวัด</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>กรุงเทพมหานคร</option>
                                 </select>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>เขต/อำเภอ</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="create_profile">
                        <h4>ประเภทงาน / เงินเดือน</h4>
                        <div class="row text_create">
                            <div class="col-12 col-md-4">
                                <p>ประเภทงาน </p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>บริการ</option>
                                    <option>ออกแบบเว็บไซต์</option>
                                 </select>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>ตำแหน่ง</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>ออกแบบเว็บไซต์</option>
                                 </select>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>เงินเดือน (~) </p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>ประเภทการจ้างงาน  </p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                            </div>
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
    
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        @include('frontend.inc_menu_profile')
        </div>
    </div>
    
    @include('frontend.inc_footer')
    <script>
        $('.sidemenumem li:nth-child(3) ').addClass('active');
    </script>
    
    
    
</body>

</html>