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
                        <h4>ข้อมูลการศึกษา</h4>
                         <div class="row text_create">
                            
                            
                            
                            <div class="col-12 col-md-4">
                                <p>มหาวิทยาลัย <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                                
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>คณะ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>ระดับ  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>สาขา  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>ปีจบการศึกษา  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                             <div class="col-12 col-md-4">
                                <p>เกรดเฉลี่ย  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create">
                            </div>
                            
                            <div class="col-12">
                                
                              <div class="form-check pad-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                  เพิ่มประวัติการศึกษา 2
                                </label>
                              </div>
                              <div class="form-check pad-check">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                  เพิ่มประวัติการศึกษา 3
                                </label>
                              </div>
                              <div class="form-check pad-check disabled">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                                  เพิ่มประวัติการศึกษา 4
                                </label>
                              </div>
                            
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
        $('.sidemenumem li:nth-child(6) ').addClass('active');
    </script>
    
</body>

</html>