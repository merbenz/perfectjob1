<style>
    .modal-dialog {
        max-width: 750px;
        margin: 1.75rem auto;
    }
</style>
<div class="service_package pad">
    <h4>แพคเกจบริการ</h4>

    <div class="table-responsive pad_table">
        <div class="from_number">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
            <div>6</div>
            <div>7</div>
            <div>8</div>
            <div>9</div>
            <div>10</div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="description">
                        <h4>Service Package</h4>
                    </th>
                    <th scope="col" class="program_program" style="padding: 0;">
                        <p class="orange">Freelance / Part time</p>

                    </th>
                    <th scope="col" class="program_program" style="padding: 0;">
                        <p class="green">Gold</p>

                    </th>
                    <th scope="col" class="program_program" style="padding: 0;">
                        <p class="blue">Platinum</p>

                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage1->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                </tr>
            

                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage2->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                </tr>
          
                
                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage3->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                </tr>

                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage4->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                </tr>
                


                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage5->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                </tr>
                
                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage6->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        {{-- <img src="images/icon/icon_check.png" class="img-fluid"> --}}
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        No
                    </th>
                </tr>

                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage7->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        {{-- <img src="images/icon/icon_check.png" class="img-fluid"> --}}
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid"> <br>
                        (under JP)
                    </th>
                </tr>

                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage8->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        {{-- <img src="images/icon/icon_check.png" class="img-fluid"> --}}
                    </th>
                    <th class="bgcheck_one">
                        No
                    </th>
                    <th class="bgcheck_one">
                        <img src="images/icon/icon_check.png" class="img-fluid">
                    </th>
                </tr>

                
                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage9->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        {{-- <img src="images/icon/icon_check.png" class="img-fluid"> --}}
                    </th>
                    <th class="bgcheck_one">
                        Unlimited
                    </th>
                    <th class="bgcheck_one">
                        Unlimited (Under JP)
                    </th>
                </tr>

                <tr>
                    <th scope="row" class="text_description">
                        <p>{{$servicepackage10->name}}</p>
                    </th>
                    <th class="bgcheck_one shadow">
                        {{-- <img src="images/icon/icon_check.png" class="img-fluid"> --}}
                    </th>
                    <th class="bgcheck_one">
                        Monthly fee
                    </th>
                    <th class="bgcheck_one">
                        By position when hiring
                    </th>
                </tr>

                <tr>
                    <th scope="row" class="text_description">
                        <p></p>
                    </th>

                    <th class="bgcheck_one shadow">
                        <div class=""><a href="" data-toggle="modal" data-target="#m1">ขอใบเสนอราคา</a></div>
                    </th>
                    <th class="bgcheck_one">
                        <div class=""><a href="" data-toggle="modal" data-target="#m1">ขอใบเสนอราคา</a></div>
                    </th>
                    <th class="bgcheck_one">
                        <div class=""><a href="" data-toggle="modal" data-target="#m1">ขอใบเสนอราคา</a></div>
                    </th>
                </tr> 

            </tbody>
        </table>
        <div class="promotion">
            <p><span>Hot Promotion :</span> Promotion for new comers on web based process	</p>
            <p><span>Gold : </span>50%  (no charge if hire more than 5 position, ไม่มึค่าบริการเว็บหาใช้บริการรีครูทพนักงานมากกว่า 5-9 ตำแหน่ง)			</p>
            <p><span>Platinum :	</span>50%	(no charge if hire more than 5 position, ไม่มึค่าบริการเว็บหาใช้บริการรีครูทพนักงานมากกว่า 10 ตำแหน่ง)			</p>
        </div>
    </div>
</div>
<div class="modal fade" id="m1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <button type="button" class="close-m1" data-dismiss="modal">&times;</button>

        <div class="modal-content">
            <div class="modal-body">
                <h5>ขอใบเสนอราคา</h5>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputname">ชื่อบริษัท</label>
                            <input type="name" class="form-control" id="exampleInputname">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputname">ชื่อผู้ติดต่อ</label>
                            <input type="name" class="form-control" id="exampleInputname">
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputtel">โทรศัพท์ Ext.</label>
                            <input type="tel" class="form-control" id="exampleInputtel">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputline">มือถือ</label>
                            <input type="line" class="form-control" id="exampleInputline">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputname">อีเมล</label>
                    <input type="name" class="form-control" id="exampleInputname">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputline">ข้อความ</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>



                <div class="pad-footer-send">
                    <button type="button" class="button_send_">ส่งข้อความ</button>
                    <button type="button" class="button_send_ cancel">ยกเลิก</button>
                </div>
            </div>

        </div>

    </div>
</div>