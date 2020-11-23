<style>
    .nav-toggle {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        cursor: pointer;
        height: 2rem;
        right: 40px;
        position: fixed;
        top: 1.1rem;
        width: 3.6rem;
        z-index: 10;
    }

    .nav-toggle.expanded .nav-toggle-bar::after,
    .nav-toggle.expanded .nav-toggle-bar::before {
        background: #000;
        margin-top: 0;
    }

    .nav-toggle.expanded .nav-toggle-bar::after {
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .nav-toggle.expanded .nav-toggle-bar {
        background: transparent;
    }

    .nav-toggle .nav-toggle-bar {
        margin-top: 0;
    }

    .nav-toggle .nav-toggle-bar,
    .nav-toggle .nav-toggle-bar::after,
    .nav-toggle .nav-toggle-bar::before {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        background: #0000009c;
        content: '';
        height: 2.5px;
        width: 33px;
    }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-text-size-adjust: 100%;
        -moz-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }


    .nav ul {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav.expanded {
        right: 0;
        border-left: 1px solid rgba(0, 0, 0, 0.04);
    }

    .nav-toggle .nav-toggle-bar::before {
        margin-top: -8px;
    }

    .nav-toggle .nav-toggle-bar::after {
        margin-top: 8px;
    }

    .nav-toggle.expanded .nav-toggle-bar::before {
        -ms-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .nav {
        -webkit-transition: right 0.5s ease;
        -moz-transition: right 0.5s ease;
        -ms-transition: right 0.5s ease;
        -o-transition: right 0.5s ease;
        transition: right 0.5s ease;
        background: #fff;
        color: #666;
        cursor: pointer;
        font-size: 1.3rem;
        line-height: 62px;
        height: 100vh;
        right: -20rem;
        padding: 6rem 2rem 2rem 2rem;
        position: fixed;
        top: 0;
        width: 20rem;
        z-index: 1;
    }



    .nav a {
        font-family: 'supermarketregular';
        font-size: 26px;
        color: inherit;
        cursor: pointer;
        text-decoration: none;
    }

    nav a:hover {
        color: #4ba7ee;
        text-decoration: none;
    }

    .logo_menu {
        display: flex;
        padding: 7px 30px 0 60px;
    }

    .bg_menu {
        background-color: #fff;
        position: fixed;
        left: 0;
        z-index: 99;
        width: 100%;
        margin: 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    }

    .logo_menu img {
        width: 54px;
    }

    

    .language {
        padding: 8px 0;
        list-style: none;
        display: inline-flex;
        margin: 0;
        display: inherit;
    }

    .language li {
        padding: 13px 20px;;
        color: #737580;
    }

    .language a {
        font-size: 18px;
        font-family: 'supermarketregular';
        color: #0000009c;
    }

    .language a:hover {
        text-decoration: none;
    }

    .language .active {
        border-bottom: 2px solid #0000009c;
    }

    .language div {
        margin-top: 18px;
        background-color: #0000002b;
        width: 1.7px;
        height: 17px;
    }


    .user {
        text-align: left;
        margin: 0;
        display: block;
    }

    .user a:hover {
        text-decoration: none;
    }

    .user a {
        color: #0000009c;
        padding-right: 20px;
        font-size: 18px;
        font-family: 'supermarketregular';
    }

    .user img {
        width: 22px;
        padding-right: 5px;
        margin-top: -3px;
    }

    .pad_user {
        padding-left: 5px;
    }

    .icon_shopmenu {
        width: 29px;
        padding-right: 10px;
    }

    .subtotal h6 {
        font-size: 14px;
    }

    .box_cart p {
        padding: 29px 0;
    }

    .box_cart i {
        float: right;
        font-size: 12px;
    }

    .subtotal p {
        text-align: right;
        margin: 0;
        font-size: 14px;
    }

    .p_productcart {
        padding-bottom: 10px;
    }

    .flex-control-nav {
        z-index: 20;
    }

    .language_xs {
        display: none;
    }

    .cart_xs {
        display: none;
    }
    .register{
        margin-right: 17px;
    }
    .register a {
        background-color: #4ba7ee;
        padding: 6px 25px;
        border-radius: 6px;
        color: #fff;
        font-size: 18px;
        font-family: 'supermarketregular';
    }
    .register a:hover{
        text-decoration: none;
        background-color: #3d9ee9;
    }
    .register_pc{
        display: flex;
        padding-top: 21px;
        float: right;
    }
    .dropdown-menu.show{
        padding: 0;
        border-radius: 0;
        border: none;
    }
    .dropdown.open a{
        color: #666;
    } 
    .dropdown.open a:hover{
        text-decoration: none;
    }
    .pad_register_pc{
        padding-right: 0;
    }
    .language_flag{
        display: block;
    }
    .flag_mobile{
        display: none;
    }
    @media (max-width: 1199px) {
        .user {
            margin-right: 22px;
        }
        .user a {
            padding-right: 14px;
        }
        .language li{
            padding: 13px 12px;
        }
        .logo_menu{
            padding: 7px 10px 0 30px;
        }
        .menutext p {
            margin-left: -30px;
        }
        .nav-toggle{
            right: 5px;
        }
    }

    @media (max-width: 991px) {
        .flag_mobile{
            display: block;
        }
        .language{
            display: none;
        }
        .user{
            display: none;
        }
        .menutext p {
            margin-left: 0px;
        }
        .user {
            padding-right: 0;
            margin-right: 0;
        }
        
        .language_flag{
            display: none;
        }
    }

    @media (max-width: 767px) {
        
        .register {
            margin-right: 12px;
        }
        .cart_xs {
            display: block;
        }
        .cart_xs a {
            color: #00cbd2;
            border: 1px solid #00cbd2;
            display: inline-block;
            padding: 0px 20px;
            line-height: 30px;
            text-transform: uppercase;
            transition: 0.5s;
            font-size: 15px;
            width: 100%;
            text-align: center;
        }
        
        .nav a{
            font-size: 22px;
        }
        .nav ul li {
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        }
        .nav ul {
            width: 75%;
        }
        .language_xs {
            display: block;
        }
        .language_xs .active {
            border-bottom: 2px solid #00cbd2;
            margin: 0 7px;
        }
        .language_xs a {
            color: #00cbd2;
            margin: 0 7px;
        }
        .language_xs p {
            color: #737580;
            margin: 0;
        }
        
        .menutext p {
            margin-left: 40px;
        }
        .slidecaption a {
            font-size: 12px;
            padding: 2px 12px;
            height: 25px;
            line-height: 20px;
        }
        .flex-control-nav {
            right: 30px;
        }
        .flex-control-nav li {
            margin: 0 3px;
        }
        .flex-control-paging li a.flex-active {
            width: 10px;
            height: 10px;
        }
        .flex-control-paging li a {
            width: 9px;
            height: 9px;
        }
        .language {
            display: none;
        }
        .wrap_slidecaption {
            top: 26%;
        }
        .wrap_slidecaption h2 {
            font-size: 17px;
            padding-bottom: 12px;
            line-height: 10px;
        }
        .wrap_slidecaption h1 {
            font-size: 31px;
            letter-spacing: 2px;
            margin-bottom: 11px;
        }
        .logo_menu {
            padding: 9px 0px 9px 15px;
        }
        .nav-toggle {
            width: 3rem;
            right: 0;
        }
    }
    @media (max-width: 375px) {
        .register a{
            padding: 4px 15px;
            font-size: 16px;
        }
        
        .user a{
            font-size: 16px;
        }
        .user img{
            width: 18px;
        }
    }
    @media (max-width: 320px){
        .user a {
            font-size: 14px;
        }
        .user img {
            width: 15px;
        }
        .register a {
            padding: 1px 12px;
            font-size: 14px;
        }
        .nav-toggle .nav-toggle-bar, .nav-toggle .nav-toggle-bar::after, .nav-toggle .nav-toggle-bar::before{
            width: 25px;
        }
        .nav-toggle{
            right: -7px;
            top: 12px;
        }
        .nav-toggle .nav-toggle-bar::after {
            margin-top: 7px;
        }
        .nav-toggle .nav-toggle-bar::before {
            margin-top: -7px;
        }
        .register_pc{
            padding-top: 15px;
        }
    }
</style>




<div class="row">
    <div class="col-12">
        <div class="row bg_menu">

            <div class="col-2 col-md-5 col-lg-6 col-xl-7">
                <div class="language_menu">
                    <div class="row">
                        <div class="logo_menu">
                            <a href="{{ url('index') }}"><img src="../../images/logo_jobperfect.png" class="img-fluid"></a>
                        </div>
                        <ul class="language">
                            <li> <a href="{{ url('create_my_profile') }}">ฝากประวัติ</a></li>
                            <li> <a href="{{ url('job') }}">หางาน / สมัครงาน</a></li>
                            <li> <a href="{{ url('services') }}">บริการสำหรับบริษัท</a></li>
                            <li> <a href="{{ url('corporate/profile') }}">สำหรับบริษัท</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-8 col-md-6 col-lg-5 col-xl-4 pad_register_pc">
                <div class="register_pc">
                    <div class="user">
                        <img src="../../images/icon_user_new.png"> <a href="{{ url('login') }}">เข้าสู่ระบบ</a>
                    </div>
                    
                    <div class="register"><a href="{{ url('register') }}">สมัครสมาชิก</a></div>
                    <div class="getaquote"><a href="{{ url('#getaquote') }}">ใบเสนอราคา</a></div>
                    <div class="language_flag">
                    <div class="dropdown open">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" style=""><img src="../../images/flag_th.jpg" class="img-fluid"><b class="caret-menu"></b>
                            </a>
                        <ul class="dropdown-menu dropdown-menu-form-menu">
                            <li><img src="../../images/flag_en.jpg" class="img-fluid"></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-2 col-md-1 col-lg-1 col-xl-1">
                <div class="menutext">
                    <div class="nav-toggle">
                        <div class="nav-toggle-bar"></div>
                    </div>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="{{ url('login') }}">เข้าสู่ระบบ</a></li>
                        
                    
                        <li><a href="{{ url('news/events') }}">ข่าวสารและกิจกรรม </a></li>
                        <li><a href="{{ url('about') }}">เกี่ยวกับเรา</a></li>
                        <li><a href="{{ url('contact') }}">ติดต่อเรา </a></li>
                        <li><a href="{{ url('') }}">นโยบายความเป็นส่วนตัว </a></li>
                        
                        
                        <li class="flag_mobile"><a href=""><img src="../../images/flag_th.jpg" class="img-fluid"></a> <a href=""><img src="../../images/flag_en.jpg" class="img-fluid"></a></li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>
</div>
<div class="row">
<footer class="footer">
        <div class="container wrap-screen-mobile--panel">





            <!--    ตรงนี้นะ เพิ่มใหม่       -->
            <div class="row">
                <div class="col-12" style="padding:0px; border-top: 1px solid #33333330;">
                    <ul class="footermenu">
                        <li>
                            <a href="{{ url('create_my_profile') }}">
                                <img src="../../images/icon/icon_footer_2.png" class="img-fluid"> ฝากประวัติ
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('job') }}">
                                <img src="../../images/icon/icon_footer_1.png" class="img-fluid"> หางาน/สมัครงาน
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('services') }}">
                                <img src="../../images/icon/icon_footer_3.png" class="img-fluid"> บริการ
                            </a>
                        </li>
                        <li style="border-right: none;">
                            <a href="{{ url('corporate/profile') }}">
                                <img src="../../images/icon/icon_footer_4.png" class="img-fluid"> สำหรับบริษัท 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>
</div>
<script>
    (function() {

        var hamburger = {
            navToggle: document.querySelector('.nav-toggle'),
            nav: document.querySelector('nav'),

            doToggle: function(e) {
                e.preventDefault();
                this.navToggle.classList.toggle('expanded');
                this.nav.classList.toggle('expanded');
            }
        };

        hamburger.navToggle.addEventListener('click', function(e) {
            hamburger.doToggle(e);
        });

    }());
</script>
<script>
    $(document).ready(function() {
        $('.btn_menu').click(function(event) {
            if ($(".mainmenu").is(":hidden")) {
                $(this).addClass("active");
                $(".mainmenu").slideDown();
            } else {
                $(this).removeClass("active");
                $(".mainmenu").slideUp();
                $('.submenu').slideUp();
            }
            event.stopPropagation();
        });
        $('html').click(function(event) {});

        $('.mainmenu .hassub > a').click(function(event) {
            if ($(this).siblings(".submenu").is(":hidden")) {
                $(this).siblings(".submenu").slideDown();
            } else {
                $(this).siblings('.submenu').slideUp();
            }
            event.preventDefault();
        });

    });
</script>