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
                    <div class="create_profile orange">
                        <h4>อัพโหลดใบประกาศ</h4>
                        <div class="upload_picture">
                            <img src="images/icon/icon_upload_picture.png" class="img-fluid">
                            <canvas id="can"></canvas>
                            <p>Or</p>
                            <input type="file" id="finput" multiple="false" onchange="upload()" />
                            <h6>
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" >เพิ่มใบประกาศ
                               </label>
                            </h6>
                        </div>
                        <div class="row padbutton_c">
                            <div class="col-10">
                                <h5>certificate1.jpg </h5>
                            </div>
                            <div class="col-2">
                                <button type="button" class="button_c">ยกเลิก</button>
                            </div>
                            
                            <div class="col-10">
                                <h5>certificate2.jpg </h5>
                            </div>
                            <div class="col-2">
                                <button type="button" class="button_c">ยกเลิก</button>
                            </div>
                            
                            
                            <div class="col-10">
                                <h5>certificate3.jpg </h5>
                            </div>
                            <div class="col-2">
                                <button type="button" class="button_c">ยกเลิก</button>
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
        $('.sidemenumem li:nth-child(9) ').addClass('active');
    </script>
    
</body>

</html>