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
                <div class="text_banner">
                    <h2>ประเภทงาน</h2>
                </div>
                <img src="images/banner/img_job.png" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="container">
        @include('frontend.inc_job')
        </div>
    </div>
    @include('frontend.inc_footer')
</body>

</html>