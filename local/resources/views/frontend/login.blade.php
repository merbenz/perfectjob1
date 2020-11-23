<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>

<body>
@include('frontend.inc_menu')
    <div class="container-fluid">
        <div class="container">
            <div class="row pad_login">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="text_login mobile">
                        <h4>เข้าสู่ระบบสำหรับผู้สมัครงาน</h4>
                        <input type="email" class="form-login" id="exampleInputemail" placeholder="อีเมล">
                        <input type="password" class="form-login" id="exampleInputpassword" placeholder="รหัสผ่าน">
                        <div style="text-align: right; padding-bottom: 20px;"><a href="" style="color: #666; text-decoration: none;">ลืมรหัสผ่าน ?</a></div>
                        <fieldset class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" >
                              ยอมรับ <a href="">เงื่อนไขข้อตกลงการใช้บริการ</a> และ <a href="">นโยบายความเป็นส่วนตัว</a> ของ Jobperfect
                            </label>
                          </div>
                        </fieldset>
                        <div class="button_login"><a href="{{ url('job') }}">เข้าสู่ระบบ</a></div>
                        <p>ยังไม่ได้เป็นสมาชิก Jobperfect ? <a href="{{ url('register') }}">สมัครสมาชิก</a></p>
                    </div>
                    <div class="img_login"><img src="images/img_login.png" class="img-fluid" style="width: 100%;"></div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="text_login pc">
                        <h4>เข้าสู่ระบบสำหรับผู้สมัครงาน</h4>
                        <input type="email" class="form-login" id="exampleInputemail" placeholder="อีเมล">
                        <input type="password" class="form-login" id="exampleInputpassword" placeholder="รหัสผ่าน">
                        <div style="text-align: right; padding-bottom: 20px;"><a href="" style="color: #666; text-decoration: none;">ลืมรหัสผ่าน ?</a></div>
                        <fieldset class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" >
                              ยอมรับ <a href="">เงื่อนไขข้อตกลงการใช้บริการ</a> และ <a href="">นโยบายความเป็นส่วนตัว</a> ของ Jobperfect
                            </label>
                          </div>
                        </fieldset>
                        <div class="button_login"><a href="{{ url('job') }}">เข้าสู่ระบบ</a></div>
                        <p>ยังไม่ได้เป็นสมาชิก Jobperfect ? <a href="{{ url('register') }}">สมัครสมาชิก</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.inc_footer')
</body>

</html>