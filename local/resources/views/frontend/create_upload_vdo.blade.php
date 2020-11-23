<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    .upload_picture{
        text-align: left;
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
                    <div class="create_profile orange">
                        <h4>อัพโหลดวีดีโอคลิป</h4>
                        <div class="upload_picture">
                            <h5>คำถามที่ 1</h5>
                            <input type="file" id="finput" multiple="false" onchange="upload()" />
                            
                        </div>
                        <div class="upload_picture">
                            <h5>คำถามที่ 2</h5>
                            <input type="file" id="finput" multiple="false" onchange="upload()" />
                        </div>
                        <div class="upload_picture">
                            <h5>คำถามที่ 3</h5>
                            <input type="file" id="finput" multiple="false" onchange="upload()" />
                        </div>
                    </div>
                    
                    <div class="row padbutton_c">
                            <div class="col-10">
                                <h5>question1.jpg </h5>
                            </div>
                            <div class="col-2">
                                <button type="button" class="button_c">ยกเลิก</button>
                            </div>
                            
                            <div class="col-10">
                                <h5>question2.jpg </h5>
                            </div>
                            <div class="col-2">
                                <button type="button" class="button_c">ยกเลิก</button>
                            </div>
                            <div class="col-10">
                                <h5>question3.jpg </h5>
                            </div>
                            <div class="col-2">
                                <button type="button" class="button_c">ยกเลิก</button>
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
        $('.sidemenumem li:nth-child(10) ').addClass('active');
    </script>
    
</body>

</html>