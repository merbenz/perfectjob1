<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    .form {
        padding: 40px;
        max-width: 600px;
        margin: 40px auto;
        border-radius: 4px;
    }

    .tab-group {
        list-style: none;
        padding: 0;
        margin: 0 0 40px 0;
    }

    .tab-group:after {
        content: "";
        display: table;
        clear: both;
    }

    .tab-group li a {
        display: block;
        text-decoration: none;
        padding: 5px 15px;
        background: #fff;
        color: #4ba7ee;
        font-size: 20px;
        border: 1px solid #80808042;
        font-family: 'supermarketregular';
        float: left;
        width: 50%;
        text-align: center;
        cursor: pointer;
        -webkit-transition: .5s ease;
        transition: .5s ease;
    }

    .tab-group li a:hover {
        background: #f6a665;
        color: #ffffff;
    }

    .tab-group .active a {
        background: #4ba7ee;
        color: #ffffff;
    }

    .tab-content>div:last-child {
        display: none;
    }
    @media (max-width: 767px) {
        .form{
            padding: 0;
            margin: 40px auto;
        }
        .tab-group li a{
            padding: 8px 15px;
        }
    }
    

    
</style>

<body>
@include('frontend.inc_menu')
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 pad_register">
                <div class="form">

                    <ul class="tab-group">
                        <li class="tab active"><a href="#signup"><i class="fa fa-user" aria-hidden="true"></i> สำหรับผู้สมัครงาน</a></li>
                        <li class="tab"><a href="#login"><i class="fa fa-building" aria-hidden="true"></i> สำหรับบริษัท</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="signup">
                            <input type="email" class="form-login" id="exampleInputemail" placeholder="อีเมล">
                            <input type="emailconfirm" class="form-login" id="exampleInputemailconfirm" placeholder="ยืนยันอีเมล">
                            <input type="password" class="form-login" id="exampleInputpassword" placeholder="รหัสผ่าน">
                            <input type="passwordconfirm" class="form-login" id="exampleInputpasswordconfirm" placeholder="ยืนยันรหัสผ่าน">
                            <div class="img-publication">
                                <img src="images/img-publication.jpg">
                                <p>คลิกเพื่อเปลี่ยนรหัส</p>

                            </div>
                            <p style="text-align: left; padding-bottom: 10px;">* รหัสยืนยัน</p>
                            <fieldset class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" >
                              ยอมรับ <a href="">เงื่อนไขข้อตกลงการใช้บริการ</a> และ <a href="">นโยบายความเป็นส่วนตัว</a> ของ Jobperfect
                            </label>
                                </div>
                            </fieldset>
                            <div class="button_login"><a href="">สมัครสมาชิก</a></div>
                            <p  style="text-align: center;">เป็นสมาชิกอยู่แล้ว ? <a href="{{ url('login') }}">เข้าสู่ระบบ</a></p>
                        </div>

                        <div id="login">
                            <input type="email" class="form-login" id="exampleInputemail" placeholder="ชื่อบริษัท">
                            <input type="email" class="form-login" id="exampleInputemail" placeholder="ชื่อผู้ติดต่อ">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6">
                                    <input type="email" class="form-login" id="exampleInputemail" placeholder="อีเมล">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <input type="email" class="form-login" id="exampleInputemail" placeholder="โทรศัพท์">
                            
                                </div>
                            </div>
                            
                            <input type="email" class="form-login" id="exampleInputemail" placeholder="มือถือ">
                            <input type="emailconfirm" class="form-login" id="exampleInputemailconfirm" placeholder="ยืนยันอีเมล">
                            <input type="password" class="form-login" id="exampleInputpassword" placeholder="รหัสผ่าน">
                            <input type="passwordconfirm" class="form-login" id="exampleInputpasswordconfirm" placeholder="ยืนยันรหัสผ่าน">
                            <div class="img-publication">
                                <img src="images/img-publication.jpg">
                                <p>คลิกเพื่อเปลี่ยนรหัส</p>

                            </div>
                            <p style="text-align: left; padding-bottom: 10px;">* รหัสยืนยัน</p>
                            <fieldset class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" >
                              ยอมรับ <a href="">เงื่อนไขข้อตกลงการใช้บริการ</a> และ <a href="">นโยบายความเป็นส่วนตัว</a> ของ Jobperfect
                            </label>
                                </div>
                            </fieldset>
                            <div class="button_login"><a href="">สมัครสมาชิก</a></div>
                            <p style="text-align: center;">เป็นสมาชิกอยู่แล้ว ? <a href="{{ url('login') }}">เข้าสู่ระบบ</a></p>
                        </div>

                    </div>
                    <!-- tab-content -->

                </div>
                

            </div>
        </div>
    </div>
    @include('frontend.inc_footer')
    <script>
        $('.form').find('input, textarea').on('keyup blur focus', function(e) {

            var $this = $(this),
                label = $this.prev('label');

            if (e.type === 'keyup') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.addClass('active highlight');
                }
            } else if (e.type === 'blur') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.removeClass('highlight');
                }
            } else if (e.type === 'focus') {

                if ($this.val() === '') {
                    label.removeClass('highlight');
                } else if ($this.val() !== '') {
                    label.addClass('highlight');
                }
            }

        });

        $('.tab a').on('click', function(e) {

            e.preventDefault();

            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');

            target = $(this).attr('href');

            $('.tab-content > div').not(target).hide();

            $(target).fadeIn(600);

        });
    </script>
</body>

</html>