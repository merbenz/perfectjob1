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
            <form action="{{ url('/jobdescription')}}" method="POST" enctype="multipart/form-data" >    
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="filter_pc">
                    @include('frontend.inc_menu_corporate')
                    </div>
                </div>
                @csrf
                <div class="col-12 col-md-12 col-lg-9 pad_create_profile">
                    <div class="create_profile orange">
                        <h4>คำร้องรับสมัครงาน</h4>
                         <div class="row text_create">
                                
                            <div class="col-12 col-md-4">
                                <p>ตำแหน่ง <span>*</span></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create" type="text" name="position" required ="required">
                            </div>
                            
                            
                            <div class="col-12 col-md-4">
                                <p>เงินเดือน</p>
                            </div>
                            <div class="col-12 col-md-8">
                               <input class="form-create" type="text" name="salary" required ="required">
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>ระดับภาษาญี่ปุ่น</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" name="Japanese">
                                    <option>เลือก</option>
                                    <option>N1</option>
                                    <option>N2</option>
                                    <option>N3</option>
                                    <option>N4</option>
                                 </select>
                            </div>
                            
                             
                            <div class="col-12 col-md-4">
                                <p>อัตรา </p>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-create" type="text" name="rate" required ="required">
                            </div>
                             
                            <div class="col-12 col-md-4">
                                <p>ประสบการณ์  </p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" name="experience" rows="3" required ="required"></textarea>
                            </div>
                             
                            <div class="col-12 col-md-4">
                                <p>รายละเอียด  </p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" name="detail" rows="3" required ="required"></textarea>
                            </div>
                             
                            <div class="col-12 col-md-4">
                                <p>คุณสมบัติผู้สมัคร  </p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" name="property" rows="3" required ="required"></textarea>
                            </div>
                             
                            <div class="col-12 col-md-4">
                                <p>สวัสดิการ  </p>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea class="form-control" name="welfare" rows="3" required ="required"></textarea>
                            </div> 
                            
                            <div class="col-12 col-md-4">
                                <p>สมรรถนะ 1</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                                
                                <p>คำถาม 1</p>
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                                <p>คำถาม 2</p>
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>สมรรถนะ 2</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                                
                                <p>คำถาม 1</p>
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                                <p>คำถาม 2</p>
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <p>สมรรถนะ 3</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                                
                                <p>คำถาม 1</p>
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
                                <p>คำถาม 2</p>
                                <select class="form-control" id="exampleSelect1">
                                    <option>เลือก</option>
                                    <option>1</option>
                                 </select>
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
        </div>
    </div>
</form>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        @include('frontend.inc_menu_corporate')
        </div>
    </div>
    @include('frontend.inc_footer')
    <script>
        $('.sidemenumem li:nth-child(4) ').addClass('active');
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