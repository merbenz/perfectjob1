<style>
    .sidemenumem{
        font-size: 16px;
        padding: 0;
        list-style: none;
        margin-bottom: 40px;
    }
    .sidemenumem li{
        padding: 7px 0;
    }
    .sidemenumem li a{
        color: #666;
        font-size: 18px;
        letter-spacing: 1px;
    }
    .sidemenumem li a:hover{
        text-decoration: none;
        color: #000;
        font-weight: 600;
        letter-spacing: 1px;
    }
    .sidemenumem>li.active a {
        color: #000;
        font-weight: 600;
    }
    .svg{
        width: 20px;
        margin-right: 10px;
    }
    .sidemenumem_topic h5{
        font-family: 'supermarketregular';
        font-size: 23px;
        font-weight: 600;
        letter-spacing: 1px;
        padding: 30px 0 10px;
    }
    @media (max-width: 991px) {
        .sidemenumem li a {
            font-size: 20px;
        }
        .sidemenumem_topic h5 {
            font-size: 27px;
        }
        .overlay-content {
            position: relative;
            width: 100%;
            margin-top: 19px;
            padding: 0 20px;
        }
        .modal-title {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1em;
            padding-top: 2px;
            font-weight: 600;
        }
        .modal-header .close {
            margin: -14px;
        }
        .modal-header {
            border: none;
            background: none;
            color: #000;
            padding: 7px 28px 7px;
            border-radius: 0px;
            background-color: #f2f3f5;
        }
        .modal.left .modal-content {
            height: 100%;
            overflow-y: auto;
        }
        .modal.left.fade .modal-dialog {
            left: -320px;
            -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
            -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
            -o-transition: opacity 0.3s linear, left 0.3s ease-out;
            transition: opacity 0.3s linear, left 0.3s ease-out;
        }
        .menumobileslide {
            display: inline-block;
            margin-top: 27px;
        }
        .img_s {
            width: 30px;
        }
        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 100;
            top: 0;
            left: 0;
            border-right: 1px solid #a1a1a157;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
        }
        .filter_mobile {
            color: #fff;
            border: 1px solid #4ba7ee;
            background-color: #4ba7ee;
            display: inline-block;
            line-height: 32px;
            transition: 0.5s;
            font-size: 16px;
            text-align: center;
            padding: 0 20px;
            width: 100%;
            letter-spacing: 0.5px;
        }
        .filter_mobile i {
            padding-right: 5px;
        }
        .overlay-content {
            position: relative;
            width: 100%;
            margin-top: 19px;
            padding: 0 20px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: -15px;
            right: 10px;
            font-size: 48px;
            z-index: 99999;
        }
    }
    @media (max-width: 767px){
        .sidemenumem li a {
            font-size: 16px;
            padding: 8px 0;
        }
        .sidemenumem li a {
            font-size: 16px;
            padding: 6px 0;
        }
        .sidemenumem_topic h5 {
            font-size: 22px;
            margin: 0;
        }
        .svg {
            width: 14px;
        }
        .sidemenumem li {
            padding: 0px 0;
        }
    }

</style>

<ul class="sidemenumem">
    <div class="sidemenumem_topic"><h5>ข้อมูลและสถานะ</h5></div>
    <li>
        <a href="{{ url('corporate/profile') }}">
             <img src="../../images/icon/user.svg" class="img-fluid svg"> โปร์ไฟล์ของบริษัท
        </a>
    </li>
    <li>
        <a href="{{ url('corporate/company') }}">
            <img src="../../images/icon/document.svg" class="img-fluid svg"> ข้อมูลบริษัท
        </a>
    </li>
    <li>
        <a href="{{ url('corporate/jobdescription') }}">
             <img src="../../images/icon/petition.svg" class="img-fluid svg"> คำร้องรับสมัคร
        </a>
    </li>
    <li>
        <a href="{{ url('corporate/jobinterview') }}">
             <img src="../../images/icon/video.svg" class="img-fluid svg"> คัดเลือกผู้สมัคร
        </a>
    </li>
    <li>
        <a href="{{ url('corporate/interview/schedule') }}">
             <img src="../../images/icon/calendar.svg" class="img-fluid svg"> ตารางนัดสัมภาษณ์
        </a>
    </li>
    <li>
        <a href="{{ url('corporate/status') }}">
             <img src="../../images/icon/graph.svg" class="img-fluid svg"> สถานะการคัดเลือก
        </a>
    </li>
</ul>



<script>
    $(document).ready(function() {
        $(function() {
            jQuery('img.svg').each(function() {
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');

                jQuery.get(imgURL, function(data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = jQuery(data).find('svg');

                    // Add replaced image's ID to the new SVG
                    if (typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }
                    // Add replaced image's classes to the new SVG
                    if (typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass + ' replaced-svg');
                    }

                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr('xmlns:a');

                    // Check if the viewport is set, else we gonna set it if we can.
                    if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                    }

                    // Replace image with new SVG
                    $img.replaceWith($svg);

                }, 'xml');

            });
        });

    });
</script>