<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class ServicesController extends Controller 
{
    
    public function frontend(){
        $data['services1'] = DB::table('services')->where('id',1)->first();
        $data['services2'] = DB::table('services')->where('id',2)->first();
        $data['services3'] = DB::table('services')->where('id',3)->first();
        $data['services4'] = DB::table('services')->where('id',4)->first();

        // dd($data['services1']);
        $data['serviceprofile1'] = DB::table('services_profile')->where('id',1)->first();
        $data['serviceprofile2'] = DB::table('services_profile')->where('id',2)->first();
        $data['serviceprofile3'] = DB::table('services_profile')->where('id',3)->first();
        // dd($data['serviceprofile1']);

        $data['servicepackage1'] = DB::table('service_package')->where('idPackage',1)->first();
        $data['servicepackage2'] = DB::table('service_package')->where('idPackage',2)->first();
        $data['servicepackage3'] = DB::table('service_package')->where('idPackage',3)->first();
        $data['servicepackage4'] = DB::table('service_package')->where('idPackage',4)->first();
        $data['servicepackage5'] = DB::table('service_package')->where('idPackage',5)->first();
        $data['servicepackage6'] = DB::table('service_package')->where('idPackage',6)->first();
        $data['servicepackage7'] = DB::table('service_package')->where('idPackage',7)->first();
        $data['servicepackage8'] = DB::table('service_package')->where('idPackage',8)->first();
        $data['servicepackage9'] = DB::table('service_package')->where('idPackage',9)->first();
        $data['servicepackage10'] = DB::table('service_package')->where('idPackage',10)->first();

        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        return view('frontend.services',$data);
    }

    public function datatables() {
   
        //$dd = DB::table('services');
        $data = DB::table('services')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }
    public function index() {
        return view('backend.services.list');
    }
    public function create(){
        return view('backend.services.create');
    }
    public function store(Request $request){
//   dd($request);
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');

        if(!empty($request->file('icon'))){
            $file = $request->file('icon');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/services/',$filename);

                $data['icon'] = $filename; 
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('services')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/services').'"

        </script>';
    }

    public function show($id){

        {
            $irnf = DB::table('services')->where('id',$id)->first();
            $data['services'] = $irnf;

            return view('backend.services.create',$data);
        }

    }

    public function update($id , Request $request)
    {
    
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        
        if(!empty($request->file('icon'))){
            $file = $request->file('icon');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/services/',$filename);

                $data['icon'] = $filename; 
        }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('services')->where('id',$id)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/services').'"

        </script>';
    }

    public function destroy(Request $request)
    {   

        DB::table('services')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>