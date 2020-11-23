<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;
use datatables_job;

class CompanyInfomationController extends Controller 
{
    public function frontend(){
        $data['company_info'] = DB::table('company_info')->first();
        dd( $data['company_info']);
        $data['corporate_jobdescription'] = DB::table('corporate_jobdescription')->select('*')->orderBy('idJob','desc')->paginate();

    }
    
    public function datatables() {
   
        //$dd = DB::table('about');
        $data = DB::table('company_info')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function index() {
        return view('backend.company.list');
    }
    public function create(){
        return view('backend.company.create');
    }
    public function store(Request $request){
//   dd($request);

        if(!empty($request->file('banner'))){
            $file = $request->file('banner');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/banner/',$filename);

                $data['banner'] = $filename; 
        }

        if(!empty($request->file('chooseFile1'))){
            $file = $request->file('chooseFile1');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/',$filename);

                $data['chooseFile1'] = $filename; 
        }

        if(!empty($request->file('chooseFile2'))){
            $file = $request->file('chooseFile2');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/',$filename);

                $data['chooseFile2'] = $filename; 
        }

        $data['name_th'] = $request->input('name_th');
        $data['name_en'] = $request->input('name_en');
        $data['business_th'] = $request->input('business_th');
        $data['business_en'] = $request->input('business_en');
        $data['description_th'] = $request->input('description_th');
        $data['description_en'] = $request->input('description_en');
        $data['nameweb'] = $request->input('nameweb');
        $data['address_th'] = $request->input('address_th');
        $data['address_en'] = $request->input('address_en');
       
        if(!empty($request->file('map'))){
            $file = $request->file('map');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/',$filename);

                $data['map'] = $filename; 
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('company_info')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('managejob/companyinfomation').'"

        </script>';
    }

    public function show($idCompany){

        {
            $irnf = DB::table('company_info')->where('idCompany',$idCompany)->first();
            $data['company_info'] = $irnf;

            return view('backend.company.create',$data);
        }

    }

    public function update($idCompany , Request $request)
    {
    
        if(!empty($request->file('banner'))){
            $file = $request->file('banner');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/banner/',$filename);

                $data['banner'] = $filename; 
        }

        if(!empty($request->file('chooseFile1'))){
            $file = $request->file('chooseFile1');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/',$filename);

                $data['chooseFile1'] = $filename; 
        }

        if(!empty($request->file('chooseFile2'))){
            $file = $request->file('chooseFile2');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/',$filename);

                $data['chooseFile2'] = $filename; 
        }

        $data['name_th'] = $request->input('name_th');
        $data['name_en'] = $request->input('name_en');
        $data['business_th'] = $request->input('business_th');
        $data['business_en'] = $request->input('business_en');
        $data['description_th'] = $request->input('description_th');
        $data['description_en'] = $request->input('description_en');
        $data['nameweb'] = $request->input('nameweb');
        $data['address_th'] = $request->input('address_th');
        $data['address_en'] = $request->input('address_en');
       
        if(!empty($request->file('map'))){
            $file = $request->file('map');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/',$filename);

                $data['map'] = $filename; 
        }

      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('company_info')->where('idCompany',$idCompany)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/companyinfomation').'"

        </script>';
    }

    public function destroy(Request $request)
    
    {

        DB::table('company_info')->where('idCompany',$request->input('idCompany'))->delete();
        return response()->json(['chk'=>1]);
    
    }


    /////////////// listJob /////////////////

    public function frontend_job(){
        $data['corporate_jobdescription'] = DB::table('corporate_jobdescription')->select('*')->where('idCompany',$idCompany)->orderBy('idJob');

        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        return view('frontend.about',$data);

    }


    public function datatables_job(Request $request) {
   
        $data = DB::table('corporate_jobdescription')->where('idCompany',$request->id)->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function index_job($idJob) {
        $data['cj'] = $idJob;
        return view('backend.company.list-job',$data);
    }
    public function create_job($idCompany){
        $data['cm'] = $idCompany;
        // dd($data['cm']);
        return view('backend.company.create-job',$data);
        dd($data);
    }
    public function store_job($idCompany,Request $request){
    //  dd($request);
        $data['idCompany'] = $request->input('idCompany');
        $data['position_th'] = $request->input('position_th');
        $data['position_en'] = $request->input('position_en');
        $data['salary'] = $request->input('salary');
        $data['Japanese'] = $request->input('Japanese');
        $data['rate'] = $request->input('rate');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        $data['property_th'] = $request->input('property_th');
        $data['property_en'] = $request->input('property_en');
        $data['welfare_th'] = $request->input('welfare_th');
        $data['welfare_en'] = $request->input('welfare_en');

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        // $data['idCompany'] = $request->input('');

        DB::table('corporate_jobdescription')->insert($data);
        DB::table('corporate_jobdescription')->update($idCompany)->where('idJob',$idJob);


        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('managejob/companyinfomation/{idCompany}').'"

        </script>';
    }

    public function show_job($idJob){

        {
            //  dd($idJob);
            $data['corporate_jobdescription'] = DB::table('corporate_jobdescription')->select('*')->first();
            return view('backend.company.create-job',$data);
        }

    }

    public function update_job($idJob,Request $request)
    {
    
       
        $data['position_th'] = $request->input('position_th');
        $data['position_en'] = $request->input('position_en');
        $data['salary'] = $request->input('salary');
        $data['Japanese'] = $request->input('Japanese');
        $data['rate'] = $request->input('rate');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        $data['property_th'] = $request->input('property_th');
        $data['property_en'] = $request->input('property_en');
        $data['welfare_th'] = $request->input('welfare_th');
        $data['welfare_en'] = $request->input('welfare_en');

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('corporate_jobdescription')->where('idJob',$idJob)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('managejob/companyinfomation/{idCompany}').'"
        </script>';
    }

    public function destroy_job(Request $request)
    
    {

        DB::table('corporate_jobdescription')->where('idJob',$request->input('idJob'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>