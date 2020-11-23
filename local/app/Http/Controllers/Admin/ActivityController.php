<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class ActivityController extends Controller 
{
    public function frontend() {
        //$data['news'] = DB::table('news')->first();
        $data['news'] = DB::table('news')->select('*')->orderBy('id','desc')->paginate(9);
        $data['activity'] = DB::table('activity')->select('*')->orderBy('id','desc')->paginate(9);

        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        //  dd($data['news']);

        return view('frontend.news_events',$data);
    }
    
    public function datatables() {
   
        //$dd = DB::table('activity');
        $data = DB::table('activity')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function index_activity() {
        return view('backend.activity.list');
    }
    public function create_activity(){
        return view('backend.activity.create');
    }
    public function store_activity(Request $request){
//   dd($request);
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');

        if(!empty($request->file('img'))){
            $file = $request->file('img');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/activity/',$filename);

                $data['img'] = $filename; 
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('activity')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/activity').'"

        </script>';
    }

    public function show_activity($id){

        {
            $irnf = DB::table('activity')->where('id',$id)->first();
            $data['activity'] = $irnf;

            return view('backend.activity.create',$data);
        }

    }

    public function update_activity($id , Request $request)
    {
    
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        
        if(!empty($request->file('img'))){
            $file = $request->file('img');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/activity/',$filename);

                $data['img'] = $filename; 
        }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('activity')->where('id',$id)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/activity').'"

        </script>';
    }

    public function destroy_activity(Request $request)
    {

        DB::table('activity')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    }


}

?>