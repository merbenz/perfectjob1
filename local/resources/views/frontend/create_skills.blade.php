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
                    <div class="create_profile">
                        <h4>ข้อมูลทักษะอื่นๆ</h4>
                         <div class="row text_create">
                            
                            
                            
                            <div class="col-12 col-md-4">
                                <p>ใบขับขี่ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row pad_check">
                                    <div class="col-4">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                          รถยนต์
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                          จักรยายนต์
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                          รถบรรทุก
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                          รถกระบะ
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                          รถยก
                                        </label>
                                    </div>
                                </div>
                                
                                
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>ยานพาหนะส่วนตัว <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row pad_check">
                                    <div class="col-4">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                          รถยนต์
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                          จักรยายนต์
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                                          รถบรรทุก
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            <div class="col-12 col-md-4">
                                <p>ประสบการณ์การฝึกอบรม  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            
                             
                            <div class="col-12 col-md-4">
                                <p>ทักษะอื่นๆ  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                             
                             <div class="col-12 col-md-4">
                                <p>บันทึก  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
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
        <a href="javascript:void(2)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        @include('frontend.inc_menu_profile')
        </div>
    </div>
    @include('frontend.inc_footer')
    <script>
        $('.sidemenumem li:nth-child(8) ').addClass('active');
    </script>
    
</body>

</html>