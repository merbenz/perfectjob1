
<aside class="sidebar">
    <nav class="sidebar-nav">
        <ul class="metismenu">
            <li class="title font-12">
                <i> ━━ Website</i>
            </li><li>
                <a href="{{ url('manage/index') }}">
                    <i class="fa fa-object-group"></i>&nbsp;
                    <span class="nav-label">หน้าแรก</span>
                </a>
            </li><li>
                <a href=" " class="menu-toggle">
                    <i class="fa fa-hospital-o fa-lg" aria-hidden="true" ></i>&nbsp;
                    <span class="nav-label">ศูนย์รักษาโรค</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('manage/center') }}">ศูนย์และคลินิก</a>
                    </li><li>
                        <a href="{{ url('manage/our-technology') }}">เทคโนโลยีการรักษา</a>
                    </li><li>
                        <a href="{{ url('manage/patient-stories') }}">ความประทับใจของผู้ป่วย</a>
                    </li>
                </ul>
            </li><li>
                <a href=" " class="menu-toggle">
                    <i class="fa fa-book fa-lg" aria-hidden="true" ></i>&nbsp;
                    <span class="nav-label">ข้อมูลสำหรับผู้ป่วย</span>
                </a>
                <ul><li>
                        <a href="{{ url('manage/room-rate') }}">ห้องพักผู้ป่วย</a>
                    </li><li>
                        <a href="{{ url('manage/facility') }}">สิ่งอำนวยความสะดวก</a>
                    </li>
                </ul>
            </li><li>
                <a href=" " class="menu-toggle">
                    <i class="fa fa-heartbeat fa-lg" aria-hidden="true" ></i>&nbsp;
                    <span class="nav-label">ข้อมูลสุขภาพ</span>
                </a>
                <ul><li>
                        <a href="{{ url('manage/health-expert') }}">บทความสุขภาพ</a>
                    </li><li>
                        <a href="{{ url('manage/newsletter') }}">Newsletter</a>
                    </li><li>
                        <a href="{{ url('manage/vdo') }}">VDO</a>
                    </li><li>
                        <a href="{{ url('manage/podcast') }}">Podcast</a>
                    </li>
                </ul>
            </li><li>
                <a href=" " class="menu-toggle">
                    <i class="fa fa-heart fa-lg" aria-hidden="true" ></i>&nbsp;
                    <span class="nav-label">เกี่ยวกับเรา</span>
                </a>
                <ul><li>
                    <a href=" " class="menu-toggle">
                        <span>รู้จักโรงพยาบาลวิภาวดี</span>
                    </a>
                    <ul><li>
                            <a href="{{ url('manage/about-us') }}">รู้จักโรงพยาบาลวิภาวดี</a>
                        </li><li>
                            <a href="{{ url('manage/vision-mission') }}">วิสัยทัศน์ และ พันธกิจ</a>
                        </li><li>
                            <a href="{{ url('manage/fromceo') }}">สาส์นจากประธานกรรมการบริษัท</a>
                        </li><li>
                            <a href="{{ url('manage/csr') }}">ความรับผิดชอบต่อสังคม</a>
                        </li><li>
                            <a href="{{ url('manage/career') }}">ร่วมงานกับเรา</a>
                        </li>
                    </ul>
                </li><li>
                        <a href="{{ url('manage/accreditation') }}">คุณภาพมาตรฐานระดับสากล</a>
                    </li><li>
                        <a href="{{ url('manage/international-affiliation') }}">ความร่วมมือกับนานาชาติ</a>
                    </li><li>
                        <a href="{{ url('manage/news') }}">ข่าวสารและกิจกรรม</a>
                    </li><li>
                        <a href="{{ url('manage/investor') }}">นักลงทุนสัมพันธ์</a>
                    </li>
                </ul>
            </li><li class="title font-12">
                <i> ━━ Package and Promotion</i>
            </li><li>
                <a href="{{ url('PackageList') }}">
                    <i class="fa fa-newspaper-o fa-lg"></i>&nbsp;
                    <span class="nav-label">แพคเกจทั้งหมด</span>
                </a>
            </li><li>
                <a href="{{ url('PromotionList') }}">
                    <i class="fa fa-newspaper-o fa-lg"></i>&nbsp;
                    <span class="nav-label">โปรโมชั่นทั้งหมด</span>
                </a>
            </li><li>
                <a href="{{ url('OrderList') }}">
                    <i class="fa fa-newspaper-o fa-lg"></i>&nbsp;
                    <span class="nav-label">ข้อมูลการสั่งซื้อ</span>
                </a>
            </li><li class="title font-12">
                <i> ━━ Doctor</i>
            </li><li>
                <a href="{{ url('DoctorList') }}">
                    <i class="fa fa-user fa-lg"></i>&nbsp;
                    <span class="nav-label">ข้อมูลแพทย์</span>
                </a>
            </li><li>
                <a href="{{ url('AppointmentList') }}">
                    <i class="fa fa-comments fa-lg"></i>&nbsp;
                    <span class="nav-label">นัดหมายแพทย์</span>
                </a>
            </li><li class="title font-12">
                <i> ━━ Feedback</i>
            </li><li>
                <a href="{{ url('CommentList') }}">
                    <i class="fa fa-comments fa-lg"></i>&nbsp;
                    <span class="nav-label">ความคิดเห็นและข้อเสนอแนะ</span>
                </a>
            </li><li class="title font-12">
                <i> ━━ Investor Relations</i>
            </li>
            <li>
                <a href=" " class="menu-toggle">
                    <i class="fa fa-info-circle fa-lg"></i>&nbsp;
                        <span class="nav-label">ข้อมูลบริษัท</span>
                </a>
                <ul><li>
                        <a href="{{ url('manage/ir-network') }}">เครือข่ายโรงพยาบาล</a>
                    </li><li>
                        <a href="{{ url('manage/ir-company') }}">ประวัติบริษัท</a>
                    </li><li>
                        <a href=" " class="menu-toggle">
                            <span class="nav-label">โครงสร้างการจัดการ</span>
                        </a>
                        <ul><li>
                                <a href="{{ url('manage/ir-management') }}">โครงสร้างการจัดการ</a>
                            </li><li>
                                <a href="{{ url('manage/ir-board') }}">คณะกรรมการบริษัท</a>
                            </li><li>
                                <a href="{{ url('manage/ir-executive') }}">ผู้บริหาร</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('manage/ir-credit') }}">การจัดอันดับความน่าเชื่อถือ</a>
                    </li><li>
                        <a href="{{ url('manage/ir-analyst') }}">ข้อมูลนักวิเคราะห์</a>
                    </li>
                </ul>
            </li><li>
                <a href=" " class="menu-toggle">
                    <i class="fa fa-list-alt fa-lg" aria-hidden="true" ></i>&nbsp;
                    <span class="nav-label">ข้อมูลทางการเงิน</span>
                </a>
                <ul><li>
                        <a href="{{ url('manage/ir-financial-highlights') }}">ข้อมูลสำคัญทางการเงิน</a>
                    </li><li>
                        <a href="{{ url('manage/ir-financial-statements') }}">งบการเงิน</a>
                    </li><li>
                        <a href="{{ url('manage/ir-mdna') }}">คำอธิบายและการวิเคราะห์ของฝ่ายการจัดการ</a>
                    </li>
                </ul>
            </li><li>
                <a href="{{ url('manage/ir-corporate') }}">
                    <i class="fa fa-users fa-lg"></i>&nbsp;
                    <span class="nav-label">การกำกับดูแลกิจการที่ดี</span>
                </a>
            </li><li>
                <a href=" " class="menu-toggle">
                    <i class="fa fa-list-alt fa-lg" aria-hidden="true" ></i>&nbsp;
                    <span class="nav-label">ข้อมูลสำหรับผู้ถือหุ้น</span>
                </a>
                <ul><li>
                        <a href="#">ข้อมูลสำคัญทางการเงิน</a>
                    </li><li>
                        <a href=" " class="menu-toggle">
                            <span class="nav-label">การประชุมผู้ถือหุ้น</span>
                        </a>
                        <ul><li>
                                <a href="{{ url('manage/ir-proposing-agenda-agm') }}">เสนอวาระการประชุมผู้ถือหุ้น</a>
                            </li><li>
                                <a href=" " class="menu-toggle">
                                    <span class="nav-label">หนังสือเชิญประชุมผู้ถือหุ้น</span>
                                </a>
                                <ul><li>
                                        <a style="text-align: end;" href="{{ url('manage/ir-shareholders-meeting-invitation-agm') }}">AGM&nbsp;&nbsp;&nbsp;</a>
                                    </li><li>
                                        <a style="text-align: end;" href="{{ url('manage/ir-shareholders-meeting-invitation-egm') }}">EGM&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                </ul>
                            </li><li>
                                <a href=" " class="menu-toggle">
                                    <span class="nav-label">รายงานการประชุมผู้ถือหุ้น</span>
                                </a>
                                <ul><li>
                                        <a style="text-align: end;" href="{{ url('manage/ir-shareholders-meeting-minutes-agm') }}">AGM&nbsp;&nbsp;&nbsp;</a>
                                    </li><li>
                                        <a style="text-align: end;" href="{{ url('manage/ir-shareholders-meeting-minutes-egm') }}">EGM&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li><li>
                        <a href="{{ url('manage/ir-dividend-policy-payment') }}">นโยบายและข้อมูลการจ่ายเงินปันผล</a>
                    </li><li>
                        <a href="{{ url('manage/ir-calendar') }}">ปฏิทินกิจกรรม</a>
                    </li><li>
                        <a href="{{ url('manage/ir-publication') }}">รายงานประจำปี</a>
                    </li>
                </ul>
            </li><li>
                <a href="{{ url('manage/ir-presentations') }}">
                    <i class="fa fa-bar-chart fa-lg"></i>&nbsp;
                    <span class="nav-label">การนำเสนอข้อมูล</span>
                </a>
            </li>

            <li>
                <a href=" " class="menu-toggle">
                    <i class="fa fa-list-alt fa-lg"></i>&nbsp;
                        <span class="nav-label">เอกสารนำเสนอ</span>
                </a>
                <ul><li>
                        <a href="{{ url('manage/ir-publication') }}">รายงานประจำปี</a>
                    </li><li>
                        <a href="{{ url('manage/ir-form') }}">แบบฟอร์ม 56-1</a>
                    </li><li>
                        <a href="{{ url('manage/ir-set') }}">ข่าวแจ้งตลาดหลักทรัพย์</a>
                    </li><li>
                        <a href="{{ url('manage/ir-news') }}">ข่าวแจ้งนักลงทุน</a>
                    </li>
                </ul>
            </li>
        </ul>
        <br><br><br>
    </nav>
</aside>