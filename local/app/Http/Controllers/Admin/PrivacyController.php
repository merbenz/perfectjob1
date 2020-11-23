<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class PrivacyController extends Controller 
{
   
    public function index() {
        return view('backend.privacy.list');
    }

    public function datatables() {
   
        //$dd = DB::table('contact');
        $data = DB::table('privacy')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function create(){
        return view('backend.privacy.create');
    }
    public function store(Request $request){
//   dd($request);
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');

        // if(!empty($request->file('img'))){
        //     $file = $request->file('img');

        //         $extension=$file->getClientOriginalExtension();
        //         $filename=time().'.'.$extension;
        //         $file->move('images/privacy/',$filename);

        //         $data['img'] = $filename; 
        // }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('privacy')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/privacy').'"

        </script>';
    }

    public function show($id){

        {
            $irnf = DB::table('privacy')->where('id',$id)->first();
            $data['privacy'] = $irnf;

            return view('backend.privacy.create',$data);
        }

    }

    public function update($id , Request $request)
    {
    
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        
        // if(!empty($request->file('img'))){
        //     $file = $request->file('img');

        //         $extension=$file->getClientOriginalExtension();
        //         $filename=time().'.'.$extension;
        //         $file->move('images/privacy/',$filename);

        //         $data['img'] = $filename; 
        // }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('privacy')->where('id',$request->input('id'))->update($data);
        return response()->json(['chk'=>2]);
    }

    public function destroy(Request $request)
    {

        DB::table('privacy')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    }


}

?>