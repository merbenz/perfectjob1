<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class ServicespackageController extends Controller 
{
    
    // public function frontend(){

    //   
    //     // dd($data['service_package']);
    //     if(Session::get('locale')){
    //         $data['locale'] = Session::get('locale');
    //     }else{
    //         $data['locale'] = 'th';
    //     }
    //     return view('frontend.services',$data);
    // }

    public function datatables() {
   
        //$dd = DB::table('services');
        $data = DB::table('service_package')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }
    public function index() {
        return view('backend.services-package.list');
    }
    public function create(){
        return view('backend.services-package.create');
    }
    public function store(Request $request){
//   dd($request);
        $data['name'] = $request->input('name');

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('service_package')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/services-package').'"

        </script>';
    }

    public function show($idPackage){

        {
            $irnf = DB::table('service_package')->where('idPackage',$idPackage)->first();
            $data['service_package'] = $irnf;

            return view('backend.services-package.create',$data);
        }

    }

    public function update($idPackage , Request $request)
    {
    
        $data['name'] = $request->input('name');

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('service_package')->where('idPackage',$idPackage)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/services-package').'"

        </script>';
    }

    public function destroy(Request $request)
    {   

        DB::table('service_package')->where('idPackage',$request->input('idPackage'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>