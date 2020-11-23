<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.inc_header')
</head>
<style>
    .svg{
        width: 20px;
        margin-right: 10px;
    }
</style>
<body>
@include('frontend.inc_menu')
    <div class="container-fluid">
        <div class="container nopad_mobile">
            <div class="row text_job">
                <div class="col-12 col-md-2">
                    <div class="logo_details"><img src="images/logo_footer.png" class="img-fluid"></div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="text_jobdetails">
                        <p>ให้บริการด้านเวชภัณฑ์สำหรับธุรกิจปศุสัตว์ โดยมีวัตถุประสงค์เพื่อนำสินค้า บริการ และ เทคโนโลยี ที่เป็นนวัตกรรม ตอบสนองต่อความต้องการของลูกค้า เสริมสร้างประสิทธิภาพการผลิตให้แกเกษตรกรผู้เลี้ยง รวมทั้งยึดมั่นการทำธุรกิจ อย่างมีธรรมาภิบาล เพื่อเติบโตอย่างมั่นคงไปพร้อมกับพันธมิตรทางการค้าทุกภาคส่วน</p>
                    </div>
                </div>
                <div class="col-12 col-md-2" style="text-align: right;">
                    <a href="{{ url('job_readmore') }}">ย้อนกลับ</a>
                </div>
            </div>
            <div class="row box_job_details">
                <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <h4>เจ้าหน้าที่ฝ่ายกฎหมาย</h4>
                    <ul class="details_1">
                        <li><img src="images/icon/place.svg" class="img-fluid svg"> สถานที่ปฏิบัติงาน</li>
                        <li><img src="images/icon/price.svg" class="img-fluid svg"> เงินเดือน</li>
                        <li><img src="images/icon/user1.svg" class="img-fluid svg"> อัตรา</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-7 col-xl-7">
                    <ul class="details_2">
                        <li>อ.ปากเกร็ด จ.นนทบุรี</li>
                        <li>ตามโครงสร้างบริษัท</li>
                        <li>2</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-2 col-xl-2">
                    <div class="apply_job">
                        <p>14 ก.ค. 63</p>
                        <a href="">สมัครงาน</a>
                    </div>
                </div>
            </div>
            
                <div class="description mar">
                    <h4>รายละเอียดงาน</h4>
                    <ul class="job_description">
                        <li>จัดทำนิติกรรมสัญญา ยกร่าง ตรวจสอบ และให้ข้อเสนอแนะความเห็นทางกฏหมายกับทุกหน่วยงานในบริษัทฯ.</li>
                        <li>ตรวจสอบและควบคุมการปฎิบัติตามสัญญา และการทำทะเบียนลูกหนี้</li>
                        <li>กำกับ ดูแล จัดเตรียมเอกสารแลัการประสานงานคดีความของบริษัทฯ ในเครือ ในการว่าจ้างสำนักงานทนายความ</li>
                        <li>กำกับดูแลด้านการขออณุญาต การจดทะเบียน แก้ไข เปลี่ยนแปลงกับหน่วยงานราชการ และเอกชน.</li>
                        <li>ทบทวนการจัดทำกฎระเบียบของบริษัทฯ สวัสดิการ เอกสารการรับสมัคร การลาออก และการพ้นสภาพพนักงานของบริษัทฯ</li>
                        <li>ให้คำปรึกษา เสนอความคิด คำแนะนำแก่พนักงาน และหน่วยงานอื่นในบริษัทฯ</li>
                    </ul>
                </div>
            
            <div class="row pad_description">
                <div class="col-12 col-md-6">
                    <div class="description mar">
                        <h4>คุณสมบัติผู้สมัคร</h4>
                        <ul class="job_description">
                            <li>เพศชาย หรือหญิง อายุไม่เกิน 35 ปี</li>
                            <li>สำเร็จการศึกษาระดับปริญญาตรีในสาขาสาขานิติศาสตร์</li>
                            <li>มีประสบการณ์ทำงานในด้านกฎหมาย / นิติกรรม มากกว่า 3 ปีขึ้นไป</li>
                            <li>มีมนุษยสัมพันธ์ และสามารถติดต่อประสานงานกับผู้อื่นได้ดี</li>
                            <li>มีทักษะในการเจรจาและแก้ปัญหาเฉพาะหน้าได้ดี</li>
                            <li>สามารถปฏิบัติงานต่างจังหวัดได้เป็นครั้งคราว.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="description mar">
                        <h4>สวัสดิการ</h4>
                        <ul class="job_description">
                            <li>เงินกองทุนสำรองเลี้ยงชีพ</li>
                            <li>ค่ารักษาพยาบาล และทันตกรรม</li>
                            <li>ประกันอุบัติเหตุและประกันสุขภาพ เงินพิเศษประจำปี</li>
                            <li>เงินช่วยเหลือกรณีสมรส</li>
                            <li>เงินช่วยเหลืออุปสมบท</li>
                            <li>รางวัลอายุงาน</li>
                            <li>สวัสดิการเงินเกษียณอายุงาน</li>
                            <li>ชุดยูนิฟอร์ม</li>
                            <li>ปรับเงินประจำปี/ทุกปี</li>
                            <li>โบนัสประจำปี</li>
                        </ul>
                    </div>
                </div>
            </div>
            
                <div class="description mar">
                    <h4>สถานที่ปฏิบัติงาน</h4>
                    <ul class="job_description">
                        <li>ตำบลบางพูด อำเภอปากเกร็ด จังหวัดนนทบุรี</li>
                    </ul>
                </div>
            
            <div class="textother_work">
                <h4>งานอื่น ๆ ของบริษัทนี้</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="other_work">
                            <h6>Scriptwriter/writer (freelance / Full Time)</h6>
                            <ul class="other_work_l">
                                <li><img src="images/icon/place.svg" class="img-fluid svg img_svg">อ.ปากเกร็ด จ.นนทบุรี</li>
                                <li><img src="images/icon/price.svg" class="img-fluid svg img_svg">อ.ปากเกร็ด จ.นนทบุรี</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="other_work">
                            <h6>Scriptwriter/writer (freelance / Full Time)</h6>
                            <ul class="other_work_l">
                                <li><img src="images/icon/place.svg" class="img-fluid svg img_svg">อ.ปากเกร็ด จ.นนทบุรี</li>
                                <li><img src="images/icon/price.svg" class="img-fluid svg img_svg">อ.ปากเกร็ด จ.นนทบุรี</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="other_work">
                            <h6>Scriptwriter/writer (freelance / Full Time)</h6>
                            <ul class="other_work_l">
                                <li><img src="images/icon/place.svg" class="img-fluid svg img_svg">อ.ปากเกร็ด จ.นนทบุรี</li>
                                <li><img src="images/icon/price.svg" class="img-fluid svg img_svg">อ.ปากเกร็ด จ.นนทบุรี</li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>  
        </div>
    </div>
    @include('frontend.inc_footer')
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
</body>

</html>