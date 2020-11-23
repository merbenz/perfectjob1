<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class BannerController extends Controller
{
   
    public function frontend() {
        $data['banner'] = DB::table('banner')->select('*')->orderBy('id','desc')->paginate(9);
       
        $data['img'] = DB::table('banner')->select('*')->orderBy('id','desc')->first();

        // dd($data['img']);

        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        //  dd($data['activity']);

        return view('frontend.news_events',$data);
    }
    
    /////////////////หลังบ้าน/////////////////////

    public function datatables() {
   
        //$dd = DB::table('banner');
        $data = DB::table('banner')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }
    
    public function index() {
        return view('backend.banner.list');
    }

    public function create(){
        return view('backend.banner.create');
    }

    public function store(Request $request){

        //  dd($request);
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');

        if(!empty($request->file('img'))){
            $file = $request->file('img');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/banner/',$filename);

                $data['img'] = $filename; 
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('banner')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/banner').'"

        </script>';
    }

    public function show($id){

        {
            $irnf = DB::table('banner')->where('id',$id)->first();
            $data['banner'] = $irnf;

            return view('backend.banner.create',$data);
        }

    }

    public function update($id , Request $request)
    {
    
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        
        if(!empty($request->file('img'))){
            $file = $request->file('img');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/banner/',$filename);

                $data['img'] = $filename; 
        }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('banner')->where('id',$id)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/banner').'"

        </script>';
    }

    public function destroy(Request $request)
    {   

        DB::table('banner')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>