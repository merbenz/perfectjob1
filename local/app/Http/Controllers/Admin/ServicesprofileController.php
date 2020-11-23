<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class ServicesprofileController extends Controller 
{

     public function frontend(){

        // $data['serviceprofile1'] = DB::table('services_profile')->where('id',1)->first();
        // $data['serviceprofile2'] = DB::table('services_profile')->where('id',2)->first();
        // $data['serviceprofile3'] = DB::table('services_profile')->where('id',3)->first();

        // dd($data['servicepackage1']);

        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        return view('frontend.services',$data);
    }
    
    public function datatables() {
   
        //$dd = DB::table('services_profile');
        $data = DB::table('services_profile')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function index_profile() {
        return view('backend.services-profile.list');
    }
    public function create_profile(){
        return view('backend.services-profile.create');
    }
    public function store_profile(Request $request){
//   dd($request);
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');

        if(!empty($request->file('icon'))){
            $file = $request->file('icon');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/services-profile/',$filename);

                $data['icon'] = $filename; 
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('services_profile')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/services-profile').'"

        </script>';
    }

    public function show_profile($id){

        {
            $irnf = DB::table('services_profile')->where('id',$id)->first();
            $data['services_profile'] = $irnf;

            return view('backend.services-profile.create',$data);
        }

    }

    public function update_profile($id , Request $request)
    {
    
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        
        if(!empty($request->file('icon'))){
            $file = $request->file('icon');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/services-profile/',$filename);

                $data['icon'] = $filename; 
        }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('services_profile')->where('id',$id)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/services-profile').'"

        </script>';
    }

    public function destroy_profile(Request $request)
    {   

        DB::table('services_profile')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>