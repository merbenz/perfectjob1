<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.inc_header')
</head>
<style>
    
</style>
<body>  
@include('frontend.inc_menu')
    <div class="container-fluid">
        <div class="row pad-banner">
            <div class="col-12 nopad banner wow fadeInDown">
                <div class="text_banner">
                    <h2>ติดต่อเรา</h2>
                </div>
                <img src="images/banner/img_contact.png" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="container">
            <div class="cl-12">
                <div class="text_contact">
                    <h4>สอบถามข้อมูล หรือบริการที่คุณสนใจได้ที่แบบฟอร์มข้างล้างนี้</h4>

                    <form action="{{ url('/contact')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <p>ชือ - นามสกุล</p>
                            <input class="form-contact" type = "text" name = "name" required ="required">    
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>โทรศัพท์</p>
                            <input class="form-contact" type = "text" name = "tel" required ="required">
                        </div>
                        <div class="col-12 col-md-6">
                            <p>อีเมล</p>
                            <input class="form-contact" type = "email" name = "email" required ="required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>เรื่องที่ต้องการติดต่อ</p>
                            <input class="form-contact" type = "text" name = "contact" required ="required">  
                        </div>
                    </div>
                    
                    <img src="images/img-publication-16.jpg" class="img-fluid">
                    <p>กรุณากรอกตัวอักษรจากภาพ</p>
                    <input class="form-contact">
                    
                    
                    <div class="row pad_buttoncontact">
                        <div class="col-md-3"></div>
                        <div class="col-6 col-md-3">
                            <div class="">
                                <button type="submit" name = "submit" class="button_send">ส่งข้อความ</button>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="">
                                <button type="reset" name = "cancel" class="button_cancel">ยกเลิก</button>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                   
                    </form>
                </div>
            </div>
        </div>
      
    </div>
    @include('frontend.inc_footer')
</body>

</html>