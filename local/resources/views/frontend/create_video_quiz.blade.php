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
                        <div class="row">
                            <div class="col-12 col-md-8">
                               1. บริษัทโตโยต้า
                            </div>
                            <div class="col-12 col-md-4">
                               <a href="{{ url('create_video_quiz_more') }}"><button type="button" class="button_a">เลือกอัพโหลด</button></a>
                            </div>
                            
                            
                            <div class="col-12 col-md-8">
                               2. บริษัทฮอนด้า
                            </div>
                            <div class="col-12 col-md-4">
                               <button type="button" class="button_a">เลือกอัพโหลด</button>
                            </div>
                            
                            
                            <div class="col-12 col-md-8">
                               3. บริษัทยามาฮ่า
                            </div>
                            <div class="col-12 col-md-4">
                               <button type="button" class="button_a">เลือกอัพโหลด</button>
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
        $('.sidemenumem li:nth-child(12) ').addClass('active');
    </script>
    
</body>

</html>