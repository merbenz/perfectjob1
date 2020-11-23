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
                <img src="../images/banner/img_my_company.png" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="container nopad_mobile">
            <div class="row">
                <div class="col-12">
                    <div class="boxtext_help">
                        <h2>สำหรับบริษัท</h2>
                    </div>
                </div>
            </div>
            <div class="filter_mobile" onclick="openNav()"> <i class="fa fa-filter" aria-hidden="true"></i> ฝากประวัติ </div>
            <form action="{{ url('/corporate/company')}}" method="POST" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="filter_pc">
                    @include('frontend.inc_menu_corporate')
                    </div>
                </div>
               
                @csrf
                <div class="col-12 col-md-12 col-lg-9 pad_create_profile">
                    <div class="create_profile green">
                        <h4>ข้อมูลบริษัท</h4>
                         <div class="row text_create">
                            
                            {{-- <div class="col-12 col-md-4">
                                <p>โลโก้บริษัท <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="file-upload">
                                  <div class="file-select">
                                    
                                    <div class="file-select-name" id="noFile"></div> 
                                    <div class="file-select-button" id="fileName">เลือกไฟล์</div>
                                    <input type="file" name="chooseFile1" id="chooseFile1">
                                  </div>
                                </div>                               
                            </div>            
                            <div class="col-12 col-md-4">
                                <p>รูปบริษัท <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                               <div class="file-upload">
                                  <div class="file-select">
                                    
                                    <div class="file-select-name" id="noFile"></div> 
                                    <div class="file-select-button" id="fileName">เลือกไฟล์</div>
                                    <input type="file" name="chooseFile2" id="chooseFile2">
                                  </div>
                                </div>
                            </div> --}}
                            
                            <div class="col-12 col-md-4">
                                <p>ชื่อบริษัท   <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create" type="text" name="name" required ="required">
                            </div>
                            
                             
                            <div class="col-12 col-md-4">
                                <p>ประเภทงาน   <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create" type="taxt" name="business" required ="required">
                            </div>
                             
                            <div class="col-12 col-md-4">
                                <p>รายละเอียดบริษัท  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" name="description" id="exampleTextarea" rows="3" required ="required"></textarea>
                            </div>     

                            <div class="col-12 col-md-4">
                                <p>เว็บไซต์   <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create" type="taxt" name="nameweb" required ="required">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>ที่อยู่  <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" name="address" id="exampleTextarea" rows="3" required ="required"></textarea>
                            </div>
                             
                            
                            <div class="col-12 col-md-4">
                                <p>แผนที่ <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                               <div class="file-upload">
                                  <div class="file-select">
                                    
                                    <div class="file-select-name" id="noFile"></div> 
                                    <div class="file-select-button" id="fileName">เลือกไฟล์</div>
                                    <input type="file" name="chooseFile2" id="chooseFile2">
                                  </div>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button type="submit" class="button_save">บันทึก <i class="fa fa-caret-right" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        @include('frontend.inc_menu_corporate')
        </div>
    </div>
    @include('frontend.inc_footer')
    <script>
        $('.sidemenumem li:nth-child(3) ').addClass('active');
    </script>
    <script>
        $('#chooseFile1').bind('change', function () {
          var filename = $("#chooseFile1").val();
          if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile").text("No file chosen..."); 
          }
          else {
            $(".file-upload").addClass('active');
            $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
          }
        });
        $('#chooseFile2').bind('change', function () {
          var filename = $("#chooseFile2").val();
          if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile").text("No file chosen..."); 
          }
          else {
            $(".file-upload").addClass('active');
            $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
          }
        });
    </script>
</body>

</html>