<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class MissionController extends Controller 
{
    

    public function datatables() {
   
        //$dd = DB::table('news');
        $data = DB::table('about_mission')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }
    public function index_mission() {
        return view('backend.mission.list');
    }
    public function create_mission(){
        return view('backend.mission.create');
    }
    public function store_mission(Request $request){
//   dd($request);
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');

        if(!empty($request->file('icon'))){
            $file = $request->file('icon');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/mission/',$filename);

                $data['icon'] = $filename; 
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('about_mission')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/mission').'"

        </script>';
    }

    public function show_mission($id){

        {
            $irnf = DB::table('about_mission')->where('id',$id)->first();
            $data['about_mission'] = $irnf;

            return view('backend.mission.create',$data);
        }

    }

    public function update_mission($id , Request $request)
    {
    
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        
        if(!empty($request->file('icon'))){
            $file = $request->file('icon');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/mission/',$filename);

                $data['icon'] = $filename; 
        }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('about_mission')->where('id',$id)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/mission').'"

        </script>';
    }

    public function destroy_mission(Request $request)
    {   

        DB::table('about_mission')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>