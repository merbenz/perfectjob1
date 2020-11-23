<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('indextest', function () {
//     return view('frontend.indextest');
// });

/////////////////////* ส่วนเมอเบนซ์ *////////////////////////

// หน้าแรก index.blade.php
Route::get('index', function () {
    return view('frontend.index');
});

// Route::get('/', function () {
//     return view('welcome');
// });


// ข้อมูลการศึกษา create_education.blade.php
Route::get('create_education', function () {
    return view('frontend.create_education');
});

// ข้อมูลประสบการณ์ทำงาน create_experiences.blade.php
Route::get('create_experiences', function () {
    return view('frontend.create_experiences');
});

// ตารางนัดสัมภาษณ์ของผู้สมัคร create_interview.blade.php
Route::get('create_interview', function () {
    return view('frontend.create_interview');
});

// สถานะการสัมภาษณ์ create_interview_status.blade.php
Route::get('create_interview_status', function () {
    return view('frontend.create_interview_status');
});

// โปรไฟล์ของฉัน create_my_profile.blade.php
Route::get('create_my_profile', function () {
    return view('frontend.create_my_profile');
});

// ข้อมูลส่วนตัว create_profile.blade.php
Route::get('create_profile', function () {
    return view('frontend.create_profile');
});

// ทักษะอื่นๆ create_skills.blade.php
Route::get('create_skills', function () {
    return view('frontend.create_skills');
});

// ประวัติการสมัครงานล่าสุด create_steps.blade.php
Route::get('create_steps', function () {
    return view('frontend.create_steps');
});

// อัพโหลดใบประกาศ create_upload_certificate.blade.php
Route::get('create_upload_certificate', function () {
    return view('frontend.create_upload_certificate');
});

// อัพโหลดรูป create_upload_picture.blade.php
Route::get('create_upload_picture', function () {
    return view('frontend.create_upload_picture');
});

// อัพโหลดเรซูเม่ create_upload_resumer.blade.php
Route::get('create_upload_resumer', function () {
    return view('frontend.create_upload_resumer');
});

// อัพโหลดวีดีโอคลิป create_upload_vdo.blade.php
Route::get('create_upload_vdo', function () {
    return view('frontend.create_upload_vdo');
});

// วีดีโอตอบคำถาม create_video_quiz.blade.php
Route::get('create_video_quiz', function () {
    return view('frontend.create_video_quiz');
});

// เลือกอัพโหลดวิดีโอ create_video_quiz_more.blade.php
Route::get('create_video_quiz_more', function () {
    return view('frontend.create_video_quiz_more');
});

// ประเภทงาน job.blade.php
Route::get('job', function () {
    return view('frontend.job');
});

// ตำแหน่งงานแต่ละบริษัท job_company.blade.php
Route::get('job_company', function () {
    return view('frontend.job_company');
});

// รายละเอียดตำแหน่งงาน job_details.blade.php
Route::get('job_details', function () {
    return view('frontend.job_details');
});

// ตำแหน่งงาน job_readmore.blade.php
Route::get('job_readmore', function () {
    return view('frontend.job_readmore');
});

// เข้าสู่ระบบสำหรับผู้สมัครงาน login.blade.php
Route::get('login', function () {
    return view('frontend.login');
});


// สมัครสมาชิก register.blade.php
Route::get('register', function () {
    return view('frontend.register');
});



/////////////////////* ส่วนน้ำฝน *////////////////////////

/* บริการสำหรับบริษัท */

// บริการสำหรับบริษัท services.blade.php
// Route::get('services', function () {
//     return view('frontend.services');
// });
///////////////services////////////////////
Route::get('/services','Admin\ServicesController@frontend');
Route::get('/manage/services','Admin\ServicesController@index');
Route::get('/create/services','Admin\ServicesController@create');
Route::post('/manage/services','Admin\ServicesController@store');
Route::get('view/services/{id}','Admin\ServicesController@show');
Route::post('/update/services/{id}','Admin\ServicesController@update');
Route::get('/delete_img/services','Admin\ServicesController@delete_img');
Route::get('delete/services/','Admin\ServicesController@destroy');
Route::get('services/datatables','Admin\ServicesController@datatables');  


///////////////services-profile////////////////////
// Route::get('/services','Admin\ServicesprofileController@frontend');
Route::get('/manage/services-profile','Admin\ServicesprofileController@index_profile');
Route::get('/create/services-profile','Admin\ServicesprofileController@create_profile');
Route::post('/manage/services-profile','Admin\ServicesprofileController@store_profile');
Route::get('view/services-profile/{id}','Admin\ServicesprofileController@show_profile');
Route::post('/update/services-profile/{id}','Admin\ServicesprofileController@update_profile');
Route::get('/delete_img/services-profile','Admin\ServicesprofileController@delete_img_profile');
Route::get('delete/services-profile/','Admin\ServicesprofileController@destroy_profile');
Route::get('services-profile/datatables','Admin\ServicesprofileController@datatables'); 

///////////////Service Package////////////////////
Route::get('/manage/services-package','Admin\ServicespackageController@index');
Route::get('/create/services-package','Admin\ServicespackageController@create');
Route::post('/manage/services-package','Admin\ServicespackageController@store');
Route::get('view/services-package/{id}','Admin\ServicespackageController@show');
Route::post('/update/services-package/{id}','Admin\ServicespackageController@update');
// Route::get('/delete_img/services-package','Admin\ServicespackageController@delete_img');
Route::get('delete/services-package/','Admin\ServicespackageController@destroy');
Route::get('services-package/datatables','Admin\ServicespackageController@datatables'); 

///////////////////////////////////////////////////////
                
                /* สำหรับบริษัท */

//  โปร์ไฟล์ของบริษัท corporate_profile.blade.php
Route::get('corporate/profile', function () {
    return view('frontend.corporate_profile');
});

// ข้อมูลบริษัท corporate_company.blade.php
Route::get('corporate/company', function () {
    return view('frontend.corporate_company');
});

// คำร้องรับสมัครงาน corporate_jobdescription.blade.php
Route::get('corporate/jobdescription', function () {
    return view('frontend.corporate_jobdescription');
});

// คัดเลือกผู้สมัคร corporate_jobinterview.blade.php
Route::get('corporate/jobinterview', function () {
    return view('frontend.corporate_jobinterview');
});

// ตารางนัดสัมภาษณ์ corporate_interview_schedule.blade.php
Route::get('corporate/interview/schedule', function () {
    return view('frontend.corporate_interview_schedule');
});

//  สถานะการคัดเลือก corporate_status.blade.php
Route::get('corporate/status', function () {
    return view('frontend.corporate_status');
});

///////////////////////////////////////////////////////

                    /* ข่าวสารและกิจกรรม */


/////////////////////////ข่าวสาร//////////////////////////////
 Route::get('/news/events','Admin\NewsController@frontend');
 Route::get('/manage/news','Admin\NewsController@index');
 Route::get('/create/news','Admin\NewsController@create');
 Route::post('/manage/news','Admin\NewsController@store');
 Route::get('view/news/{id}','Admin\NewsController@show');
 Route::post('/update/news/{id}','Admin\NewsController@update');
//  Route::get('/delete_img/news','Admin\NewsController@delete_img');
 Route::get('delete/news','Admin\NewsController@destroy');
 Route::get('readmorenews/{read}/{id}','Admin\NewsController@newsdetail');
 Route::get('news/datatables','Admin\NewsController@datatables');                   



/////////////////////////////กิจกรรม/////////////////////////////////////

Route::get('/manage/activity','Admin\ActivityController@index_activity');
Route::get('/create/activity','Admin\ActivityController@create_activity');
Route::post('/manage/activity','Admin\ActivityController@store_activity');
Route::get('view/activity/{id}','Admin\ActivityController@show_activity');
Route::post('/update/activity/{id}','Admin\ActivityController@update_activity');
// Route::get('/delete_img/activity','Admin\ActivityController@delete_img_activity');
Route::get('delete/activity/','Admin\ActivityController@destroy_activity');
Route::get('activity/datatables','Admin\ActivityController@datatables');                   


// ข่าวสาร news_events.blade.php
// Route::get('news_events', function () {
//     return view('frontend.news_events');
// });

// รายละเอียดข่าว readmore_new.blade.php
// Route::get('readmore_new', function () {
//     return view('frontend.readmore_new');
// });

///////////////////////////////////////////////////////

                    /* เกี่ยวกับเรา */

// เกี่ยวกับเรา about.blade.php
// Route::get('about', function () {
//     return view('frontend.about');
// });

Route::get('/about','Admin\AboutController@frontend');
Route::get('/manage/about','Admin\AboutController@index');
Route::get('/create/about','Admin\AboutController@create');
Route::post('/manage/about','Admin\AboutController@store');
Route::get('view/about/{id}','Admin\AboutController@show');
Route::post('/update/about/{id}','Admin\AboutController@update');
// Route::get('/delete_img/about','Admin\AboutController@delete_img');
Route::get('delete/about/','Admin\AboutController@destroy');
Route::get('about/datatables','Admin\AboutController@datatables');

///////////////////Mission/////////////////////////

Route::get('/manage/mission','Admin\MissionController@index_mission');
Route::get('/create/mission','Admin\MissionController@create_mission');
Route::post('/manage/mission','Admin\MissionController@store_mission');
Route::get('view/mission/{id}','Admin\MissionController@show_mission');
Route::post('/update/mission/{id}','Admin\MissionController@update_mission');
// Route::get('/delete_img/mission','Admin\MissionController@delete_img_mission');
Route::get('delete/mission/','Admin\MissionController@destroy_mission');
Route::get('mission/datatables','Admin\MissionController@datatables');

///////////////////////////////////////////////////////

                    /* ติดต่อเรา */

Route::post('/contact','Admin\ContactController@sert');
Route::get('/manage/contact','Admin\ContactController@index');
// Route::get('/create/contact','Admin\ContactController@create');
// Route::post('/manage/contact','Admin\ContactController@store');
Route::get('view/contact/{id}','Admin\ContactController@show');
// Route::post('/update/contact/{id}','Admin\ContactController@update');
Route::get('delete/contact','Admin\ContactController@destroy');
Route::get('contact/datatables','Admin\ContactController@datatables');


///////////////////////////////////////////////////////

                    /* นโยบายความเป็นส่วนตัว */
 Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('/manage/privacy','Admin\PrivacyController@index');
Route::get('/create/privacy','Admin\PrivacyController@create');
Route::post('/manage/privacy','Admin\PrivacyController@store');
Route::get('view/privacy/{id}','Admin\PrivacyController@show');
Route::post('/update/privacy/','Admin\PrivacyController@update');
// Route::get('/delete_img/privacy','Admin\PrivacyController@delete_img');
Route::get('delete/privacy/','Admin\PrivacyController@destroy');
Route::get('privacy/datatables/','Admin\PrivacyController@datatables');                   


                                /* จัดการข้อมูลบริษัท */
Route::get('/manage/companyinfomation','Admin\CompanyInfomationController@index');
Route::get('companyinfomation/datatables','Admin\CompanyInfomationController@datatables');
Route::get('/create/companyinfomation','Admin\CompanyInfomationController@create');
Route::post('/manage/companyinfomation','Admin\CompanyInfomationController@store');
Route::get('view/companyinfomation/{idCompany}','Admin\CompanyInfomationController@show');
Route::post('/update/companyinfomation/{idCompany}','Admin\CompanyInfomationController@update');
Route::get('delete/companyinfomation/','Admin\CompanyInfomationController@destroy');
                                /* จัดการข้อมูลบริษัท ตำแหน่งงาน */
Route::get('/corporate/profile','Admin\CompanyInfomationController@frontend_job');
Route::get('/managejob/companyinfomation/{idCompany}','Admin\CompanyInfomationController@index_job');
Route::get('companyinfomationjob/datatables','Admin\CompanyInfomationController@datatables_job');
Route::get('/createjob/companyinfomation/{idCompany}','Admin\CompanyInfomationController@create_job');
Route::post('/managejob/companyinfomation/{idCompany}','Admin\CompanyInfomationController@store_job');
Route::get('viewjob/companyinfomation/{idJob}','Admin\CompanyInfomationController@show_job');
Route::post('/updatejob/companyinfomation/{idCompany}','Admin\CompanyInfomationController@update_job');
Route::get('deletejob/companyinfomation/','Admin\CompanyInfomationController@destroy_job');
/////////////////////////////////////////////////////////////////



//////////////////////////// บริษัท ////////////////////////////// 
Route::post('/company','Company\CompanyinfoController@sert');
Route::get('/manage/company','Company\CompanyinfoController@index');
Route::get('company/datatables','Company\CompanyinfoController@datatables');
// Route::get('/create/Company','Company\CompanyinfoController@create');
// Route::post('/manage/Company','Company\CompanyinfoController@store');
Route::get('view/company/{id}','Company\CompanyinfoController@show');
// Route::post('/update/Company/{id}','Company\CompanyinfoController@update');
Route::get('delete/company/{id}','Company\CompanyinfoController@destroy');

///////////////หลังบ้าน//////////////

////////// Admin Jobperfect /////////
Route::get('admin/home',function(){
    return view('backend.home');
});
// Route::get('manage/capacity',function(){
//     //dd(1);
//     return view('backend.capacity.list');
// });

////////// Admin company /////////
Route::get('company/home',function(){
    return view('backend.company');
});

/* ------------------------- Banner ---------------------------------- */
////////////////////////////////////////////////////////////////////////

//<----------------------------------------------------------------->//
Route::get('/manage/banner','Admin\BannerController@index');
Route::get('/create/banner','Admin\BannerController@create');
Route::post('/manage/banner','Admin\BannerController@store');
Route::get('view/banner/{id}','Admin\BannerController@show');
Route::post('/update/banner/{id}','Admin\BannerController@update');
Route::get('delete/banner/','Admin\BannerController@destroy'); 
Route::get('banner/datatables/','Admin\BannerController@datatables');

////////////////////////////////////////////////////////////////////////
/*---------------------------------------------------------------------*/


/* -------------- ข้อมูลบริษัท --------------- */
Route::get('/corporate/profile','Company\CompanyinfoController@frontend');
Route::post('/corporate/company','Company\CompanyinfoController@sert');
Route::get('/manage/company','Company\CompanyinfoController@index');
Route::get('/create/company','Company\CompanyinfoController@create');
Route::post('/manage/company','Company\CompanyinfoController@store');
Route::get('view/company/{idCompany}','Company\CompanyinfoController@show');
Route::post('/update/company/{idCompany}','Company\CompanyinfoController@update');
Route::get('/delete_img/company','Company\CompanyinfoController@delete_img');
Route::get('delete/company/{idCompany}','Company\CompanyinfoController@destroy');       

/*------------------------------คำร้องรับสมัครงาน--------------------------------------*/
Route::get('/corporate/profile','Company\CorporatejobdescriptionController@frontend');
Route::post('/corporate/jobdescription','Company\CorporatejobdescriptionController@sert');
Route::get('/manage/corporate/jobdescription','Company\CorporatejobdescriptionController@index');
// Route::get('/create/corporate/jobdescription','Company\CorporatejobdescriptionController@create');
Route::post('/manage/corporate/jobdescription','Company\CorporatejobdescriptionController@store');
Route::get('view/corporate/jobdescription/{idJob}','Company\CorporatejobdescriptionController@show');
Route::post('/update/corporate/jobdescription/{idJob}','Company\CorporatejobdescriptionController@update');
// Route::get('/delete_img/corporate/jobdescription','Company\CorporatejobdescriptionController@delete_img');
Route::get('delete/corporate/jobdescription/','Company\CorporatejobdescriptionController@destroy');
Route::get('corporate/jobdescription/datatables','Company\CorporatejobdescriptionController@datatables');


/* -------------- ตำแหน่งงานในบริษัท --------------- */
Route::get('/corporate/profile','Company\CorporatejobdescriptionController@frontend');
// Route::post('/corporate/company','Company\CorporatejobdescriptionController@sert');
// Route::get('/manage/company','Company\CorporatejobdescriptionController@index');
// Route::get('/create/company','Company\CorporatejobdescriptionController@create');
// Route::post('/manage/company','Company\CorporatejobdescriptionController@store');
// Route::get('view/company/{id}','Company\CorporatejobdescriptionController@show');
// Route::post('/update/company/{id}','Company\CorporatejobdescriptionController@update');
// Route::get('/delete_img/company','Company\CorporatejobdescriptionController@delete_img');
// Route::get('delete/company/{id}','Company\CorporatejobdescriptionController@destroy');       


///////////////////////////////////หลังบ้านบริษัท//////////////////////////////////
/*------------------------------ข้อมูลบริษัท---------------------------------------*/
Route::get('/corporate/profile','AdCompany\CompanyprofileController@frontend');
Route::get('/manage/companyprofile','AdCompany\CompanyprofileController@index');
// Route::get('/create/companyprofile','AdCompany\CompanyprofileController@create');
Route::post('/manage/companyprofile','AdCompany\CompanyprofileController@store');
Route::get('view/companyprofile/{id}','AdCompany\CompanyprofileController@show');
Route::post('/update/companyprofile/{id}','AdCompany\CompanyprofileController@update');
// Route::get('/delete_img/companyprofile','AdCompany\CompanyprofileController@delete_img');
Route::get('delete/companyprofile/','AdCompany\CompanyprofileController@destroy');
Route::get('companyprofile/datatables','AdCompany\CompanyprofileController@datatables');

// /*------------------------------คำร้องรับสมัครงาน--------------------------------------*/
// Route::get('/corporate/jobdescription','AdCompany\CorporatejobdescriptionController@frontend');
// Route::get('/manage/corporate/jobdescription','AdCompany\CorporatejobdescriptionController@index');
// // Route::get('/create/corporate/jobdescription','AdCompany\CorporatejobdescriptionController@create');
// Route::post('/manage/corporate/jobdescription','AdCompany\CorporatejobdescriptionController@store');
// Route::get('view/corporate/jobdescription/{id}','AdCompany\CorporatejobdescriptionController@show');
// Route::post('/update/corporate/jobdescription/{id}','AdCompany\CorporatejobdescriptionController@update');
// // Route::get('/delete_img/corporate/jobdescription','AdCompany\CorporatejobdescriptionController@delete_img');
// Route::get('delete/corporate/jobdescription/','AdCompany\CorporatejobdescriptionController@destroy');
// Route::get('corporate/jobdescription/datatables','AdCompany\CorporatejobdescriptionController@datatables');

 /*------------------------------คำขอใบเสนอราคา--------------------------------------*/
Route::post('/requestquote','Admin\Servicesrequestquote@sert');
Route::get('/manage/requestquote','Admin\Servicesrequestquote@index');
// Route::get('/create/requestquote','Admin\Servicesrequestquote@create');
// Route::post('/manage/requestquote','Admin\Servicesrequestquote@store');
Route::get('view/requestquote/{id}','Admin\Servicesrequestquote@show');
// Route::post('/update/requestquote/{id}','Admin\Servicesrequestquote@update');
Route::get('delete/requestquote','Admin\Servicesrequestquote@destroy');
Route::get('requestquote/datatables','Admin\Servicesrequestquote@datatables');

                                    /* สมรรถนะ */
Route::get('manage/capacity','Admin\CapacityController@index');
Route::get('capacity/datatables','Admin\CapacityController@datatables');
Route::get('/create/capacity','Admin\CapacityController@create');
Route::post('/manage/capacity','Admin\CapacityController@store');
Route::get('view/capacity/{idCapacity}','Admin\CapacityController@show');
Route::post('/update/capacity/{idCapacity}','Admin\CapacityController@update');
Route::get('delete/capacity/','Admin\Capacity@destroy');
//                                 /* คำถาม */
// Route::get('/corporate/profile','Admin\Capacity@frontend_job');
Route::get('/manage/capacity/question/{idCapacity}','Admin\Capacity@index_question');
Route::get('capacity/capacity/datatables','Admin\Capacity@datatables_question');
Route::get('/create/capacity/question/{idCapacity}','Admin\Capacity@create_question');
Route::post('/manage/capacity/question/{idCapacity}','Admin\Capacity@store_question');
Route::get('view/capacity/question/{idJob}','Admin\Capacity@show_question');
Route::post('/update/capacity/question/{idCapacity}','Admin\Capacity@update_question');
Route::get('delete/capacity/question/','Admin\Capacity@destroy_question');