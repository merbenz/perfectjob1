<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class AboutController extends Controller 
{
    public function frontend(){
        $data['about'] = DB::table('about')->first();
        
        $data['mission'] = DB::table('about_mission')->select('*')->orderBy('id')->paginate(9);

        // $data['img'] = DB::table('about_mission')->select('*')->orderBy('id')->paginate(9);
        // dd( $data['mission']);
        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        return view('frontend.about',$data);

    }
    
    public function datatables() {
   
        //$dd = DB::table('about');
        $data = DB::table('about')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function index() {
        return view('backend.about.list');
    }
    public function create(){
        return view('backend.about.create');
    }
    public function store(Request $request){
//   dd($request);
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');

        if(!empty($request->file('img'))){
            $file = $request->file('img');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/about/',$filename);

                $data['img'] = $filename; 
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('about')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/about').'"

        </script>';
    }

    public function show($id){

        {
            $irnf = DB::table('about')->where('id',$id)->first();
            $data['about'] = $irnf;

            return view('backend.about.create',$data);
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
                $file->move('images/about/',$filename);

                $data['img'] = $filename; 
        }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('about')->where('id',$id)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/about').'"

        </script>';
    }

    public function destroy(Request $request)
    
    {

        DB::table('about')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>